<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<title>コンタクトフォーム（確認）</title>

</head>
<body>


<!-- //変数の初期化 -->

  <form method="post" action="complete.php">

      <h1>confirm</h1>
      <body>
        <!-- // -->
      <p>氏名: {$smarty.post.name}</p>
       
      <p>趣味:{$smarty.post.hobby}</p>
      
      <P>好きな食べもの: {$smarty.post.food}</P>
     
      <P>お住まいの地域:  {$smarty.post.area}</P> 
      <P>ログインID:{$smarty.post.login}</P>
    
      <p><input type="submit" value="完了する"></p>
</form>

 

</body>
</htm