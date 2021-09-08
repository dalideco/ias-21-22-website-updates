<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>LabVIEW</h1></section>



<section id="posts">
<div class="container">
       <p>The training sessions was held by LabVIEW Student Ambassador Yassine Dridi, who profusely explained the numerous functions of the LabVIEW graphical user interface,more specifically measurement and data analysis, and presented the virtual workbench's functionality in simulations, idea presentation and general programming, the training was held over the span of 5 sessions, during which the LSA included multiple exercises and tutorials in order for the participants to get used to the interface through practice.</p>
          <div id="cc" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    $i=0;
    foreach (array_filter(glob('img/training/labview/*'), 'is_file') as $img){
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