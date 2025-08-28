<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .price {
            color: #e91e63;
            font-weight: bold;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
	
</head>
<body>
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="Admin12.php">ADMIN</a>
      <a href="chatbot1.html">CHATBOTS</a>
      

   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<br><br>
<h1>Tour and Travel Data</h1>
	<div id="full">
		<div  style="background-image: url('images/img-6.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="banner"><br><br><br><br><br><br>
		
			<div style="background-color: rgba(255,255,255,0.9);">
			<table>
				<tr>
					<th width="10%" height="50px">ID</th>
                     <th width="10%" height="50px">Name</th>
                     <th width="10%" height="50px">email</th>
                     <th width="10%" height="50px">phone</th>
                     <th width="10%" height="50px">address</th>
                     <th width="10%" height="50px">location</th>
                     <th width="10%" height="50px">guest</th>
                     <th width="10%" height="50px">arrivals</th>
					 <th width="10%" height="50px">leaving</th>

				</tr>
				<?php
                 $q1="select * from book_form";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$id=$row['id'];
                 	$name=$row['name'];
                 	$email=$row['email'];
                 	$phone=$row['phone'];
                   	$address=$row['address'];
					$location=$row['location'];
					$guests=$row['guests'];
                     	$arrivals=$row['arrivals']; 
                     	$leaving=$row['leaving']; 
                    
                ?>

				<tr>
					<td width="10%" height="50px"><center><?php echo $id; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $email; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $phone; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $address; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $location; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $guests; ?><center></td>
					<td width="10%" height="50px"><center><?php echo $arrivals; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $leaving; ?></center></td>

				</tr>
				<?php
				  }
				?>
			</table>
		</center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
  <!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sagorcse38@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> dhaka, Bangladesh - 1215  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>mr. manish kumar singh</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
</body>

</html>