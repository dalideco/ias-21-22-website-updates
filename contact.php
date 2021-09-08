

<?php
include "header.php";
?>

<section class="header-title SolidGray">
<h1>Get in touch w/ IEEE<br>
<span class="SansBolder">IAS INSAT student branch</span></h1>
</section>

<section class="contact">
    <div class="details">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.9825912095375!2d10.194013314932276!3d36.8428929799398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34c6d1e93bef%3A0x4153c4733f285343!2sInstitut%20national%20des%20sciences%20appliqu%C3%A9es%20et%20de%20technologie!5e0!3m2!1sfr!2stn!4v1571176548414!5m2!1sfr!2stn" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <div class="container">
    <form method="post" action="mailto:ieee.ias.insat@gmail.com?subject=IAS Website contact" enctype="text/plain">
         <h3 class="text-center">Get In Touch</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="exampleFormControlInput1">Contact name</label>
                <input type="text" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="exampleFormControlInput1">Company name</label>
                <input type="text" class="form-control" class="company" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </div>
    </form>


    </div>
    </div>
</section>

<?php
include "footer.php";
?>