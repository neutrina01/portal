<?php
include_once "header.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Toy Addict - free website template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_container">
    <div id="templatemo_banner">
    </div>
    
    <div id="templatemo_menu">
	    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="" class="current">Templates</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Tutorials</a></li>
            <li class="last"><a href="#">Contact</a></li>
        </ul>
    </div>
    
    <div id="templatemo_content">
    	<div id="main_column">
           

            
			<?php
                        foreach ($GLOBALS['templatesItems'] as $value){
							echo '<div class="post_box">';
                            echo '<h2>'.$value['title'].'</h2>';
							echo '<ul class="post_info">';
                
							echo '<li class="post_date">'.$value['date'].'</li>';
							echo '<li class="post_author"><a href="#">by '.$value['owner'].'</a></li>';
							echo '<li class="post_comment"><a href="#">comment ( 124 )</a></li>';
							
							echo '</ul>';
							
							echo '<div class="post_body">';
							
							echo '<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>';
							
							echo '<p>This <a href="#">free CSS template</a> is provided by TemplateMo for you. Feel free to edit and apply this for your websites. Credit goes to <a href="http://www.photovaco.com" target="_parent">Free  Photos</a> for photos.</p>';
							echo '<p>'.$value['description'].'</p>';
							
							echo '</div>';
							echo '</div>';
							
						  /* echo ' <a href="'.$value['path'].'">'.$value['name'].'</a></li>'; */
                        }
                        ?>
			
 
            
		</div> <!-- end of main oclumn -->
        
        <div id="side_column">
                
                
                <div class="ads_250_250">
                	<a href="#"><img src="images/templatemo_ads_02.jpg" alt="image" width="250" height="250" /></a>                
                </div>
                
          <div class="cleaner_h30">&nbsp;</div>
                
          <div class="side_column_section">
                
                	<div class="ads_125_125 right_padding_10">
                    	<a href="#"><img src="images/templatemo_ads.jpg" alt="image" width="125" height="125" /></a>                    
                    </div>
                    
              <div class="ads_125_125">
                    <a href="#"><img src="images/templatemo_ads.jpg" alt="image" width="125" height="125" /></a>                    
              </div>
                    
          </div>
                
                <div class="cleaner_h30">&nbsp;</div>
                
                <div class="side_column_section">
                	
                    <div class="section_w125 fl">
                		<h3>Friends</h3>
                        <ul class="friends fl">
                        
                            <li><a href="#">Free CSS Templates</a></li>
                            <li><a href="#">Flash Templates</a></li>
                            <li><a href="#">Free Wordpress Themes</a></li>
                            <li><a href="#">Web Design Blog</a></li>
                            <li><a href="#">Best Flash Gallery</a></li>
                            <li><a href="http://www.photovaco.com" target="_blank">Free Photos</a></li>
                        
                        </ul>
					</div>                     
                    <div class="section_w125 fr">
                		<h3>Resources</h3>
                        <ul class="friends fl">
                            <li><a href="#">Proin faucibus</a></li>
                            <li><a href="#">Duis vestibulum</a></li>
                            <li><a href="#">Cras tincidunt</a></li>
                            <li><a href="#">Etiam auctor</a></li>
                            <li><a href="#">Morbi risus arcu</a></li>
                            <li><a href="#">Proin gravida</a></li>
                         </ul>
					</div>  
                     
                </div> 
                
                 <div class="cleaner_h30"></div>
                
              	<div class="side_column_section">
                    <h3>Photo Gallery</h3>
                
                	<ul class="gallery">
                    	<li><a href="#"><img src="images/templatemo_image_09.jpg" alt="image 1" /></a></li>
                        <li><a href="#"><img src="images/templatemo_image_04.jpg" alt="image 2" /></a></li>
                        <li><a href="#"><img src="images/templatemo_image_05.jpg" alt="image 3" /></a></li>
                        <li><a href="#"><img src="images/templatemo_image_06.jpg" alt="image 4" /></a></li>
                        <li><a href="#"><img src="images/templatemo_image_07.jpg" alt="image 5" /></a></li>
                        <li><a href="#"><img src="images/templatemo_image_08.jpg" alt="image 6" /></a></li>
                    </ul>

                    <p><a href="#">View all</a>
                      
                        </p>
              	</div>
                
                <div class="cleaner_h30">&nbsp;</div>
                
                <div class="side_column_section">
                
                   	<h3>Recent Posts</h3>
                    
                    <div class="recent_post">
                    	<h4><a href="#">Sed metus nisl, placerat vitae iaculis in</a></h4>
                    	Aliquam nec est quis felis venenatis imperdiet. Duis placerat luctus sem.
                    </div>
                    
                    <div class="recent_post">
                    	<h4><a href="#">Donec molestie aliquet nisi eu facilisis</a></h4>
                    In vitae placerat enim. Aenean elementum lectus eleifend a pellentesque lacus aliquet. 
                    </div>
                    
                    <div class="recent_post">
                    	<h4><a href="#">Proin  magna amet fermentum dignissim</a></h4>
                    Nulla gravida, lacus molestie convallis dolor sem suscipit nisl, ut pharetra erat leo in elit.
                    </div>
                    
                    <div class="recent_post">
                    	<h4><a href="#">Ut viverra tempus adipiscing</a></h4>
                    	Integer rutrum diam a est rhoncus non posuere libero condimentum. Sed quis aliquam magna.
                    </div>
                    
                    <div class="recent_post">
                    	<h4><a href="#">View more  posts</a></h4>
                    </div>
                    
                </div>

              </div> <!-- end of side column -->
        
        <div class="cleaner"></div>
    </div>

    <div id="templatemo_footer">
		Copyright © 2024 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->| 
        Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div> <!-- end of footer -->

</div>
<!-- templatemo 154 toy addict -->
<!-- 
Toy Addict Template 
http://www.templatemo.com/preview/templatemo_154_toy_addict 
-->
</body>
</html>