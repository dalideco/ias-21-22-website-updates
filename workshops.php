<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Our workshops</h1>
</section>

<section class="details">
<div class="container">
    <div class="row">
      <!-- NEW SECTION -->
      <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="timemanag" class="carousel slide" data-ride="carousel">


              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/openCV/openCV.webp" alt="Proteus Pic">
                </div>
              </div>

          

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Introduction to Computer Vision Workshop!</h3>
            Hosted on the 8th of November 2020, Mr. Muhammad Touseep, a computer engineer at the University of Engineering and Technology Taxila, Pakistan Presented
            to our students this Workshop in an online presentation. He introduced attendees to the field of computer vision through a detailed presentation including the basics of image processing and an application with the OpenCV library.  <br>
        
             <br>
             <?php
           $timeMan=array("title"=>"Introduction to openCV","content"=>"Computer vision is an interdisciplinary scientific field that deals with how computers can gain a high-
           level understanding of digital images or videos. From the perspective of engineering, it seeks to
           understand and automate tasks that the human visual system can do. Computer vision tasks include
           methods for acquiring, processing, analyzing and understanding digital images, and extraction
           of high-dimensional data from the real world to produce numerical or symbolic information.
           OpenCV (Open Source Computer Vision Library) is an open-source computer vision and
           machine learning software library. It was built to provide a common infrastructure for computer
           vision applications and to accelerate the use of machine perception in commercial products.
           <br>The workshop, which was part of the Summer School 3.0 ’s program, was presented by
           the training manager of the IEEE IAS INSAT SBC Mariem Ben Gharbia and the general secretary of
           the IEEE IAS INSAT SBC Hiba Mili. The trainers introduced participants to the Proteus workspace,
           main tools and libraries, and usages.
           The first part of the workshop was dedicated to introducing attendees to computer vision through
            examples of applications like object identification, lane detection, human tracking, color object
            tracking, face recognition. Mr. Touseep has also exposed the challenges in building computer vision
            systems from scale variations to lightening problems, and lack of meaningful data.
            Later on, the trainer helped participants gain an understanding of image types, workflow of
            computer vision, and convolutional neural networks.<br>
            The second part of the session consisted of the realization of an OpenCV program example.
            Attendees learned the special instructions provided by the OpenCV library and how to use them in
            Python’s workspace. The script explained and written by Mr. Touseep enables users to read, display,
            write, and find the dimension of images. Participants also learned to resize images with Python.",
           "path"=>"workshop/openCV");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($timeMan as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
             <br>
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
              </div>
        </div>
      <!-- NEW SECTION -->
    <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="timemanag" class="carousel slide" data-ride="carousel">


              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/proteus/proteus.webp" alt="Proteus Pic">
                </div>
              </div>

          

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Proteus!</h3>
            Proteus is a software tool offered by Labcenter Electronics Ltd. that enables you to create your printed circuits virtually and test their behavior. This proves to be extremly useful as it reduces the time loss from developmenet to production.IAS INSAT offers its students a mean to learn this amazing tool and build on their existing skills...  <br>
        
             <br>
             <?php
           $timeMan=array("title"=>"Proteus","content"=>"Proteus PIC Bundle is the complete solution for developing, testing and virtually prototyping your embedded system designs based around the Microchip Technologies TM series of microcontroller. This software allows you to perform schematic capture and to simulate the circuits you design. A demonstration on the use of PROTEUS will be given to you on this lab session, after that; you are encouraged to learn to use the software interactively.Composed of two main parts, the session enabled attendees to familiarize themselves with the
           Proteus workspace. In the first part presented by Mrs. Hiba Mili, participants learned how to create
           simple circuits based on the manipulation of liquid-crystal displays (LCD), ASCII code, and
           international Morse code. During the second part, Mrs. Mariem Ben Gharbia tutored attendees in
           designing and testing their first printed circuit board (PCB) used to build a DC motor driver.
           Participants were made acquainted with and learned to use various electrical components such as
           regulators, T blocks, connector pins, and the integrated monolithic circuit L298.
           <br>The workshop, which was part of the Summer School 3.0 ’s program, was presented by
           the training manager of the IEEE IAS INSAT SBC Mariem Ben Gharbia and the general secretary of
           the IEEE IAS INSAT SBC Hiba Mili. The trainers introduced participants to the Proteus workspace,
           main tools and libraries, and usages.",
           "path"=>"workshop/proteus");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($timeMan as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
             <br>
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
              </div>
        </div>
<!-- NEW SECTION -->
    <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="timemanag" class="carousel slide" data-ride="carousel">


              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/bootcamp/bootcamp.webp" alt="Los Angeles">
                </div>
              </div>

          

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>The Bootcamp!</h3>
            Bootcamps are learning programs where content is aggregated, or bundled into short, intensive and rigorous curriculums. Also referred to as accelerated curriculums. We are proud to say that we concluded our bootcamp, hosted from the 25th of Septmber to the 27th...             <br>
        
             <br>
             <a href="https://ias-insat.ieee.tn/bootcamp"><button type="submit" class="btn btn-details">Read More</button></a>
              </div>
        </div>

    <!--NEW SECTION -->
        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
                
            <div id="summer" class="carousel slide" data-ride="carousel">

            

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/summer/ss.png" alt="Los Angeles">
                </div>
    
              </div>


              </div>

            </div>

              <div class="col-md-8 item-details">
            <h3>Summer school 2.0</h3>
            On September 6th through 8th, IEEE INSAT Student branch held the second edition of the “IEEE summer school” event within the walls of the national institute of applied sciences and technology (INSAT); a three-day event during which training sessions, workshops...
           <?php
           $SUMMER=array("title"=>"Summer school 2.0","content"=>"On September 6th through 8th, IEEE INSAT Student branch held the second edition of the “IEEE summer school” event within the walls of the national institute of applied sciences and technology (INSAT); a three-day event during which training sessions, workshops, and conferences were provided for the participants. Various themes have been selected, aligning with the visions of each chapter and affinity group. It was a great opportunity for the participants to indulge in IEEE activities for this current year and get themselves prepared for their engineering career. During this important event, IAS INSAT Student chapter has managed to hold a workshops in Lean Manufacturing, presented by Mrs. Dorra Nasr and Mr. Ahmed Abdelkefi from L2M Nabeul Training center, who gave an introduction to Green belt certification and its modules, and an ERP workshop presented by WYNSYS SAP functional consultant and IEEE IAS Tunisia Chapter Chair Mr. Saif Elhajjem.

           <br> <br>Tickets were sold out almost immediately after the program announcement and the participants expressed great satisfaction with the content of the workshops provided by the IAS INSAT student chapter and requested more workshops of the sort. "
           ,
           "path"=>"workshop/summer");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($SUMMER as $a => $b) {
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
                
            <div id="timemanag" class="carousel slide" data-ride="carousel">


              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/timemanag/Time-management.jpg" alt="Los Angeles">
                </div>
              </div>

              <!-- Left and right controls -->

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Time management workshop</h3>
            Time management is the process of organizing and planning how to divide our time between specific activities. Good time management enables us to work smarter – not harder – so that we get more done in less time, even when time is tight and pressures are high. Failing to manage our time damages our effectiveness and causes stress. In this purpose IEEE IAS ...             <br>
            <?php
           $timeMan=array("title"=>"Time management workshop","content"=>"Time management is the process of organizing and planning how to divide our time between specific activities. Good time management enables us to work smarter – not harder – so that we get more done in less time, even when time is tight and pressures are high. Failing to manage our time damages our effectiveness and causes stress. In this purpose IEEE IAS Chapter INSAT student Branch organized a time management workshop for IAS members delivered by Mr. Ahmed Ben Hammouda, Digital Agile Transformation Project Manager, Trainer & Coach, Senior Project & Program Manager, Scrum Master, Agile Coach, Trainer and Digital Transformation Catalyst. Certified as: PMP®, Scrum MasterTM, Agile ExpertTM, Scrum Product OwnerTM, Lean Six Sigma Black Belt, Scrum TrainerTM, Digital Marketing ProfessionalTM, ITIL
           <br>The trainer introduces the basic concepts of Time Management, explains the main factors improving the notions of management and control of time based on his previous experiences and based on scientific research. During the first initiation of Soft SKILLS, the training was interesting with participant satisfaction. ",
           "path"=>"workshop/timemanag");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($timeMan as $a => $b) {
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
                
            <div id="erp" class="carousel slide" data-ride="carousel">

        

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/erp/ERP.jpg" alt="Los Angeles">
                </div>
      
              </div>

              

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Introduction to ERP workshop</h3>
            Business processes included in SAP (Systems, Applications, Products) ERP are operations (sales and distribution , materials, management, production planning, logistics ,quality management ...) ....             <br>
            <?php
           $SUMMER=array("title"=>"Summer school 2.0","content"=>"Business processes included in SAP (Systems, Applications, Products) ERP are operations (sales and distribution , materials, management, production planning, logistics ,quality management ...) In this purpose IEEE IAS Chapter INSAT student Branch organized an ERP Workshop, delivered by Mr. Seif El Hajjem, SAP functional consultant at WiNSYS, IAS Tunisia Chapter chair and Vice Chair IEEE YP Tunisia.
           <br>ERP (Enterprise Resource Planning) is the integrated management of core business processes in real-time and mediated by software and technology. It improves the quality and efficiency of the business. During this workshop, which took place on the 16th of February 2019, participants discovered the concepts of ERP (Enterprise Resource Planning) . Our qualified instructor answered all the questions and has explained the basics of ERP.
           ",
           "path"=>"workshop/erp");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($SUMMER as $a => $b) {
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
                
            <div id="supply" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/supply/16.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                  <img src="img/workshop/supply/17.jpg" alt="Chicago">
                </div>
              
              </div>

              

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Supply Chain Management</h3>
            The IEEE IAS Chapter - INSAT Student Branch organized and a workshop provided by the PFI CONSULTING on Wednesday the 21st of February to expose students to supply chain management.....
             <br>
             <?php
           $supplyChain=array("title"=>"Supply Chain Management","content"=>"The IEEE IAS Chapter - INSAT Student Branch organized and a workshop provided by the PFI CONSULTING on Wednesday the 21st of February to expose students to supply chain management. The workshop made it possible to discover the world of the supply chain, which consists in improving the management of physical flows within the company and with its environment.It was successfully and amazingly conducted by Mr. Oussema Azzouzi from PFI CONSULTING . ",
           "path"=>"workshop/supply");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($supplyChain as $a => $b) {
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
                
            <div id="bmc" class="carousel slide" data-ride="carousel">

      
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/workshop/bmc/bmc1.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                  <img src="img/workshop/bmc/bmc1.jpg" alt="Chicago">
                </div>
               
              </div>

              

              </div>

            </div>
            <div class="col-md-8 item-details">
            <h3>Industrial forum : BMC Canvas</h3>
            IAS is working on a big project this year and it's called "the industrial forum" It's around industrial presentations to promote and consolidate exchanges between industrial trades and promote collaborative industrial projects between....
             <br>
             <?php
           $industrialForum=array("title"=>"Industrial forum : BMC Canvas","content"=>"

           Industrial forum : BMC Canvas
           
           IAS is working on a big project this year and it's called 'the industrial forum' It's around industrial presentations to promote and consolidate exchanges between industrial trades and promote collaborative industrial projects between students and industries in the spirit of industrial-technological innovation.
           
           <br><br>As planned, on Wednesday, 29 November 2017, we organised our first Workshop in order to allow people wishing to participate in the forum to have an idea about renewable energy, but also will have the opportunity to learn more about the 'Problem Solving', BMC (Business Model Canvas), submit their ideas and form teams with which they will work on their project.
           ",
           "path"=>"workshop/bmc");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($industrialForum as $a => $b) {
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