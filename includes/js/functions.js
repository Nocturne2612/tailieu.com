$(function() {
	//Set Maxlength
	$.fn.maxlength = function() {
		$("textarea[maxlength], input[maxlength]").keypress(function(event){
			var key = event.which;
			//all keys including return.
			if(key >= 33 || key == 13 || key == 32) {
				var maxLength = $(this).attr("maxlength");
				var length = this.value.length;
				if(length >= maxLength) {	
					event.preventDefault();
				}
			}
		});
	}
	
	//Menu Header Right
	//expand menu
    $(".accTab").click(function() {
        if ($(".accTabDrop").hasClass("menu-tiny")) {                  
            $(".accTabDrop").removeClass("menu-tiny");
            $(".accTabDrop").slideUp();
            $(".accTab").removeClass("selected");
        } else {
            $(".accTabDrop").addClass("menu-tiny");
            $(".accTabDrop").slideDown();                 
            $(".accTab").addClass("selected");
        }
        return true;
    });
	//End menu header right
	function _isIE() {
		var Browser = navigator.appName;
		var Micro = Browser.indexOf("Microsoft");
		var Opera = Browser.indexOf("Opera");
		if (Micro >= 0) {
			return true;
		}
		if (Opera >= 0) {
			return true;
		}
		return false;
	}
	
	$('#number-only').bind('keypress', function(event) {
		if (!_isIE()) {
			if ((event.charCode >= 48 && event.charCode <= 57) || (event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 13 || event.keyCode == 35 || event.keyCode == 36 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46)) {
				return true;
			};
		} else {
			if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 13 || event.keyCode == 35 || event.keyCode == 36 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46)) {
				return true;
			};
		}
		
		return false;
	});
	
	//Set tai khoan ngan hang nao la tai khoan chinh
	$('.lstTablecardRadio input').click(function(){
		var id = $(this).val();
		$.get('primary',{ id:id },function( data ){
			window.location.href = data;
		});
	});
});

function makeAmountTopUp() {
	var ajaxUrl = $('#ajax-url').html();
	var mobile_type = $('#mobile_type').val();
	var mobile_number = $('#mobile-number').val();
	var card_value = $('#card_value').val();
	
	$.get(ajaxUrl,{action:'topup_amount_discount',mobile_type:mobile_type,mobile_number:mobile_number,card_value:card_value},function($data){
		$('#total-amount-discounted').html($data);
	});
}

function loadProcess($loadingClass,$processClass) {
	var process = document.getElementById($processClass);
	var loading = document.getElementById($loadingClass);
	
	if (loading != null) {
		window.location.hash = '#'+loading.id;
		loading.style.display = 'block'; //or
		loading.style.visibility = 'visible';
	}
	if (process != null) {
		process.style.display = 'none'; //or
		process.style.visibility = 'hidden';
	}
	
	var errorBox = document.getElementsByClassName('errorBox');
    for(var i = 0; i < errorBox.length; i++){
    	errorBox[i].style.display = "none";
    	errorBox[i].style.visibility = 'hidden';
    }
}

function getNotification() {
	var urlNotification = '';
	urlNotification = $('#input-notification').val();
	$.get(urlNotification,function(data ) {
		$('.notifi-drop').html(data);
	});
	return false;
}

function inputNumberOnly($id) {
	$('#'+$id).bind('keydown keyup keypress',function(event) {
		
		//ban phi so 96-105 ban phim phu so, 48-57 phim so
		var maxLength = $(this).attr("maxlength");
		var length = this.value.length;
		var key = window.event ? event.keyCode : event.which;
		
		if (
			event.keyCode == 8	|| //BACKSPACE = 8
			event.keyCode == 46 || //DELETE = 46
			event.keyCode == 9	|| //TAB = 9
			event.keyCode == 13 || //Enter
			event.keyCode == 36 || //Home
			event.keyCode == 35 || //End
			event.keyCode == 37 || //LEFT = 37
			event.keyCode == 38 || //UP = 38
			event.keyCode == 39 || //RIGHT = 39
			event.keyCode == 40 //DOWN = 40
		) {
	        return true;
	    }
	    else if ( (key >= 48 && key <= 57) || (key >= 96 && key <= 105) ) {
	    	//Chrome
	    	if (key == 37 || key == 35 || key == 36 || key == 38 || key == 40) {
				return false;
			}
	    	return true;
	    }
	    else if(length >= maxLength) {	
			return false;
		}
		else return false;
    });
}