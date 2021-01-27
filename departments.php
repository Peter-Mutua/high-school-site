<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Departments | Mwaani Boys' High School</title>  

    
    <?php include('styling.php'); ?>

    <?php include('modal.php'); ?>

    <?php include('loader.php'); ?>

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php">
                    <!-- <img src="images/logo.png" alt="" /> -->
                    Mwaani Boys' High School
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="departments.php">Departments</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Subjects </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="languages.php">Languages' </a>
                                <a class="dropdown-item" href="humanities.php">Humanities' </a>
                                <a class="dropdown-item" href="sciences.php">Sciences' </a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blogs </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="academic-blogs.php">Academic Blogs </a>
                                <a class="dropdown-item" href="sports-blogs.php">Sports Blogs </a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Register</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Departments<span class="m_1">Below are the departments in our School.</span></h1>
		</div>
	</div>
	
    <div id="pricing-box" class="section wb">
        <div class="container">
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Sciences</h3>
                            </span>
                            <span class="price-value">15<span class="month"> qualified</span> <span> Teachers </span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>Mathematics</li>
                                <li>Biology</li>
                                <li>Chemistry</li>
                                <li>Physics</li>
                                <li>C & CS</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new orange"><span>Take Tour</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Humanities</h3>
                            </span>
                            <span class="price-value">25<span class="month">qualified</span><span> Teachers </span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>Geography</li>
                                <li>HIstory</li>
                                <li>C.R.E</li>
                                <li>Hindu</li>
                                <li>Islamic</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new orange"><span>Take Tour</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Tech & Craft</h3>
                            </span>
                            <span class="price-value">20<span class="month"> qualified</span> <span> Teachers </span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>Compoter Studies</li>
                                <li>Business Studies</li>
                                <li>Agriculture</li>
                                <li>French Studies</li>
                                <li>Chinese Studies</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new orange"><span>Take Tour</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
		</div>
    </div><!-- end section -->

    <?php include('testimonials.php'); ?>

    <?php include('collaborators.php'); ?>

    <?php include('footer.php'); ?>

</body>
</html>