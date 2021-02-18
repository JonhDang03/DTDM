function ajax_dangnhap(){
	$('#spm').removeClass('ajaxing');
	$('#mntq').removeClass('ajaxing');
	$('#dgg').removeClass('ajaxing');
	$.ajax({
		url : "ajax_calling.php",
		type : "get",
		dataType:"text",
		data : {
			fname: 'php_dangnhap'
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}
function ajax_dangky(){
	$('#spm').removeClass('ajaxing');
	$('#mntq').removeClass('ajaxing');
	$('#dgg').removeClass('ajaxing');
	$.ajax({
		url : "ajax_calling.php",
		type : "get",
		dataType:"text",
		data : {
			fname: 'php_dangky'
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}
function call_to_dangnhap(){
	var un = $('#username').val();
	var pw = $('#password').val();
	var isR = $('#rmbme').is(":checked");
	var query = 'dang_nhap';
	$.ajax({
		url : "backend-index.php",
		type : "post",
		dataType:"text",
		data : {
			un, pw, query, isR
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}
function call_to_dangxuat(){
	var query = 'dang_xuat';
	$.ajax({
		url : "backend-index.php",
		type : "post",
		dataType:"text",
		data : {
			query
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}
function call_to_thongtin(){
	var query = 'thongtin_user';
	$.ajax({
		url : "backend-index.php",
		type : "post",
		dataType:"text",
		data : {
			query
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}
function call_to_dangky(){
	var query = 'dang_ky';
	var name = $('#name').val();
	var un = $('#username').val();
	var pw = $('#password').val();
	var cpw = $('#cpassword').val();
	var addr = $('#address').val();
	var tel = $('#tel').val();
	var email = $('#email').val();
	$.ajax({
		url : "backend-index.php",
		type : "post",
		dataType:"text",
		data : {
			query, name, un, pw, cpw, addr, tel, email
		},
		success : function (result){
			$('#content').html(result);
		}
	});
}