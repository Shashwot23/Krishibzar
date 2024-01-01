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





/* Basic styling for the body */
body {
   
    background-color: #f8f8f8;
}

/* Styling for the About Us section */
.about {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 40px;
}

/* Styling for the About Us content */
.about-content {
    flex: 1;
    padding-right: 40px;
    
}

.about-content h2 {
    font-size: 30px;
    color: #333;
    margin-bottom: 10px;
}

.about-content p {
    font-size: 20px;
    color: #333;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* Styling for the About Us image */
.about-image {
    flex: 1;
}

.about-image img {
    max-width: 70%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* CSS for mobile responsiveness */
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

    /* About section adjustments */
    .about {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .about-content {
        text-align: center;
        padding: 10px;
    }

    .about-image img {
        max-width: 100%;
    }

    /* Footer adjustments */
    .footer ul {
        text-align: center;
    }

    /* Social media adjustments */
    .social.media ul.list-inline li.list-inline-item {
        margin-right: 5px;
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
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="ourteam.php">Our Team</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="blog.php">Blog</a>
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




  
  <section class="about">
        <div class="about-content">
            <h2>WHO WE ARE</h2>
            <p> We are Krishibzar. We are here to help farmers/sellers to sell their product online by providing a direct link with the customers in this platform,eliminating intermediaries and reducing the cost of vegetables.</p>
            <p>We aim to change the way of the traditional way of shopping. You don't need to waste your time going to a local market, bargain with shopkeepers, and bring your bag. </p>
			<h3> With Motive: FOR CHANGE<h3>
        </div>
        <div class="about-image">
            <img src="Images/Website/logo (2).png" alt="About Us Image">
        </div>
    </section>









<footer class="footer">
		<ul>
			<li class="nav-item">
				<a class="nav-link" href="#">About Us</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="ourteam.php">Our Team</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="contactus.php">Contact Us</a>
			  </li><li class="nav-item">
				<a class="nav-link" href="blog.php">Blog</a>
			  </li>
		  
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