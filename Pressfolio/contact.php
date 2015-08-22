<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Pressfolio professional html theme</title>
    
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <script src="js/jquery-1.2.3.min.js" type="text/javascript" charset="utf-8"></script> 
    <script src="js/jquery.flow.1.0.js" type="text/javascript" charset="utf-8"></script> 

<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 
 <!--[if lt IE 7]>
        <script type="text/javascript" src="http://www.gamefreaks.se/js/unitpngfix.js"></script>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen" />
<![endif]--> 

<!--[if IE 7]>

<link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />

<![endif]-->

<script type="text/javascript">

$(function() {
 $("#twitter_div").jCarouselLite({
        btnNext: ".next2",
        btnPrev: ".prev2",
		visible: 2,
		speed:1000,
		vertical: true 
			
    });

});

</script>

<script type="text/javascript">

$(function() {
 $("#blogcontainer").jCarouselLite({
        btnNext: ".next3",
        btnPrev: ".prev3",
		visible: 1,
		speed:1000,
		vertical: true 
			
    });

});

</script>




</head>
    
<body id="contactpage">
    
<div id="header">
<div class="wrapper">
  
<div id="logobox">
  
<a href="home.html"><img src="images/logo.png" id="logo" alt="image"/></a>
  
</div>

<div class="call">

<h4>CALL NOW: (510) 504-2610</h4>

<p>

We look forward to every call, we are available 24/7
email me : info@domainname.com'

</p>

</div>

</div>
</div>
  
<div id="menuwrap">

 <div class="wrapper">
  
 <ul>
    
	<li><a href="home.html">Home</a><p>Whats new</p></li>
    <li><a href="blog.html">Blog</a><p>Read my blog</p></li>
    <li><a href="portfolio.html">Portfolio</a><p>My works</p></li>
    <li><a href="about.html">About</a><p>All about me</p></li>
    <li><a href="contact.php" id="active_contact">Contact</a><p>Get in touch</p></li>
 
 </ul>
 
 <a href="#"><img src="images/rss2.png" id="rssicon" alt=""/></a>


</div>
</div>



<div id="slider2">

<div id="sliderwrap2">

<h2>Get in touch</h2>

</div>



</div>
	
	<div id="content">
	<div class="wrapper">

	<div id="leftcontent_first">
    <h3 class="h3contact">Contact me</h3>
    
    <?php include 'mail.php' ; ?> 
   
	</div>  
  

	<div id="rightcontent_first">
	
    <div id="sidebar">
        
<form id="searchbar" action="">   

<input type="submit" name="submit" id="submitted" class="submitbutton" value="Search"/> 
<input type="text" name="captcha" id="searchblog" /> <br />

</form>    
        
<div class="sidebarbox">
<h3>Categories</h3>

<ul>

<li><a href="#">Wordpress</a></li>
<li><a href="#">Photoshop</a></li>
<li><a href="#">Tutorials</a></li>

</ul>

</div>  


<div class="sidebarbox">
<h3>Latest blogposts</h3>

<ul>

<li><a href="#">Wordpress</a></li>
<li><a href="#">Photoshop</a></li>
<li><a href="#">Tutorials</a></li>

</ul>

</div> 

<div class="sidebarbox">
<h3>Follow</h3>

<img src="images/flickr_48.png" class="follow" alt=""/>
<img src="images/google_48.png" class="follow" alt=""/>
<img src="images/designfloat_48.png" class="follow" alt=""/>
<img src="images/feedburner_48.png" class="follow" alt=""/>
<img src="images/rss_48.png" class="follow" alt=""/>

</div> 
             

	</div>
	</div>
	</div>
	</div>
	
<div id="footer">

<div class="wrapper">
<ul><li>2009 Portfoliopress by <a href="http://www.jasminweb.net">Jasminweb</a> This theme is developed for <a href="http://www.themeforest.com"><b>themeforest</b></a></li>
<li>Powered by <a href="http://www.wordpress.org"> <b>Wordpress</b></a></li></ul>
</div>

</div>

</body>
</html>