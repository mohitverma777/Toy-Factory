<?php 
    
    include('common_function.php');  
?>
 <?php cart()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Factory-product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar2.css">
    <link rel="stylesheet" href="css/footer.css">
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
      .section-p1 {
    padding: 0 80px 0 80px; 
}

#prodetails .single-pro-img{
    width: 40%;
    margin-right: 50px;
}
.small-img-group{
    display: flex;
    justify-content: space-between;
}
.small-img-col{
    flex-basis: 24%;
    cursor: pointer;
    margin: 6px;
}
#prodetails {
    display: flex;
    margin-top: 20px;
}
#prodetails .single-prp-details{
    width: 50%;
    padding-top: 30px;
}
#prodetails .single-prp-details h4{
    padding: 40px 0 20px 0;
}
#prodetails .single-prp-details h3{
    font-size: 20px;
}
#prodetails .single-prp-details select{
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
}
#prodetails .single-prp-details input{
    width: 50px;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}
#prodetails .single-prp-details input:focus{
    outline: none;
}
#prodetails .single-prp-details button{
    border: none;
    background: #088178;
    border-radius: 4px;
    color: #fff;
    padding: 10px;
    margin-right: 5px;
    cursor: pointer;
}

#prodetails .single-prp-details span{
    line-height: 25px;
    font-size: 14px;
}


@media (max-width:477px){
    #prodetails{
        display:flex;
        flex-direction: column;
    }
    #prodetails .single-pro-img{
        width: 100%;
        margin-right: 0px;
    }
    #prodetails .single-prp-details{
        width: 100%;
        padding-top: 0px;
    }

}</style>
</head>
<body>
<?php 
    include('navbar2.php');  
?>    
    <section id="prodetails" class="section-p1">
        <?php
        getproductdetails();
        ?> 
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <div class="pro-container">
            
            <?php                     
               getnavproducts();
            ?>
        </div>
    </section>
    <?php 
    include('footer.php');  
?>  
    <script>
        var mainimg=document.getElementById('mainimg')
        var smallimg=document.getElementsByClassName('small-img') 

        smallimg[0].onclick=function(){
            mainimg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            mainimg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            mainimg.src=smallimg[2].src;
        }
        smallimg[3].onclick=function(){
            mainimg.src=smallimg[3].src;
        }
        smallimg[4].onclick=function(){
            mainimg.src=smallimg[4].src;
        }
        smallimg[5].onclick=function(){
            mainimg.src=smallimg[6].src;
        }
    </script>
    <script src="js/script.js"></script>
</body>
</html>