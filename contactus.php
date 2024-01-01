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

    * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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


    <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Let's get in touch and explore more business opportunities</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="Images/Homepage/b4.jpeg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Location</label>
        <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'Koshi Pradesh') {
                var array = ['Bhojpur', 'Dhankuta', 'Illam', 'Jhapa', 'Khotang', 'Morang', 'Okhaldhunga', 'Pachthar', 'Sankhuwasabha', 'Solukhumbu', 'Sunsari', 'Taplejung', 'Tehrathum', 'Udayapur'];
            } else if (a === 'Madhesh Pradesh') {
                var array = ['Parsa', 'Bara', 'Rautahat', 'Sarlahi', 'Dhanusha', 'Siraha', 'Mahottari', 'Saptari'];
            } else if (a === 'Bagmati Pradesh') {
                var array = ['Sindhuli', 'Ramechhap', 'Dolakha', 'Bhaktapur', 'Dhading', 'Kathmandu', 'Kavrepalanchok', 'Lalitpur', 'Nuwakot', 'Rasuwa', 'Sindhupalchok', 'Chitwan', 'Makwanpur'];
            } else if (a === 'Gandaki Pradesh') {
                var array = ['Baglung', 'Gorkha', 'Kaski', 'Lamjung', 'Manang', 'Mustang', 'Myagdi', 'Nawalparasi East', 'Parbat', 'Syangja', 'Tanahun'];
            } else if (a === 'Lumbini Pradesh') {
                var array = ['Kapilvastu', 'Nawalparasi West', 'Rupandehi', 'Arghakhanchi', 'Gulmi', 'Palpa', 'Dang', 'Pyuthan', 'Rolpa', 'Eastern Rukum', 'Banke', 'Bardiya'];
            } else if (a === 'Karnali Pradesh') {
                var array = ['Western Rukum', 'Salyan', 'Dolpa', 'Humla', 'Jumla', 'Kalikot', 'Mugu', 'Surkhet', 'Dailekh', 'Jajarkot'];
            } else if (a === 'Sudurpashchim Pradesh') {
                var array = ['Kailali', 'Achham', 'Doti', 'Bajhang', 'Bajura', 'Kanchanpur', 'Dadeldhura', 'Baitadi', 'Darchula'];
            
            }

            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>

<div class="form-group row">
                                    <label for="states" >State</label>
                                    <div class="col-md-6">
                                        <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
                                            <option value="0">--Select State--</option>
                                            <option value="Koshi Pradesh">Koshi Pradesh</option>
                                            <option value="Madhesh Pradesh">Madhesh Pradesh</option>
                                            <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                            <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                            <option value="Lumbini Pradesh">Lumbini Pradesh</option>
                                            <option value="Karnali Pradesh">Karnali Pradesh</option>
                                            <option value="Sudurpashchim Pradesh">Sudurpashchim Pradesh</option>
                                            
                                        </select>
                                    </div>
                                </div>    
                                <div class="form-group row">
                                    <label for="states">District</label>
                                    <div class="col-md-6">
                                        <select name="district" id="district" class="form-control border border-dark">>
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                </div>

       
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
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
				<a class="nav-link" href="#">Contact Us</a>
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