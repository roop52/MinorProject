<?php 

$con=mysqli_connect("localhost","root","","minorproject");
include 'navbar.php';
$sql= "select * from product where Category='Shirt' ";
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

</head>
<body>
<br><br>
<!-- Product -->
<!-- Cart Section -->


      <div class="pro1 cart">

                  <center>
                    <div class="row p-2 ">

                      <div class="headline text-center ">
                                <h2 class="pb-2 position-relative d-inline-block text-center text-3xl font-bold pt-5
                                section-title ">Shirt's</h2></div><br>

                      

                          <div class="shop-content product-list">

                              <?php
                          while ($row=mysqli_fetch_assoc($r)) 
                          { 

                                      ?>

                              <div class="product product-box col-xl-4 col-lg-3 mb-2">
                                <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
                                <h2 class="product-title"><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2><br>
                                <a style="color: black;font-weight: unset;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a><br><br>
                                
                                <div class="rp">
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-solid fa-star rating"></i>
                                <i class="fa-sharp fa-solid fa-star-half-stroke rating"></i><br>
                                <span class="price"><i class="fa-solid fa-indian-rupee-sign"></i></span>&nbsp;<?php echo $row['SP']; ?></div>
                                <i class="fa-sharp fa-solid fa-cart-plus add-cart"></i>
                              </div>
                              <?php

                        } //while loop bracket closed
                          ?>    

                        </div>

              </div>
              </div>
           </div><br><br><br>
                           

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