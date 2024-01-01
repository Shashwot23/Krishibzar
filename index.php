

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Krishibzar</title>
	
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      
	<!--font aswome link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--css file-->
<link rel="stylesheet" href="Style/Krishibzar.css">
</head>
<style>
	 /* CSS styling for the navbar */
	 .navbar {
      background-color: #000;
      padding: 3px;
      display: flex;
      align-items: center;
	  justify-content:center;
      
    }

    .logo {
      margin-right: 8px;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
	  justify-content:center;
      align-items:center;
    }

    .navbar ul li {
	
		
		
		list-style: none;

      margin-right: 40px;
	  color:#fff

    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
	  align-items: flex-end;
    
	  
   
    
	
	}
	.card-img-top{
		width: 100%;
		height:200px;
		object-fit: contain;
	}

	.card {
  margin-bottom: 20px;
  padding: 20px ;
  
}

	/* CSS styling for the video section */
    .video-section {
      display: flex;
      
      height: 853px;
      
	

    }
	

	/* CSS styling for the footer */
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .footer ul {
      list-style-type: none;
      padding: 0;
    }

    .footer ul li {
      display: inline-block;
      margin-right: 10px;
    }

    .footer ul li a {
      color: #fff;
      text-decoration: none;
    
    
    }
	.copyright a {
		color:#fff;
	}

	/* Styles for contact section */
    .contact-section {
      text-align: center;
      margin-top: 50px;
    }
    
    .contact-button {
      padding: 10px 20px;
      background-color: #e91e63;
      color: #fff;
      font-size: 18px;
      border: none;
      cursor: pointer;
    }

/* Container for the cards */
.card-container {
            display: flex;
            justify-content: space-between;
			position: relative;
        }

        /* Styles for the individual cards */
        .card {
            width: 30%;
            padding: 0px;
			position: relative;
            
        }

        /* Center the content within each card */
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Styles for the buttons */
        .card-button {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            
        }

        /* Style for the file input */
        .file-input {
            margin-top: 10px;
        }
/* Animation for the text description */
.description {
            animation: fadeLoop 6s infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
        }

        @keyframes fadeLoop {
            0%, 100% {
                opacity: 0;
            }
            20%, 80% {
                opacity: 1;
            }
        }

/* Additional styles for mobile responsiveness */
@media (max-width: 768px) {
            /* Navbar adjustments */
            .navbar {
                padding: 5px;
            }

            .navbar ul {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul li {
                margin-right: 0;
                margin-bottom: 10px;
            }

            /* Video section adjustments */
            .video-section {
                height: 220px;
            }

            /* Card container adjustments */
            .card-container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 100%;
                margin-bottom: 20px;
            }

            /* Footer adjustments */
            .footer ul {
                text-align: center;
            }
        }


    </style>


<body >
	
	<!--navbar-->
	<div class="container-fluid p-0">
		<!--first child-->
		<nav class="navbar navbar-expand-lg bg-dark">
			<div class="container-fluid">
				<img src="Images/Homepage/krishi.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:80px;">	
			  
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="aboutus.php">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="ourteam.php">Our Team</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="Blog/index.php">Blog</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="auth/BuyerLogin.php">Buyer Login</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="auth/FarmerLogin.php">Farmer Login</a>
				  </li>
				  
				</ul>
				
			  </div>
			</div>
		  </nav>

	</div>
	
	
	<div class="video-section">
    <video autoplay muted loop>
  <source src="portal_files/home.mp4" type="video/mp4">
  
 
</video>
  </div>



	  <div class="bg-light">
	  <h1 style="font-weight: bold;color:green; text-align:center">KRISHIBZAR: A VITAL PART OF COMMUNITY AND NATION </h1>
	<p style="font-weight: bold;color:black; text-align:center">Sell or shop our online farmers products in effective way</p>

	  </div>


	  <div class="card-container">
        <!-- Card for the Buyer -->
        <div class="card">
            <div class="card-content">
			<img src="Images/Website/sell.jpg" class="card-img-top" alt="a">
		<div class="card-body">
		  <h5 class="card-title">Sell on Krishibzar</h5>
		  <p class="card-text">-----------------</p>
		  <a href="auth/FarmerRegister.php" class="btn btn-primary">FARMER REGISTER</a>
		  <a href="auth/FarmerLogin.php" class="btn btn-primary">FARMER LOGIN</a>
		</div>
		</div>
	</div>

        <!-- Card for the Farmer -->
        <div class="card">
            <div class="card-content">
			<img src="Images/Website/buy.jpg" class="card-img-top" alt="b">
		  <div class="card-body">
			<h5 class="card-title">Buy products from Krishibzar</h5>
			<p class="card-text">----------------</p>
			<a href="auth/BuyerRegistration.php" class="btn btn-primary">BUYER REGISTER</a>
			<a href="auth/BuyerLogin.php" class="btn btn-primary">BUYER LOGIN</a>
		  </div>
		  </div>

</div>


		<!-- Text description animation -->
        <div class="description">
            <p>Welcome to our website! Explore Nepal best buying and selling Experience.</p>
        </div>
    </div>





	  
	  </div>
	</div>
</div>
</div>



    


 


    </div>
    </div>






<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Homepage/basket2.jpg" class="d-block w-100" height="200" alt="a">
	  
    </div>
    <div class="carousel-item">
      <img src="portal_files/same1.jpg" class="d-block w-100" height="200" alt="b">
	  
    </div>
    
	  

  </div>
</div>





   







	  <footer class="footer">
		<ul>
			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">About Us</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="ourteam.php">Our Team</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="contactus.php">Contact Us</a>
			  </li><li class="nav-item">
				<a class="nav-link" href="blog.php">Blog</a>
			  </li><li class="nav-item">
        <a class="nav-link" href="review.php">Review&Rating</a>
			  </li><li class="nav-item">
		</ul>

		<div class="social media">
			
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			
		
		
		<div class="copyright">
					  <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ">
						  
						   <p class="h6">Copyright &copy; 2023 <a class="text-green ml-2" href="https://www.krishibzar.com" target="_blank">krishibzar</a></p>
						   <p class="h6">Developed by: <a class="text-green ml-2" href="https://www.google.com" target="_blank">Team Nirvana</a></p>
					  </div>
		</div>
		
	  </footer>
	
	  <!-- Rest of the page content -->
	
	</body>
	</html>