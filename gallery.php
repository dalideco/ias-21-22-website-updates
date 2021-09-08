<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Gallery</h1>
</section>

<section class="gallery-view">
<div class="container">

	<div class="gallery">
<?php


$files = array_filter(glob('img/gallery/*'), 'is_file');
usort($files, function ($a, $b) {
   return filemtime($b) - filemtime($a);
});

foreach ($files as $img){
    ?>
    <div class="gallery-item">
   <?php
    echo '<img class="gallery-image" src="'.$img.'">';
   ?>
    </div>
   <?php 
}
?>
		
		

    </div>
    
    <button class="btn btn-success more" style="background-color:#8fbe24" >Show More</button>

</div>
</section>

<?php
include "footer.php";
?>