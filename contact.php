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
    
?>

<b><font size="+1"><?php echo $langMgr->getFileContent(IDX_LANG_INFO);?></font></b><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_BORN);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_BORN_VAL);?><br>
<b><?php echo $langMgr->getFileContent(IDX_LANG_CURLOCATION);?>:</b>&nbsp;<?php echo $langMgr->getFileContent(IDX_LANG_CURLOC_VAL);?><br>

<b><?php echo $langMgr->getContent(PIDX_CLANG_EMAIL);?>:</b> <a href="mailto:kimryo.ultimate'at'gmail.com" title="<?php echo $langMgr->getContent(PIDX_CLANG_EMAILREPLACE);?>">kimryo.ultimate at gmail.com</a><br><br>

<b><font size="+1"><?php echo $langMgr->getContent(PIDX_CLANG_SOCIAL);?></font></b><br>
<a href="https://twitter.com/Leon_Zh" title="<?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?>" target="_blank"><?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?></a><br>
<a href="http://Gplus.to/LeonZhang" title="Google+" target="_blank">Google+</a><br>
<a href="http://jp.linkedin.com/pub/leon-zhang/3a/271/160" title="LinkedIn" target="_blank">LinkedIn</a><br>
<a href="http://www.facebook.com/leon.zhang.313" title="Facebook" target="_blank">Facebook</a><br>
<a href="http://t.qq.com/leon_zhx" title="<?php echo $langMgr->getContent(PIDX_CLANG_WEIBO);?>" target="_blank"><?php echo $langMgr->getContent(PIDX_CLANG_WEIBO);?></a><br>

</body>
</html>