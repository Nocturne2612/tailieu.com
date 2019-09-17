$(function(){
	// search-filter
	$(".search-filter li").click(function(){
		$(this).parents(".search-filter").find("li").removeClass("current");
		$(this).addClass("current");
		$("#tid").attr("value",$(this).attr('id'));

	});

	// dropdown
	$(".dropdown").hover(function(){
		$(".dropdown").find(".dropdown-box").hide();
		$(this).find(".dropdown-menu").addClass("dropdown-menu-hover");
		$(this).find(".dropdown-box").show();
	},function(){
		$(this).find(".dropdown-menu").removeClass("dropdown-menu-hover");
		$(this).find(".dropdown-box").hide();
	});

	// mininav-group
	$(".mininav-group > li").hover(function(){
		$(this).find("h5").addClass("hover");
		$(this).find(".dropdown-secondary").show();
	},function(){
		$(this).find("h5").removeClass("hover");
		$(this).find(".dropdown-secondary").hide();
	});

	// back-to-top
	$("<a id='back-to-top' href='#top'><i class='icon-chevron-up'></i></a>").appendTo("body").hide();
	$(window).scroll(function(){
		if ($(window).scrollTop()>100){
			$("#back-to-top").fadeIn(100);
		}else{
			$("#back-to-top").fadeOut(100);
		}
	});
	$("#back-to-top").click(function(){
		$("body,html").animate({scrollTop:0},100);
		return false;
	});

	// close self
	$(".alert, .ui-tips").click(function(){
		$(this).fadeTo(400, 0, function(){
			$(this).slideUp(400);
		});
		return false;
	});

	// btn-toggle-group
	$(".btn-toggle-group .btn").click(function(){
		if ($(this).hasClass("btn-selected")){
			$(this).removeClass("btn-selected");
			$(this).find(".hook").remove();
		}
		else {
			$(this).addClass("btn-selected");
			$(this).append("<span class='hook'></span>");
		}
	});

	// Rating Star Jquery
	$(".ui-rating li").each(function(i){
		var $title = $(this).attr("title");
		var $lis =  $(this).parent().find("li");
		var num = $(this).index();
		var n = num+1;
		$(this).click(function(){
			$lis.removeClass("active");
			$(this).parent().find("li:lt("+n+")").addClass("active");
		}).hover(function(){
			this.myTitle=this.title;
			this.title="";
			$(this).parent().find("li").removeClass("active");
			$(this).parent().find("li:lt("+n+")").addClass("hover");
		},function(){
			this.title=this.myTitle;
			$(this).parent().find("li:lt("+n+")").removeClass("hover");
		});
	});

	// instruction
	$("#instruction").click(function(event){
		event.preventDefault();
		if ($(this).html()=="Show instructions") {
			$("div#ui-decs").fadeIn(500);
			$(this).html("Hide instructions");
		}
		else {
			$("div#ui-decs").fadeOut(500);
			$(this).html("Show instructions");
		}
	});

	// myfiles-group
	$(".myfiles-group li").hover(function(){
		$(this).find(".myfiles-info dl").slideDown("fast");
		$(this).find(".myfiles-info h5").hide();
	},function(){
		$(this).find(".myfiles-info dl").hide();
		$(this).find(".myfiles-info h5").slideDown("fast");
	});

	// myfiles-setitem-group
	$(".myfiles-setitem-group li").hover(function(){
		$(this).siblings().find(".masklayer").css("opacity","0.5");
		$(this).find(".masklayer").css("opacity","0");
	},function(){
		$(this).siblings().find(".masklayer").css("opacity","0.0");
	});

	bind_combo_box = function(){
		$("select.ui-combo").selectbox();
		$(".selectbox-wrapper").each(function(){
			var $width = $(this).parent().find(".selectbox").width();
			$(this).width($width);
		});
		$('select.ui-combo').change(function(){
			var option = $(this).find('option[value="'+this.value+'"]');
			var query = option.attr('query');
			if(query){
				if (query.charAt(0)=='/') {
					location.href = query;
				} else {
					location.href = option.attr('query');
				}
			}
		});
	}
	bind_combo_box();

	// offset-preview
	$(".offset-preview").hover(function(){
		var opsrc = $(this).find("img").attr("rel"),
			optxt = $(this).find("img").attr("alt"),
			opspan = $(this).find("span"),
			nocoda = $(this).find(".nocoda"),
			oplen  = opspan.length,			
			colen = nocoda.length,		
			wdh = $(this).width(),
			hih = $(this).height(),
			iot = $(this).offset(),
			iotleft = iot.left,
			iotop = iot.top;
								
		$(".offset-preview-fixed").remove();	
		
		if (oplen > 0 || colen > 0){
			preview = $('<div class="offset-preview-fixed"><div class="img img-fixed"><img src="' + opsrc + '"></div><div class="text">' + optxt + "</div>" + "</div>").prependTo("body");	
		} else {
			preview = $('<div class="offset-preview-fixed"><div class="img"><img src="' + opsrc + '"></div><div class="text">' + optxt + "</div>" + "</div>").prependTo("body");	
		}			
		
		var pow = preview.outerWidth(),
			poh = preview.outerHeight(),
			lby =  $(document.body).width(),			
			ewidth = iotleft + wdh / 2,
			eheight = iotop + hih / 2,	
			el = ewidth + wdh / 2,
			er = iotleft - pow,
			et = eheight - poh /2;
			
		if ( iotleft+wdh+pow < lby){
			preview.css({
				display: "block",
				top: iotop,
				left: el
			});	
		} else {
			preview.css({
				display: "block",
				top: iotop,
				left: er
			});	
			preview.addClass("offset-preview-fixed-right");
		}			
	},function(){
		$(".offset-preview-fixed").remove();
	});	
	$(".open_preview_img").mouseleave(function() {
		$(this).remove();
    });

});

// Javacsript Tab Change
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"current":"";
		con.style.display=i==cursel?"block":"none";
	}
}
