<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Conferences</h1>
</section>

<section class="details">
<div class="container">
    <div class="row">
        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <img src="img/geospatial.jpg" />
            </div>
            <div class="col-md-8 item-details">
            <h3>The use of spatial information as a vector for development</h3>
            With the intent of keeping its members up-to-date on the latest technological developments, IEEE IAS INSAT SBC, In collaboration with the African Association of Geo-spatial Developement, has organized for a symposium, where participants get to learn about the various technologies used in the analysis, processing and presentaion of geographical data and discuss the use of spatial information as a vector for development.  <br>
             
           </div>
        </div>
		
		<div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="iotIndus" class="carousel slide" data-ride="carousel">


              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/conf/iot/iot in industry.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                  <img src="img/conf/iot/iot in industry1.jpg" alt="Chicago">
                </div>
                <div class="carousel-item">
                  <img src="img/conf/iot/iot in industry2.jpg" alt="New York">
                </div>
        
                <div class="carousel-item">
                  <img src="img/conf/iot/iot in industry4.jpg" alt="New York">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#iotIndus" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#iotIndus" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>IoT in Industry conference</h3>
            The Internet of Things, a recent and broad field, can be defined as the extension of internet connectivity into physical devices and everyday objects. Embedded with electronics, internet connectivity, ...
             <br>
             <?php
           $IotIndus=array("title"=>"IoT in Industry conference","content"=>"

           The Internet of Things, a recent and broad field, can be defined as the extension of internet connectivity into physical devices and everyday objects. Embedded with electronics, internet connectivity, and other forms of hardware (such as sensors), these devices can communicate and interact with others over the internet and they can be remotely monitored and controlled.
           
           <br><br>IAS INSAT SBC organized an Internet of Things (IoT) conference, where an INSAT Alumni’s presented her company and its work in applying IoT in different Industrial Sectors. ✓ The conference's goal was to bring students and Academics closer to Industry and get a glimpse of the current challenges in the professional world.
           ",
           "path"=>"conf/iot");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($IotIndus as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
             <br>
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
           </div>
        </div>


        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="newevent" class="carousel slide" data-ride="carousel">

   

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/conf/newevent/i1.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                <img src="img/conf/newevent/i2.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                <img src="img/conf/newevent/i3.png" alt="Los Angeles">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#newevent" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#newevent" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Key Insights in Career Management</h3>
            On the occasion of the PES month celebration, we, IEEE IAS & PES INSAT Student Branch Chapters have the immense honor to invite you next Monday, 30th April among us at INSAT to attend a conference titled Key Insights in Career Management. .....             <br>
            <?php
           $keyInsights=array("title"=>"Key Insights in Career Management","content"=>"
           On the occasion of the PES month celebration, we, IEEE IAS & PES INSAT Student Branch Chapters have the immense honor to invite you next Monday, 30th April among us at INSAT to attend a conference titled Key Insights in Career Management.

<br><br>Mr. John McDonald, an IEEE PES Distinguished Lecturer General Electric Power and an IEEE member for 47 years is going to be our guest here in INSAT for the first time in Tunisia to talk, discuss and share with us the secret of having a successful career in order to achieve ones' goals.

<br><br>After setting a comfortable atmosphere, our lecturer explained the functioning of LabVIEW with a real- life simulation that made it a lot easier for its audience to assimilate the theoretical part of the presentation. Before ending the information session, Mr. Mehdi spoke about the regional NI Graphical System Design Musabaka 2016 that offers engineering students the opportunity to win big prices for presenting a project using NI LabVIEW graphical development environment.
",
           "path"=>"conf/newevent");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($keyInsights as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
             <br>
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
                      </div>
        </div>


        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="women" class="carousel slide" data-ride="carousel">

             
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/conf/w/w1.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                <img src="img/conf/w/w2.jpg" alt="Los Angeles">
                </div>
    
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#women" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#women" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Women in Industry</h3>
            Such delightful, funny and inspiring talk we had today with Ms. Néjiba BK. Thank you dear Ms. Néjiba BK for being part of our celebration of International Women's Day, for sharing your story with us,...             <br>

            <?php
           $womenIndus=array("title"=>"Women in Industry","content"=>"
           Such delightful, funny and inspiring talk we had today with Ms. Néjiba BK. Thank you dear Ms. Néjiba BK for being part of our celebration of International Women's Day, for sharing your story with us, for inspiring us to believe in our potentials, for showing us that life is a challenge which we have to go for it and experience new things. Last but not least, thank you for being you! Also our special thanks to Ms. Ameni Channoufi for being part of our celebration and to all attendees. Happy Women's Day!

           "      ,
           "path"=>"conf/w");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($womenIndus as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
             <br>
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
          </div>
        </div>

    </div>
</div>






</section>


<?php
include "footer.php";
?>