<?php
include "header.php";
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    .not-absolute{
        position: static;
    }
    .border-box{
        box-sizing: border-box; 
    }

    .flex-images {
        display: flex;
        width: 95%;
        
        justify-content: space-between;
        margin: auto;
    }

    .summer-school-title{
        margin: auto;
        position: relative; 
        margin-bottom: 20px;

    }
    .summer-school-title h1{
        margin: auto;
        color: black;
        text-align: center;
        transform : none;
        font-size: 2rem;
        color: green;
        font-family: 'Pacifico', cursive, sans-serif;
        font-weight:700;
        
    }
    
    .summer-school-title p {
        position: absolute; 
        top: 80%;
        right: 0 ;
        color: grey;
        font-family: 'Pacifico', cursive, sans-serif;
    }

    .flex-images>img {
        width: 300px;
        padding: 20px;
        background-color: transparent;
        transition: background-color 300ms ease; 
        max-width: 100%;
    }

    .flex-images img:hover{
        background-color: green; 
    }

    .image-page{
        position: fixed; 
        background: rgba(0, 0, 0, 0.788);
        width: 100%; height:100vh; 
        top:0; left: 0;
        z-index: 9000;
        display: flex; 
        justify-content: center; 
        align-items: center;
        transform: scaleY(0);
        transition: transform 300ms ease;
    }
    .image-page.shown{
        transform : none;
    }
    .image-page img{
        max-width: 100%;
        max-height:100vh;
    }

    @media(max-width:1000px){
        .flex-images{
            flex-direction: column;
            align-items: center;
        }
    }

    @media(max-width: 450px){
        .summer-school-title h1{
            font-size: 7vw;
        }
    }

</style>


<section class="header-title SolidGreen">
<h1>Our Events</h1>
</section>

<section class="details">
<div class="container border-box">

    <div class="row">

        <div class="summer-school-title">
            <h1 class="not-absolute">Summer School 2021-22</h1>
            <p>soon...</p>
        </div>

        <div class="flex-images">
            
            <img src="img/summer_school/3dPrinting.jpg" alt="3d printing">

            <div class="image-page image-page-0">
                <img src="img/summer_school/3dPrinting.jpg" alt="3d printing">    
            </div>

            <img src="img/summer_school/BIM.jpg" alt="3d printing">
            <div class="image-page image-page-0">
                <img src="img/summer_school/BIM.jpg" alt="3d printing">    
            </div>

            <img src="img/summer_school/industry.jpg" alt="3d printing">
            <div class="image-page image-page-0">
                <img src="img/summer_school/industry.jpg" alt="3d printing">    
            </div>
        </div>
        
    </div>

    <script>
        const images = document.querySelectorAll(".flex-images>img");
        const imagePages = document.querySelectorAll(".flex-images .image-page");

        imagePages.forEach(imagePage=>{
            imagePage.addEventListener('click', ()=>{
                imagePage.classList.remove("shown");
            })
        })

        images.forEach((image, index) =>{
            image.addEventListener('click', ()=>{
                imagePages[index].classList.add("shown");
            })
        })

        

    </script>



    <div class="row">

		<div class="item-container col-12 row">
            <div class="col-md-4 item-icon">
               <img src="img/study2019.jpg" alt="">
            </div>
            <div class="col-md-8 item-details">
            <h3>Study Trip 2019</h3> 
			<p>For the purpose of fulfilling one of IEEE IAS's most essential goals, which is linking research to practice, IEEE IAS INSAT SBC has organized a study trip, where students embarked on a journey to some of Tunisia's most prominent industrial sites to get a full understanding of the multiple industrial procedures and applications, as well as get to know the full extent of the applicability of their theoretical knowledge
			this journey lasted over the span of three days, where partcipants toured industrial zones spread across Zaghouane Governorate, such as Helioflex, Teriak and BJO.</p>
            
             <?php
           $studyTrip=array("title"=>"Study Trip 2019","content"=>"
			For the purpose of fulfilling one of IEEE IAS's most essential goals, which is linking research to practice, IEEE IAS INSAT SBC has organized a study trip, where students embarked on a journey to some of Tunisia's most prominent industrial sites to get a full understanding of the multiple industrial procedures and applications, as well as get to know the full extent of the applicability of their theoretical knowledge
			this journey lasted over the span of three days, where partcipants toured industrial zones spread across Zaghouane Governorate, such as Helioflex, Teriak and BJO.
         ",
           "path"=>"events/studyTrip");
           ?>
            <form  action="posts" method="post">
            <?php
                foreach ($studyTrip as $a => $b) {
                    echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
                }
            ?>
            
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