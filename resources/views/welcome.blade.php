@include('partials.header')

<!DOCTYPE html>

<html class="no-js" lang="zxx">


		
		<div class="recent-news-wrapper section-gap p-t-xs-15 p-t-sm-60">
		
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="axil-latest-post">
						@if ($news->count())
							<div class="media post-block m-b-xs-20">
							
								<figure class="fig-container">
								
									<a href="{{$news[0]->source_url}}"><img src=" {{$news[0]->img_url}}"
											alt="latest post"></a>
									<div class="post-cat-group m-b-xs-10">
										<a href="business"
											class="post-cat cat-btn bg-color-blue-one">news</a>
									</div>
								</figure>
								
							
								<div class="media-body">
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{$news[0]->source_url}}">{{$news[0]->title}}</a></h3>
											
									<div class="post-metas">
										<ul class="list-inline">
										
											<li><a href="{{$news[0]->source_url}}"><i class="feather icon-activity"></i>{{$news[0]->description}}</a></li>
											
										</ul>
										
									</div>
								</div>
								@endif
							</div>
							<!-- End of .post-block -->
						</div>
						<!-- End of .latest-post -->

					</div>
					<!-- End of .col-lg-6 -->
					<div class="col-lg-6">
						<div class="axil-recent-news">
							<div class="section-title d-flex m-b-xs-30">
								<h2 class="axil-title">Recent news</h2>
								<a href="news" class="btn-link ml-auto">ALL RECENT news</a>
							</div>
						
							<!-- End of .section-title -->
							<div class="axil-content">
							@if ($news->count())
							
							
								<div class="media post-block m-b-xs-30">
									<a href={{$news[1]->source_url}}" class="align-self-center"><img
											class=" m-r-xs-30" src="{{$news[1]->img_url}}" alt=""></a>
									<div class="media-body">
										<div class="post-cat-group m-b-xs-10">
											<a href="business"
												class="post-cat cat-btn bg-color-purple-one">news</a>
										</div>
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[1]->source_url}}">{{$news[1]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li>By <a href="{{$news[1]->source_url}}">{{$news[1]->description}}</a></li>
											</ul>
										</div>
									</div>
								</div>
								@endif
								
								</div>
								<div class="axil-content">
							@if ($news->count())
							
								<div class="media post-block m-b-xs-30">
									<a href="{{$news[2]->source_url}}" class="align-self-center"><img
											class=" m-r-xs-30" src="{{$news[2]->img_url}}" alt=""></a>
									<div class="media-body">
										<div class="post-cat-group m-b-xs-10">
											<a href="business"
												class="post-cat cat-btn bg-color-purple-one">news</a>
										</div>
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[2]->source_url}}">{{$news[2]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li>By <a href="{{$news[2]->source_url}}">{{$news[0]->description}}</a></li>
											</ul>
										</div>
									</div>
								</div>
								@endif
								
								</div>
								<div class="axil-content">
							@if ($news->count())
							
								<div class="media post-block m-b-xs-30">
									<a href="{{$news[3]->source_url}}" class="align-self-center"><img
											class=" m-r-xs-30" src="{{$news[3]->img_url}}" alt=""></a>
									<div class="media-body">
									<div class="post-cat-group m-b-xs-10">
											<a href="business"
												class="post-cat cat-btn bg-color-purple-one">news</a>
										
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[3]->source_url}}">{{$news[3]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li>By <a href="{{$news[3]->source_url}}">{{$news[3]->description}}</a></li>
											</ul>
										</div>
									</div>
								</div>
								@endif
								
								</div>
							
							
							
							<!-- End of .content -->
						</div>
						<!-- End of .recent-news -->
					</div>
					<!-- End of .col-lg-6 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
			
		</div>
		<!-- End of .section-gap -->
		<section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
			<div class="container">
				<div class="section-title m-b-xs-40">
					<h2 class="axil-title">climate</h2>
					<a href="climate" class="btn-link">All Climate news</a>
				</div>
				@if ($news->count())
				<div class="row">
					<div class="col-lg-8">
						<div class="axil-img-container m-b-xs-30">
							<a href="{{$news[13]->source_url}}" class="d-block">
								<img src="{{$news[13]->img_url}}" alt="gallery images"
									class="w-100">
								<div class="grad-overlay"></div>
							</a>
							<div class="media post-block position-absolute">
								<div class="media-body media-body__big">
									<div class="post-cat-group m-b-xs-10">
										<a href="business" class="post-cat cat-btn bg-color-purple-one">news</a>
									</div>
									<div class="axil-media-bottom">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[13]->source_url}}">{{$news[13]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li><a href="{{$news[13]->source_url}}"><i class="feather icon-activity"></i>{{$news[13]->description}}</a></li>
												
											</ul>
										</div>
									</div>
								</div>
								@endif
							</div>
						
							<!-- End of .post-block -->
						</div>
						<!-- End of .axil-img-container -->
					</div>
					<div class="col-lg-4">
					@if ($news->count())
						<div class="axil-img-container m-b-xs-30">
							<a href="{{$news[16]->source_url}}" class="d-block">
								<img src="{{$news[16]->img_url}}" alt="gallery images"
									class="w-100">
								<div class="grad-overlay"></div>
							</a>
							<div class="media post-block position-absolute">
								<div class="media-body">
									<div class="post-cat-group m-b-xs-10">
										<a href="business"
											class="post-cat cat-btn btn-mid bg-color-purple-two">news</a>
									</div>
									<div class="axil-media-bottom">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[16]->source_url}}">{{$news[16]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li><a href="post"
														class="d-flex align-items-center"><span></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- End of .post-block -->
						</div>
						<!-- End of .axil-img-container -->
						<div class="axil-img-container m-b-xs-30">
							<a href="{{$news[18]->source_url}}" class="d-block">
								<img src="{{$news[18]->img_url}}" alt="gallery images"
									class="w-100">
								<div class="grad-overlay"></div>
							</a>

							<div class="media post-block position-absolute">
								<div class="media-body">
									<div class="post-cat-group m-b-xs-10">
										<a href="business"
											class="post-cat cat-btn btn-mid bg-color-blue-three">news</a>
									</div>
									<div class="axil-media-bottom">
										<h3 class="axil-post-title hover-line hover-line"><a
												href="{{$news[18]->source_url}}">{{$news[18]->title}}</a></h3>
										<div class="post-metas">
											<ul class="list-inline">
												<li><a href="{{$news[18]->source_url}}" class="d-flex align-items-center"><span>
												</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- End of .post-block -->
						</div>
						<!-- End of .axil-img-container -->
						@endif
					</div>
					<!-- End of .col-lg-4 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .top-stories -->
		
		
		<div class="random-posts section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						@foreach ($news->slice(20, 5) as $news)
						<main class="axil-content">
							<div class="media post-block post-block__mid m-b-xs-30">
								<a href="{{$news->source_url}}" class="align-self-center"><img class=" m-r-xs-30"
										src="{{$news->img_url}}" alt=""></a>
								<div class="media-body">
									<div class="post-cat-group m-b-xs-10">
										<a href="business" class="post-cat cat-btn bg-color-blue-one">news</a>
									</div>
									<h3 class="axil-post-title hover-line hover-line"><a
											href="{{$news->source_url}}">{{$news->title}}</a></h3>
									<p class="mid">{{$news->description}}</p>
									<div class="post-metas">
										<ul class="list-inline">
											
										
										</ul>
									</div>
								
								</div>
								
							</div>
							@endforeach
							<!-- End of .post-block -->
							
							<!-- End of .post-block -->
						</main>
						<!-- End of .axil-content -->
					</div>
					<!-- End of .col-lg-8 -->
					<div class="col-lg-4">
						<aside class="post-sidebar">
							
							<div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
								<div class="newsletter-content">
									<div class="newsletter-icon">
										<i class="feather icon-send"></i>
									</div>
									<div class="section-title">
										<h3 class="axil-title">Subscribe To Our Weekly
											newsletter</h3>
										<p class="mid m-t-xs-10 m-b-xs-20">No spam, notifications only about new
											products,
											updates.</p>
									</div>
									<!-- End of .section-title -->
									<div class="subscription-form-wrapper">
										<form action="#" class="subscription-form">
											<div class="form-group form-group-small m-b-xs-20">
												<label for="subscription-email-2">Enter Email Address</label>
												<input type="text" name="subscription-email-2"
													id="subscription-email-2">
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
									<div class="owl-carousel owl-theme" data-owl-items="1" data-owl-loop="true"
										data-owl-autoplay="true" data-owl-dots="false" data-owl-nav="false"
										data-owl-margin="10">
										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-1.png)">
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
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-2.png)">
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
													<a href="post-format-standard.php" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-3.png)">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">news</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
												<li class="category-list perfect-square">
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-4.png)">
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
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-5.jpg)">
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
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-6.jpg)">
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
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-7.jpg)">
														<div class="post-info-wrapper overlay">
															<div class="counter-inner"><span class="counter">10</span>+
															</div>
															<h4 class="cat-title">news</h4>
														</div>
														<!-- End of .counter-wrapper -->
													</a>
												</li>
												<!-- End of .category-list -->
												<li class="category-list perfect-square">
													<a href="post" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-8.jpg)">
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
							
										</div>
										<!-- End of .content -->
									</div>
									<!-- End of .tab-pane -->
								</div>
								<!-- End of .tab-content -->
							</div>
							<!-- End of .sidebar-post-widget -->
							
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .random-posts -->
		
		<!-- End of .related-post -->
		<!-- footer starts -->
		



</html>
@include('partials.footer')