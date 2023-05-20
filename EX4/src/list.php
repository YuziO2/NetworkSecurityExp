<?php
  $link = mysqli_connect('mariadb','root','root');
  mysqli_query($link,'set names utf8');
  if(!$link){
    die("Can't connect to SQL".mysqli_error());
  }
  echo 'connection Ok <br>';
  $name=$_POST['name'];
  $comment=$_POST['comment'];
  mysqli_select_db($link,'app');
  $query = "insert into comment (uname,ucomment) value ('{$name}','{$comment}'); ";
  if(!mysqli_query($link,$query)){
    die("Error:".mysqli_error($link));
  }
  $result = mysqli_query($link,"SELECT uname,ucomment FROM comment;");
  while($row = mysqli_fetch_array($result)) //通过循环展示数据内容
  {
  echo $row["uname"]."<br/>";
  echo $row["ucomment"]."<br/>";
  }
  mysqLi_close($Link); #关闭数据库
  echo "<meta http-equiv='refresh' content='0;url=home.php'>"; //返回home.php
?>