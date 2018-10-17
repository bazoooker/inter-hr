function iss(elem,alphabet) {
  for (var i=0;i<elem.length;i++) {
    if(alphabet.indexOf(elem.charAt(i))==-1) return false;
  }
  return true;
}



function is_null( mixed_var ){  // Finds whether a variable is NULL  
return ( mixed_var === null );  
} 



function rfc(iid) {
	var date = new Date();
	date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
	var options = { path: '/', expires: date};
	var c=$.cookie('terminal_cart');
	var items=c.split("&");
	var res="";
	for(var i=0;i<items.length;i++) {
		if(items[i].length>0) {
		        if(items[i].length>0&&items[i]!='null') {
				var tt=items[i].split('=');
				var id=tt[0];
				var qty=tt[1];
				if(id==iid) {
				} else {
					res+="&"+id+"="+qty;
				}
			}
		}
	}

	$.cookie('terminal_cart', res, options);
	wrc();
}

function setq(iid,quty) {
        if (quty=='') {rfc(iid); return;}
        if(!iss(quty,'0123456789.,')) {return;};
        if(isNaN(parseFloat(quty))) {return;};
        if (quty==0) {rfc(iid); return;}
	var date = new Date();
	date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
	var options = { path: '/', expires: date};
	var c=$.cookie('terminal_cart');
	var items=c.split("&");
	var res="";
	for(var i=0;i<items.length;i++) {
		if(items[i].length>0) {
		        if(items[i].length>0&&items[i]!='null') {
				var tt=items[i].split('=');
				var id=tt[0];
				var qty=tt[1];
				var oopt=tt[2];
				if(id==iid) {
				res+="&"+id+"="+parseFloat(quty);
				} else {
				res+="&"+id+"="+qty;
				}
			}
		}
	}

	$.cookie('terminal_cart', res, options);
	wrc();
}



function wrc() {
	var c=$.cookie('terminal_cart');
//	alert('rc!');
	$('#whole_basket').load('/products/__whole_basket.php?'+c, function() {
//		imagePreview();
	});
}




function openorder(){
	if($('#orderformdiv').text()=='') {
		$('#orderformdiv').load('/products/__orderform.php', function() {
		});
	} else {
//		alert($.cookie('terminal_cart'));
		$("#basketstr").val($.cookie('terminal_cart'));
//		alert($("#orderform").serialize());
		var date = new Date();
		date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
	        var options = { path: '/', expires: date}
//		$.cookie('terminal_cart', "", options);
		if(checkForm(document.forms.orderform, names, values)) $('#basket_content').load('/products/__ordersend.php?'+$("#orderform").serialize(), function() {
		});
	}
}

function rc() {
	var c=$.cookie('terminal_cart');
	$('#basket_content').load('/products/__basket_top.php?'+c, function() {
//		 Cufon.replace(".input-link", { fontFamily: 'HeliosCond' });
	});
}
function a2c(iid,quty) {
        if (quty=='') { return;}
        if (quty==0) { return;}
        if(isNaN(parseFloat(quty))) {return;};
	var date = new Date();
	date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
        var options = { path: '/', expires: date}
	
	var c=$.cookie('terminal_cart');
	if(!is_null(c)) {
	        var put=0;
		var items=c.split("&");
		var res="";
		for(var i=0;i<items.length;i++) {
			if(items[i].length>0) {
			        if(items[i].length>0&&items[i]!='null') {
					var tt=items[i].split('=');
					var id=tt[0];
					var qty=tt[1];
					if(id==iid) {
						qty=parseFloat(qty)+parseFloat(quty);
						put=1;
					} else {
					}
					res+="&"+id+"="+qty;
				}
			}
		}
		if(put==0) res+="&"+iid+"="+parseFloat(quty);
	} else {
		res=iid+"="+parseFloat(quty);
	}
	$.cookie('terminal_cart', res, options);
	rc();
	$('#inf').text("Товар добавлен в корзину");
	$('#inf').show();
	setTimeout("$('#inf').hide()",1000);
	rc();
}


function setcart(cc) {
	var date = new Date();
	date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
	var options = { path: '/', expires: date}
	$.cookie('terminal_cart', cc, options);
	rc();
}

function setcartw(cc) {
	var date = new Date();
	date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
	var options = { path: '/', expires: date}
	$.cookie('terminal_cart', cc, options);
	rc();
	wrc();
}




function number_format(_number, _cfg){
  function obj_merge(obj_first, obj_second){
    var obj_return = {};
    for (key in obj_first){
      if (typeof obj_second[key] !== 'undefined') obj_return[key] = obj_second[key];
      else obj_return[key] = obj_first[key];
      }
    return obj_return;
  }
  function thousands_sep(_num, _sep){
    if (_num.length <= 3) return _num;
    var _count = _num.length;
    var _num_parser = '';
    var _count_digits = 0;
    for (var _p = (_count - 1); _p >= 0; _p--){
      var _num_digit = _num.substr(_p, 1);
      if (_count_digits % 3 == 0 && _count_digits != 0 && !isNaN(parseFloat(_num_digit))) _num_parser = _sep + _num_parser;
      _num_parser = _num_digit + _num_parser;
      _count_digits++;
      }
    return _num_parser;
  }
  if (typeof _number !== 'number'){
    _number = parseFloat(_number);
    if (isNaN(_number)) return false;
  }
  var _cfg_default = {before: '', after: '', decimals: 2, dec_point: '.', thousands_sep: ','};
  if (_cfg && typeof _cfg === 'object'){
    _cfg = obj_merge(_cfg_default, _cfg);
  }
  else _cfg = _cfg_default;
  _number = _number.toFixed(_cfg.decimals);
  if(_number.indexOf('.') != -1){
    var _number_arr = _number.split('.');
    var _number = thousands_sep(_number_arr[0], _cfg.thousands_sep) + _cfg.dec_point + _number_arr[1];;
  }
  else var _number = thousands_sep(_number, _cfg.thousands_sep);
  return _cfg.before + _number + _cfg.after;
}
