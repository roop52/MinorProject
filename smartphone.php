<?php
include 'navbar.php';
$sql= "select * from product where Category='Smartphone' ";
$r= mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce Website</title>

    <!--
      - favicon
    -->
    <!-- <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon"> -->
  
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="style.css">
  
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
  #single1 {
  text-align:center;
  }
  #single1 .pro{
  width:23%;
  min-width: 250px;
  padding:10px 12px;
  border: 1px solid #cce7d0;
  margin:25px 0;
  /* height: 450px; */
  position: relative;
  }
  #single1 .pro img {
    width: 100%;
    border-radius:10px;
  
  }
  #single1 .pro-container {
    display:flex;
    max-width: 70%;
    margin:10px auto;
    flex-wrap:wrap;
    /* justify-content:space-around; */
    gap:30px;
  }
  #single1 .pro .des{
    text-align:start;
    padding:10px 0;
  }
  #single1 .pro .des span{
    color:#6066063;
    font-size:12px;
  }
  #single1 .pro .des h5{
    padding-top:7px;
    color:#1a1a1a;
    font-size:14px;
  }
  #single1 .pro .des i{
    font-size:12px;
    color :rgb(243, 181, 25);
    margin-bottom:80px;
  }
  #single1 .pro .des h4{
    padding-top:7px;
    font-size:15px;
    font-weight:700;
    color:#088178;
    position:absolute;
    bottom:20px;
  }
  #single1 .pro .cart{
    width: 40px;
    height: 40px;
    line-height:40px;
    border-radius:50px;
    background-color:#e8f6ea;
    /* font-weight:500; */
    color:#088178;
    position: absolute;
    bottom:20px;
    right:10px;
  }
  

</style>
</head>
<body>

<br><br>
<!-- Product -->
<!-- Cart Section -->

<section id="single1" class="section-p1">
<h2>Smartphone</h2>
  <div class="pro-container product-list">
  <?php
              $sql= "select * from product where Category='Smartphone' ";
              $r= mysqli_query($con,$sql);
              while ($row=mysqli_fetch_assoc($r)) 
                  { 

                        ?>

<div class="pro">
<img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
<div class="des">
<span><a style="color: black;font-weight: unset;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></span>
<h5><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<h4>Rs-<?php echo $row['SP']; ?></h4>
</div>
<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
</div>
<?php
                  } 
                          ?>
  </div>
</section>

<!-- footer -->
<?php
include 'footer.php';
?>
  
      <!--
    - custom js link
  -->
  <script src="script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>