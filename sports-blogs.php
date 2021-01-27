<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Sports Blogs | Mwaani Boys' High School</title> 

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
						<li class="nav-item"><a class="nav-link" href="departments.php">Departments</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Subjects </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="languages.php">Languages' </a>
								<a class="dropdown-item" href="humanities.php">Humanities' </a>
								<a class="dropdown-item" href="sciences.php">Sciences' </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
						<li class="nav-item active dropdown">
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
			<h1>Sports Blogs<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_single.jpg" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
								<span class="day">30</span>
								<span class="month">Nov</span>
							</div>
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
								<span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>
							<div class="blog-title">
								<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
							</div>
							<div class="blog-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
								<blockquote class="default">
									Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.
								</blockquote>
								<p>Phasellus tristique commodo libero, eget dignissim turpis dignissim quis. Morbi sit amet laoreet nibh, gravida scelerisque felis. Phasellus ultrices pellentesque ligula et viverra. Integer elementum, risus et tempor ultricies, libero turpis pellentesque massa, at facilisis erat nunc hendrerit erat. Praesent rhoncus, augue nec condimentum porta, magna dui volutpat augue, vitae blandit magna quam in massa. Fusce a rhoncus diam. Proin nec lacinia nibh. Praesent sed nisi sed purus dictum laoreet.</p>
								<p>Duis at tortor augue. Ut et justo consequat, facilisis lectus facilisis, tincidunt massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel vestibulum urna. Fusce sed magna posuere, vehicula odio vitae, tempor arcu. Pellentesque eget felis sed eros maximus elementum ultrices a elit. Sed ac sodales enim.</p>
							</div>							
						</div>
					</div>
					
					<div class="blog-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Tom Jobs</a></h3>
							<h5>CEO at <a href="#">Mwaani Boys' High School</a></h5>
							<p class="author_det">
								Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus omnis saperet docendi nec, eos ea alii molestiae aliquand.
							</p>
						</div>
						<div class="author-desc">
							<img src="images/author.jpg" alt="about author">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="blog-comments">
						<h4>Comments (3)</h4>
						<div id="comment-blog">
							<ul class="comment-list">
								<li class="comment">
									<div class="avatar"><img alt="" src="images/avatar-01.jpg" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">John Smith</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">February 22, 2015</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
										</div>
									</div>
								</li>
								<li class="comment">
									<div class="avatar"><img alt="" src="images/avatar-02.jpg" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">John Smith</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">February 22, 2015</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<div class="avatar"><img alt="" src="images/avatar-03.jpg" class="avatar"></div>
											<div class="comment-container">
												<h5 class="comment-author"><a href="#">Thomas Smith</a></h5>
												<div class="comment-meta"><a href="#" class="comment-date link-style1">February 14, 2015</a><a class="comment-reply-link link-style3" href="#respond">Reply »</a></div>
												<div class="comment-body">
													<p>Labores pertinax theophrastus vim an. Error ditas in sea, per no omnis iisque nonumes. Est an dicam option, ad quis iriure saperet nec, ignota causae inciderint ex vix. Iisque qualisque imp duo eu, pro reque consequ untur. No vero laudem legere pri, error denique vis ne, duo iusto bonorum.</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="comments-form">
						<h4>Leave a comment</h4>
						<div class="comment-form-main">
							<form action="#">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
										</div>
									</div>
									<div class="col-md-12 post-btn">
										<button class="hover-btn-new orange"><span>Post Comment</span></button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
                </div><!-- end col -->
				<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="#">
								<div>
									<input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
									<input id="searchsubmit" value="Search" type="submit">
								</div>
							</form>
						</div>
					</div>
					<div class="widget-categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li><a href="#">Football</a></li>
							<li><a href="#">Basketball</a></li>
							<li><a href="#">Rugby</a></li>
							<li><a href="#">Short Put</a></li>
							<li><a href="#">Javelline</a></li>
							<li><a href="#">Cricket</a></li>
						</ul>
					</div>
					<div class="widget-tags">
						<h3 class="widget-title">Search Tags</h3>
						<ul class="tags">
							<li><a href="#"><b>business</b></a></li>
							<li><a href="#"><b>jquery</b></a></li>
							<li><a href="#">corporate</a></li>
							<li><a href="#">portfolio</a></li>
							<li><a href="#">css3</a></li>
							<li><a href="#"><b>theme</b></a></li>
							<li><a href="#"><b>html5</b></a></li>
							<li><a href="#"><b>mysql</b></a></li>
							<li><a href="#">multipurpose</a></li>
							<li><a href="#">responsive</a></li>
							<li><a href="#">premium</a></li>
							<li><a href="#">javascript</a></li>
							<li><a href="#"><b>Best jQuery</b></a></li>
						</ul>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <?php include('collaborators.php'); ?>

    <?php include('footer.php'); ?>

</body>
</html>