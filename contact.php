<?php

 require("common.php");
 
 $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
 $langMgr=new CLangMgr();

?>
<html>
<head>
<title><?php echo $langMgr->getContent(PIDX_CLANG_CONTACT);?></title>
</head>

<body>
<?php
    
?>

<b>Born:</b> Checgu, Sichuan, China<br>
<b>Current location:</b> Minato-ku Tokyo, Japan.<br>

<?php echo $langMgr->getContent(PIDX_CLANG_EMAIL);?>: <a href="mailto:kimryo.ultimate 'at' gmail.com">kimryo.ultimate 'at' gmail.com</a>
<a herf="https://twitter.com/Leon_Zh" title="<?php echo GetCommonLang(PIDX_CLANG_TWITTER);?>" target="_blank"><?php echo $langMgr->getContent(PIDX_CLANG_TWITTER);?></a>
<a herf="http://Gplus.to/LeonZhang" title="Google+" target="_blank">Google+</a>
<a herf="http://jp.linkedin.com/pub/leon-zhang/3a/271/160" title="LinkedIn" target="_blank">LinkedIn</a>
<a herf="http://www.facebook.com/leon.zhang.313" title="Facebook" target="_blank">Facebook</a>
<a herf="http://t.qq.com/leon_zhx" title="<?php echo GetCommonLang(PIDX_CLANG_WEIBO);?>" target="_blank"><?php echo $langMgr->getContent(PIDX_CLANG_WEIBO);?></a>

</body>
</html>