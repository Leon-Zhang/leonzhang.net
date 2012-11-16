<?php
    
    require_once("common.php");
    
    if(!isset($lang))
        $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    if(!isset($langMgr))
        $langMgr=new CLangMgr($lang,"");
		
	$TRANSIMG_PATHS=array(
		array("image/facebook.png", "image/facebook_gray.png", "facebook"),
		array("image/linkedin.png", "image/linkedin_gray.png", "linkedin"),
		array("image/twitter.png", "image/twitter_gray.png", "twitter"),
		array("image/google+.png", "image/google+_gray.png", "google+"),
	);
?>

<br><br><p>
<div align="center">© leonzh.net <?php echo date("Y");?></div>
<div align="center">
<?php 

for ($row = 0; $row < 4; $row++){
//foreach($TRANSIMG_PATHS as $org => $dst => $name){
 if(!file_exists($TRANSIMG_PATHS[$row][1]) && function_exists("imagefilter")){
  $img = imagecreatefrompng($TRANSIMG_PATHS[$row][0]);
  if($img && imagefilter($img,IMG_FILTER_GRAYSCALE)){
   imagepng($img,$TRANSIMG_PATHS[$row][1]);
   imagedestroy($img);
  }
 }
 if(file_exists($TRANSIMG_PATHS[$row][1])){
  echo "<a href='".$SOCIAL_URLS[$TRANSIMG_PATHS[$row][2]]."' target='_blank'><img src='".$TRANSIMG_PATHS[$row][1]."' width='16' height='16'/></a>&nbsp;";
 }
}
?>
</div>
</p>