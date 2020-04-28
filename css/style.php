<style>

html{
	scroll-behavior: smooth;
}


*{ margin: 0; padding: 0; box-sizing: border-box; font-family: Segoe Print; }

 

.nav_style{
	background-color:#a29bfe!important;
}	
.nav_style a{ color: #fff; }

/*------Main header---*/
.main_header{
	height: 80vh;
	width: 100%;
	/*background-color: ;*/
}

#yes{
	border: none!important;
	/*color: #000;*/
	color: black!important;
	background: white;
	border-radius: 50%;
}

.rightside h1{
	font-size: 4rem;
}

.corona img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% {transform: rotate(0);}
	100% {transform: rotate(360deg);}
}

.leftside img{
	animation: cor 5s linear infinite;
}
@keyframes cor{
	0%
	{
		transform: scale(.75);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(.75);
	}
	100%
	{
		transform: scale(.75);
	}

}

/*-------Corona Updates----*/
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{color: #ff7675;}
.corona_update h1{font-size: 2rem; text-align: center;}

/*----About section---------*/

.sub_section{
	background-color: #fbfafd;
}

/*--------footer------*/
.footer_style{
	background-color: #000!important;
}

.footer_style p{
	margin: 0!important;
}


figcaption{
	font-size: 1.6rem!important;
}


/*<!-- ---------Scroll Top------- -->*/

#myBtn {
	/*display: none;*/
	position: fixed;
	bottom: 20px;
	right: 40px;
	z-index: 999;
	border: none;
	outline: none;
	background-color: #007;
	color: white;
	cursor: pointer;
	padding: 20px;
	border-radius: 10px;
}
#myBtn:hover {
	background: #606060;
}


/*---------Responsive--------*/




@media(max-width: 768px){
	.main_header{ height: 100vh; text-align: center; }


	.main_header h1{

		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
}


</style>


