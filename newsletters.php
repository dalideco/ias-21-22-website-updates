<?php
include "header.php";
?>
<style>
.newsletter-grid{
  display:grid;
  align-items: stretch;
  grid-template-columns:repeat(autofit,minmax(15em,1fr));
  grid-row-gap:6em;
  grid-row-gap:2em%;
}
.image{
	margin:0 auto;
	position:relative;
	width:16em;
	height:16em;
}
.image img {
	width: 100%;
	height:100%;
    vertical-align: top;
}

span.text-content {
  background: rgba(0, 0, 0, 0.5);
  color: white;
  display: table;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  opacity: 0;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  transition: opacity 500ms;
}
span.text-content span {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
span.text-content:hover{
	opacity:1;
	cursor:pointer;
}


	</style>
<section class="header-title SolidGreen">
<h1>IAS's INSAT BI-monthly newsletters</h1>
</section>

<section class="details">
<div class="container">
<div class="header">
<h2>In this section, you'll find a sum up of our latest activities encompassed within our official newsletter. Our newsletter is published every two months to help you keep up with our newest workshops, competitions and conferences.            <br></h2>
</div>
<div class="newsletter-grid" style="">
<div class="grid-item">
	<div class="image">
	<img src="img/newsletters/sep-oct-20.png" alt="">
	<a href="https://ias-insat.ieee.tn/sepoct"><span class="text-content"><span>Click To View</span></span></a>

</div>
	<p style="text-align:center">September-October 2020 Newsletter</p>
</div>
<div class="grid-item">
	<div class="image">
	<img src="img/newsletters/jan-feb-2020.png" alt="">
	<a href="https://drive.google.com/file/d/1fExUl23-mLNG8XwT_Rh1z52zAjEmekK9/view?usp=sharing"><span class="text-content"><span>Click To View</span></span></a>

</div>
	<p style="text-align:center">January February 2020 Newsletter</p>
</div>
<div class="grid-item">
	<div class="image">
	<img src="img/newsletters/nov-dev-19.png" alt="">
	<a href="https://drive.google.com/file/d/1MMoYqDJ7-NIhS8g8AYL-HwfnxZriqxR1/view?usp=sharing"><span class="text-content"><span>Click To View</span></span></a>

</div>
	<p style="text-align:center">November December 2019 Newsletter</p>
</div>
<div class="grid-item">
	<div class="image">
	<img src="img/newsletters/sep-oct-19.png" alt="">
	<a href="https://drive.google.com/file/d/1F9b-kD1p2YCcGxfSVvcHuAlwPSkabwkn/view"><span class="text-content"><span>Click To View</span></span></a>

</div>
	<p style="text-align:center">September-October 2019 Newsletter</p>
</div>


</div>
</div>






</section>

<?php
include "footer.php";
?>