<?php
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Raccoon AI - Home</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

</head> 

<body>    
    <header class="header fixed-top">	 
	       
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
	                <div class="site-logo"><a class="navbar-brand" href="index.php"><img class="logo-icon me-2" src="assets/images/new_logo/favicon.ico" alt="logo"><span class="logo-text">Raccoon<span class="text-alt"> AI</span></span></a></div>    
					<!-- <img src="assets/images/img/slt_logo.png" width="30" height="30" alt="logo">   -->
				</div><!--//docs-logo-wrapper-->
	            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
	
					<a href="login.php" style="width: 150px; text-align: center;" class="btn btn-primary">Log In</a>&nbsp&nbsp	
					<a href="register.php" style="width: 150px; text-align: center;" class="btn btn-primary">Register</a>	

					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> -->
			            <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li> -->
		                <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li> -->
		            </ul><!--//social-list-->
		            <!-- <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap-5-documentation-template-for-software-projects/" class="btn btn-primary d-none d-lg-flex">Download</a> -->
	            </div><!--//docs-top-utilities-->
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
    
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
		
		<?php
                            if(isset($_SESSION['status']))
                            {
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);    
                            }

                        ?>
	    <div class="container">
			<img src="assets/images/img/sltnew.png" width="300" height="125" alt="logo">
		    <h1 class="page-heading single-col-max mx-auto">Raccoon AI</h1>
		    <div class="page-intro single-col-max mx-auto">This is a business intelligence platform that runs machine learning workloads and get results in different formats. This platform is initially developed by SLT Research and Development team as a initial version</div>
		    <!-- <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
             </div> -->
	    </div>
    </div><!--//page-header-->
	
   <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">

				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-map-signs"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Datasets</span>
							    </h5>
							    <div class="card-text">
									This is where you can find datasets that derive you to a analysis to use for your business 							    </div>
							    <a class="card-link-mask" href="docs-page1.html#section-1"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-tools"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Model and Tool Gallery</span>
							    </h5>
							    <div class="card-text">
									Test our built in models before you walk in. See the power.
								</div>
							    <a class="card-link-mask" href="docs-page1.html#section-2"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">

										<i class="fas fa-arrow-down"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Case Study</span>
							    </h5>
							    <div class="card-text">
									This is providing the case studies where you can adopt your data into decisions.
								</div>
							    <a class="card-link-mask" href="docs-page1.html#section-5"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->


				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-box fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">User Guide</span>
							    </h5>
							    <div class="card-text">
									The complete guide to our system. Our user guide will give you top to bottom insight to our system </div>
									<a class="card-link-mask" href="docs-page1.html#section-3"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-cogs fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">API Ref</span>
							    </h5>
							    <div class="card-text">
									This is our tool store 
								</div>
							    <a class="card-link-mask" href="docs-page1.html#section-4"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->




				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-laptop-code"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Contact Us</span>
							    </h5>
							    <div class="card-text">
									We are here to help you with any trouble of your platform developemnt</div>
							    <a class="card-link-mask" href="docs-page1.html#section-6"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <!-- <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-tablet-alt"></i>
							        </span>
							        <span class="card-title-text">Mobile</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-7"></a>
						    </div>
					    </div>
				    </div> -->
				

				    <!-- <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-lightbulb"></i>
							        </span>
							        <span class="card-title-text">FAQs</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-9"></a>
						    </div>
					    </div>
				    </div> -->


			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
   </div><!--//page-content-->

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <!-- <h3 class="mb-2 text-white mb-3">Launch Your Software Project Like A Pro</h3> -->
		    <!-- <div class="section-intro text-white mb-3 single-col-max mx-auto">Want to launch your software project and start getting traction from your target users? Check out our premium <a class="text-white" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Bootstrap 5 startup template CoderPro</a>! It has everything you need to promote your product.</div> -->
		    <div class="pt-3 text-center">
			    <!-- <a class="btn btn-light" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Get CoderPro<i class="fas fa-arrow-alt-circle-right ml-2"></i></a> -->
		    </div>
	    </div>
    </section><!--//cta-section-->

    <footer class="footer">

	    <div class="footer-bottom text-center py-5">
		    
		    <ul class="social-list list-unstyled pb-4 mb-0">
			    <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
	            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li> -->
	        </ul><!--//social-list-->
	        
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <!-- <small class="copyright">Designed with <i class="fas fa-heart" style="color: #b0facc;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small> -->
            
	        
	    </div>
	    
    </footer>
       
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script> 

</body>
</html> 
