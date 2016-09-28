<?php
$array = [];

class blogPost {
	public $title;
	public $text;
	public $description;
	public $date;
	public $author;

	public function __construct($title, $text, $description, $date, $author) {
		$this->title = $title;
		$this->text = $text;
		$this->description = $description;
		$this->date = $date;
		$this->author = $author;
	}

	public function getTitle() {
		return $this->title;
	}
}


$array['my-php-blog'] = new blogPost('My PHP Blog','text', 'This is my blog post about...', '28th Sept 2016', 'Luke Winsley');
$array['my-java-script-blog'] = new blogPost('My Java-Script Blog', 'text', 'This is my blog post about...', '28th Sept 2016', 'Luke Winsley');
$array['my-html-blog'] = new blogPost('My HTML Blog', 'text', 'This is my blog post about...', '28th Sept 2016', 'Luke Winsley');
?>





<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/mainbody.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">

	<title> Luke Winsley </title>
</head>
<div id="wrapper">	
	<div id="navbar">
		<div id="logo"> <img src="images/logo.png" alt="Logo"> </div>
		<a href="index.php"> Home </a>
		<a href="aboutme.html"> About Me </a>
		<a href="portfoliopage.html"> Portfolio </a>
		<a href="contactpage.html"> Contact </a>
		<a href="bloglistpage.php"> Blog</a>
	</div>
	
	<div id="header">
	<h1> Luke Winsley </h1>
	<div id="heading"> <h4> Traninee Software Development | Portfolio </h4> </div>
	</div>
	
	<div id="maincontainer">
		<div id="maincontent">
			<h3> Welcome to my website! </h3>
			<div id="maintext"> <p> This website has been created by myself (Luke Winsley) to be used to hold a portfolio of work that I have created and be able to showcase this work as a snippet of the actual thing. The main use of the website is for future employers to be able to see examples of work I have undertaken. <br> <br>

The website also contains the pages about me and contact. The about me page contains details about myself so that you can find out a bit about me and my background. The contact page contains my contact details if you would like to get in contact with me.</p> </div>
		</div>
	
	<div id="mainimages"> <img src="images/pulteneybridge.jpg" alt="Pulteney Bridge, Bath"> 
	<img src="images/lake.jpg" alt="Lake surrounded with trees"> 
	</div>
	<div id="homepageblog">
		<?php
			foreach($array as $key => $value) {
				echo '<div class="blogsnippet" id="top"> <h5>' . $value -> title . '</h5> <h6>' . $value -> date . ' - ' . $value -> author . '</h6> <br><br>  <p>' . $value->description . ' <a href="articalpage.php?blog=' . $key . '"> Read More...</a> </p> </div>';
//					'<div><a href=articalpage.php?blog=' . $key . '>' . $value->getTitle() . '</a></div>';
			}
		?>
	</div>
	</div>
</div>		
	<div id="footer">
		<div id="footercontent"> <p> <a href="mailto:lukewinsley@gmail.com"> Email: lukewinsley@gmail.com </a> <br>
			<a href="https://mobile.twitter.com/LukeWinsley"> Twitter: @LukeWinsley </a> </p>
		</div>
		<div id="copyright"> Copyrighted By Luke Winsley </div>
	</div>
<body>
</body>
</html>