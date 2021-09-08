<?php
include "header.php";
?>

<style>
.navbar{
    border-bottom: 1px solid rgba(0,0,0,.1);
}

@import url(https://fonts.googleapis.com/css?family=Bitter:400,400italic|Open+Sans:400);
@color--main: #ee1d25;
@color--black: #231a16;



#pop-up {
  z-index:9999;
  position:fixed;
  align-items: center;
  justify-content: center;
  top: 12vh ;
  left: 12vw ;
  width: 75vw;
  height: 50vh;
  background: white;
  border: solid .125em lightgrey;
  box-shadow: 0 0 32px rgba(0, 0, 0, .5);
  transform: scale(0);
  animation: pop-up .2s 2s;
  animation-fill-mode: forwards;
  animation-timing-function: cubic-bezier(1, .3, .5, 1.3);
  
  &:target {
    animation: pop-down .075s;
    animation-fill-mode: forwards;
  }
}

a[href="#pop-up"] {
  text-decoration: none;
  display: inline-block;
  box-sizing: border-box;
  padding: .75em 1.5em;
  font-size: 2em;
  color: white;
  background: @color--main;
  border-radius: 5px;
  transition: background .35s;
  
 
 
}
 a[href="#pop-up"]:hover, a[href="#pop-up"]:focus {
    background: lighten(@color--main, 5%);
  }
  
  a[href="#pop-up"]:active {
    transition: background .075s;
    background:none;
  }
a[href="#pop-up"]:after{
	content: '×';
    position: absolute;
    top: .125em;
    right: .125em;
    font-size: 2em;
    line-height: .45;
    color: @color--black;
    transition: color .35s;
}


#first-page{
  width:90%; min-height:100vh; padding: 0 ; margin : 0 auto; max-width:1170px !important; display: flex; justify-content: space-between; align-items: center;
}
@media (max-width: 1000px){
  #first-page{
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    
  }
  .home{
    padding:140px 0;
  }
  #scrollDown{
    display: none;
  }
  #year-video{
    width: 100%;
  }
}
	
@keyframes pop-up {
  to {
    transform: scale(1);
  }
}

@keyframes pop-down {
  from {
    transform: scale(1);
  }
  
  to {
    transform: scale(0);
  }
}
</style>
<?php

if(isset($_COOKIE['popup']) && $_COOKIE['popup'] == true)
{ 
    // IS SET and has a true value
} 
else{
setcookie("popup", true, time() + (60 * 20)); // 60 seconds ( 1 minute) * 20 = 20 minutes
?>

<div id="news-signup">
    <div class="wrapper">
      <div id="news-signup_close" style="font-size: 26px;">X</div>
      <div class="newsletter-content" id="phplistsubscriberesult">
      <img src="img/bootcamp/bootcamp3.webp" />
        <h2>With the intent of enhancing our members' skills,IEEE IAS INSAT SBC have organized this year's version of the bootcamp,containing laser focused workshops led by our amazing hand-picked trainers. The event was ...
       <br> <a href="https://ias-insat.ieee.tn/bootcamp"><button type="submit" style="opacity:1" class="btn btn-details">Read More</button></a></h2>
      </div>
    </div>
  </div>
 <script src="js/popup.js"></script>

<?php

}	
?>




<div class="home">
  <div class="container" id="first-page">
    
      <div  style="line-height:1.6em">
      <p class="line-1" style="font-weight: 300;  line-height: 1.15em;"><span class="discover">Discover</span> <br> <span class="SansBold">IEEEIAS</span>Chapter <br><span class="SansBold">INSAT</span>StudentBranch <br>Linking<span class="SansBold">Research</span>To<span class="SansBold">Practice</span></p>
      </div>
      <!-- <div class="col-lg-7 col-sm-12">
      <img   src="img/WEBSITECOVER.png" alt="" style="position:relative">
      </div> -->

      <video controls  id="year-video" src="videos/21-22.mp4" autoplay>
        <!-- <source src="videos/21-22.mp4" type="video/mp4"> -->
        Your browser does not support the video tag.
      </video>
    
  </div>
</div>



<section id="scrollDown" class="demo">
  <a href="#services"><span></span></a>
</section>

<section id="services">
  <div class="container">
    <div class="header">
      <h2>Linking Research To Practice</h2>
      <h2>Linking Engineers To Worldwide Expertise</h2>
    </div>
    <div class="row">        
        <div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
            <a href="industrialsVisits">
              <span class="icon">
                <img src="img/icon1.png">
              </span>
              <p class="title">Proximity to the industry</p>
              <div class="FadeHover">
              <p>Industrial visits and promoting on-field knowlegde sessions is a priority to us. </p>
              </div>
            </a>
					</div>
        </div>
        

				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<a href="participations">
						<span class="icon">
            <img src="img/icon2.png">
						</span>
            <p class="title">Connecting Enginners</p>
            <div class="FadeHover">
						<p>Attending conferences and connecting student engineers with onfield ones is what we do. </p>
            </div>
          </a>
					</div>
        </div>
        
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<a href="trainingSessions">
						<span class="icon">
            <img src="img/icon3.png">
						</span>
            <p class="title">Top Traineeships</p>
            <div class="FadeHover">
						<p>Regular training session and workshops on the latest industrial tools and standards  . </p>
            </div>
          </a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<a href="magazines">
						<span class="icon">
            <img src="img/icon4.png">
						</span>
            <p class="title">Publications &amp; Magazines</p>
            <div class="FadeHover">
            <p>Regular publications and magazines keep our members connected to advances in theory and practice. </p>
            </div>
          </a>
					</div>
				</div>
      </div>
      
  </div>
</section>


<section id="activities">
  <div class="container">
    <div class="header">
      <h2>Our Latest Activities</h2>
    </div>

	


    <div class="row grid cs-style-3">
	 <div class="item co-xs-2 col-sm-6 col-md-4 col-lg-4">
        <figure>
          <a href="#" title=""><img src="img/geospatial.jpg" alt=""></a>
          <figcaption>
            <h4>The use of spatial information</h4>
            <span>Conferences</span>
            <div class="btn-group">
              <a href="/conferences" class="btn btn-sm" title="">More</a>
            </div>
          </figcaption>
        </figure>
      </div>

	  <div class="item co-xs-2 col-sm-6 col-md-4 col-lg-4">
        <figure>
          <a href="#" title=""><img src="img/study2019.jpg" alt=""></a>
          <figcaption>
            <h4>Study Trip</h4>
            <span>Events</span>
            <div class="btn-group">
              <a href="/events" class="btn btn-sm" title="">More</a>
            </div>
          </figcaption>
        </figure>
      </div>
	  
	 <div class="item co-xs-2 col-sm-6 col-md-4 col-lg-4">
        <figure>
          <a href="#" title=""><img src="img/TSYPIAS2019.jpg" alt=""></a>
          <figcaption>
            <h4>The IAS Challenge , TSYP 2019</h4>
            <span>Participations</span>
            <div class="btn-group">
              <a href="/participations" class="btn btn-sm" title="">More</a>
            </div>
          </figcaption>
        </figure>
      </div>
     
    

    
    
    </div>
  </div>
</section>

<section id="stats">
  <div class="container">
    <div class="row">

      <div class="stat col-md-3">
        <span class="icon">
              <img src="img/icon5.png">
        </span>
        <div class="capt-stats">
        Conferences Participation
        </div>
        <div class="num-stats">
        12
        </div>
      </div>

      <div class="stat col-md-3">
        <span class="icon">
              <img src="img/icon6.png">
        </span>
        <div class="capt-stats">
        Members
        </div>
        <div class="num-stats">
        87
        </div>
      </div>

      <div class="stat col-md-3">
        <span class="icon">
              <img src="img/icon7.png">
        </span>
        <div class="capt-stats">
        Industrial Visits
        </div>
        <div class="num-stats">
        15
        </div>
      </div>

      <div class="stat col-md-3">
        <span class="icon">
              <img src="img/icon8.png">
        </span>
        <div class="capt-stats">
        Years Old
        </div>
        <div class="num-stats">
        5
        </div>
      </div>
    
    </div>
  </div>
</section>

<section id="testim" class="testim">
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <div class="img"><img src="img/people_1.jpg" alt=""></div>
                        <h2>Skander KHELIL</h2>
                        <p>I believe that making a change or bringing success is possible only after grabbing the opportunity when it comes and the thing I appreciate most about IEEE is that it has given me the opportunity to grow and balance between studies, work and life</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="img/people_2.jpg" alt=""></div>
                        <h2>Zeineb Bouzid</h2>
                        <p>I discovered how passionate I am about reading and writing. I’ve learnt that getting out of my comfort zone is the only way for me to evolve both personally and professionally.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="img/people_3.jpg" alt=""></div>
                        <h2>Islem Cherif</h2>
                        <p>I met a lot of people, learnt a lot and developped my hard skills as well as my softs skills and all that thanks to the benefits and opportunities given by IAS.</p>                    
                    </div>


                </div>

            </div>
<!--         </div> -->
    </section>

    



<?php
include "footer.php";
?>