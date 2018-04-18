<html>

 
 <head>
  <title>お問い合わせフォーム</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 
 <body>
 
  <form action="index.php" method="post">
<!--「form action="プログラムファイル名"」：送信先プログラムのを指定する。-->
<!--「form action method="post"」：送信の際の転送方法を指定する。-->
   <table>
    <tr> <td>氏名</td> <td><input type="text" name="name" /></td> </tr>
    <tr> <td>氏名(カナ)</td> <td><input type="text" name="kana" /></td></tr>
    <tr><td>メールアドレス</td> <td><input type="text" name="mail" /></td></tr>
    <tr><td>住所</td> <td><input type="text" name="address" /></td></tr>
    <tr><td>電話番号</td> <td><input type="text" name="tel" /></td></tr>
    <tr><td>お問い合わせ内容</td><td><textarea name="comment" rows="4" cols="40"></textarea></td></tr>
   </table>
   <input type="submit" value="送信" />
  </form>
  
 </body>
 
</html>