<?php
 
 $err = '';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password  = $_POST['password'];

    if($email == 'ugcleancities@gmail.com' and $password =='Cleanugcities123'){
        header('location:header.php');
    }else{
        $err = "invalid password or email address";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Webpage | design</title>
		<link rel="stylesheet" type="text/css" href="assignment.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" href="w3css.css">
	<link rel="shortcut icon" type="x-icon/image" href="images/log.png">
	<script src="jquery.min.js"></script>
</head>
<style>
	.link{
		display: none;
	}
	.resp-nav{
		display:none;
	}
	.w3-sidenav{
		display: none;
	}
	@media screen and (max-width:800px) {
		.nav{
			display: none;
		}
		.resp-nav{
			display:block;
		}
	}
	.animate-left ,.w3-animate-zoom ,.w3-animate-right{
		animation-duration:3s;
	}
	div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 1px solid #777;
  box-shadow: 1px 1px 6px 1px;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.li li{
	list-style-type: none;
}
</style>
<body>
<div class="menu_bar">
<div class="nav navbar navtop">
	<div class="top_menu">
		<i class="fa fa-envelope"> <a href=""> ugcleancities@gmail.com</a></i>
		<i>|</i>
		<i class="fa fa-phone">+256 781761311</i>
	</div>
	<div class="media">
		<span style="color:white"><?php echo $err?></span><br>
		<form  method="post" action="#">
			<div class="row">
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" name="email" placeholder="email address" class="form-control">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<input type="submit" name="submit" value="login" class="btn btn-primary">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="down_menu w3-white">
	<ul class="nav navbar">
		<img src="images/logo.png" id="img"></a>
		<li><a href="#home"  class="btn btn-success" >Home</a></li>
		<li class="drop">
			<a  class="btn btn-success">About Us</a>
				<div class="menu">
					<a href="#obj">Our Main Objectives</a><br>
					<a href="#idea">Problem description</a><br>
					
			    </div>
		</li>
		<li id="otherlinks" ><a class="btn" href="#contact" >Contant us</a></li>
		<li id="otherlinks" ><a href="#inno" class="btn"> Innovators</a></li>
		<li id="otherlinks" class="btn"><a href="#faqz">FAQS</a></li>
		<li><a  class="btn btn1" style="color:white" onclick="alert('Mobile Money : 0781761311')">Donate to us</a></li>
	</ul>
</div>
<div class="resp-nav">
	<div class="w3-green w3-card-2">
		<div class="d-flex">
			<div class="div ml-3">
				<h2>Uganda clean cities</h2>
			</div>
			<div class="div mt-2" style="margin-left:auto;">
				<button class="btn" onclick="opennav()">☰</button>
			</div>
		</div>
		<div class="row w-50 ml-2">
			<form action="#" method="post">
				<?php echo $err?>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="email" name="email" placeholder="email address" class="form-control">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<input type="submit" name="submit" value="login" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<ul  class="w3-sidenav modal w3-animate-left li" style="width:50%">
		<div class="w3-closebtn">X</div>
		<img src="images/logo.PNG" style="border-radius:100%" ></a>
		<li><a href="#home"  class="btn" >Home</a></li><br>
		<li><a href="#obj" class="btn">Our Main Objectives</a></li><br>
		<li><a href="#idea" class="btn">Problem description</a></li><br>
		<li><a class="btn" href="#contact" >Contant us</a></li><br>
		<li><a href="#inno" class="btn"> Innovators</a></li><br>
		<li ><a class="btn" href="#faqz">FAQS</a></li>
		<li><a  class="btn" style="color:white" onclick="alert('Mobile Money : 0781761311')">Donate to us</a></li>
	</ul>
</div>
</div><br><br><br><br><br>
    <div class="imagebk" id="home">
		<div class="w3-animate-left">
			<div class="w3-center">
				</div>
				<div id="obj"></div>
			</div>
			<!-- <h2 style="margin-top:200px;color:white">"It takes everyone to protect everyone against plastic pollution"</h2> -->
    </div>  
	
   				 <!-- 			 Middle of the website -->
    
</div>

<div class="contianer" id="idea" >
	<div class="w3-center" >
		<h1>Objectives</h1>
		<div class="row">
				<div class="col-sm-4 contianer w3-animate-left animate-left" style="z-index:-1;">
					<div class="w3-card-2 w3-round h-100 p-2">
						<ol type="1">
							<li>To establish environmental -friendly plastic waste disposal solutions and reduce plastic littering across all cities in Uganda</li>
							<li>To promote and encourage environmental awareness and discussion of pollution and associated issues</li>
							<li>To promote maximum reuse and recycling of materials </li>
						</ol>
					</div>
				</div>
			
				<div class="col-sm-4 container w3-animate-zoom" style="z-index:-1;">
					<div class="w3-card-4 w3-round h-100 p-2">
						<ol>
							<li>To Minimize the environmental impacts associated with waste management.</li>
							<li>To create employment opportunities for the unemployed youth within the country.</li>
							<li>To develop clean cities in Uganda which will act as plastic free models for the rest of the world.</li>
						</ol>
					</div>
				</div>
			
				<div class="col-sm-4 container w3-animate-right" style="z-index:-1;">
					<div class="w3-card-4 w3-round h-100 p-2">
						<ol>
							<li>To reduce the likelihood of disease outbreaks in city slums.</li>
							<li>To create  collaborative partnerships with both plastic producing  and recycling companies in the country.</li>
							<li>To find a viable solution for single- use plastic which are often rejected  by recycling companies.</li>
						</ol>
					</div>
				</div>
		    </marquee>
		</div>
	</div>
</div>
<div class="jumbotron mt-5 contianer w3-round-large" >
	<header><h2><b>Problem</b></h2></header>
	<div class="w3-contianer">
		<p>Currently, Industries  in Uganda produce  up to 600 metric tons of plastic waste a day and only about 6% of that waste is collected back  from the communities. (Planet Buyback, 2021). </p>
		<p>Plastic waste management practices in Uganda are still ineffective especially among the urban population yet these urban areas are hotspots for plastic wastes since urban consumers are particularly accustomed to the convenience of on-the-go and home-delivery consumption</p>
		<p>Kampala Capital City Authority (KCCA) records show that about 28,000 tons of waste is collected and delivered to a landfill every month. This represents approximately 40% of the waste generated in the city.  So “ Where does the 60% of the cities waste go?”.  Which is a similar scenario in the 10 recently opened  cities  of Gulu, Arua, Mbarara, Lira, Mbale, Fort Portal, Jinja. The country has a huge challenge of dealing with the overly littered plastic wastes throughout these cities</p>
		<p>This has  resulted to not only  increased accumulation of PET plastic in the environment, but has also negatively impacted the environment for example the  degradation of landscapes and blockage of urban canals and rivers. Increased risk of flooding and the emergence of waterborne diseases in stagnant waters are ultimate consequences.</p>
		<p>A few recycling companies have tried to collect these wastes from the environment but don’t have very effective systems to ensure extensive collection of the plastic waste. They are also selective as they only purchase virgin plastic leaving large quantities of non virgin plastic out in the environment.</p>
		<p>Many organizations that have tried to arise awareness with in the population with hope of achieving collective action have failed to engage individuals in actively managing their plastic waste.</p>
		<p>As, big-name brands continue to produce more PET, there is a continued rapid accumulation of plastic waste in the country this will continue to cause several public health and environmental concerns incase quick action is not undertaken.</p>
	</div>
</div>
<div class="contianer mt-3" id="faqz">
	<div class=" p-3">
		<div class="w3-center">
			<h2>FAQs</h2>
		</div>
		<ol>
			<li><a href="#"> How can we prevent plastic pollutions in Uganda ?</a></li>
			<li> <a href="#"> Is it possible to end plastic pollution in Uganda ?</a></li>
			<li>What causes plastic pollution ?</li> 
			<li>Where aare the headquatres of ugcleancities located  ?</li>
		</ol>
	</div>
</div>

<div class="row mb-2" style="margin:auto;" id="inno" >
	<div class="col-sm-2"></div>
	<div class="col-sm-4">
		<div class="innovators">
			<div class="gallery" style="z-index:1;">
				<a target="_blank" href="images/img2.jpg">
				  <img src="images/sera.JPG" alt="" width="600" height="400">
				</a>
				<div class="desc">Kwerit Sarah Chebijira</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="innovators" >
			<div class="gallery" style="z-index:1;">
				<a target="_blank" href="images/img2.jpg">
				  <img src="images/matia.jpg" alt="" width="600" height="400">
				</a>
				<div class="desc">Matia Nyanzi</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="row mx-auto">
	<div class="col-sm-6">
		<div class="w3-card-4 w3-round-large w-75">
			<div class="" style="margin:auto;">
				<img src="images/img2.jpg" class="w-75 img-fluid " style="border-radius:100%;margin:auto;" alt="" >
			</div>
			<div class="w3-center">
				<p>Nyanzi Matia</p>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="w3-card-4 w3-round-large w-75 ">
			<div class="" style="margin:auto;">
				<img src="images/img2.jpg" class="w-75 img-fluid" style="border-radius:100%;margin:auto;" alt="" >
			</div>
			<div class="w3-center">
				<p>Nyanzi Matia</p>
			</div>
		</div>
	</div>
</div> -->
 <footer class="" id="contact">
 	<div class="div">
 		<ul>
 			<p>Contact Us</p>
 			<li><i class="fa fa-envelope"></i><a href="www.gmail.com">ugcleancities@gmail.com</a></li>
 			<li><i class="fa fa-phone"></i>+256 708269312</li>
 			<li><i class="fa fa-whatsapp"></i>+256 781761311</li>
 			<li><i class="fa fa-globe"></i> <a href="https://ugcleancities.herokuapp.com">ugcleancities.herokuapp.com</a></li>
 		</ul>
 	</div>
 	<div class="div">
 		<ul>
 			<p>Aims </p>
 			<li>Conservation of climate</li>
 			<li>promoting agriculture</li>
 			<li>Provie employment opportunities</li>
 		</ul>
 	</div>
 	<div class="div">
 		<ul>
 			<p>Location</p>
 			<li><i class="fa fa-map-marker"></i> Lira university - Uganda </li>
			 <li>Phone  :  0471 660714</li>
 			<li class="fa fa-globe"><a href="https://lirauni.ac.ug/"> www.lirauni.ac.ug</a></li>
 		</ul>
 	</div>
 	<div class="div">
 		<ul id="icons">
 			<p>Our Social media Handles</p>
			 <li><i class="fa fa-facebook"></i></li>
 			<li><i class="fa fa-twitter"></i></li>
 			<li><i class="fa fa-linkedin"></i></li>
 			<li><i class="fa fa-youtube"></i></li>
 		</ul>
 	</div>
 </footer>

 <script>
	 function opennav(){
		document.getElementsByClassName("w3-sidenav")[0].style.display="block";
	 }
	 $("document").ready(function(){
		 $(".w3-closebtn").click(function(){
			$(".w3-sidenav").hide()
		 })
		 
		
	 })
 </script>
</body>
</html>