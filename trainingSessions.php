<?php
include "header.php";
?>

<section class="header-title SolidGreen">
<h1>Past training sessions</h1>
</section>

<section class="details">
<div class="container">
    <div class="row">

    <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
               <img src="img/greenbelt.jpg" alt="">
            </div>
            <div class="col-md-8 item-details">
            <h3>Green belt</h3> 
            The certified training sessions were presented by senior consultant in organization and performance-SMQ and certified L6S Black Belt trainer Noomen Gharsalli, who staggered between explaining the concepts of Green belt modules for the participants to understand and getting them involved in numerous activities that puts these concepts into practice. The experience was fulfilling and very educational for the participants as they learned how to handle all kinds of waste in the most efficient manner possible. These sessions were then concluded by a small ceremony where the trainer congratulated the participants and presented them with their certifications
               </div>
        </div>

    <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
               <img src="img/labview2019.jpg" alt="">
            </div>
            <div class="col-md-8 item-details">
            <h3>LabVIEW</h3> 
            <p>The training sessions was held by LabVIEW Student Ambassador Yassine Dridi, who profusely explained the numerous functions of the LabVIEW graphical user interface,more specifically measurement and data analysis, and presented the virtual workbench's functionality in simulations, idea presentation and general programming, the training was held over the span of 5 sessions, during which the LSA included multiple exercises and tutorials in order for the participants to get used to the interface through practice.</p>
            <?php
           $labview=array("title"=>"LabVIEW","content"=>"
			   The training sessions was held by LabVIEW Student Ambassador Yassine Dridi, who profusely explained the numerous functions of the LabVIEW graphical user interface,more specifically measurement and data analysis, and presented the virtual workbench's functionality in simulations, idea presentation and general programming, the training was held over the span of 5 sessions, during which the LSA included multiple exercises and tutorials in order for the participants to get used to the interface through practice.
			",
           "path"=>"training/labview");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($labview as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
            
             <button type="submit" class="btn btn-details">Read More</button>
            </form>
			</div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
               <img src="img/iso1.jpg" alt="">
            </div>
            <div class="col-md-8 item-details">
            <h3>ISO 9001 : 2015</h3> 
On August 30, 31 and September 01, IAS allowed 15 of our members to attend a training course on "Quality management systems" according to ISO 9001: 2015 & 19011: 2018 standards This course was delivered by our partner IMDTEC.
               </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/lean.png" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>Lean Manufacturing and Management</h3>
            Lean Manufacturing and Management is a systematic method for waste minimization within a manufacturing system without sacrificing productivity. It is a great tool that helps the students learn how to manage a high-quality production process and help them face their professional career.
            These two-day courses that ends with a final exam pass certification were led by our great trainer, Mr Salem Ben Dhaou. The trainer has explained the concept and ensures the good understanding of participants. The training sessions’ goal is to bring students closer to the industrial and professional field. The session was delivered by Salem Ben Dhaou, Industrial Quality and Management Expert at Valeo, Tunisia and took place on e March 2 and 3, 2019.
            </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/LAbview-formation.jpg" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>Labview</h3>
            Engineering is dedicated to meet humanity needs. Thus engineers must master several tools to contribute effectively to the advancement of technology, to stay ahead of the curve, to think beyond current challenges and to develop solutions for the future.
Laboratory Virtual Instrument Engineering Workbench (LabVIEW) is a system-design platform and development environment for a visual programming language from National Instruments.
IEEE IAS INSAT SB Chapter organized a series of training sessions in LabVIEW in collaboration with National Instruments (NI) program LSA (LabVIEW Student Ambassador). The training sessions were gracefully delivered by Dhia Eddine m’barki, who is LSA, senior year student in Industrial Computing and Automation at INSAT. 
            </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/iso.png" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>ISO 9001 : 2015</h3>
IEEE INSAT IAS Chapter organized an international standards ISO 9001 2015: version certified training for IEEE members who were interested in the quality management in collaboration with the training center IMDTEC on 07/11/18, 10/11/18 and 14/11/2018.
This standard defines requirements for the establishment of a quality management system for organizations wishing to continuously improve customer satisfaction and provide compliant products and services. The ISO 9001 standard is for all organizations, regardless of size and industry.
Practical and theoretical exercises were taken into account for the students in order to ensure excellent training.
              </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/w3.png" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>LEAN MANAGEMENT AND MANUFACTURING TRAINING</h3>
IEEE IAS Chapter - INSAT Student Branch in collaboration with L2M ( Lean Management and Manufacturing), organized an internationally acknowledged certified training in Lean Management and Lean Manufacturing. Thanks to the professional trainers and their great work, we have been delighted during tje whole training period and it was concluded successfully by having all of our participating members Certified.
IEEE IAS Chapter - INSAT Student Branch in collaboration with L2M ( Lean Management and Manufacturing), organized an internationally acknowledged certified training in Lean Management and Lean Manufacturing.
tionally acknowledged certified training in Lean Management and Lean Manufacturing. Thanks to the professional trainers and their great work, we have been delighted during tje whole training period and it was concluded successfully by having all of our participating members Certified ...
               </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/upcoming1.jpg" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>LabView training</h3>
            In the context of the 2nd International Conference on Advanced Systems and Electrical Technologies (IC_ASET), IEEE IAS Chapter - INSAT Student Branch organized a 5 days labview training that was ajourned with the NI Certified LabVIEW Associate Developer (CLAD) exam.
All the participations had, in addtion to the training, an access to the different confrences provided during the five days. The topics ranged from automatic control systems ,communication Engineering ,embedded Systems to robotics and Automation , ... 
               </div>
        </div>

        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/1.jpg" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>ISO 9001 training</h3>
            IEEE IAS Chapter - INSAT Student Branch in collaboration with AQI (African Quality Institute), organized an international management system standards ISO 9001 2015 version certified training (International certificate). Thanks to the professional trainers and their great work, we have been delighted during the first two days ( 11-12 November ) as well as in the third day (18 November ) during which we continued the training in analyzing real professional and management situation of the industrial field. 
                </div>
        </div>
        <div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
            <img src="img/lavbiew.jpg" alt="">

            </div>
            <div class="col-md-8 item-details">
            <h3>LabVIEW training sessions</h3>
We had our first session of LabVIEW training, organized by the IEEE IAS Chapter - INSAT Student Branch in collaboration with LSA INSAT. The LabVIEW Student Ambassador (LSA) Program empowers engineering students to learn the LabVIEW graphical programming environment.The session was led successfully by our trainer Saif Faidi . This first session took place on 30 Septembre 2017. #IAS_SB #LSA_INSAT
                </div>
        </div>

    </div>
</div>






</section>


<?php
include "footer.php";
?>