<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     header("Location: /404");
die();
}

include "header.php";
?>

<section class="header-title SolidGreen">
<h1><?php echo $_POST["title"];?></h1></section>



<section id="posts">
<div class="container">
<?php echo $_POST['content'];?>
<div id="cc" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    $i=0;
    $path=$_POST["path"];
    foreach (array_filter(glob('img/'.$path.'/*'), 'is_file') as $img){
      ?>

    <div class="carousel-item <?php if ($i==0) echo 'active'; ?>">
    <?php
    echo '<img  src="'.$img.'">';

   ?>
    </div>
   <?php 
   $i++;
    }
    ?>

 
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#cc" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#cc" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		
	</div>	
    </section>

    


<?php
include "footer.php";
?>