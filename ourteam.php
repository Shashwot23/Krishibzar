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
	  
   
/* Styling for the Contact Us section */
.contact-us {
    display: flex;
    justify-content: space-around;
    padding: 40px;
}

/* Styling for individual team members */
.team-member {
    flex: 1;
    max-width: 300px;
    text-align: center;
    background-color: white;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px  rgba(0, 0, 0, 0.1);
    opacity: 0; /* Start with 0 opacity */
    transform: translateY(20px); /* Move the profiles up initially */
    animation: fadeSlideIn 0.5s forwards; /* Apply the animation */
}

/* Animation for the team member profiles */
@keyframes fadeSlideIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Delay each profile's animation */
.team-member:nth-child(1) {
    animation-delay: 0.2s;
}

.team-member:nth-child(2) {
    animation-delay: 0.4s;
}

.team-member:nth-child(3) {
    animation-delay: 0.6s;
}


/* Styling for the Contact Us section2 */
.contact-us2 {
    display: flex;
    justify-content: space-around;
    padding: 40px;
}

/* Styling for individual team members2 */
.team-member2 {
    flex: 1;
    max-width: 300px;
    text-align: center;
    background-color: white;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 10px;
    opacity: 0; /* Start with 0 opacity */
    transform: translateY(20px); /* Move the profiles up initially */
    animation: fadeSlideIn2 0.15s forwards; /* Apply the animation */
}

/* Animation for the team member profiles */
@keyframes fadeSlideIn2 {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.team-member2:nth-child(4) {
    animation-delay: 0.8s;
}
.team-member2:nth-child(5) {
    animation-delay: 0.10s;
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

/* CSS for mobile responsiveness */
@media (max-width: 768px) {
    /* Navbar adjustments */
    .navbar ul {
        flex-direction: column;
        text-align: center;
    }

    .navbar ul li {
        margin-right: 0;
        margin-bottom: 10px;
    }

    .navbar ul li a {
        display: block;
    }

    /* Team member section adjustments */
    .contact-us, .contact-us2 {
        flex-direction: column;
        align-items: center;
    }

    .team-member, .team-member2 {
        margin-bottom: 20px;
    }

    /* Footer adjustments */
    .footer ul {
        text-align: center;
    }

    .social.media ul.list-unstyled.list-inline.social.text-center {
        margin-top: 10px;
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
					<a class="nav-link" href="aboutus.php">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Our Team</a>
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


   
  <h2 style="text-align:center">Our Team(Nirvana)</h2>
    <section class="contact-us">
        <div class="team-member">
        <img src="Images/teamphoto/prashant.jpg" alt="Team Member 1" style="width:100%">
            <h3>Prashant Karki</h3>
            <p>CEO & Founder(Krishibzar)</p>
            <p>Email: 7prashantkarki@gmail.com</p>
        </div>
        <div class="team-member">
        <img src="Images/teamphoto/shashwot.jpg" alt="Team Member 2" style="width:100%">
            <h3>Shashwot Thapa</h3>
            <p>Managing Director</p>
            <p>Email: shashwot@gmail.com</p>
        </div>
        
    <div class="team-member">
        <img src="Images/teamphoto/shital.jpg" alt="Team Member 3" style="width:100%">
            <h3>Shital Khatri</h3>
            <p>Project Manager</p>
            <p>Email: Shital@gmail.com</p>
        </div>
        
        
    </section>
    <section class="contact-us2">
    <div class="team-member2">
        <img src="Images/teamphoto/abishek.jpg" alt="Team Member 4" style="width:100%">
            <h3>Abhishek Yakha</h3>
            <p>General Manager</p>
            <p>Email: Abhishek@gmail.com</p>
        </div>
        <div class="team-member2">
        <img src="Images/teamphoto/pawan.jpg" alt="Team Member 5" style="width:100%">
            <h3>Pawan Bhandari</h3>
            <p>Project Designer</p>
            <p>Email: Pawan@gmail.com</p>
        </div>
        </section>





    


        <footer class="footer">
		<ul>
			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">About Us</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Our Team</a>
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