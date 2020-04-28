<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'  ?>
	<?php include 'css/style.php'  ?>
</head>
<body onload="fetch()">

<!-- ----------Navbar------ -->
    <nav class="navbar navbar-expand-lg nav_style fixed-top p-3">
			  <a class="navbar-brand pl-5" href="#"><img src="cor.webp" height="25px;">C<span class="corona"><img src="c.png" height="30px;"></span>VID-19<img src="cor.webp" height="25px;"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="yes">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      
			      <li class="nav-item">
			        <a class="nav-link" href="#aboutid">about</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#symptomsid">symptoms</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#preventionid">prevention</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="worldcoronalive.php">WorldCoronaLive</a>
			      </li> 
			      <li class="nav-item">
			        <a class="nav-link" href="#contactid">contact</a>
			      </li>
			      
			    </ul>
			    
			  </div>
    </nav>

<!-- ----Header----- -->
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="cor.webp" height="450">
			</div>
		</div>
		
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona"><img src="c.png" height="70px;"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!-- -------World corona latest update---- -->

<section class="corona_update sub_section container-fluid">
	<div class="mb-5">
		<h3 class="text-uppercase text-center">Covid-19 Live Updates Of The World</h3>
	</div>

	<div class="table-responsive">

		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>
		
	</div>
	
</section>

<!-- ----About section----- -->
<div class="container-fluid  pt-5 pb-5 badge-secondary" id="aboutid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12">
			<img src="coro1.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12 text-center">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
            Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.
            To date, there are no specific vaccines or medicines for COVID-19.
            Treatments are under investigation, and will be tested through clinical trials.
            </p>
			<p>How it spreads
            The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
            You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.
            </p>
			
			<a href="https://www.google.com/search?q=coronavirus&rlz=1C1PRFI_enIN883IN883&oq=corona+viru&aqs=chrome.1.69i57j0l4j69i61j69i60l2.11547j0j7&sourceid=chrome&ie=UTF-8#wptab=s:H4sIAAAAAAAAAONgVuLVT9c3NMwySk6OL8zJecTozS3w8sc9YSmnSWtOXmO04eIKzsgvd80rySypFNLjYoOyVLgEpVB1ajBI8XOhCvHsYhLwSE3MKckIKUpNLMlNzSspXsQqlpxflJ-XWJZZVFqsUAKXAAAEZq0IiwAAAA"><button class="btn-lg btn-primary">Learn More</button></a>
		</div>
	</div>
</div>

<!-- ----------Corona Symptoms-------- -->
<div class="container-fluid pt-5 pb-5" id="symptomsid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>Corona-Virus (COVID-19) Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="cough.png" class="img-fluid">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="fever.png" class="img-fluid">
				<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="breathp.png" class="img-fluid">
				<figcaption>Breath Problem</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="headache.png" class="img-fluid">
				<figcaption>Headache</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="throat.png" class="img-fluid">
				<figcaption>Throat</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="weakness.png" class="img-fluid">
				<figcaption>Weakness</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!-- ----------Prevention Again Corona-Virus------------ -->

<div class="container-fluid sub_section  pt-5 pb-5" id="preventionid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>Prevention Again Corona-Virus (COVID-19).</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/stayhome.png" class="img-fluid">
				<figcaption>(1) Stay At Home</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/clean.png" class="img-fluid">
				<figcaption>(2) Clean & Disinfect</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/washhand.png" class="img-fluid">
				<figcaption>(3) Clean Your Hands</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/avoidcd.png" class="img-fluid">
				<figcaption>(4) Avoid Close Contact</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/mask.png" class="img-fluid">
				<figcaption>(5) Wear a facemask</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="img/cover.png" class="img-fluid">
				<figcaption>(6) Cover Coughs & Sneezes</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!-- ----------Contact Us-------------- -->

<div class="container-fluid badge-primary pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>Contact Us ASAP</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				
				<form action="insertcontact.php" method="POST">
					
					  <div class="form-group">
					    <label>username</label>
					    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
					  </div>
					  <div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
					  </div>
					  <div class="form-group">
					    <label>mobile</label>
					    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
					  </div>

					  <div class="form-group">
					  	<label>Select Symptoms</label><br>

					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
					  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
					  	</div>
					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
					  		<label class="custom-control-label" for="customcheckbox2">Fever</label>
					  	</div>
					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
					  		<label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
					  	</div>
					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
					  		<label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
					  	</div>
					  	
					  </div>


					  <div class="form-group">
					    <label>Example textarea</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
					  </div>

					  <button type="submit" name="submit" class="btn btn-danger">Submit</button>

                </form>
			</div>
		</div>
	</div>
</div>

<!-- ---------Cursor Top------ -->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!-- -------------Footer------- -->\

<footer>
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright by (MIRANA) Ab. Ahad Khan</p>
	</div>
	
</footer>





<script type="text/javascript">

mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}


function fetch(){
	$.get("https://api.covid19api.com/summary",

            function (data){
            	// console.log(data['Countries'].length);
            	var tbval = document.getElementById('tbval');

            	for(var i=1; i<(data['Countries'].length); i++){
            		var x = tbval.insertRow();
            		x.insertCell(0);

            		tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            		tbval.rows[i].cells[0].style.background = '#7a4a91';
            		tbval.rows[i].cells[0].style.color = '#fff';

            		x.insertCell(1);
            		tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            		tbval.rows[i].cells[1].style.background = '#4bb7d8';


            		x.insertCell(2);
            		tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            		tbval.rows[i].cells[2].style.background = '#7a4a91';


            		x.insertCell(3);
            		tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            		tbval.rows[i].cells[3].style.background = '#f36e23';


            		x.insertCell(4);
            		tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            		tbval.rows[i].cells[4].style.background = '#4bb7d8';


            		x.insertCell(5);
            		tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            		tbval.rows[i].cells[5].style.background = '#9cc850';


            		x.insertCell(6);
            		tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
            		tbval.rows[i].cells[6].style.background = '#f36e23';
            	}
            }
		);
}

	
</script>

</body> 
</html>




