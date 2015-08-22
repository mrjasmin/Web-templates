<--HELP FILE TEMPLATE FOR NICEFOLIO-->

Nicefolio
Created: 06/07/2009
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

This theme is a fixed layout with two columns. This theme uses the 960 grid system. You can find out more about the 960 grid system here: http://960.gs/
The theme has 5 static pages: Contact, Index, Portfolio, Blog, and About.

Faq:

Question: How do I change images in the slider ?

Answer: Find this lines: "<li><img src="images/sample.jpg" width="310" height="185" alt="" /></li>" and change "images/sample" to the url of the wanted image.

Question: How do I change the portfolio images ?

Answer: Open portfolio.html and find line 113. Evere portfolio item is wrapped with a div called "postbox": If you want to add aportfolio item, than simply
add a div with the class portfoliobox.

To change the image find these lines and change the url to the wanted.

<img src="images/sample.png" class="portfolioimage" alt="image"/>

Question: How do I change the contact information on the contactpage ?

Answer: Open contact.php and scroll down to line 146 and change the text below to your own text.

"Vestibulum quis enim ac pede pharetra accumsan.
<br/><br/>
+123456789<br/>
+123456789<br/><br/>
ceo@domainname.com"
-----------------------------------------------------------------------------------------------------------------------------

B) CSS

I'm using four CSS files in this theme. The first one is a generic reset file. Many browser interpret the default behavior of html elements differently. By using a general reset CSS file, we can work round this. This file also contains some general styling, such as anchor tag colors, font-sizes, etc. Keep in mind, that these values might be overridden somewhere else in the file. 


The second file is the 960 grid system css file and the third is text.css which is a 960.gs css file.
The fourth one is style.css and contains the website styling. If you want to change anything you have open the style.css file.

If you would like to edit a specific section of the site, simply find the appropriate label in the CSS file, and then scroll down until you find the appropriate style that needs to be edited. 

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

Answer: Simply open index.html and find go to line 121. 
You will find this: <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=5&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=8710861@N07"></script>
Change "8710861@N07" to your own flickr ID.

You can get your flickr id here: http://idgettr.com/

-------------------------------------------------------------------------------------------------------------------------------------------------

Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section. 

Jasmin Krhan