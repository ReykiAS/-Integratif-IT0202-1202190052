@include('partials.header')
<!DOCTYPE html>

<html class="no-js" lang="zxx">
		<div class="random-posts section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						@foreach ($news as $news)
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
							<!-- End of .post-block -->
							@endforeach
						
						</main>
						<!-- End of .axil-content -->
						
					</div>
					<!-- End of .col-lg-8 -->

					<div class="col-lg-4">
						<aside class="post-sidebar">
							

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
													<a href="#" class="list-inner"
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
													<a href="#" class="list-inner"
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
													<a href="#" class="list-inner"
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

										<div class="cat-carousel-inner">
											<ul class="category-list-wrapper">
												<li class="category-list perfect-square">
													<a href="#" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-9.jpg)">
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
														style="background-image: url(assets/images/category-bg/category-bg-5.jpg)">
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
														style="background-image: url(assets/images/category-bg/category-bg-6.jpg)">
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
													<a href="#" class="list-inner"
														style="background-image: url(assets/images/category-bg/category-bg-7.jpg)">
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
		<!-- End of .random-posts -->		
</html>
@include('partials.footer')