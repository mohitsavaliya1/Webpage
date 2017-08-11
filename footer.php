		
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<footer class="footer">
        
    <div class="third">
        <ul>
            <div class="container">
                
                <div class="smallfunc mb-15">

                <div class="col-md-3 col-sm-12 col-xs-12">
                <h4><B>LATEST NEWS</B></h4>

                	<ul class="no_bul">
                        <li class="ar"><a href="#">Many desktop publishing packeges anb web pages
						</a></li>
						<li class="ar"><a href="#">Lorem Ipsum has been the industries standard dummy text ever since the 1500s
						</a></li>
						<li class="ar"><a href="#">Latin words, combined with a handful of model sentence structures
						</a></li>
                      </ul> 
                </div>
                
                <div class="col-md-3 col-sm-12 col-xs-12">
                <h4><B>RECENT PROJECTS</B></h4>
                
                	<div class="pics col-md-12 col-md-offset-1">
						<p><img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-1.jpg" />
						</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-2.jpg" />
                        </p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-3.jpg" /></p>
                    </div>

                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <h4><B>STAY IN TOUCH</B></h4>
				

				
                        <div class="socialmedia col-md-12 col-md-offset-1">
                        <nav style="">
                            <li><a href="#"><img alt="facebook" src="https://images.inkthemes.com/wp-content/themes/inkthemes/assets/imgs/facebook.png"> facebook</a>
                            </li>
                            <li><a href="#"><img alt="twitter" src="https://images.inkthemes.com/wp-content/themes/inkthemes/assets/imgs/twitter.png"> twitter</a>
                            </li> 
                        </nav>
                        </div>
                 </div>


<!--

<div id="wrap3 col-md-3 col-sm-12 col-xs-12">
				<div id="Widgets">
					<div id="full-width">
							
									<div class="col-md-3 col-sm-12 col-xs-12" id="socialmedia">
									<div class="widgettitle">									<h4><B>STAY IN TOUCH</B></h4>
									</div>
								<div id="widget3 col-md-3 col-sm-12 col-xs-12">
											<ul>
											<?php if ( function_exists ( 'ot_get_option' ) ) {
											         $fb=ot_get_option ( 'facebook' );
											         $tw=ot_get_option ( 'twitter' );
											         $li=ot_get_option ( 'linkedin' );
											         $rss=ot_get_option('rss');
											     } 
											?>
											<?php if($fb!="") {?>
											    <li><a href="<?php echo $fb ?>" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/Slices/facebook.jpg" /> Facebook</a></li>
											<?php }?>
											<?php if($tw!="") {?>
											   <li><a href="<?php echo $tw ?>" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/Slices/twitter.jpg" /> Twitter</a></li>
											<?php }?>
											<?php if($li!="") {?>
											   <li><a href="<?php echo $li ?>" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/Slices/linkedin.jpg" /> Linked In</a></li>
											<?php }?>
											<?php if($rss!="") {?>
											   <li><a href="<?php echo $rss ?>" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/Slices/rss.jpg" /> RSS</a></li>
											<?php }?>
											</ul>
										</div>
									</div>
								
									
							
						</div>	
		</div>
		</div>
-->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="secure">
                    <h4><B>SECURITY AND PRIVACY</B></h4>
                        <nav style="">
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>     
                        </nav>
                    </div>
                
                </div>

            </div>      
        </div>
        </ul>
    </div>    
     

          

 <div class="container">
	<div class="footer col-md-12 col-md-offset">
		<div class="row" style="background-image:url('<?php echo get_template_directory_uri(); ?>/Slices/footer-bg.jpg');width: 100%" >
	        
			<div class="col-md-8" style="float: left">   
	        	<nav style="" class="footer_nav">
		        	<a href="#" >Home</a>
			        <a href="#">News</a>
			        <a href="#">Gallery</a>
			        <a href="#">Pages</a>
			        <a href="#">Layouts</a>
			        <a href="#">Feauters</a>
			        <a href="#">Blog</a>
			        <a href="#">Contact Us</a>
	      		</nav>

	      	</div>
    	<div class="rowtwo">
     		<section class="copyright">
                <div class="container">
                    <p class="">
						 © 2011 rtPanel. All Rights Reserved. Desinged by rtCamp.              
                    </p>
                </div>
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/Slices/footer-logo.png" />
                </div>
            </section>
        </div>
		
  	</div>
  </div>
</div>   
<?php wp_footer(); ?>
</body>
</html>
        </footer>
