<?php



include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Study Trip 2019</h1></section>

			 

<section id="posts">
<div class="container">
<p>For the purpose of fulfilling one of IEEE IAS's most essential goals, which is linking research to practice, IEEE IAS INSAT SBC has organized a study trip, where students embarked on a journey to some of Tunisia's most prominent industrial sites to get a full understanding of the multiple industrial procedures and applications, as well as get to know the full extent of the applicability of their theoretical knowledge
			this journey lasted over the span of three days, where partcipants toured industrial zones spread across Zaghouane Governorate, such as Helioflex, Teriak and BJO.</p>
   
   <div id="cc" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php

    foreach (array_filter(glob('img/events/studyTrip/*'), 'is_file') as $img){
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