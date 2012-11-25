<?php

 require_once("common.php");
 
 $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
 $langMgr=new CLangMgr($lang,"");

?>
<html>
<head>
<meta http- equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="default.css" media="screen" />

<title><?php echo $langMgr->getContent(PIDX_CLANG_CONTACT);?></title>
</head>

<body>
<?php require("header.php");?>

<br>


<b><font size="+1"><?php echo $langMgr->getFileContent(IDX_LANG_INFO);?></font></b><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_BORN);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_BORN_VAL);?><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_CURLOCATION);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_CURLOC_VAL);?><br>

<b><?php echo $langMgr->getContent(PIDX_CLANG_EMAIL);?>:</b> <a href="mailto:kimryo.ultimate'at'gmail.com" title="<?php echo $langMgr->getContent(PIDX_CLANG_EMAILREPLACE);?>">kimryo.ultimate at gmail.com</a><br><br>

<b><font size="+1"><?php echo $langMgr->getContent(PIDX_CLANG_SOCIAL);?></font></b><br>
<a href="<?php echo $SOCIAL_URLS["twitter"];?>" title="<?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?>" target="_blank"><img src="image/twitter.png" width="<?php echo SOCIAL_ICON_WIDTH;?>" height="<?php echo SOCIAL_ICON_HEIGHT;?>" /><?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?></a>
<a href="<?php echo $SOCIAL_URLS["google+"];?>" title="Google+" target="_blank"><img src="image/google+.png" width="<?php echo SOCIAL_ICON_WIDTH;?>" height="<?php echo SOCIAL_ICON_HEIGHT;?>" />Google+</a><br>
<a href="<?php echo $SOCIAL_URLS["linkedin"];?>" title="LinkedIn" target="_blank"><img src="image/linkedin.png" width="<?php echo SOCIAL_ICON_WIDTH;?>" height="<?php echo SOCIAL_ICON_HEIGHT;?>" />LinkedIn</a>
<a href="<?php echo $SOCIAL_URLS["facebook"];?>" title="Facebook" target="_blank"><img src="image/facebook.png" width="<?php echo SOCIAL_ICON_WIDTH;?>" height="<?php echo SOCIAL_ICON_HEIGHT;?>" />Facebook</a><br>
<?php
 $weibo_text=$langMgr->getContent(PIDX_CLANG_TENCENT)." ".$langMgr->getContent(PIDX_CLANG_WEIBO);
?>
<a href="<?php echo $SOCIAL_URLS["tencent_weibo"];?>" title="<?php echo $weibo_text;?>" target="_blank"><img src="image/t_weibo.png" width="<?php echo SOCIAL_ICON_WIDTH;?>" height="<?php echo SOCIAL_ICON_HEIGHT;?>" /><?php echo $weibo_text;?></a><br>

<?php require("footer.php");?>
</body>
</html>