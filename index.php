<?php 
require_once 'function.php';
require_once 'Connect2.1/qqConnectAPI.php';

?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QQ登陆</title>
 
  </head>
  <body>
	  <?php
	  if(!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['qq_openid'])){ ?>
		<a href="qqlogin.php">登陆QQ</a>
	  <?php } 
	   else{?>
	    <a href="qqlogout.php">退出QQ</a>
	  <?php 
	  $qc = new QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
	  $userinfo = $qc->get_user_info();
	  //debug($userinfo);
	  //debug($userinfo['figureurl_qq']);
	  //echo $userinfo['figureurl_qq'];



	

	  }
	 ?>
	
	
	
	 
	  
	
   </body>
</html>
