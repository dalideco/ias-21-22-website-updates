<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Meet our volunteers</h1>
</section>



<section id="volunteers">
	<div class="container">

	<div id="cc" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">


		

		<?php
		$i=0;
	foreach (array_filter(glob('img/volunteersImg/*'), 'is_file') as $img){
		?>

		<div class="carousel-item <?php if ($i==0) echo 'active'; ?>">
		<?php
		echo '<img  src="'.$img.'">';

	   ?>
		  <div class="carousel-caption">

	<?php
	echo '<h3 style="background-color:black;padding:5px;">'.str_replace(array("img/volunteersImg/",".jpg"),'',$img).'</h3>';
	 ?>
	</div>
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