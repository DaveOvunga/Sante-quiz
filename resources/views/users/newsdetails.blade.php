@extends('layouts.app')

@section('title', 'News')

@section('content')

<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->
	@include('users.header')
	<!--End Main Header -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">News Details</h1>
				<ul class="page-breadcrumb">
					<!-- <li><a href="index.html">Home</a></li> -->
					<!-- <li>News</li> -->
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Blog Details Start-->
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="blog-details__left">
						<div class="blog-details__img">
							<img src="images/resource/news-details.jpg" alt="">
							<div class="blog-details__date">
								<!-- <span class="day">17</span> -->
								<!-- <span class="month">Dec</span> -->
							</div>
						</div>
						<div class="blog-details__content">							

							<h3 class="blog-details__title"></h3>

							<figure class="image mb-4">
								<img src="{{ asset('projectImage/' . $project->image) }}" alt="" style="width:100%; border-radius:10px;">
							</figure>

							<ul class="list-unstyled blog-details__meta">
								<li><a href="#"><i class="fas fa-user-circle"></i> Admin</a></li>
								<li><a href="#"><i class="fas fa-comments"></i> 08 Comments</a></li>
							</ul>

							<p class="blog-details__text-2">
								{{ $project->description }}
							</p>
						</div>

						<div class="blog-details__bottom">
							<p class="blog-details__tags"> <span>Tags</span> <a href="#">Business</a> <a href="#">Agency</a> </p>
							<div class="blog-details__social-list"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
						</div>
						<div class="nav-links">
							<div class="prev">
								<a rel="prev">"Des solutions durables pour une santé équitable."</a>
							</div>
							<div class="next">
								<a href="#" rel="next">"Agir ensemble &amp; pour une santé résiliente."</a>
							</div>
						</div>
						<!-- <div class="comment-one">
							<h3 class="comment-one__title">2 Comments</h3>
							<div class="comment-one__single">
								<div class="comment-one__image"> <img src="images/resource/thumb-1.jpg" alt=""> </div>
								<div class="comment-one__content">
									<h3>Kevin Martin</h3>
									<p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
										Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
										sollicitudin at euismod.
									</p>
									<a href="#" class="theme-btn btn-style-one comment-one__btn"><span class="btn-title">Reply</span></a>
								</div>
							</div>
							<!-- <div class="comment-one__single">
								<div class="comment-one__image"> <img src="images/resource/thumb-2.jpg" alt=""> </div>
								<div class="comment-one__content">
									<h3>Sarah Albert</h3>
									<p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
										Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
										sollicitudin at euismod.
									</p>
									<a href="#" class="theme-btn btn-style-one comment-one__btn"><span class="btn-title">Reply</span></a>
								</div>
							</div> -->
							<!-- <div class="comment-form">
								<h3 class="comment-form__title">Leave a Comment</h3>
								<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="mb-3">
												<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="mb-3">
												<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
											</div>
										</div>
									</div>
									<div class="mb-3">
										<textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
									</div>
									<div class="mb-3">
										<input name="form_botcheck" class="form-control" type="hidden" value="" />
										<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
									</div>
								</form>
							</div> -->
						<!-- </div> --> 
					</div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						<div class="sidebar__single sidebar__search">
							<form action="#" class="sidebar__search-form">
								<input type="search" placeholder="Search here">
								<button type="submit"><i class="lnr-icon-search"></i></button>
							</form>
						</div>
						<div class="sidebar__single sidebar__post">
							<h3 class="sidebar__title">Latest Posts</h3>
							<ul class="sidebar__post-list list-unstyled">
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-1.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <a href="#">Benefits of your life insurance</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-2.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <a href="#">7 cool benefits of your life insurance</a> </h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-3.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <a href="#">We provide all types of insurance</a> </h3>
									</div>
								</li>
							</ul>
						</div>
						<!-- <div class="sidebar__single sidebar__category">
							<h3 class="sidebar__title">Life Insurance</h3>
							<ul class="sidebar__category-list list-unstyled">
								<li><a href="#">Home Insurance<span
									class="icon-right-arrow"></span></a> </li>
								<li class="active"><a href="#">Car Insurance<span
									class="icon-right-arrow"></span></a></li>
								<li><a href="#">Job Insurance<span
									class="icon-right-arrow"></span></a> </li>
								<li><a href="#">Health Insurance<span
									class="icon-right-arrow"></span></a> </li>
								<li><a href="#">Wedding Insurance<span
									class="icon-right-arrow"></span></a> </li>
							</ul>
						</div> -->
						<!-- <div class="sidebar__single sidebar__tags">
							<h3 class="sidebar__title">Tags</h3>
							<div class="sidebar__tags-list"> <a href="#">Life</a> <a href="#">Home</a> <a href="#">Car</a> <a href="#">Job</a> <a href="#">Health</a> <a href="#">Wedding</a> </div>
						</div> -->
						<!-- <div class="sidebar__single sidebar__comments">
							<h3 class="sidebar__title">Recent Comments</h3>
							<ul class="sidebar__comments-list list-unstyled">
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p>A wordpress commenter on <br>
											launch new mobile app
										</p>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p> <span>John Doe</span> on template:</p>
										<h5>comments</h5>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p>A wordpress commenter on <br>
											launch new mobile app
										</p>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p> <span>John Doe</span> on template:</p>
										<h5>comments</h5>
									</div>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Details End-->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection