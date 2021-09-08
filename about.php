<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>About Us</h1>
</section>

<section id="IAS">
  <div class="container">
    <div class="header">
      <h2>IEEE IAS</h2>
      <h2>Connect Yourself to the Industry Professionals in Electrical and Electronic Engineering</h2>
    </div>

    <div class="details row">
    <div class="col-md-6">
    Industry Applications Society is one of 39 societies of IEEE. It is a source of professional power to its nearly 10,000 worldwide members.

    </div>
    <div class="col-md-6">
    Through a network of over 100 chapters globally, regional events and national and international conferences, the society keeps members abreast of current developments in the area of technology in electricity and electronics.

    </div>
    <div class="col-md-6">
    IAS enriches both its individual members and the industry as a whole through the sharing of specific industry-related solutions.

    </div>
    <div class="col-md-6">
    "If your engineering interests are the needs of the industrial or commercial sector, the Industry Applications Society (IAS) will be a valuable professional connection."(ias.ieee.org)

    </div>


    </div>

<div  id="aboutus" class="carousel slide" data-ride="carousel">



<!-- The slideshow -->
<div class="carousel-inner">

<?php
    $i=0;
foreach (array_filter(glob('img/about_us/*'), 'is_file') as $img){
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
<a class="carousel-control-prev" href="#aboutus" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#aboutus" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>


  </div>
</section>

<section id="TUNISIA">
  <div class="container">
    <div class="header">
      <h2>What you can discover in Tunisia</h2>
    </div>

    <div class="details row">

    <div class="col-md-6">
    <b>Monuments</b>
<br>
Discover monuments dating back to the 9th century BC .
    </div>
    <div class="col-md-6">
   <b>  Beaches</b>
    <br>
Enjoy one of the Mediterranean's most spectacular beaches in Tunisia
    </div>
    <div class="col-md-6">
    <b> Sahara</b>
    <br>
No holiday to Tunisia is complete without taking a trip to the mesmerising Sahara Desert
    </div>
    <div class="col-md-6">
    <b> Caves</b>
    <br>
Discover the southern caves , one of the location for the filming of Star Wars.
    </div>

    <div class="col-md-6">
   <b>  Historical sites</b>
    <br>
Historical sites are the best in the world and a must see for the avid traveler or history buff.
    </div>

    <div class="col-md-6">
      
 <b>Beautiful coast</b>
<br>
Tunisia claims a very vast coastline of 713 miles.

  </div>
    




    </div>

<div  id="abouttunisia" class="carousel slide" data-ride="carousel">


<!-- The slideshow -->
<div class="carousel-inner">
<?php
    $i=0;
foreach (array_filter(glob('img/about_tunisia/*'), 'is_file') as $img){
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
<a class="carousel-control-prev" href="#abouttunisia" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#abouttunisia" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>


  </div>
</section>


<section id="insat">
  <div class="container">
    <div class="header">
      <h2>What you need to know</h2>
    </div>

    <div class="details">

   

Here dreams and memories are made...

The National Institute of Applied Sciences and Technology (INSAT) was established on 1992, it is a Tunisian institute that is affiliated with the University of Carthage. Admission is very competitive and generally students must hold a good average on the national exam to be admitted. Training technicians and engineers, it provides a post-baccalaureate education over a period of three and five years. Starting with two main branches CBA in French or ACB (Applied-Chemistry-Biology) and MPI in French or MPC (Math-Physics-Computer science) for the first year of integrated preparatory cycle, further branching to 2 tracks for ACB students, and 5 tracks for MPC students.

INSAT is known of its active students in community, in clubs, associations and even in art among all Tunisia's universities. It is an inspiring place for students where many national events are organized such : TUNIROBOTS (Tunisian National Day of Robotics since 2010) , AERODAY (Tunisian National Day of Aeronautics since 2011) and SECURIDAY (Tunisia National Day of Security since 2004)

Charguia
INSAT, Tunis
embed google maps
overview of all web directories 2016

<!--google map -->

    </div>

<div  id="aboutinsat" class="carousel slide" data-ride="carousel">


<!-- The slideshow -->
<div class="carousel-inner">
<?php
    $i=0;
foreach (array_filter(glob('img/about_insat/*'), 'is_file') as $img){
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
<a class="carousel-control-prev" href="#aboutinsat" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#aboutinsat" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>


  </div>
</section>


<section id="IAS_insat">
  <div class="container">
    <div class="header">
      <h2>IEEE IAS INSAT</h2>
      <h2>Linking Research To Practice</h2>
    </div>

    <div class="details row">

   
<div class="col-md-4">
IEEE IAS INSAT Student Chapter was formed on 16 October 2014. Since the founding of the student chapter. We aim to provide knowledge to our members through organizing various events such as: LabVIEW workshop, Lean Manufacturing Training, Industrial Visits etc.

</div>
<div class="col-md-4">
Thanks to the society, we had the chance to participate in international conferences such as IAS Annual Meeting. Which is an incredible opportunity to meet IAS members from all around the world, to share and exchange ideas and to get inspired by them.

</div>
<div class="col-md-4">
Our mission is to make from our Student Chapter a linking bridge between the academic and the industry for our student members. To fulfil this mission we believe in ourselves and most of all we believe in:

</div>





    </div>

<div  id="iasinsat" class="carousel slide" data-ride="carousel">

<!-- Indicators -->

<!-- The slideshow -->
<div class="carousel-inner">
<?php
    $i=0;
foreach (array_filter(glob('img/about_insat_ias/2019/*'), 'is_file') as $img){
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
<a class="carousel-control-prev" href="#iasinsat" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#iasinsat" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>


  </div>




<div class="container">

  <div class="row heading">
    <div class="col-md-12 col-md-offset-3">
      <h2 class="text-center bottom-line">Meet The Team</h2>
      <p class="subheading text-center">Working TOGETHER to link the Academic to the Industrial</p>
    </div>
  </div>

  <div class="row team-row">

    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member text-center">
        <div class="team-img">
          <img src="img/team/mariembeji.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/mariam.bj99"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/mariam-beji-90ab28178/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Mariem Beji</h6>
        <span>Chairwoman</span>
      </div>
    </div>
    <!-- end team member -->

    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member text-center">
        <div class="team-img">
          <img src="img/team/assil.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/profile.php?id=100012444874569"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/bchini-assil-5a44b2186/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Assil Bchini</h6>
        <span>Vice chair</span>
      </div>
    </div>
    <!-- end team member -->

    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/amani.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/amani.kaabi23"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/amani-kaabi-047170196/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Amani Kaabi</h6>
        <span>HR Manager</span>
      </div>
    </div>
    <!-- end team member -->

    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/oussema.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/oussema.zouaghi.9/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/oussema-zouaghi/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Oussema Zouaghi</h6>
        <span>WebMaster</span>
      </div>
    </div>
    <!-- end team member -->

    
    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/mariemgharb.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/mariemmm14"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/mariem-ben-gharbia/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Mariem Ben Gharbia</h6>
        <span>Training and Partnership Manager</span>
      </div>
    </div>
    <!-- end team member -->

    
    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/mariembrah.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/Mariem.Brahemm"><i class="fa fa-facebook"></i></a>
                <!-- <a href="https://www.linkedin.com/in/houssem-fourati-aa4050192/"><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Mariem Brahem</h6>
        <span>Treasurer & Fundraising Manager</span>
      </div>
    </div>
    <!-- end team member -->

    
    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/azizall.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/aziz.allouche"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/aziz-allouche-167312195/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Aziz Allouche</h6>
        <span>Communications Manager</span>
      </div>
    </div>
    <!-- end team member -->

    
    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/hibamili.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/hiba.mili.7"><i class="fa fa-facebook"></i></a>
                <a href=" https://www.linkedin.com/in/mili-hiba-86a1291a5/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Hiba Mili</h6>
        <span>General Secretary</span>
      </div>
    </div>
    <!-- end team member -->
    <div class="col-md-4 col-sm-6 team-wrap">
      <div class="team-member last text-center">
        <div class="team-img">
          <img src="img/team/zormati.png" alt="">
          <div class="overlay member">
            <div class="team-details text-center">
              <p>
              </p>
              <div class="socials mt-20">
              <a href="https://www.facebook.com/ma.zormati"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/mohamedalizormati/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <h6 class="team-title">Mohamed Ali Zormati</h6>
        <span>Logistics manager</span>
      </div>
    </div>
    <!-- end team member -->
  </div>
</div>

</section>

<?php
include "footer.php";
?>