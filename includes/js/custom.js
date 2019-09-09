function formartAmount(temp)
{
  while (temp.indexOf('.') != -1) {
	  temp = temp.replace('.','');
  }
  var result = '';
  while (temp.length > 3) {
	  var length = temp.length;
	  result = '.' + temp.substring(length - 3, length) + result;
	  temp = temp.substring(0, length-3);
  }
  result = temp + result;
  return result;
	
}

function getAmount(value){
		$('#amount_pay').html(formartAmount(value));
}// JavaScript Document