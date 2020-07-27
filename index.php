<!DOCTYPE html>
<html lang="en">
<head>
  <title>Entirety</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="OwlCarousel/owl.theme.default.min.css">
  <style>
    body{
      
      overflow-x: hidden;

    }
    .header-bg{
        background-image: url("img/banner.png") ;
        background-repeat: no-repeat;
        width: 1230px;
    }
    .navbar-brand{
        font-size: 30px;
    }
    .search-by{
        margin-top: 200px;;
    }
    .search-by p{
        font-weight: bold;
        color: grey;
    }
    .search-by input{
        padding: 14px 12px;
        border: 1px solid grey;
        border-radius: 12px;
        width : 60%;
    }
    .search{
        margin-left: -43px;
        margin-top: -4px;
        color:white;
        padding: 14px 10px;
        border-radius: 50%;
        
    }
    .about{
        margin-top: 500px;
    }
    .about img{
        width:70%;
        height: auto;
        padding: 30px 30px;
    }
    .about h1{
        padding: 100px 0px 20px 0px;
    }
    .why{
        margin-top: 0px;
    }
    .why img{
        width:100%;
        height: auto;
        padding: 30px 0px 0px 200px;
    }
    .why h1{
        padding: 100px 0px 20px 0px;
    }
    .category{
        text-align: center;
        height:300px;
    }
    .join{
        margin-top: 0px;
    }
    .join img{
        width:100%;
        height: auto;
        padding: 30px 0px 0px 200px;
    }
    .joinimage{
        margin-left: auto;
        margin-right: auto;
    }
    .join h1{
        padding: 100px 0px 20px 0px;
    }
    .join-with-us{
        margin-top: 15px;
        z-index: 0;
    }

    .join-with-us-p{
        text-align:center;
        z-index: 1;
        margin-top:-100px;
    }
    .rating{
        text-align: center;
    }
    .card-img{
        height: 300px;
        padding: 0px 30px;
    }
    .card-desc{
        text-align: center;
        color: gray;
    }
    .star{
        padding:20px 0px;
        color:orange;
    }
    .card{
        margin-top: -200px;
        height: 250px;
    }
    .card-title{
        text-align: center; 
    }
    .card-img-top{
        padding-left: 70px;
        padding-top: 20px;
    }
  </style>
</head>
<body>

<div class="container">

    <?php include "header.php"; ?>
  <div class= "header-bg">
    <!--find your best fit -->
    <div class="row">
        <div class="col-6">
            <div class="search-by">
                <h1>Find your best fit better and faster</h1><br>
                <p>Find your best talents and faster with Entirety</p><br>
                <input type="text" name="search" id="search" placeholder="Search by skill, company and job" ><i class='search fas fa-search bg-danger btn' style='font-size:24px'></i>
            </div>
        </div>
    </div>
    <div class="row about">
        <div class="col-6">
            <img src="img/01.png" alt="about.png">
        </div>
  
        <div class="col-6">
            <div>
                <h1>About Us -</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
  </div>
    <div class="row why">
        <div class="col-4">
            <div>
                <h1>Why Us ?</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
            </div>
        </div>
        <div class="col-6">
            <img src="img/02.png" alt="why.png">
        </div>
    </div>
    <div class="category mt-5">
        <h1>Browse roles by category</h1>
        <p> Choose from the list of most popular categories</p>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width:300px">
              <a href="#"><img class="card-img-top" src="img/account.png" alt="Card image" style="width:70%"></a>
              <div class="card-body">
                <h4 class="card-title">Accounting & Finance</h4>
              </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width:300px">
              <a href="#"><img class="card-img-top" src="img/creative.jpg" alt="Card image" style="width:70%"></a>
              <div class="card-body">
                <h4 class="card-title">Design & Creative</h4>
              </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width:300px">
              <a href="#"><img class="card-img-top" src="img/code.png" alt="Card image" style="width:70%"></a>
              <div class="card-body">
                <h4 class="card-title">Programming</h4>
              </div>
            </div>
        </div>
    </div>
    <div class="row join">
        <div class="col-4">
            <div>
                <h1>Over 10,000 top Schools joined us</h1>
                <p>Posting now includes out of the box integration with major CRM & accounting and ERP platforms, as well as an open API that allows you to seamlessly integrate with your business systems.</p>
            </div>
        </div>
        <div class="col-7">
            <img src="img/CRM.jpg" alt="CRM.png">
        </div>
    </div>
</div>
<div class="row join-with-us">
    <img src="img/join.jpg" class="joinimage" alt="join with us">
</div>
<div class="join-with-us-p">
    <h1>Come on, join with us !</h1>
    <p>Create an account and refer your friend</p>
</div>
<div class="container mt-5">
    <h1>Testimonials</h1>
     <div class="owl-carousel mt-5">
        <div class="rating" > 
            <img class="card-img" src="img/002.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/003.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/001.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/002.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/003.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/001.png" alt="" height="350px">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/002.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="rating" > 
            <img class="card-img" src="img/003.png" alt="">
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star checked star"></span>
            <span class="fa fa-star star"></span>
            <span class="fa fa-star star"></span>
            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
     </div>
</div>
<?php include "footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
});
    
</script>
</body>
</html>


