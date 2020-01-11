<!DOCTYPE html>
<html lang="en">
@include('frontend.common.meta')
<body id="body_wrapper" class="page-template-page-home vc_responsive">
	<!-- Preloading Screen -->
	<!-- <div class="ip-header">
		<h1 class="ip-logo">
			<a>
				<img src="images/theme_logo.png" alt="sw shoppy" />
			</a>
		</h1>
		<div class="ip-loader">
			<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
				<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
				<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" style="stroke-dashoffset: 192.617; stroke-dasharray: 192.617;"></path>
			</svg>
		</div>
	</div> -->
	<!-- End Preloading Screen -->
	
	<div class="body-wrapper theme-clearfix" id="body_wrapper">
		<!-- HEADER -->
		@include('frontend.common.header')
		<!-- END HEADER -->
		
		<!-- MAIN -->
		<div id="main" class="theme-clearfix" role="document">
			<div class="breadcrumbs theme-clearfix">
				<div class="container">
					<ul class="breadcrumb">
						<li class="active">
							<span>Home</span>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single post-6 page type-page status-publish hentry">
							<div class="entry">
								<div class="entry-content">
									<div class="entry-content">
										<div class="vc_row wpb_row vc_row-fluid main-slider-custom">
											<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-4 vc_hidden-sm vc_col-xs-1 vc_hidden-xs">
												<div class="vc_column-inner">
													<div class="wpb_wrapper"></div>
												</div>
											</div>
											
											<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-8 vc_col-xs-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="vc_row wpb_row vc_inner vc_row-fluid margin-bottom-10">
															<!-- OWL SLIDER -->
															<div class="sliderevo1 wpb_column vc_column_container vc_col-sm-8 vc_col-lg-8 vc_col-md-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="wpb_revslider_element wpb_content_element">
																			<div id="main-slider" class="fullwidthbanner-container" style="margin: 0px auto; padding: 0px; max-width: 612px; background-color: transparent;">
																				<div class="module slideshow no-margin">

																					@foreach($result['slides'] as $key=>$slides_data)
																					
																					<div class="item">
																						<a href="#"><img src="{{asset('').$slides_data->image}}" alt="slider1" class="img-responsive" /></a>
																					</div>
																					@endforeach
																					
																				</div>
																				<div class="loadeding"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- OWL LIGHT SLIDER -->
															
															<!-- DAILY DEALS -->
															<div class="dailydeal wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12 vc_col-xs-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div id="electronic_sw-count-down_01" class="sw-woo-container-slider responsive-slider countdown-slider" data-lg="1" data-md="2" data-sm="1" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-dots="true" data-circle="false">
																			<div class="resp-slider-container">
																				<div class="box-slider-title"></div>
																				
																				<div class="slider-wrapper clearfix">
																					<div class="slider responsive">
																						<div class="item item-countdown" id="product_sw-count-down_01">
																							<div class="item-wrap">
																								<div class="item-detail">
																									<div class="item-image-countdown products-thumb">
																										<span class="onsale">Sale!</span>
																										
																										<a href="home_style_1_shop_product_default.html">
																											<div class="product-thumb-hover">
																												<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12" 
																														src="images/12-300x300.jpg" 
																														srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w" 
																														sizes="(max-width: 300px) 100vw, 300px" />
																											</div>
																										</a>
																										
																										<div 	class="product-countdown" data-date="1527724800000" data-price="$440" data-starttime="1458172800" 
																												data-cdtime="1508371200" data-id="product_sw-count-down_01">
																										</div>
																									</div>
																									
																									<div class="item-content">
																										<!-- rating  -->
																										<div class="reviews-content">
																											<div class="star"></div>
																											<div class="item-number-rating"></div>
																										</div>
																										<!-- end rating  -->
																										
																										<h4>
																											<a href="home_style_1_shop_product_default.html" title="Dolore turkey">Dolore turkey</a>
																										</h4>
																										
																										<div class="item-price">
																											<span>
																												<del>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>440.00
																													</span>
																												</del> 
																												
																												<ins>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>400.00
																													</span>
																												</ins>										
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					
																						<div class="item item-countdown" id="product_sw-count-down_02">
																							<div class="item-wrap">
																								<div class="item-detail">
																									<div class="item-image-countdown products-thumb">
																										<span class="onsale">Sale!</span>
																										
																										<a href="home_style_1_shop_product_default.html">
																											<div class="product-thumb-hover">
																												<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="9" 
																														src="images/9-300x300.jpg" 
																														srcset="images/9-300x300.jpg 300w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-180x180.jpg 180w" 
																														sizes="(max-width: 300px) 100vw, 300px" />
																											</div>
																										</a>
																										
																										<div 	class="product-countdown" data-date="1527724800000" data-price="$77" data-starttime="1458259200" 
																												data-cdtime="1504137600" data-id="product_sw-count-down_02">
																										</div>
																									</div>
																								 
																									<div class="item-content">
																										<!-- rating  -->
																										<div class="reviews-content">
																											<div class="star">
																												<span style="width:44px"></span>
																											</div>
																											
																											<div class="item-number-rating"></div>
																										</div>
																										<!-- end rating  -->
																										
																										<h4>
																											<a href="home_style_1_shop_product_default.html" title="Jowl ullamco">Jowl ullamco</a>
																										</h4>
																										
																										<div class="item-price">
																											<span>
																												<del>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>77.00
																													</span>
																												</del> 
																												
																												<ins>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>60.00
																													</span>
																												</ins>
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					
																						<div class="item item-countdown" id="product_sw-count-down_02">
																							<div class="item-wrap">
																								<div class="item-detail">
																									<div class="item-image-countdown products-thumb">
																										<span class="onsale">Sale!</span>
																										
																										<a href="home_style_1_shop_product_default.html">
																											<div class="product-thumb-hover">
																												<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="4" 
																														src="images/4-300x300.jpg" 
																														srcset="images/4-300x300.jpg 300w, images/4-260x260.jpg 260w, images/4.jpg 600w, images/4-180x180.jpg 180w" 
																														sizes="(max-width: 300px) 100vw, 300px" />
																											</div>
																										</a>
																										
																										<div 	lass="product-countdown" data-date="1527724800000" data-price="$880" data-starttime="1458172800" 
																												data-cdtime="1521590400" data-id="product_sw-count-down_02">
																										</div>
																									</div>
																									
																									<div class="item-content">
																										<!-- rating  -->
																										<div class="reviews-content">
																											<div class="star"></div>
																											<div class="item-number-rating"></div>
																										</div>
																										<!-- end rating  -->
																										
																										<h4>
																											<a href="home_style_1_shop_product_default.html" title="Aliqua minim">Aliqua minim</a>
																										</h4>
																										
																										<div class="item-price">
																											<span>
																												<del>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>880.00
																													</span>
																												</del> 
																												
																												<ins>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>800.00
																													</span>
																												</ins>										
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					
																						<div class="item item-countdown" id="product_sw-count-down_03">
																							<div class="item-wrap">
																								<div class="item-detail">
																									<div class="item-image-countdown products-thumb">
																										<span class="onsale">Sale!</span>
																										<a href="home_style_1_shop_product_default.html">
																											<div class="product-thumb-hover">
																												<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="26" 
																														src="images/26-300x300.jpg" 
																														srcset="images/26-300x300.jpg 300w, images/26-260x260.jpg 260w, images/26.jpg 600w, images/26-180x180.jpg 180w" 
																														sizes="(max-width: 300px) 100vw, 300px" />
																											</div>
																										</a>
																										
																										<div 	class="product-countdown" data-date="1527724800000" data-price="$5.5" data-starttime="1458777600" 
																												data-cdtime="1517356800" data-id="product_sw-count-down_03">
																										</div>
																									</div>
																									
																									<div class="item-content">
																										<!-- rating  -->
																										<div class="reviews-content">
																											<div class="star"></div>
																											<div class="item-number-rating"></div>
																										</div>
																										<!-- end rating  -->
																										
																										<h4>
																											<a href="home_style_1_shop_product_default.html" title="Pisan maze ikan kazen">Pisan maze ikan kazen</a>
																										</h4>
																										
																										<div class="item-price">
																											<span>
																												<del>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>5.50
																													</span>
																												</del> 
																												
																												<ins>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>5.00
																													</span>
																												</ins>										
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="vc_row wpb_row vc_inner vc_row-fluid no-margin-bottom">
															<div class="home1img1 home1img wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner padding-right-5">
																	<div class="wpb_wrapper">
																		<div class="wpb_single_image wpb_content_element vc_align_center">
																			<figure class="wpb_wrapper vc_figure">
																				<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																					<img 	width="301" height="148" class="vc_single_image-img attachment-full" alt="banner-img1" 
																							src="images/banner-img1.jpg" 
																							srcset="images/banner-img1.jpg 301w, images/banner-img1-300x148.jpg 300w" 
																							sizes="(max-width: 301px) 100vw, 301px" />
																				</a>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="home1img home1img2 wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
																<div class="vc_column-inner padding-left-5 padding-right-5">
																	<div class="wpb_wrapper">
																		<div class="wpb_single_image wpb_content_element vc_align_center">
																			<figure class="wpb_wrapper vc_figure">
																				<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																					<img 	width="301" height="148" class="vc_single_image-img attachment-full" alt="banner-img2" 
																							src="images/banner-img2.jpg" 
																							srcset="images/banner-img2.jpg 301w, images/banner-img2-300x148.jpg 300w" 
																							sizes="(max-width: 301px) 100vw, 301px" />
																				</a>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="home1img home1img3 wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner padding-left-5">
																	<div class="wpb_wrapper">
																		<div class="wpb_single_image wpb_content_element vc_align_center">
																			<figure class="wpb_wrapper vc_figure">
																				<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																					<img width="248" height="148" src="images/banner-img3.jpg" class="vc_single_image-img attachment-full" alt="banner-img3" />
																				</a>
																			</figure>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="vc_row wpb_row vc_row-fluid sub-main-slider-custom">
											<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-4 vc_col-xs-12">
												<div class="vc_column-inner margin-bottom-30">
													<div class="wpb_wrapper">
														<!-- RECOMMEND PRODUCTS -->
														<div class="panel-group accordion_recommend_product" id="accordion">
															<div class="block-title">
																<strong>
																	<span>Recommend Products</span>
																</strong>
																
																<div class="sn-img icon-bacsic2"></div>
															</div>
															
															<!-- ITEMS -->
															<div class="panel panel-default">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
																	<span class="item-count">1</span>																
																	<h4 class="panel-title">Nulla in diam</h4>
																</a>
																
																<div id="collapse1" class="panel-collapse collapse in">
																	<div class="panel-body">
																		<div class="item-content">
																			<div class="item-img item-height">
																				<div class="item-img-info products-thumb">
																					<a href="home_style_1_shop_product_default.html" title="Nulla in diam">
																						<img width="270" height="203" src="images/1-2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="1" title="1" />
																					</a>
																				</div>
																			</div>
																			
																			<h4>
																				<a href="home_style_1_shop_product_default.html" title="Nulla in diam">Nulla in diam</a>
																			</h4>
																			
																			<!-- rating  -->
																			<div class="reviews-content">
																				<div class="star"></div>
																				<div class="item-number-rating">0 Review(s)</div>
																			</div>																		
																			<!-- end rating  -->
																			
																			<div class="item-price">
																				<span>
																					<del>
																						<span class="woocommerce-Price-amount amount">
																							<span class="woocommerce-Price-currencySymbol">$</span>345.00
																						</span>
																					</del> 
																					
																					<ins>
																						<span class="woocommerce-Price-amount amount">
																							<span class="woocommerce-Price-currencySymbol">$</span>235.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="panel panel-default">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
																	<span class="item-count">2</span>
																	<h4 class="panel-title">Praesent metus elit</h4>
																</a>
																
																<div id="collapse2" class="panel-collapse collapse">
																	<div class="panel-body">
																		<div class="item-content">
																			<div class="item-img item-height">
																				<div class="item-img-info products-thumb">
																					<a href="home_style_1_shop_product_default.html" title="Praesent metus elit">
																						<img width="270" height="203" src="images/2-2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="2" title="2" />
																					</a>
																				</div>
																			</div>
																			
																			<h4>
																				<a href="home_style_1_shop_product_default.html" title="Praesent metus elit">Praesent metus elit</a>
																			</h4>
													  
																			<!-- rating  -->
																			<div class="reviews-content">
																				<div class="star"></div>
																				<div class="item-number-rating">0 Review(s)</div>
																			</div>
																			<!-- end rating  -->
																			
																			<div class="item-price">
																				<span>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">$</span>280.00
																					</span>							
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="panel panel-default">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
																	<span class="item-count">3</span>																
																	<h4 class="panel-title">Consectetur placera</h4>
																</a>
																
																<div id="collapse3" class="panel-collapse collapse">
																	<div class="panel-body">
																		<div class="item-content">
																			<div class="item-img item-height">
																				<div class="item-img-info products-thumb">
																					<a href="home_style_1_shop_product_default.html" title="Consectetur placera">
																						<img width="270" height="203" src="images/4-2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="4" title="4" />
																					</a>
																				</div>
																			</div>
																			
																			<h4>
																				<a href="home_style_1_shop_product_default.html" title="Consectetur placera">Consectetur placera</a>
																			</h4>
																			
																			<!-- rating  -->
																			<div class="reviews-content">
																				<div class="star"></div>
																				<div class="item-number-rating">0 Review(s)</div>
																			</div>
																			<!-- end rating  -->
																			
																			<div class="item-price">
																				<span>
																					<del>
																						<span class="woocommerce-Price-amount amount">
																							<span class="woocommerce-Price-currencySymbol">$</span>350.00
																						</span>
																					</del> 
																					
																					<ins>
																						<span class="woocommerce-Price-amount amount">
																							<span class="woocommerce-Price-currencySymbol">$</span>300.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="panel panel-default">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
																	<span class="item-count">4</span>
																	<h4 class="panel-title">Morbi mollis diam</h4>
																</a>
																
																<div id="collapse4" class="panel-collapse collapse">
																	<div class="panel-body">
																		<div class="item-content">
																			<div class="item-img item-height">
																				<div class="item-img-info products-thumb">
																					<a href="home_style_1_shop_product_default.html" title="Morbi mollis diam">
																						<img width="270" height="203" src="images/5-2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="5" title="5" />
																					</a>
																				</div>
																			</div>
																			
																			<h4>
																				<a href="home_style_1_shop_product_default.html" title="Morbi mollis diam">Morbi mollis diam</a>
																			</h4>
																			
																			<!-- rating  -->
																			<div class="reviews-content">
																				<div class="star"></div>
																				<div class="item-number-rating">0 Review(s)</div>
																			</div>
																			<!-- end rating  -->
																			
																			<div class="item-price">
																				<span>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">$</span>200.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="panel panel-default">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
																	<span class="item-count">5</span>
																	<h4 class="panel-title">Nulla in diam</h4>
																</a>
																
																<div id="collapse5" class="panel-collapse collapse">
																	<div class="panel-body">
																		<div class="item-content">
																			<div class="item-img item-height">
																				<div class="item-img-info products-thumb">
																					<a href="home_style_1_shop_product_default.html" title="Nulla in diam">
																						<img width="270" height="203" src="images/6-2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="6" title="6" />
																					</a>
																				</div>
																			</div>
																			
																			<h4>
																				<a href="home_style_1_shop_product_default.html" title="Nulla in diam">Nulla in diam</a>
																			</h4>
																			
																			<!-- rating  -->
																			<div class="reviews-content">
																				<div class="star"></div>
																				<div class="item-number-rating">0 Review(s)</div>
																			</div>
																			<!-- end rating  -->
																			
																			<div class="item-price">
																				<span>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">$</span>200.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- END ITEMS -->
														</div>
														<!-- END RECOMMEND PRODUCTS -->
														
														<!-- NEW BLOGS -->
														<div id="new-blog-container" class="blog-indicators carousel slide">
															<div class="block-title">
																<strong>
																	<span>New Blogs</span>
																</strong>
																
																<div class="sn-img icon-bacsic sn-blog"></div>
															</div>
															<!-- ITEMS -->
															<div class="carousel-inner">
																@foreach($result['news']['news_data'] as $key=>$news_data)
																<div class="item @if($key==0) active @endif ">
																	<div class="row">

																		
																		<div class="item-inner col-lg-12">
																			<a href="home_style_1_blog_left_sidebar_list_detail.html" title="Aliquam sit amet leo orci">
																				<img width="270" height="203" src="images/2-270x203.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="2" />
																			</a>
																			
																			<div class="postTitle">
																				<h2>
																					<a title="Aliquam sit amet leo orci" href="home_style_1_blog_left_sidebar_list_detail.html">Aliquam sit amet leo orci</a>
																				</h2>
																			</div>
																			
																			<div class="item-description">{!!str_limit($news_data->news_description,$limit = 150)!!} </div>
																		</div>
																	</div>
																</div>
																@endforeach
																
																
																<!-- END ITEMS -->
															</div>
															
															<ul class="carousel-indicators">
																<li class="active" data-slide-to="0" data-target="#new-blog-container"></li>
																<li class="" data-slide-to="1" data-target="#new-blog-container"></li>
																<li class="" data-slide-to="2" data-target="#new-blog-container"></li>
															</ul>
														</div>
														<!-- END NEW BLOGS -->
													</div>
												</div>
											</div>
											
											<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-8 vc_col-xs-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="vc_row wpb_row vc_inner vc_row-fluid margin-bottom-30">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<!-- ELECTRONICS -->
																		<div id="electronics_slider" class="sw-woo-container-slider responsive-slider woo-slider-default loading" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
																			<div class="tab-category-title block-title">
																				<strong>
																					<span>Electronics</span>
																				</strong>
																				<div class="sn-img icon-bacsic item1"></div>
																			</div>
																			
																			<div class="resp-slider-container">
																				<div class="slider responsive">
																					<!-- ITEMS -->
																					<div class="item">
																						<div class="item-wrap">
																							<div class="item-detail">
																								<div class="item-img products-thumb">
																									<a href="home_style_1_shop_product_default.html">
																										<div class="product-thumb-hover">
																											<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="5" 
																													src="images/51-300x300.jpg" 
																													srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w" 
																													sizes="(max-width: 300px) 100vw, 300px" />
																										</div>
																									</a>																							
																									<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																								</div>
																								
																								<div class="item-content">
																									<!-- rating  -->
																									<div class="reviews-content">
																										<div class="star">
																											<span style="width:52px"></span>
																										</div>
																										<div class="item-number-rating">2 Review(s)</div>
																									</div>
																									<!-- end rating  -->
																									
																									<h4>
																										<a href="home_style_1_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
																									</h4>
																									
																									<div class="item-price">
																										<span>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>55.00
																											</span>
																										</span>
																									</div>
																									
																									<!-- add to cart, wishlist, compare -->
																									<div class="add-info">
																										<div class="yith-wcwl-add-to-wishlist">
																											<div class="yith-wcwl-add-button show" style="display:block">
																												<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																												<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																											</div>
																											
																											<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																												<span class="feedback">Product added!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																												<span class="feedback">The product is already in the wishlist!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div style="clear:both"></div>
																											<div class="yith-wcwl-wishlistaddresponse"></div>
																										</div>
																										
																										<div class="clear"></div>
																										
																										<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																										
																										<div class="woocommerce product compare-button">
																											<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					
																					<div class="item">
																						<div class="item-wrap">
																							<div class="item-detail">
																								<div class="item-img products-thumb">
																									<span class="onsale">Sale!</span>
																									
																									<a href="home_style_1_shop_product_default.html">
																										<div class="product-thumb-hover">
																											<img	 width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="26" 
																													src="images/26-300x300.jpg" 
																													srcset="images/26-300x300.jpg 300w, images/26-260x260.jpg 260w, images/26.jpg 600w, images/26-180x180.jpg 180w" 
																													sizes="(max-width: 300px) 100vw, 300px" />
																										</div>
																									</a>
																									
																									<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																								</div>
																								
																								<div class="item-content">
																									<!-- rating  -->
																									<div class="reviews-content">
																										<div class="star"></div>
																										<div class="item-number-rating">0 Review(s)</div>
																									</div>
																									<!-- end rating  -->
																									
																									<h4>
																										<a href="home_style_1_shop_product_default.html" title="Pisan maze ikan kazen">Pisan maze ikan kazen</a>
																									</h4>
																									
																									<div class="item-price">
																										<span>
																											<del>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>5.50
																												</span>
																											</del> 
																											
																											<ins>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>5.00
																												</span>
																											</ins>
																										</span>
																									</div>
																									
																									<!-- add to cart, wishlist, compare -->
																									<div class="add-info">
																										<div class="yith-wcwl-add-to-wishlist">
																											<div class="yith-wcwl-add-button show" style="display:block">
																												<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																												<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																											</div>
																											
																											<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																												<span class="feedback">Product added!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																												<span class="feedback">The product is already in the wishlist!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div style="clear:both"></div>
																											<div class="yith-wcwl-wishlistaddresponse"></div>
																										</div>
																										
																										<div class="clear"></div>
																										
																										<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																										
																										<div class="woocommerce product compare-button">
																											<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					
																					<div class="item">
																						<div class="item-wrap">
																							<div class="item-detail">
																								<div class="item-img products-thumb">
																									<span class="onsale">Sale!</span>
																									
																									<a href="home_style_1_shop_product_default.html">
																										<div class="product-thumb-hover">
																											<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="21" 
																													src="images/21-300x300.jpg" 
																													srcset="images/21-300x300.jpg 300w, images/21-260x260.jpg 260w, images/21-180x180.jpg 180w, images/21.jpg 470w" 
																													sizes="(max-width: 300px) 100vw, 300px" />
																										</div>
																									</a>
																									
																									<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																								</div>
																								
																								<div class="item-content">
																									<!-- rating  -->
																									<div class="reviews-content">
																										<div class="star"></div>
																										<div class="item-number-rating">0 Review(s)</div>
																									</div>
																									<!-- end rating  -->
																									
																									<h4>
																										<a href="home_style_1_shop_product_default.html" title="Kore mire dase mazen">Kore mire dase mazen</a>
																									</h4>
																									
																									<div class="item-price">
																										<span>
																											<del>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>3.50
																												</span>
																											</del>

																											<ins>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>2.99
																												</span>
																											</ins>
																										</span>
																									</div>
																									
																									<!-- add to cart, wishlist, compare -->
																									<div class="add-info">
																										<div class="yith-wcwl-add-to-wishlist">
																											<div class="yith-wcwl-add-button show" style="display:block">
																												<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																												<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																											</div>
																											
																											<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																												<span class="feedback">Product added!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																												<span class="feedback">The product is already in the wishlist!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div style="clear:both"></div>
																											<div class="yith-wcwl-wishlistaddresponse"></div>
																										</div>
																										
																										<div class="clear"></div>
																										
																										<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																										
																										<div class="woocommerce product compare-button">
																											<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					
																					<div class="item">
																						<div class="item-wrap">
																							<div class="item-detail">
																								<div class="item-img products-thumb">
																									<a href="home_style_1_shop_product_default.html">
																										<div class="product-thumb-hover">
																											<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="23_1" 
																													src="images/23_1-300x300.jpg"
																													srcset="images/23_1-300x300.jpg 300w, images/23_1-260x260.jpg 260w, images/23_1.jpg 600w, images/23_1-180x180.jpg 180w" 
																													sizes="(max-width: 300px) 100vw, 300px" />
																										</div>
																									</a>
																									
																									<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																								</div>
																								
																								<div class="item-content">
																									<!-- rating  -->
																									<div class="reviews-content">
																										<div class="star"></div>
																										<div class="item-number-rating">0 Review(s)</div>
																									</div>
																									<!-- end rating  -->
																									
																									<h4>
																										<a href="home_style_1_shop_product_default.html" title="Wiru mise kaztem">Wiru mise kaztem</a>
																									</h4>
																									
																									<div class="item-price">
																										<span>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>1.99
																											</span>
																										</span>
																									</div>
																									
																									<!-- add to cart, wishlist, compare -->
																									<div class="add-info">
																										<div class="yith-wcwl-add-to-wishlist">
																											<div class="yith-wcwl-add-button show" style="display:block">
																												<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																												<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																											</div>
																											
																											<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																												<span class="feedback">Product added!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																												<span class="feedback">The product is already in the wishlist!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div style="clear:both"></div>
																											<div class="yith-wcwl-wishlistaddresponse"></div>
																										</div>
																										
																										<div class="clear"></div>
																										
																										<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																										
																										<div class="woocommerce product compare-button">
																											<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					
																					<div class="item">
																						<div class="item-wrap">
																							<div class="item-detail">
																								<div class="item-img products-thumb">
																									<span class="onsale">Sale!</span>
																									
																									<a href="home_style_1_shop_product_default.html">
																										<div class="product-thumb-hover">
																											<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="9" 
																													src="images/9-300x300.jpg" 
																													srcset="images/9-300x300.jpg 300w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-180x180.jpg 180w" 
																													sizes="(max-width: 300px) 100vw, 300px" />
																										</div>
																									</a>
																									
																									<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																								</div>
																								
																								<div class="item-content">
																									<!-- rating  -->
																									<div class="reviews-content">
																										<div class="star"><span style="width:52px"></span></div>
																										<div class="item-number-rating">1 Review(s)</div>
																									</div>
																									<!-- end rating  -->
																							 
																									<h4>
																										<a href="home_style_1_shop_product_default.html" title="Jowl ullamco">Jowl ullamco</a>
																									</h4>
																									
																									<div class="item-price">
																										<span>
																											<del>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>77.00
																												</span>
																											</del> 
																											
																											<ins>
																												<span class="woocommerce-Price-amount amount">
																													<span class="woocommerce-Price-currencySymbol">$</span>60.00
																												</span>
																											</ins>
																										</span>
																									</div>
																									
																									<!-- add to cart, wishlist, compare -->
																									<div class="add-info">
																										<div class="yith-wcwl-add-to-wishlist">
																											<div class="yith-wcwl-add-button show" style="display:block">
																												<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																												<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																											</div>
																											
																											<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																												<span class="feedback">Product added!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																												<span class="feedback">The product is already in the wishlist!</span>
																												<a href="#" rel="nofollow">Browse Wishlist</a>
																											</div>
																											
																											<div style="clear:both"></div>
																											<div class="yith-wcwl-wishlistaddresponse"></div>
																										</div>
																										
																										<div class="clear"></div>
																										
																										<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																										
																										<div class="woocommerce product compare-button">
																											<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<!-- END ITEMS -->
																				</div>
																			</div>
																		</div>
																		<!--END ELECTRONICS -->
																	</div>
																</div>
															</div>
														</div>
														
														<div class="wpb_single_image wpb_content_element vc_align_center margin-bottom30">
															<figure class="wpb_wrapper vc_figure">
																<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																	<img 	width="870" height="78" class="vc_single_image-img attachment-full" alt="content-home3" 
																			src="images/content-home3.jpg" 
																			srcset="images/content-home3.jpg 870w, images/content-home3-370x33.jpg 370w, images/content-home3-800x72.jpg 800w" 
																			sizes="(max-width: 870px) 100vw, 870px" />
																</a>
															</figure>
														</div>
														
														<!-- JEWELRY -->
														<div id="jewelry_slider" class="sw-woo-container-slider responsive-slider woo-slider-default loading" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
															<div class="tab-category-title block-title">
																<strong>
																	<span>Jewelry & Watches</span>
																</strong>
																
																<div class="sn-img icon-bacsic item1"></div>
															</div>
															
															<div class="resp-slider-container">
																<div class="slider responsive">
																	<!-- ITEMS -->
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J9" 
																									src="images/J9-300x300.jpg" 
																									srcset="images/J9-300x300.jpg 300w, images/J9-260x260.jpg 260w, images/J9.jpg 600w, images/J9-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>430.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>200.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J10" 
																									src="images/J10-300x300.jpg" 
																									srcset="images/J10-300x300.jpg 300w, images/J10-260x260.jpg 260w, images/J10.jpg 600w, images/J10-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>130.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>100.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J3" 
																									src="images/J3-300x300.jpg" 
																									srcset="images/J3-300x300.jpg 300w, images/J3-260x260.jpg 260w, images/J3.jpg 600w, images/J3-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>430.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>400.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J4" 
																									src="images/J4-300x300.jpg" 
																									srcset="images/J4-300x300.jpg 300w, images/J4-260x260.jpg 260w, images/J4.jpg 600w, images/J4-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>530.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>230.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">																				
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J5" 
																									src="images/J5-300x300.jpg" 
																									srcset="images/J5-300x300.jpg 300w, images/J5-260x260.jpg 260w, images/J5.jpg 600w, images/J5-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>																						
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>400.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J9" 
																									src="images/J9-300x300.jpg" 
																									srcset="images/J9-300x300.jpg 300w, images/J9-260x260.jpg 260w, images/J9.jpg 600w, images/J9-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>430.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>400.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J9" 
																									src="images/J9-300x300.jpg" 
																									srcset="images/J9-300x300.jpg 300w, images/J9-260x260.jpg 260w, images/J9.jpg 600w, images/J9-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>430.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>400.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
															  </div>
														   </div>
														</div>
														<!-- END JEWELRY -->
													</div>
												</div>
											</div>
										</div>
										
										<div class="vc_row wpb_row vc_row-fluid no-margin-bottom">
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left margin-bottom-30">
															<figure class="wpb_wrapper vc_figure">
																<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																	<img 	width="570" height="200" class="vc_single_image-img attachment-full" alt="content-home1" 
																			src="images/content-home1.jpg" 
																			srcset="images/content-home1.jpg 570w, images/content-home1-370x130.jpg 370w" 
																			sizes="(max-width: 570px) 100vw, 570px" />
																</a>
															</figure>
														</div>
													</div>
												</div>
											</div>
											
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_center margin-bottom-30">
															<figure class="wpb_wrapper vc_figure">
																<a href="home_style_1_shop_product_default.html" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
																	<img 	width="570" height="200" class="vc_single_image-img attachment-full" alt="content-home2" 
																			src="images/content-home2.jpg" 
																			srcset="images/content-home2.jpg 570w, images/content-home2-370x130.jpg 370w" 
																			sizes="(max-width: 570px) 100vw, 570px" />
																</a>
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="vc_row wpb_row vc_row-fluid margin-bottom-30">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<!-- SPORTS -->
														<div id="sport_slider" class="sw-woo-container-slider responsive-slider woo-slider-default loading" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
															<div class="tab-category-title block-title">
																<strong>
																	<span>Automobils</span>
																</strong>
																
																<div class="sn-img icon-bacsic item1"></div>
															</div>
															
															<div class="resp-slider-container">
																<div class="slider responsive">
																	<!-- ITEMS -->								
																	@foreach($result['automobile_products'] as $key=>$product_data)								
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J10" 
																									src="images/J10-300x300.jpg" 
																									srcset="images/J10-300x300.jpg 300w, images/J10-260x260.jpg 260w, images/J10.jpg 600w, images/J10-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>130.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>100.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	@endforeach
																	
																	
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<span class="onsale">Sale!</span>
																					
																					<a href="home_style_1_shop_product_default.html">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J9" 
																									src="images/J9-300x300.jpg" 
																									srcset="images/J9-300x300.jpg 300w, images/J9-260x260.jpg 260w, images/J9.jpg 600w, images/J9-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>							
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																						<div class="item-number-rating">0 Review(s)</div>
																					</div>
																					<!-- end rating  -->
																			 
																					<h4>
																						<a href="home_style_1_shop_product_default.html" title="Cupidatat quis">Cupidatat quis</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>430.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>400.00
																								</span>
																							</ins>
																						</span>
																					</div>
																					
																					<!-- add to cart, wishlist, compare -->
																					<div class="add-info">
																						<div class="yith-wcwl-add-to-wishlist">
																							<div class="yith-wcwl-add-button show" style="display:block">
																								<a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																								<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																							</div>
																							
																							<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																								<span class="feedback">Product added!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																								<span class="feedback">The product is already in the wishlist!</span>
																								<a href="#" rel="nofollow">Browse Wishlist</a>
																							</div>
																							
																							<div style="clear:both"></div>
																							<div class="yith-wcwl-wishlistaddresponse"></div>
																						</div>
																						
																						<div class="clear"></div>
																						
																						<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																						
																						<div class="woocommerce product compare-button">
																							<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- END ITEMS -->
																</div>
														    </div>
														</div>
														<!-- END SPORTS -->
													</div>
												</div>
											</div>
										</div>
										
										<div class="vc_row wpb_row vc_row-fluid margin-bottom-30">
											<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														
														<!-- END TOP SELLING -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		
		<!-- FOOTER -->
		@include('frontend.common.footer')
		<!-- END FOOTER -->
	</div>
	
	<a id="ya-totop" href="#" style="display: none;"></a>
	
	
	@include('frontend.common.script')
</body>
</html>