<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    .comment-tittle {
      font-size: 14px;
      margin: 6px 0px 2px 4px;
    }

    .comment-body {
      font-size: 14px;
      color: #cccccc;
      font-style: italic;
      border-bottom: 1px #ccc;
      margin: 4px;
    }
  </style>
</head>

<body>
  <form method="post" action="list.php">
    <div>
      <div>发表评论</div>
      <div>
        昵称:
        <br />
        <input name="name" type="text" />
      </div>
      <div>
        评论:
        <br />
        <textarea name="comment"></textarea>
      </div>
    </div>
    <div style="padding-left: 230px;"><input type="submit" value="POST" /></div>
    <div style="border-bottom: solid 1px #fff;margin-top: 10px;">
      <div style="font-size: 16px; font-weight: bold;">评论集</div>
    </div>
    <?php
      try{
        $dbh = new PDO('mysql:host=mariadb;port=3306;dbname=app;','root','root');
        $dbh->query('set names utf8');
        $sql = "SELECT uname,ucomment FROM comment";
        foreach ($dbh->query($sql) as $row)//通过循环读取数据内容
        {
          //print_r($row)
          if($row['uname']!=null){
            ?><span>--------------------------</span><br>
            <span name="name">
              <?php echo $row['uname'];?>
            </span><br>
            <span name="comment">
              <?php echo $row['ucomment'];?>
            </span><br>
            <?php
          }
        }
      }catch(PDOException $e){
        echo 'Connection failed: ' .$e->getMessage();
      }
    ?>
    </div>
  </form>
</body>

</html>