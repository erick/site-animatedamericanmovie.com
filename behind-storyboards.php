<?php
	include("./php_inc/functions.inc.php");
  
  $section = "behind";
  $sub_section = "storyboards";
  $title = "Behind the Scenes - Storyboards";
  
  $relImgDir = "images/bts/storyboards";
  $baseImageDir = $MY_DOC_ROOT . $relImgDir;
  
	include("./php_inc/views/head.inc.php");
?>

			<h2>Behind the Scenes</h2>
			<div id="content">
				  <h3>Storyboards</h3>
			<ul id="bts_gallery">
          <?php 
            $handle = opendir($baseImageDir. "/thumbs"); 
            
            while (false !== ($file = readdir($handle))) 
            {                      
            if($file != "." && $file != ".."){
             $files[] = $file; 
            }
            }
            
            asort($files);
            
            foreach($files as $file) :
            $size = getimagesize($baseImageDir . "/thumbs/" . $file);
            
          ?>
            <li><a href="<?php echo $relImgDir ?>/full/<?php echo $file ?>" title=""><img src="<?php echo $relImgDir ?>/thumbs/<?php echo $file ?>" alt="" <?php echo $size[3] ?> /></a></li>
                    
        <?php 
          endforeach;
        ?>

			</ul>
			</div>


<?php
	include("./php_inc/views/foot.inc.php");
?>
