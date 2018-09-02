<?php
$account = $_COOKIE["account"];setcookie("account", "", time() - 3600);
if ($account != "") {
 if ($account == "admin minhduc") {
 echo "<body><script src='https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js'></script><script>swal(`Mã thẻ :\n966995853219\nSerial :\nID0354347830`);</script></body>";    
 }
 else {
 echo "<html><head> <title>Đăng nhập</title> <link rel='stylesheet' href='sweet-alert.css'> <link rel='stylesheet' href='swal-forms.css'> <script src='sweet-alert.js'></script> <script src='swal-forms.js'></script></head><body> <script>swal.withFormAsync({title: 'Tên đăng nhập hoặc mật khẩu không đúng vui lòng đăng nhập lại', confirmButtonColor: '#DD6B55', confirmButtonText: 'Login', closeOnConfirm: true, formFields: [{id: 'name', placeholder: 'username'},{id: 'nickname', placeholder: 'password', type: 'password'}]}).then(function (context){var obj=JSON.parse(JSON.stringify(context.swalForm)); document.cookie='account='+obj.name+' '+obj.nickname; location.href = 'login.php'}) </script> </body></html>";    
 }
}
else {
echo "<html><head> <title>Đăng nhập</title> <link rel='stylesheet' href='sweet-alert.css'> <link rel='stylesheet' href='swal-forms.css'> <script src='sweet-alert.js'></script> <script src='swal-forms.js'></script></head><body> <script>swal.withFormAsync({title: 'Đăng Nhập', confirmButtonColor: '#DD6B55', confirmButtonText: 'Login', closeOnConfirm: true, formFields: [{id: 'name', placeholder: 'username'},{id: 'nickname', placeholder: 'password', type: 'password'}]}).then(function (context){var obj=JSON.parse(JSON.stringify(context.swalForm)); document.cookie='account='+obj.name+' '+obj.nickname; document.body.innerHTML=\"<iframe src='login.php' style='position:fixed; top:0px; bottom:0px; right:0px; width: 100%; border: none; margin:0; padding:0; overflow: hidden; z-index:999999; height: 100%;'>\"}) </script> </body></html>";    
}
?>