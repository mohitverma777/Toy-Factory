<?php 
    include('common_function.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-Home</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/body.css">
    <style>
      .pro a:hover{
        text-decoration: underline;
      }
      .search{
    margin-left: 210px;
}
     
.search input{
    padding-left: 10px;
    border-radius: 10px;
    font-size: medium;
    width: 310px;
    height: 35px;
}
a{
    text-decoration: none;
}
   </style>
</head>
<body>
<?php 
    include('navbar2.php');  
?>
        <!-- navbar the end -->
       
        <div class="carousel">
		<input type="radio" id="carousel-1" name="carousel[]" checked>
		<input type="radio" id="carousel-2" name="carousel[]">
        <input type="radio" id="carousel-3" name="carousel[]">
		
		<ul class="carousel__items">
			<li class="carousel__item"><img src="https://hamleysgumlet.gumlet.io/banner/1678685480banner%20desktop%20(2).webp" alt=""></li>
			<li class="carousel__item"><img src="https://hamleysgumlet.gumlet.io/banner/1676463929Mask%20group-1-min%20(1).webp" alt=""></li>
			<li class="carousel__item"><img src="https://hamleysgumlet.gumlet.io/banner/1678948781city_1817x747%20px.webp" alt=""></li>
		</ul>
     <div class="carousel__prev">
     	<label for="carousel-1"></label>
     	<label for="carousel-2"></label>
     	<label for="carousel-3"></label>
     	
     </div>
     <div class="carousel__next">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
       
     </div>
     <div class="carousel__nav">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
       
     </div>
   </div>

    <div class="section-p1" style="margin-top:100px;">
    <h2>Shop By Characters</h2>
        <section id="feature" >
        <?php
            get_prd_by_char();
        ?>
        </section>
    </div>
   
        <section id="product1" class="section-p1" style="margin-top:80px;">
            <h2>Featured Products</h2>
            <div class="pro-container">
                <?php
                   getfetrdpro();
                ?>
            </div>
        </section>
        
         <section class="section-p1" style="margin-top:80px;justify-content:center;">
            <h2>Shop by brands</h2>
        <div class="slider" id="slider">
        <div class="slide" id="slide">
        <?php get_prd_by_brand();?>
        </div>
    </div>
    </section>
	
        
        <section id="product1" class="section-p1" style="margin-top:80px;justify-content:center;">
            <h2>New Arrivals</h2>
            <div class="pro-container">
            <?php
                   getfetrdpro();
                ?>
            </div>
        </section>
        <?php 
    include('footer.php');  
?>        
    <script>
               "use strict";

productScroll();

function productScroll() {
  let slider = document.getElementById("slider");
  let next = document.getElementsByClassName("pro-next");
  let prev = document.getElementsByClassName("pro-prev");
  let slide = document.getElementById("slide");
  let item = document.getElementById("slide");

  for (let i = 0; i < next.length; i++) {
    //refer elements by class name

    let position = 0; //slider postion

    prev[i].addEventListener("click", function() {
      //click previos button
      if (position > 0) {
        //avoid slide left beyond the first item
        position -= 1;
        translateX(position); //translate items
      }
    });

    next[i].addEventListener("click", function() {
      if (position >= 0 && position < hiddenItems()) {
        //avoid slide right beyond the last item
        position += 1;
        translateX(position); //translate items
      }
    });
  }

  function hiddenItems() {
    //get hidden items
    let items = getCount(item, false);
    let visibleItems = slider.offsetWidth / 210;
    return items - Math.ceil(visibleItems);
  }
}

function translateX(position) {
  //translate items
  slide.style.left = position * -210 + "px";
}

function getCount(parent, getChildrensChildren) {
  //count no of items
  let relevantChildren = 0;
  let children = parent.childNodes.length;
  for (let i = 0; i < children; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      if (getChildrensChildren)
        relevantChildren += getCount(parent.childNodes[i], true);
      relevantChildren++;
    }
  }
  return relevantChildren;
}
    </script>
        <script src="js/script.js"></script>
   
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
    $('.navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(300);
    });
    
    smallScreenMenu();
    let temp;
    function resizeEnd(){
        smallScreenMenu();
    }

    $(window).resize(function(){
        clearTimeout(temp);
        temp = setTimeout(resizeEnd, 100);
        resetMenu();
    });
});


const subMenus = $('.sub-menu');
const menuLinks = $('.menu-link');

function smallScreenMenu(){
    if($(window).innerWidth() <= 992){
        menuLinks.each(function(item){
            $(this).click(function(){
                $(this).next().slideToggle();
            });
        });
    } else {
        menuLinks.each(function(item){
            $(this).off('click');
        });
    }
}

function resetMenu(){
    if($(window).innerWidth() > 992){
        subMenus.each(function(item){
            $(this).css('display', 'none');
        });
    }
}
    </script>
</body>
</html>