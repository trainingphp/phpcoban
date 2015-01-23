$(document).ready(function() {
	$("#frmAdd").validate({
		rules:{
			txtAcc:{
				required: true,
				minlength: 6
			},
			txtPass:{
				required: true,
				minlength: 6
			},
			txtConfPass: {
				required: true,
				equalTo: "#txtPass"
			},
			txtFullname:{
				required: true,
				minlength: 6
			}
		},
		messages:{
			txtAcc:{
				required: " Nhập vào tài khoản",
				minlength: " tài khoản từ 6 ký tự trở lên"
			},
			txtPass:{
				required: " Nhập vào mật khẩu",
				minlength: " Mật khẩu từ 6 ký tự trở lên"
			},
			txtConfPass: {
				required: " Xác nhận mật khẩu",
				equalTo: " Xác nhận mật khẩu"
			},
			txtFullname:{
				required: " Nhập vào tên đầy đủ",
				minlength: " Tên đầy đủ từ 6 ký tự trở lên"
			}
		}
	});
});