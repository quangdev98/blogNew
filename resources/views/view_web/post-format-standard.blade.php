@extends('view_web.master')
@section('titlePage', 'Post-Format-Standar')
@section('content')
		<div class="breadcrumb-wrapper">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{route('business')}}">Business</a></li>
						<li class="breadcrumb-item active" aria-current="page">Post Name</li>
					</ol>
					<!-- End of .breadcrumb -->
				</nav>
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .breadcrumb-container -->

		<!-- Banner starts -->
		<section class="banner banner__single-post banner__standard">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="post-title-wrapper">
							<div class="btn-group">
								<a href="{{ route('business') }}" class="cat-btn bg-color-blue-one">TECHNOLOGY</a>
							</div>

							<h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">VR Is the Use of Computer
								Technology to Create a Simulated Environment.
							</h2>
							<div class="post-metas banner-post-metas m-t-xs-20">
								<ul class="list-inline">
									<li><a href="#" class="post-author post-author-with-img"><img 
												src="{{ asset('styleWeb/images/author/01.png') }}" alt="author">Ashley Graham</a></li>
									<li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
									<li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li>
								</ul>
							</div>
							<!-- End of .post-metas -->
						</div>
						<!-- End of .post-title-wrapper -->
					</div>
					<!-- End of .col-lg-6 -->

					<div class="col-lg-6">
						<img src="{{ asset('styleWeb/images/post/latest-post.jpg') }}" alt="" class="img-fluid" width="600" height="600">
					</div>
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->

		<!-- post-single-wrapper starts -->
		<div class="post-single-wrapper p-t-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<main class="site-main">
							<article class="post-details">
								<div class="single-blog-wrapper">
									<div class="post-details__social-share mt-2">
										<ul class="social-share social-share__with-bg social-share__vertical">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-behance"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<!-- End of .social-share__no-bg -->
									</div>
									<!-- End of .social-share -->

									<p> For those of us who want to say thank you to our moms, it’s not always easy to
										put those big feelings in words. Which is where Dribbble comes in.</p>
									<p>These eight shots crystallize the hard work moms put into keeping their kids
										alive, happy, and healthy. They might give you the inspiration you need for
										filling out that card—or stand alone for your mom’s interpretation.</p>

									<figure>
										<img src="{{ asset('styleWeb/images/post-single-gallery/post-single-img-1.jpg') }}" alt="img">
										<figcaption>Drawn for an insurance company</figcaption>
									</figure>

									<p>Moms are the ones who bandage our boo-boos when we’re little and continue to take
										care of us as we get older—often sacrificing their own needs so they can help
										with ours. Cruising on a bike to help heal our injuries is the most mom thing
										one can do.</p>
									<div class="add-container m-b-xs-60">
										<a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner.jpg') }}" alt="add one"
												class="img-fluid"></a>
									</div>
									<blockquote>
										<p>
											If you’ve been waiting for an invitation, this calligraphy is it.
											Commissioned
											by
											Facebook, this is a hand-lettered design for a poster. Quote is Facebook
											Building 8
											VP’s
											Regina Dugan—and mine.
										</p>
									</blockquote>

									<p>Moms are the ones who bandage our boo-boos when we’re little and continue to take
										care of us as we get older—often sacrificing their own needs so they can help
										with ours. Cruising on a bike to help heal our injuries is the most mom thing
										one can do.</p>

									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and
										babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button
										on
										your
										jeans.</p>

									<h3>Here Come The Moms In Space</h3>

									<ul class="row gallery text-center">
										<li class="col-lg-6">
											<figure>
												<img src="{{ asset('styleWeb/images/post-single-gallery/post-single-gallery-6.jpg') }}"
													alt="img">
												<figcaption>Drawn for an insurance company</figcaption>
											</figure>
										</li>
										<li class="col-lg-6">
											<figure>
												<img src="{{ asset('styleWeb/images/post-single-gallery/post-single-gallery-7.jpg') }}"
													alt="img">
												<figcaption>Drawn for an insurance company</figcaption>
											</figure>
										</li>
									</ul>
									<!-- End of .gallery -->

									<p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are
										the ones who make sure things happen—from birth to school lunch.</p>
									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button on your jeans.</p>
									<p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are
										untouchable. They’re elegant, smart, beautiful, kind…everything we want to be.
										At 29 years old, my favorite compliment is being told that I look like my mom.
										Seeing myself in her image, like this daughter up top, makes me so proud of how
										far I’ve come, and so thankful for where I come from.</p>
									<h3>Want To See More Dribbble Shots?</h3>
									<p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are
										the ones who make sure things happen—from birth to school lunch.</p>
									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button on your jeans.</p>
									<p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are
										untouchable. They’re elegant, smart, beautiful, kind…everything we want to be.
										At 29 years old, my favorite compliment is being told that I look like my mom.
										Seeing myself in her image, like this daughter up top, makes me so proud of how
										far I’ve come, and so thankful for where I come from.</p>

									<figure class="post-media">
										<video class="plyr-post"
											poster="{{ asset('styleWeb/images/video-post/post-format-video-1.html') }}"
											id="video-player-1" playsinline controls>
											<source src="{{ asset('videos/post-format-video-1.mp4') }}" type="video/mp4">
										</video>
										<figcaption>
											Drawn for an insurance company
										</figcaption>
									</figure>


									<p>Mother’s Day is this Sunday, folks!</p>
									<p>These eight shots crystallize the hard work moms put into keeping their kids
										alive,
										happy,
										and
										healthy.
										They might give you the inspiration you need for filling out that card—or stand
										alone
										for
										your mom’s
										interpretation.</p>

									<ul class="masonry-grid gallery">
										<li class="grid-item col-lg-4">
											<figure>
												<img src="{{ asset('styleWeb/images/single-masonry-gallery/gallery-1.png') }}" alt=""
													class="img-fluid w-100">
											</figure>
										</li>
										<li class="grid-item col-lg-4">
											<figure>
												<img src="{{ asset('styleWeb/images/single-masonry-gallery/gallery-2.png') }}" alt=""
													class="img-fluid w-100">
											</figure>
										</li>
										<li class="grid-item col-lg-4">
											<figure>
												<img src="{{ asset('styleWeb/images/single-masonry-gallery/gallery-3.png') }}" alt=""
													class="img-fluid w-100">
											</figure>
										</li>
										<li class="grid-item col-lg-4">
											<figure>
												<img src="{{ asset('styleWeb/images/single-masonry-gallery/gallery-4.png') }}" alt=""
													class="img-fluid w-100">
											</figure>
										</li>
									</ul>
									<!-- End of .gallery -->

									<p>For those of us who want to say thank you to our moms, it’s not always easy to
										put
										those
										big
										feelings
										in
										words. Which is where Dribbble comes in.</p>
									<h3>Moms On The Move</h3>

									<p>Drawn for an insurance company, this animation of a mom with a first-aid kit and
										a
										flashing
										red light exemplifies the mother’s job.</p>
									<p>Moms are the ones who bandage our boo-boos when we’re little and continue to take
										care of
										us
										as we get older—often sacrificing their own needs so they can help with ours.
										Cruising
										on a
										bike to help heal our injuries is the most mom thing one can do.</p>

									<p>Moms are the ones who bandage our boo-boos when we’re little and continue to take
										care of
										us
										as we get older—often sacrificing their own needs so they can help with ours.
										Cruising
										on a
										bike to help heal our injuries is the most mom thing one can do.</p>

									<blockquote>
										<p>
											If you’ve been waiting for an invitation, this calligraphy is it.
											Commissioned
											by
											Facebook, this is a hand-lettered design for a poster. Quote is Facebook
											Building 8
											VP’s
											Regina Dugan—and mine.
										</p>
									</blockquote>

									<p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are
										the
										ones
										who
										make sure things happen—from birth to school lunch.</p>

									<figure class="post-media">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315"
												src="http://www.youtube.com/embed/U3v5yMF1hTs?origin=http://axilthemes.com/"
												allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<figcaption>
											Drawn for an insurance company
										</figcaption>
									</figure>


									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and
										babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button
										on
										your
										jeans.</p>

									<h3>Unordered List Style?</h3>
									<ul class="unordered-list-two">
										<li>The refractor telescope uses a convex lens to focus the light on the
											eyepiece.
										</li>

										<li>The reflector telescope has a concave lens which means it bends in. It uses
											mirrors
											to
											focus the image that you eventually see.</li>

										<li>Collimation is a term for how well tuned the telescope is to give you a good
											clear
											image of what you are looking at. You want your telescope to have good
											collimation
											so
											you are not getting a false image of the celestial body.</li>

										<li>Aperture is a fancy word for how big the lens of your telescope is. But it’s
											an
											important word because the aperture of the lens is the key to how powerful
											your
											telescope is. Magnification has nothing to do with it, its all in the
											aperture.
										</li>

										<li>Focuser is the housing that keeps the eyepiece of the telescope, or what you
											will
											look
											through, in place. The focuser has to be stable and in good repair for you
											to
											have
											an
											image you can rely on.</li>
										<li>Mount and Wedge. Both of these terms refer to the tripod your telescope sits
											on.
											The
											mount is the actual tripod and the wedge is the device that lets you attach
											the
											telescope to the mount.</li>
									</ul>

									<p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are
										the
										ones
										who
										make sure things happen—from birth to school lunch.</p>

									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and
										babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button
										on
										your
										jeans.</p>

									<figure class="post-media">
										<div class="embed-responsive embed-responsive-16by9" id="player">
											<iframe
												src="https://player.vimeo.com/video/76979871?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
												allowfullscreen allow="autoplay"></iframe>
										</div>
										<figcaption>
											Drawn for an insurance company
										</figcaption>
									</figure>


									<p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are
										untouchable.
										They’re
										elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my
										favorite
										compliment is being told that I look like my mom. Seeing myself in her image,
										like
										this
										daughter up top, makes me so proud of how far I’ve come, and so thankful for
										where I
										come
										from.</p>

									<h3>Want To See More Dribbble Shots?</h3>

									<p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are
										the
										ones
										who
										make sure things happen—from birth to school lunch.</p>

									<p>They’re the ones we rely on for playdates and emotional support, homework help
										and
										babysitting. Moms are the ultimate dependable support. Like, hopefully, the
										button
										on
										your
										jeans.</p>

									<figure class="post-media">
										<audio class="plyr-post">
											<source src="{{ asset('audios/audio.mp3') }}" type="audio/mpeg">
											Your browser does not support the audio element.
										</audio>
									</figure>

									<h3>Want To See More Dribbble Shots?</h3>

									<p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are
										untouchable.
										They’re
										elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my
										favorite
										compliment is being told that I look like my mom. Seeing myself in her image,
										like
										this
										daughter up top, makes me so proud of how far I’ve come, and so thankful for
										where I
										come
										from.</p>

									<blockquote class="blockquote blockquote__with-image m-t-xs-0 m-b-xs-30">
										<figure>
											<img src="{{ asset('styleWeb/images/post-single-gallery/post-single-gallery-1.jpg') }}"
												alt="image">
										</figure>
										<p>
											If you’ve been waiting for an invitation, this calligraphy is it.
											Commissioned
											by
											Facebook, this is a hand-lettered design for a poster. Quote is Facebook
											Building 8
											VP’s
											Regina Dugan—and mine.
										</p>
									</blockquote>
									<!-- End of .blockquote -->
								</div>
								<!-- End of .single-blog-wrapper -->
							</article>
							<!-- End of .post-details -->

							<div class="post-shares m-t-xs-60">
								<div class="title">SHARE:</div>
								<ul class="social-share social-share__rectangular">
									<li><a href="#" class="btn bg-color-twitch"><i class="fab fa-twitch"></i>
											1K+</a>
									</li>
									<li><a href="#" class="btn bg-color-facebook"><i class="fab fa-facebook-f"></i>
											1K+</a>
									</li>
									<li><a href="#" class="btn bg-color-twitter"><i class="fab fa-twitter"></i>1000+</a>
									</li>
									<li><a href="#" class="btn bg-color-linkedin"><i
												class="fab fa-linkedin-in"></i>1M+</a>
									</li>
								</ul>
							</div>
							<!-- End of .post-shares -->

							<hr class="m-t-xs-50 m-b-xs-60">

							<div class="about-author m-b-xs-60">
								<div class="media">
									<a href="#"><img class="author-img" src="{{ asset('styleWeb/images/author/author-1.png') }}"
											alt=""></a>
									<div class="media-body">
										<div class="media-body-title">
											<h3><a href="#">Jeffrey Franklin</a></h3>
										</div>
										<!-- End of .media-body-title -->

										<div class="media-body-content">
											<p>At 29 years old, my favorite compliment is being told that I look
												like my
												mom.
												Seeing myself in her image, like this daughter up top, makes me so
												proud
												of
												how
												far I’ve come, and so thankful for where I come from.</p>
											<ul class="social-share social-share__with-bg">
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-behance"></i></a></li>
												<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
											<!-- End of .social-share__no-bg -->
										</div>
										<!-- End of .media-body-content -->
									</div>
								</div>
							</div>
							<!-- End of .about-author -->

							<div class="comment-box">
								<h2>Leave A Reply</h2>
								<p>Your email address will not be published.<span class="primary-color">*</span></p>
							</div>
							<!-- End of .comment-box -->

							<form action="#" class="comment-form row m-b-xs-60">
								<div class="col-12">
									<div class="form-group comment-message-field">
										<label for="comment-message">Comment</label>
										<textarea name="comment-message" id="comment-message" rows="6"></textarea>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" id="name">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" id="email">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="website">Website</label>
										<input type="text" name="website" id="website">
									</div>
								</div>

								<div class="col-12">
									<button class="btn btn-primary">POST COMMENT</button>
								</div>
							</form>

							<div class="post-navigation-wrapper row  m-b-xs-60">
								<div class="post-navigation col-lg-6">
									<div class="post-nav-content">
										<a href="#" class="prev-post">
											<i class="feather icon-chevron-left"></i>Previous Post
										</a>
										<h3><a href="#">Tips For Choosing The Perfect Gloss For Your Lips</a></h3>
									</div>
								</div>
								<div class="post-navigation text-right col-lg-6">
									<div class="post-nav-content">
										<a href="#" class="next-post">
											Next Post<i class="feather icon-chevron-right"></i>
										</a>
										<h3><a href="#">Tips For Choosing The Perfect Gloss For Your Lips</a></h3>
									</div>
								</div>
							</div>
							<!-- End of .post-navigation -->
						</main>
						<!-- End of main -->
					</div>
					<!--End of .col-auto  -->

					<div class="col-lg-4">
						<aside class="post-sidebar">
							<div class="add-block-widget m-b-xs-40">
								<a href="#"><img src="{{ asset('styleWeb/images/clientbanner/clientbanner2.jpg') }}" alt="sidebar add"
										class="img-fluid"></a>
							</div>
							<div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
								<div class="newsletter-content">
									<div class="newsletter-icon">
										<i class="feather icon-send"></i>
									</div>
									<div class="section-title">
										<h3 class="axil-title">Subscribe To Our Weekly Newsletter</h3>
										<p class="mid m-t-xs-10 m-b-xs-20">No spam, notifications only about new
											products,
											updates.</p>
									</div>
									<!-- End of .section-title -->

									<div class="subscription-form-wrapper">
										<form action="#" class="subscription-form">
											<div class="form-group form-group-small m-b-xs-20">
												<label for="subscription-email">Enter Email Address</label>
												<input type="text" name="subscription-email" id="subscription-email">
											</div>
											<div class="m-b-xs-0">
												<button class="btn btn-primary btn-small">SUBSCRIBE</button>
											</div>
										</form>
										<!-- End of .subscription-form -->
									</div>
									<!-- End of .subscription-form-wrapper -->
								</div>
								<!-- End of .newsletter-content -->
							</div>
							<!-- End of  .newsletter-widget -->

							<div class="category-widget m-b-xs-40">
								<div class="widget-title">
									<h3>Categories</h3>
									<div class="owl-nav">
										<button class="custom-owl-prev"><i
												class="feather icon-chevron-left"></i></button>
										<button class="custom-owl-next"><i
												class="feather icon-chevron-right"></i></button>
									</div>
								</div>

								<div class="category-carousel">
									<div class="owl-carousel owl-theme">
										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-1.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">20</span>+
															</div>
															<h4 class="cat-title">Top Stories</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-2.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">100</span>+
															</div>
															<h4 class="cat-title">Business</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-3.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Travel</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-4.png') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Food</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
											</ul>
											<!-- End of .category-list-wrapper -->
										</div>
										<!-- End of .cat-carousel-inner -->

										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-5.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">20</span>+
															</div>
															<h4 class="cat-title">Top Stories</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-6.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">100</span>+
															</div>
															<h4 class="cat-title">Business</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-7.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Travel</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->

												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url({{ asset('styleWeb/images/category-bg/category-bg-8.jpg') }})">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">Food</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
											</ul>
											<!-- End of .category-list-wrapper -->
										</div>
										<!-- End of .cat-carousel-inner -->
									</div>
									<!-- End of  .owl-carousel -->
								</div>
								<!-- End of .category-carousel -->
							</div>
							<!-- End of .category-widget -->

							<div class="sidebar-social-share-widget m-b-xs-40">
								<ul class="social-share-list-wrapper">
									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-facebook">
											<i class="fab fa-facebook-f"></i>
											<div class="counts">2000+</div>
											<div class="title">Fans</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-twitter">
											<i class="fab fa-twitter"></i>
											<div class="counts">4000+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-youtube">
											<i class="fab fa-youtube"></i>
											<div class="counts">1M+</div>
											<div class="title">Subscribers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-linkedin">
											<i class="fab fa-linkedin-in"></i>
											<div class="counts">600+</div>
											<div class="title">Connections</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-vimeo">
											<i class="fab fa-vimeo"></i>
											<div class="counts">500+</div>
											<div class="title">Connections</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-pinterest">
											<i class="fab fa-pinterest"></i>
											<div class="counts">600+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-twitch">
											<i class="fab fa-twitch"></i>
											<div class="counts">1K+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->

									<li class="social-share-list text-center perfect-square">
										<a href="#" class="list-inner bg-color-instagram">
											<i class="fab fa-instagram"></i>
											<div class="counts">1K+</div>
											<div class="title">Followers</div>
										</a>
									</li>
									<!-- End of .social-share-list -->
								</ul>
								<!-- End of .social-share-list-wrapper -->
							</div>
							<!-- End of .sidebar-social-share -->

							<div class="post-widget sidebar-post-widget m-b-xs-40">
								<ul class="nav nav-pills row no-gutters">
									<li class="nav-item col">
										<a class="nav-link active" data-toggle="pill" href="#recent-post">Recent</a>
									</li>
									<li class="nav-item col">
										<a class="nav-link" data-toggle="pill" href="#popular-post">Popular</a>
									</li>
									<li class="nav-item col">
										<a class="nav-link" data-toggle="pill" href="#comments">Comments</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="recent-post">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<div class="post-cat-group">
														<a href="{{ route('post-format-standard')}}"
															class="post-cat color-blue-three">BEAUTY,</a>
														<a href="{{ route('post-format-standard')}}"
															class="post-cat color-yellow-one">TRADE,</a>
														<a href="{{ route('post-format-standard')}}"
															class="post-cat color-red-one">MUSIC</a>
													</div>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Xu Jianhong</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Thousands Now Adware
															Removal Who Never Thought They Could</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
									<div class="tab-pane fade" id="popular-post">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="#{{ route('post-format-standard')}}"
														class="post-cat color-blue-three">BEAUTY</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Xu Jianhong</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">RCB
															vs RR, IPL 2019:
															Bangalore, Rajasthan desperate
															for
															win</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
									<div class="tab-pane fade" id="comments">
										<div class="axil-content">
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-2.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-red-two">SPORTS</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">RCB
															vs RR, IPL 2019:
															Bangalore, Rajasthan desperate
															for
															win</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Ahmad Nazeri</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-1.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-blue-three">BEAUTY</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Stocking Your Restaurant
															Kitchen Finding Reliable
															Sellers</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Amachea Jajah</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-3.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-green-three">TRAVEL</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">Trip
															To Iqaluit In Nunavut A
															Canadian Arctic
															City</a>
													</h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('post-format-standard')}}">Xu Jianhong</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
											<div class="media post-block post-block__small">
												<a href="{{ route('post-format-standard')}}" class="align-self-center"><img
														class=" m-r-xs-30" src="{{ asset('styleWeb/images/media/small-media-4.jpg') }}"
														alt="media image"></a>
												<div class="media-body">
													<a href="{{ route('post-format-standard')}}"
														class="post-cat color-blue-one">FASHION</a>
													<h4 class="axil-post-title hover-line hover-line"><a
															href="{{ route('post-format-standard')}}">To
															Keep Makeup Looking Fresh
															Take A Powder</a></h4>
													<div class="post-metas">
														<ul class="list-inline">
															<li>By <a href="{{ route('author') }}">Sergio Pliego</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End of .post-block -->
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
								</div>
								<!-- End of .tab-content -->
							</div>
							<!-- End of .sidebar-post-widget -->

							<div class="tag-widget m-b-xs-30">
								<div class="widget-title">
									<h3>Tags</h3>
								</div>
								<div class="axil-content">
									<ul class="tag-list-wrapper">
										<li><a href="#">Gaming</a></li>
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Travel</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Science</a></li>
										<li><a href="#">Technology</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Life Style</a></li>
									</ul>
									<!-- End of .tab-list-wrapper -->
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .tag-widget -->

							<div class="instagram-widget m-b-xs-40">
								<div class="widget-title">
									<h3>Instagram</h3>
								</div>

								<div class="axil-content">
									<ul class="instagram-post-list-wrapper">
										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-1.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-2.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-3.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-4.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-5.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->

										<li class="instagram-post-list perfect-square">
											<a href="#" class="list-inner"
												style="background-image: url({{ asset('styleWeb/images/instagram-post/instagram-post-6.jpg') }})">
												<div class="post-info-wrapper overlay">
													<div class="post-info">
														<i class="feather icon-heart"></i>
														20K+
													</div>
													<!-- End of .post-info -->

													<div class="post-info">
														<i class="feather icon-message-square"></i>
														200+
													</div>
													<!-- End of .post-info -->
												</div>
												<!-- End of .post-info-wrapper overlay -->
											</a>
										</li>
										<!-- End of .instagram-post-list -->
									</ul>
									<!-- End of .instagram-post-list-wrapper -->

									<div class="m-t-xs-20">
										<button class="btn btn-primary btn-small">FOLLOW US</button>
									</div>
								</div>
								<!-- End of .content -->
							</div>
							<!-- End of .instagram-widget -->

							<div class="add-block-widget m-b-xs-40">
								<a href="#"><img src="{{ asset('styleWeb/images/sidebar-add.jpg') }}" alt="sidebar add"
										class="img-fluid"></a>
							</div>
							<!-- End of .add-block-widget -->
						</aside>
						<!-- End of .post-sidebar -->
					</div>
					<!-- End of .col-lg-4 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .post-single-wrapper -->

		<section class="related-post p-b-xs-30">
			<div class="container">
				<div class="section-title m-b-xs-40">
					<h2 class="axil-title">Food &amp; Drink</h2>
					<a href="#" class="btn-link ml-auto">All FOOD &amp; DRINK</a>
				</div>
				<!-- End of .section-title -->

				<div class="grid-wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('post-format-standard')}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-1.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('post-format-standard')}}">Barbecue Party Tips For A Truly Amazing
												Event</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('author') }}">Martin Lambert</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('post-format-standard')}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-2.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('post-format-standard')}}">Grilling Tips For The Dog Days Of
												Summer</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('author') }}">Angu Tamba

											</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('post-format-standard')}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-3.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('post-format-standard')}}">Smarter Food Choices 101 Tips For Busy
												Women</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('author') }}">Naseema Al Morad</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
						<div class="col-lg-3 col-md-4">
							<div class="content-block m-b-xs-30">
								<a href="{{ route('post-format-standard')}}">
									<img src="{{ asset('styleWeb/images/related-post/related-post-4.jpg') }}" alt="abstruct image"
										class="img-fluid">
									<div class="grad-overlay"></div>
								</a>
								<div class="media-caption">
									<div class="caption-content">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{ route('post-format-standard')}}">Deep Fryer Pieces Of Wisdom</a></h3>
										<div class="caption-meta">
											By <a href="{{ route('author') }}">Nayah Tantoh</a>
										</div>
									</div>
									<!-- End of .content-inner -->
								</div>
							</div>
							<!-- End of .content-block -->
						</div>
						<!-- End of .col-lg-3 -->
					</div>
					<!-- End of .row -->
				</div>
				<!-- End of .grid-wrapper -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .related-post -->

		<!-- footer starts -->
@stop