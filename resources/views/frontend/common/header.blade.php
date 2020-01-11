<div id="yt_header" class="yt-header wrap">
			<div class="header-style1">
				<div class="yt-header-top">
					<div class="container">
						<div class="row">
							<!-- INFORMATION -->
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sl-header-text">
								<div class="offer-wrapper">
									<div class="offer-header">
										<ul id="offer-info">
											<li>
												<i class="sp-ic fa fa-phone-square">&nbsp;</i>@lang('website.hotline'): <a title="0123 456 7891" href="#"></span>({{$result['commonContent']['setting'][11]->value}})</a> 
											</li>
											
											<li>
												<i class="sp-ic fa fa-envelope">&nbsp;</i>E-mail: <a title="Contact@domain.com" href="mailto:Contact@domain.com">{{$result['commonContent']['setting'][3]->value}}</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- END INFORMATION -->
							
							<!-- LANGUAGE -->
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 top-links-action">
								<div class="block-action-header language-switcher pull-right">
									<div class="textwidget">
										<div id="lang_sel">
											<ul class="nav">
												<li>
													<a class="lang_sel_sel icl-en" href="#">
														<img class="iclflag" title="English" alt="en" src="images/en.png" width="18" height="12">&nbsp;ENG
													</a>
													<ul>
														<li class="icl-en active">
															<a href="#">
																<img class="iclflag" title="English" alt="en" src="images/en.png" width="18" height="12">&nbsp;ENG
															</a>
														</li>
														
														<li class="icl-ar">
															<a href="#">
																<img class="iclflag" title="Arabic" alt="ar" src="images/ar.png" width="18" height="12">&nbsp;ARA
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- END LANGUAGE -->
								
								<!-- CURRENCY -->
								<div class="block-action-header block-currency pull-right">
									<ul class="currency_w">
										<li>
											<a href="#" class="">USD</a>
											<ul class="currency_switcher">
												<li>
													<a href="#" class="reset default active" data-currencycode="USD">USD</a>
												</li>
												<li>
													<a href="#" class="" data-currencycode="EUR">EUR</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<!-- END CURRENCY -->
								
								<!-- USER ACCOUNT -->
								<div class="block-action-header top-link-account my-account-link my-account-link-other pull-right">
									<ul id="menu-my-account" class="menu">
										<li class="dropdown menu-my-account ya-menu-custom level1">
											<a href="home_style_1_my_account.html" class="item-link dropdown-toggle">
												<span class="have-title">
													<span class="menu-title">My Account</span>
												</span>
											</a>
											
											<ul class="dropdown-menu nav-level1 one-column">
												<li class="one-column menu-checkout">
													<a href="home_style_1_checkout.html">
														<span class="have-title">
															<span class="menu-title">Checkout</span>
														</span>
													</a>
												</li>
												
												<li class="one-column menu-my-account">
													<a href="home_style_1_my_account.html">
														<span class="have-title">
															<span class="menu-title">My Account</span>
														</span>
													</a>
												</li>
												
												<li class="one-column menu-my-cart">
													<a href="home_style_1_cart.html">
														<span class="have-title">
															<span class="menu-title">My Cart</span>
														</span>
													</a>
												</li>
												
												<li class="one-column menu-wishlist">
													<a href="home_style_1_wishlist.html">
														<span class="have-title">
															<span class="menu-title">Wishlist</span>
														</span>
													</a>
												</li>
												
												<li class="yith-woocompare-open one-column menu-compare">
													<a href="#">
														<span class="have-title">
															<span class="compare menu-title">Compare</span>
														</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								
								<div class="block-action-header top-link-account login-link pull-right">
									<div class="top-login pull-left">
										<ul>
											<li>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#login_form"><span>Login</span></a> 
											</li>
										</ul>
									</div>
								</div>
								
								<div class="widget-6 widget rev-slider-widget-2 widget_revslider">
									<div class="widget-inner"></div>
								</div>
								<!-- END USER ACCOUNT -->
							</div>
							
							<!-- REGISTER_LOGIN DIALOG -->
							<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog block-popup-login">
									<a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>
									
									<div class="tt_popup_login">
										<strong>Sign in Or Register</strong>
									</div>
									
									<form class="login">
										<div class="block-content" style="height: 238px;">
											<div class="col-reg registered-account">
												<div class="email-input">
													<input type="text" class="form-control input-text username" name="username" id="username" placeholder="Username" />
												</div>
												
												<div class="pass-input">
													<input class="form-control input-text password" type="password" placeholder="Password" name="password" id="password" />
												</div>
												
												<div class="ft-link-p">
													<a href="home_style_1_lost_pass.html" title="Forgot your password">Forgot your password?</a>
												</div>
												
												<div class="actions">
													<div class="submit-login">	        
														<input type="submit" class="button btn-submit-login" name="login" value="Login" />
													</div>
												</div>
											</div>
											
											<div class="col-reg login-customer">
												<h2>NEW HERE?</h2>
												<p class="note-reg">Registration is free and easy!</p>
												
												<ul class="list-log">
													<li>Faster checkout</li>
													
													<li>Save multiple shipping addresses</li>
													
													<li>View and track orders and more</li>
												</ul>
												<a href="home_style_1_create_acc.html" title="Register" class="btn-reg-popup">Create an account</a>
											</div>
											
											<div class="clear"></div>
										</div>
									</form>
									
									<div class="clear"></div>
								</div>
							</div>
							<!-- END REGISTER_LOGIN DIALOG -->
						</div>
					</div>
				</div>
				
				<!-- HEADER MENU -->
				<div class="yt-header-middle">
					<div class="container">
						<div class="row">
							<!-- LOGO -->
							<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12 logo-wrapper">
								<a href="{{ URL::to('/')}}">
									@if($result['commonContent']['setting'][78]->value=='name')
                        	<?=stripslashes($result['commonContent']['setting'][79]->value)?>
                        @endif
                        
                        @if($result['commonContent']['setting'][78]->value=='logo')
                            <img src="{{asset('').$result['commonContent']['setting'][15]->value}}" alt="<?=stripslashes($result['commonContent']['setting'][79]->value)?>" width="140" height="57">
                        @endif
									<!-- <img src="images/logo-blue.png" alt="sw shoppy" width="140" height="57"/> -->
								</a>
							</div>
							<!-- END LOGO -->
							
							<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 yt-megamenu">
								<div class="yt-header-under">
									<nav id="primary-menu" class="primary-menu">
										<div class="yt-menu">
											<div class="navbar-inner navbar-inverse">
												<div class="resmenu-container">
													<!-- LIST MOBILE MENU ITEMS -->
													<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
														<span class="sr-only">Categories</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
													
													<div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
														<ul id="menu-primary-menu" class="flytheme_resmenu">
															<li class="active res-dropdown menu-blog">
																<a class="item-link dropdown-toggle" href="#">Home</a>
																
															</li>
															
															<li class="res-dropdown menu-shop">
																<a class="item-link " href="#">Shop</a>
																
																
																
															</li>
															
															<li class="style3 res-dropdown menu-daily-deals">
																<a class="item-link dropdown-toggle" href="#">Daily Deals</a>
																<span class="show-dropdown"></span>
																
																<ul class="dropdown-resmenu">
																	<li class="menu-product-tab">
																		<a href="#">Product tab</a>
																	</li>
																</ul>
															</li>
															
															<li class="res-dropdown menu-blog">
																<a class="item-link dropdown-toggle" href="#">Blog</a>
																<span class="show-dropdown"></span>
																
																<ul class="dropdown-resmenu">
																	<li class="res-dropdown menu-blog-layouts">
																		<a class="item-link dropdown-toggle" href="#">Blog Layouts</a>
																		<span class="show-dropdown"></span>
																		
																		<ul class="dropdown-resmenu">
																			<li class="menu-full-width">
																				<a href="home_style_1_blog_full_width_grid.html">Full Width</a>
																			</li>
																			
																			<li class="menu-left-sidebar">
																				<a href="home_style_1_blog_left_sidebar_list.html">Left Sidebar</a>
																			</li>
																			
																			<li class="menu-right-sidebar">
																				<a href="home_style_1_blog_3_columns_grid.html">3 Columns Grid</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															
															<li class="res-dropdown menu-pages">
																<a class="item-link dropdown-toggle" href="#">Pages</a>
																<span class="show-dropdown"></span>
																<ul class="dropdown-resmenu">
																	<li class="res-dropdown menu-bonus-pages-1">
																		<a class="item-link dropdown-toggle" href="#">Bonus Pages 1</a>
																		<span class="show-dropdown"></span>
																		
																		<ul class="dropdown-resmenu">
																			<li class="menu-forum">
																				<a href="home_style_1_forum.html">Forum</a>
																			</li>
																			
																			<li class="menu-topic">
																				<a href="home_style_1_topic.html">Topic</a>
																			</li>
																		</ul>
																	</li>
																	
																	<li class="res-dropdown menu-about-us">
																		<a class="item-link dropdown-toggle" href="#">About Us</a>
																		<span class="show-dropdown"></span>
																		
																		<ul class="dropdown-resmenu">
																			<li class="menu-about-us-1">
																				<a href="home_style_1_about_us_1.html">About us 1</a>
																			</li>
																			
																			<li class="menu-about-us-4">
																				<a href="home_style_1_about_us_4.html">About us 2</a>
																			</li>
																		</ul>
																	</li>
																	
																	<li class="res-dropdown menu-contact-us">
																		<a class="item-link dropdown-toggle" href="#">Contact Us</a>
																		<span class="show-dropdown"></span>
																		
																		<ul class="dropdown-resmenu">
																			<li class="menu-contact-us-1">
																				<a href="home_style_1_contact_us_1.html">Contact Us 1</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															
															<li class="res-dropdown menu-portfolios">
																<a class="item-link dropdown-toggle" href="#">Contact Us</a>
																<!-- <span class="show-dropdown"></span> -->
																
																<!-- <ul class="dropdown-resmenu">
																	<li class="menu-product-tab">
																		<a href="home_style_1_portfolios_2_columns.html">Portfolio 2 columns</a>
																	</li>
																	
																	<li class="menu-product-tab">
																		<a href="home_style_1_portfolios_3_columns.html">Portfolio 3 columns</a>
																	</li>
																	
																	<li class="menu-product-tab">
																		<a href="home_style_1_portfolios_4_columns.html">Portfolio 4 columns</a>
																	</li>
																</ul> -->
															</li>
														</ul>
													</div>
													<!-- END LIST MOBILE MENU ITEMS -->
												</div>
												
												<!-- LIST NORMAL MENU ITEMS -->
												<ul id="menu-primary-menu-1" class="nav nav-pills nav-mega flytheme-menures">
													<li class="active dropdown menu-portfolios ya-menu-custom level1">
														<a href="{{url('/')}}" class="item-link ">
															<span class="have-title">
																<span class="menu-title">Home</span>
															</span>
														</a>
													
														
													</li>	
																
													<li class="dropdown menu-shop ya-mega-menu level1">
														<a href="{{url('shop')}}" class="item-link ">
															<span class="have-title">
																<span class="menu-title">Shop</span>
															</span>
														</a>
													
														
													</li>
												
													<li class="style3 dropdown menu-daily-deals ya-mega-menu level1">
														<a href="#" class="item-link dropdown-toggle">
															<span class="have-title">
																<span class="menu-title">Daily Deals</span>
															</span>
														</a>
														
														<ul class="dropdown-menu nav-level1 four-column">
															<li class="four-column menu-product-tab">
																<div class="listing-tab-shortcode">
																	<div class="tabbable tabs">
																		<ul class="nav nav-tabs">
																			<li class="active">
																				<a href="#listing_category_01" data-toggle="tabs">Apparel & Accessories</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_02" data-toggle="tabs">Basketballs</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_03" data-toggle="tabs">Memory Cards</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_04" data-toggle="tabs">Drivers</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_05" data-toggle="tabs">Golf</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_06" data-toggle="tabs">Samsung</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_07" data-toggle="tabs">Jiteme catem</a>
																			</li>
																			
																			<li class="">
																				<a href="#listing_category_08" data-toggle="tabs">Fashion</a>
																			</li>
																		</ul>
																		
																		<div class="tab-content">
																			<div id="listing_category_01" class="tab-pane clearfix active">
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<span class="onsale">Sale!</span>
																								<a href="home_style_1_shop_product_default.html">
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" src="images/12-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12" 
																												src="images/12-300x300.jpg"
																												srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="listing_category_02" class="tab-pane clearfix">
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="19" 
																												src="images/19-300x300.jpg" 
																												srcset="images/19-300x300.jpg 300w, images/19-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="External/Affiliate product">External/Affiliate product</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<span class="woocommerce-Price-amount amount">
																											<span class="woocommerce-Price-currencySymbol">$</span>180.00
																										</span>
																									</span>
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12" 
																												src="images/12-300x300.jpg" 
																												srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Huma saren mazem kae">Huma saren mazem kae</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<span class="woocommerce-Price-amount amount">
																											<span class="woocommerce-Price-currencySymbol">$</span>4.99
																										</span>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="listing_category_03" class="tab-pane clearfix">
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="4" 
																												src="images/4-300x300.jpg" 
																												srcset="images/4-300x300.jpg 300w, images/4-260x260.jpg 260w, images/4.jpg 600w, images/4-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
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
																			</div>
																			
																			<div id="listing_category_04" class="tab-pane clearfix">
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<span class="onsale">Sale!</span>
																								<a href="home_style_1_shop_product_default.html">
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="30_1" 
																												src="images/30_1-300x300.jpg" 
																												srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Umas tika lorem narem">Umas tika lorem narem</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<del>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>545.00
																											</span>
																										</del> 
																										
																										<ins>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>345.00
																											</span>
																										</ins>
																									</span>
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="31" 
																												src="images/31-300x300.jpg" 
																												srcset="images/31-300x300.jpg 300w, images/31-260x260.jpg 260w, images/31.jpg 600w, images/31-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Euismod leo diam nazem">Euismod leo diam nazem</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<span class="woocommerce-Price-amount amount">
																											<span class="woocommerce-Price-currencySymbol">$</span>510.00
																										</span>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="listing_category_05" class="tab-pane clearfix">
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content"><span style="width:0px"></span></div>
																								
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="6_5" 
																												src="images/6_5-300x300.jpg" 
																												srcset="images/6_5-300x300.jpg 300w, images/6_5-260x260.jpg 260w, images/6_5.jpg 600w, images/6_5-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:70px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Rika mire pisan">Rika mire pisan</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<span class="woocommerce-Price-amount amount">
																											<span class="woocommerce-Price-currencySymbol">$</span>0.99
																										</span>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="listing_category_06" class="tab-pane clearfix">
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<span class="onsale">Sale!</span>
																								<a href="home_style_1_shop_product_default.html">
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12" 
																												src="images/12-300x300.jpg" 
																												srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																								
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:56px"></span>
																								</div>
																								
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
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="listing_category_07" class="tab-pane clearfix">
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<span class="onsale">Sale!</span>
																								<a href="home_style_1_shop_product_default.html">
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="30_1" 
																												src="images/30_1-300x300.jpg" 
																												srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Umas tika lorem narem">Umas tika lorem narem</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<del>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>545.00
																											</span>
																										</del> 
																										
																										<ins>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>345.00
																											</span>
																										</ins>
																									</span>
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
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="17" 
																												src="images/17-300x300.jpg" 
																												srcset="images/17-300x300.jpg 300w, images/17-260x260.jpg 260w, images/17.jpg 600w, images/17-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Morbi vulputate diam">Morbi vulputate diam</a>
																								</h4>
																								
																								<div class="item-price">
																									<span>
																										<del>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>560.00
																											</span>
																										</del> 
																										
																										<ins>
																											<span class="woocommerce-Price-amount amount">
																												<span class="woocommerce-Price-currencySymbol">$</span>520.00
																											</span>
																										</ins>
																									</span>																							
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																				
																			<div id="listing_category_08" class="tab-pane clearfix">
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<span class="onsale">Sale!</span>
																								<a href="home_style_1_shop_product_default.html">
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="1" 
																												src="images/1-2-300x300.jpg" 
																												srcset="images/1-2-300x300.jpg 300w, images/1-2-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Nulla in diam">Nulla in diam</a>
																								</h4>
																								
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
																				
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<a>
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="2" 
																												src="images/2-2-300x300.jpg" 
																												srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Praesent metus elit">Praesent metus elit</a>
																								</h4>
																								
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
																				
																				<div class="item">
																					<div class="item-wrap">
																						<div class="item-detail">
																							<div class="item-img products-thumb">
																								<a>
																									<div class="product-thumb-hover">
																										<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="2" 
																												src="images/2-2-300x300.jpg" 
																												srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w" 
																												sizes="(max-width: 300px) 100vw, 300px" />
																									</div>
																								</a>
																							</div>
																							
																							<div class="item-content">
																								<div class="reviews-content">
																									<span style="width:0px"></span>
																								</div>
																								
																								<h4>
																									<a href="home_style_1_shop_product_default.html" title="Praesent metus elit">Praesent metus elit</a>
																								</h4>
																								
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
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
												
													<li class="dropdown menu-portfolios ya-menu-custom level1">
														<a href="#" class="item-link dropdown-toggle">
															<span class="have-title">
																<span class="menu-title">Blog</span>
															</span>
														</a>
													
														<ul class="dropdown-menu nav-level1 one-column">
															<li class="one-column menu-portfolio-2-columns">
																<a href="home_style_1_blog_full_width_grid.html">
																	<span class="have-title">
																		<span class="menu-title">Full Width Grid</span>
																	</span>
																</a>
															</li>
															
															<li class="one-column menu-portfolio-3-columns">
																<a href="home_style_1_blog_left_sidebar_list.html">
																	<span class="have-title">
																		<span class="menu-title">Left Sidebar Grid</span>
																	</span>
																</a>
															</li>
															
															<li class="one-column menu-portfolio-4-columns">
																<a href="home_style_1_blog_3_columns_grid.html">
																	<span class="have-title">
																		<span class="menu-title">3 Columns Grid</span>
																	</span>
																</a>
															</li>
														</ul>
													</li>											
															
													<li class="dropdown menu-pages ya-mega-menu level1">
														<a href="#" class="item-link dropdown-toggle">
															<span class="have-title">
																<span class="menu-title">Pages</span>
															</span>
														</a>
														
														<ul class="dropdown-menu nav-level1 three-column">	
															<li class="dropdown-submenu three-column menu-bonus-pages-1">
																<a>
																	<span class="have-title">
																		<span class="menu-title">Bonus Pages 1</span>
																	</span>
																</a>
																
																<ul class="dropdown-sub nav-level2">
																	<li class="menu-forum">
																		<a href="home_style_1_forum.html">
																			<span class="have-title">
																				<span class="menu-title">Forum</span>
																			</span>
																		</a>
																	</li>
																	
																	<li class="menu-topic">
																		<a href="home_style_1_topic.html">
																			<span class="have-title">
																				<span class="menu-title">Topic</span>
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
																		
															<li class="dropdown-submenu three-column menu-about-us">
																<span class="have-title">
																	<span class="menu-title">About Us</span>
																</span>
																
																<ul class="dropdown-sub nav-level2">
																	<li class="menu-about-us-1">
																		<a href="home_style_1_about_us_1.html">
																			<span class="have-title">
																				<span class="menu-title">About us 1</span>
																			</span>
																		</a>
																	</li>
																	
																	<li class="menu-about-us-4">
																		<a href="home_style_1_about_us_4.html">
																			<span class="have-title">
																				<span class="menu-title">About us 2</span>
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
															
															<li class="dropdown-submenu three-column menu-contact-us">
																<span class="have-title">
																	<span class="menu-title">Contact Us</span>
																</span>
																
																<ul class="dropdown-sub nav-level2">
																	<li class="menu-contact-us-1">
																		<a href="home_style_1_contact_us_1.html">
																			<span class="have-title">
																				<span class="menu-title">Contact Us 1</span>
																			</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>						
															
													<li class="dropdown menu-portfolios ya-menu-custom level1">
														<a href="#" class="item-link ">
															<span class="have-title">
																<span class="menu-title">Contact Us</span>
															</span>
														</a>
														
														
													</li>
												</ul>
											</div>
										</div>
									</nav>
								
									<!-- SHOPPING CART -->
									<div class="mini-cart-header">
										<div class="top-form top-form-minicart minicart-product-style pull-right">
											<div class="top-minicart pull-right">
												<a class=" cart-header dropdown head-cart-content" href="#" title="View your shopping cart">			
													<!-- <span class="minicart-number">0</span> item - 
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>0.00
													</span> -->					
												</a>
											</div>
										</div>
									</div>
									<!-- END SHOPPING CART -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END HEADER MENU -->
				
				<!-- HEADER CATEGORIES SEARCH -->
				@include('frontend.common.left_sidebar')
			</div>
		</div>