@extends('main')
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			background-image: url("images/url.png");
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 33%;
			margin-left: -150px;
			margin-top: -100px;
			color: #000000;
			font-family:courier;
			
			
		}

		a, a:visited {
			text-decoration:none;
		}

		h3 {
			font-size: 40px;
			margin: 16px 0 0 0;
			font-weight: bold;

		}
		p{
			font-family:courier;
			font-size: 20px;
			color: #FFFFFF;
			float: right;


			
		}
		me{
			text-align: right;
		}
		img{
			position: absolute;
			margin-left: -350px;
			margin-top: -140px
		}
	</style>
</head>
<body>
	

	<div class="welcome ">	

		<h3>Mohamed Elkashif,</h3><br/><br/>
		<p>I am a junoir software engineer,I am a student at my final year at Faculty of Engineering - Computer departement,Ain Shams university</p>
		<img src="images/mee.jpg" class="img-circle" alt="Cinque Terre" width="304" height="336" >
	</div>
	</div>



	<div class="footer navbar-fixed-bottom" role="navigation">
	<div class="container">
        <div class="navbar-right">

	<ul class="nav navbar-nav">
			
<li><a href="https://www.twitter.com/MohamedElkashif" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
<li><a href="https://www.facebook.com/muhammedelkashif" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
<li><a href="https://plus.google.com/u/0/100036068955451315871" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a></li>
		</ul>	
		
       </div>
       </div>


	
</div>
		
 

  
	

</body>
</html>
