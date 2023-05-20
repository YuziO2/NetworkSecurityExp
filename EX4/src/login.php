<?php
  if(isset($_POST['submit'])){
    setcookie("username",$_POST["username"],0);
    setcookie("password",$_POST["password"],0);
    echo "<meta http-equiv='refresh' content='0;url=home.php'>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登录</title>
  <style>
    #login{
      text-align:center;margin-top:100px;
    }
  </style>
</head>
<body>
  <div id='login'>
    <form method="post">
      <p>用户名：<input type='text' name='username'></p>
      <p>密码：<input type='text' name='password'></p>
      <button type='submit' name='submit'>登录</button>
    </form>
  </div>
</body>
</html>