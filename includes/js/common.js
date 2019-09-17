
$('#RgWarrning').hide();
//display error messager
if ($('#RgWarrning').html() == '') {
	$('#RgWarrning').html('');
	$('#RgWarrning').hide();
}
else {
	$('#RgWarrning').show();
}
if ($('.infoBox').html() == '') {
	$('.infoBox').html('');
	$('.infoBox').hide();
}
else {
	$('.infoBox').show();
} 

$('.loading').hide();
var loading = document.getElementById('loading');
if (loading != null) {
	loading.style.display = 'none'; //or
	loading.style.visibility = 'hidden';
}