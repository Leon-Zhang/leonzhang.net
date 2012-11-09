<?php

 require("common.php");
 
 $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
 $langMgr=new CLangMgr($lang,"");

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="default.css" media="screen" />
<title><?php echo $langMgr->getContent(PIDX_CLANG_CONTACT);?></title>
</head>

<body>
<?php
    define("ICON_WIDTH",32);
	define("ICON_HEIGHT",32);
?>

<b><font size="+1"><?php echo $langMgr->getFileContent(IDX_LANG_INFO);?></font></b><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_BORN);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_BORN_VAL);?><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_CURLOCATION);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_CURLOC_VAL);?><br>

<b><?php echo $langMgr->getContent(PIDX_CLANG_EMAIL);?>:</b> <a href="mailto:kimryo.ultimate'at'gmail.com" title="<?php echo $langMgr->getContent(PIDX_CLANG_EMAILREPLACE);?>">kimryo.ultimate at gmail.com</a><br><br>

<b><font size="+1"><?php echo $langMgr->getContent(PIDX_CLANG_SOCIAL);?></font></b><br>
<a href="https://twitter.com/Leon_Zh" title="<?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?>" target="_blank"><img src="image/twitter.png" width="<?php echo ICON_WIDTH;?>" height="<?php echo ICON_HEIGHT;?>" /><?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?></a>
<a href="http://Gplus.to/LeonZhang" title="Google+" target="_blank"><img src="image/google+.png" width="<?php echo ICON_WIDTH;?>" height="<?php echo ICON_HEIGHT;?>" />Google+</a><br>
<a href="http://jp.linkedin.com/pub/leon-zhang/3a/271/160" title="LinkedIn" target="_blank"><img src="image/linkedin.jpg" width="<?php echo ICON_WIDTH;?>" height="<?php echo ICON_HEIGHT;?>" />LinkedIn</a>
<a href="http://www.facebook.com/leon.zhang.313" title="Facebook" target="_blank"><img src="image/facebook.png" width="<?php echo ICON_WIDTH;?>" height="<?php echo ICON_HEIGHT;?>" />Facebook</a><br>
<?php
 $weibo_text=$langMgr->getContent(PIDX_CLANG_TENCENT)." ".$langMgr->getContent(PIDX_CLANG_WEIBO);
?>
<a href="http://t.qq.com/leon_zhx" title="<?php echo $weibo_text;?>" target="_blank"><img src="image/t_weibo.jpg" width="<?php echo ICON_WIDTH;?>" height="<?php echo ICON_HEIGHT;?>" /><?php echo $weibo_text;?></a><br>

</body>
</html>