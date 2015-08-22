<--HELP FILE TEMPLATE FOR PRESSFOLIO-->

PRESSFOLIO
Created: 02/08/2009
By: Jasmin Krhan
Contact Info: www.jasminweb.net and mrjasmin_90@hotmail.com 

Thank you for purchasing my theme. If you have any questions that are beyond the scope of this help file, please feel free to email, via my user page contact form. Thanks so much!

--TABLE OF CONTENTS--

A) HTML Structure 
B) CSS Files
C) Javascript 
D) Additional 


----------------------------------------------------------------------------------------------------------

A) HTML Structure

This theme is a fixed layout with two columns. 
The theme has 5 static pages: Contact, Home, Portfolio, Blog, About, single-portfolio, and single-blog.

Faq:

Question: How do I change images in the slider ?

Answer: Open home.html and go to line 133. Every image in the slider is wrapped up with a "<li>" element. To ad more slides just add a "<li><img src="images/ex3.png" height="204" width="604" alt="ex"/></li>" and change "ex3.png" to the name of your image.


Question: How do I change the portfolio images ?

Answer: Open portfolio.html and find line 129. Evere portfolio item is wrapped with a div called "blogbox": If you want to add a portfolio item, than simply add a div with the class blogbox..

To change the image find these lines and change the url to the wanted.

<img src="images/img2.jpg" class="portfolioimage" alt="portfolioimage"/>

Question: How do I add a new testimonial ?

Answer: Open portfolio.html and find line 160 and the div called "blogcontainer". To add a new testimonial, simpy add a new list item(li) and the testimonial inside.


-----------------------------------------------------------------------------------------------------------------------------

B) CSS

I'm using five CSS files in this theme. The first one is a generic reset file. Many browser interpret the default behavior of html elements differently. By using a general reset CSS file, we can work round this. This file also contains some general styling, such as anchor tag colors, font-sizes, etc. Keep in mind, that these values might be overridden somewhere else in the file. 

The second one is style.css and contains the website styling. If you want to change anything you have open the style.css file.

The theme is a fixed layout with two columns. The main content is wrapped up with a div called #leftcontent_first and the sidebar is wrapped up with a div called #rightcontent_first". The sidebaritems is wrapped up with a div class called .sidebarbox. So if you want to add a new sidebaritem, just create a div with a class called "sidebarbox".

The other three css-files are the css containing the color variations. To change the color theme of the site, please open every static html page and find these lines:  "<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />". Change "style" to the desired color scheme. 

These color schemes are avaible:

silver
purple 
green
and the standard blue

-------------------------------------------------------------------------------------------------------------------------------

C) Javascript

This theme imports three Javascript files.

  1) jQuery
  2) jcarousel
  3) easing

1) jQuery is a Javascript library that greatly reduces the amount of code that you must write. 
2) the monitor slider is using jcarousel to slide the images.
3) easing is used for the effects in the slider
	
If you want to change something in the slider, please find these lines in every html page.
As you can the jquery code intializes two divs for the slider. One for the text content and one for the images. You can change the 
speed of the slider and the easing mode. You can find a list of different easing options here: http://gsgd.co.uk/sandbox/jquery/easing/


<script type="text/javascript">



$(function() {
    $(".image").jCarouselLite({
        

btnNext: ".next",
        
btnPrev: ".prev",
		
width: 251,
		
visible: 1,
		
speed:1000,
		
easing: "easeOutBounce"
		
		
    

});
	
	 

$("#featuredtext").jCarouselLite({
        

btnNext: ".next",
        
btnPrev: ".prev",
		
visible: 1,
		
speed:1000,
		
vertical: true 
			
    
});
	
}
);


</script>

----------------------------------------------------------------------------------------------------------------------------------

D) Additional

This theme uses a flickr feed to show images on the homepage and a php script to send emails.

1. How do make the contact form send emails to my own email ?

Answer: Simply open mail.php and find line 15. Change "mrjasmin_90@hotmail.com to your own address.

This theme uses a flickr feed to show images on the homepage.


2. How do I make the flickr feed show my pictures from my account ?

Answer: Simply open home.html and find line 228. 
You will find this: <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=4&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=40201646@N05"></script>

Change "40201646@N05" to your own flickr ID.

You can get your flickr id here: http://idgettr.com/

-------------------------------------------------------------------------------------------------------------------------------------------------

Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section. 

Jasmin Krhan