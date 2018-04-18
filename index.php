<html>

 <head>
  <title>お問い合わせフォーム</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 
 <body>
  <form action="send.php" method="post">
  <!--「form action="プログラムファイル名"」：送信先プログラムのを指定する。-->
  <!--「form action method="post"」：送信の際の転送方法を指定する。-->
  <!-- 今回は「send.php」に以下のデータを送ると言う内容。-->
  
   <?php
    echo "入力内容をご確認ください。<br /><br />";
    echo "氏名:".$_POST[ 'name' ]."<br />";
    //input.htmlから送られた「name」を受け取る。
    echo "氏名(カナ):".$_POST[ 'kana' ]."<br />";
    //input.htmlから送られた「kana」を受け取る。
    echo "メールアドレス:".$_POST[ 'mail' ]."<br />";
    //input.htmlから送られた「mail」を受け取る。
    echo "住所:".$_POST[ 'address' ]."<br />";
    //input.htmlから送られた「name」を受け取る。
    echo "電話番号:".$_POST[ 'tel' ]."<br />";
    //input.htmlから送られた「tel」を受け取る。
    echo "お問い合わせ内容:".$_POST[ 'comment' ]."<br /><br />";
    //input.htmlから送られた「comment」を受け取る。
   ?>
   
   <!-- それぞれのデータを隠しデータ(hidden)として保存する。 -->
   <input type="hidden" name="name" value="<?php echo $_POST[ 'name' ] ?>" />
   <input type="hidden" name="kana" value="<?php echo $_POST[ 'kana' ] ?>" />
   <input type="hidden" name="mail" value="<?php echo $_POST[ 'mail' ] ?>" />
   <input type="hidden" name="address" value="<?php echo $_POST[ 'address' ] ?>" />
   <input type="hidden" name="tel" value="<?php echo $_POST[ 'tel' ] ?>" />
   <input type="hidden" name="comment" value="<?php echo $_POST[ 'comment' ] ?>" />
   <input type="submit" value="送信" />
  
  </form>
 </body>
 
</html>