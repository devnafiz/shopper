<div class="yt-header-under-2">
					<div class="container">
						<div class="row yt-header-under-wrap">
							<div class="yt-main-menu col-md-12">
								<div class="header-under-2-wrapper">
									<div class="yt-searchbox-vermenu">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-sm-3 col-xs-3 vertical-mega">
												<!-- CATEGORIES -->
												<div class="ver-megamenu-header">
													<div class="mega-left-title">
														<strong>Categories4</strong>
													</div>
													
													<div class="resmenu-container">
														<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuleftmenu">
															<span class="sr-only">Categories</span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
														
														<div id="ResMenuleftmenu" class="collapse menu-responsive-wrapper">
															<ul id="menu-left-menu" class="flytheme_resmenu">
																 @foreach($result['commonContent']['categories'] as $categories_data)
																<li class="res-dropdown menu-smartphones-accessories">
																	<a class="item-link dropdown-toggle" href="#">Smartphones Accessories</a>
																	<span class="show-dropdown"></span>
																	@if(count($categories_data->sub_categories)>0)
																	<ul class="dropdown-resmenu">
																		@foreach($categories_data->sub_categories as $sub_categories_data)  
																		<li class="res-dropdown menu-categories-1">
																			<a class="item-link dropdown-toggle" href="#">Categories 1</a>
																			<span class="show-dropdown"></span>
																			
																			
																		</li>
																		 @endforeach 
																		
																		
																		
																	</ul>
																	 @endif
																</li>
																@endforeach
																<li class="res-dropdown menu-computers-networking">
																	<a class="item-link dropdown-toggle" href="#">Computers & Networking</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="menu-lorem-sed-fringilla">
																			<a href="#">Lorem sed fringilla</a>
																		</li>
																		
																		<li class="menu-vestibulum-dignissim">
																			<a href="#">Vestibulum dignissim</a>
																		</li>
																		
																		<li class="res-dropdown menu-cum-sociis-natoque">
																			<a class="item-link dropdown-toggle" href="#">Cum sociis natoque</a>
																			<span class="show-dropdown"></span>
																			
																			<ul class="dropdown-resmenu">
																				<li class="menu-vivamus-sit-amet">
																					<a href="#">Vivamus sit amet</a>
																				</li>
																				
																				<li class="menu-morbi-at-lobortis">
																					<a href="#">Morbi at lobortis</a>
																				</li>
																				
																				<li class="menu-suspendisse-suscipit">
																					<a href="#">Suspendisse suscipit</a>
																				</li>
																				
																				<li class="menu-ullamcorper-mi">
																					<a href="#">Ullamcorper mi</a>
																				</li>
																				
																				<li class="menu-efficitur-libero">
																					<a href="#">Efficitur libero</a>
																				</li>
																				
																				<li class="menu-consectetur-ex">
																					<a href="#">Consectetur ex</a>
																				</li>
																			</ul>
																		</li>
																		
																		<li class="menu-fusce-ultricies">
																			<a href="#">Fusce ultricies</a>
																		</li>
																		
																		<li class="menu-vestibulum-ante">
																			<a href="#">Vestibulum ante</a>
																		</li>
																		
																		<li class="menu-aliquam-iaculis">
																			<a href="#">Aliquam iaculis</a>
																		</li>
																	</ul>
																</li>
																
																<li class="res-dropdown menu-smartphones-tablets">
																	<a class="item-link dropdown-toggle" href="#">Smartphones & Tablets</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="menu-samsung">
																			<a href="#">Samsung</a>
																		</li>
																		
																		<li class="menu-nokia">
																			<a href="#">Nokia</a>
																		</li>
																		
																		<li class="menu-apple">
																			<a href="#">Apple</a>
																		</li>
																		
																		<li class="menu-blackberry">
																			<a href="#">BlackBerry</a>
																		</li>
																	</ul>
																</li>
																
																<li class="menu-car-accessories">
																	<a class="item-link" href="#">Car Accessories</a>
																</li>
																
																<li class="menu-lights-lighting">
																	<a class="item-link" href="#">Lights & Lighting</a>
																</li>
																
																<li class="menu-home-office">
																	<a class="item-link" href="#">Home & Office</a>
																</li>
																
																<li class="res-dropdown menu-sports-outdoors">
																	<a class="item-link dropdown-toggle" href="#">Sports & Outdoors</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="res-dropdown menu-categories-1">
																			<a class="item-link dropdown-toggle" href="#">Categories 1</a>
																			<span class="show-dropdown"></span>
														 
																			<ul class="dropdown-resmenu">
																				<li class="menu-camera-camcorders">
																					<a href="#">Camera & Camcorders</a>
																				</li>
																				
																				<li class="menu-cosmetic">
																					<a href="#">Cosmetic</a>
																				</li>
																				
																				<li class="menu-electronic">
																					<a href="#">Electronic</a>
																				</li>
																			
																				<li class="menu-laptop-computer">
																					<a href="#">Laptop & Computer</a>
																				</li>
																			
																				<li class="menu-medical-healthcare">
																					<a href="#">Medical & Healthcare</a>
																				</li>
																			
																				<li class="menu-consectetur-adipisc">
																					<a href="#">Consectetur adipisc</a>
																				</li>
																			</ul>
																		</li>
																		
																		<li class="res-dropdown menu-categories-2">
																			<a class="item-link dropdown-toggle" href="#">Categories 2</a>
																			<span class="show-dropdown"></span>
																			
																			<ul class="dropdown-resmenu">
																				<li class="menu-electronic">
																					<a href="#">Electronic</a>
																				</li>
																				
																				<li class="menu-suits-blazer">
																					<a href="#">Suits & Blazer</a>
																				</li>
																				
																				<li class="menu-shoes">
																					<a href="#">Shoes</a>
																				</li>
																				
																				<li class="menu-smartphone-tablets">
																					<a href="#">Smartphone & Tablets</a>
																				</li>
																				
																				<li class="menu-sport-game">
																					<a href="#">Sport & Game</a>
																				</li>
																				
																				<li class="menu-maecenas-fringilla">
																					<a href="#">Maecenas fringilla</a>
																				</li>
																			</ul>
																		</li>
																		
																		<li class="res-dropdown menu-categories-3">
																			<a class="item-link dropdown-toggle" href="#">Categories 3</a>
																			<span class="show-dropdown"></span>
																			
																			<ul class="dropdown-resmenu">
																				<li class="menu-camera-camcorders">
																					<a href="#">Camera & Camcorders</a>
																				</li>
																				
																				<li class="menu-cosmetic">
																					<a href="#">Cosmetic</a>
																				</li>
																				
																				<li class="menu-electronic">
																					<a href="#">Electronic</a>
																				</li>
																				
																				<li class="menu-laptop-computer">
																					<a href="#">Laptop & Computer</a>
																				</li>
																				
																				<li class="menu-medical-healthcare">
																					<a href="#">Medical & Healthcare</a>
																				</li>
																				
																				<li class="menu-magna-blandit">
																					<a href="#">Magna blandit</a>
																				</li>
																			</ul>
																		</li>
																		
																		<li class="res-dropdown menu-categories-4">
																			<a class="item-link dropdown-toggle" href="#">Categories 4</a>
																			<span class="show-dropdown"></span>
																			
																			<ul class="dropdown-resmenu">
																				<li class="menu-electronic">
																					<a href="#">Electronic</a>
																				</li>
																				
																				<li class="menu-suits-blazer">
																					<a href="#">Suits & Blazer</a>
																				</li>
																				
																				<li class="menu-shoes">
																					<a href="#">Shoes</a>
																				</li>
																				
																				<li class="menu-smartphone-tablets">
																					<a href="#">Smartphone & Tablets</a>
																				</li>
																				
																				<li class="menu-sport-game">
																					<a href="#">Sport & Game</a>
																				</li>
																				
																				<li class="menu-donec-venenatis">
																					<a href="#">Donec venenatis</a>
																				</li>
																			</ul>
																		</li>
																		
																		<li class="menu-img-menu">
																			<a href="#">img-menu</a>
																		</li>
																		
																		<li class="menu-html-menu">
																			<a href="#">html-menu</a>
																		</li>
																	</ul>
																</li>
																
																<li class="menu-apparel-accessories">
																	<a class="item-link" href="#">Apparel & Accessories</a>
																</li>
																
																<li class="menu-intimate-apparel">
																	<a class="item-link" href="#">Intimate Apparel</a>
																</li>
																
																<li class="res-dropdown menu-health-beauty">
																	<a class="item-link dropdown-toggle" href="#">Health & Beauty</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="menu-loreal">
																			<a href="#">L&#8217;Oreal</a>
																		</li>
																		
																		<li class="menu-ponds">
																			<a href="#">Pond&#8217;s</a>
																		</li>
																		
																		<li class="menu-ohui">
																			<a href="#">Ohui</a>
																		</li>
																		
																		<li class="menu-essance">
																			<a href="#">Essance</a>
																		</li>
																	</ul>
																</li>
																
																<li class="res-dropdown menu-toys-hobbies">
																	<a class="item-link dropdown-toggle" href="#">Toys & Hobbies</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="menu-academy">
																			<a href="#">Academy</a>
																		</li>
																		
																		<li class="menu-bachmann">
																			<a href="#">Bachmann</a>
																		</li>
																		
																		<li class="menu-bepuzzled">
																			<a href="#">Bepuzzled</a>
																		</li>
																		
																		<li class="menu-dimensions">
																			<a href="#">Dimensions</a>
																		</li>
																		
																		<li class="menu-fashion-angels">
																			<a href="#">Fashion Angels</a>
																		</li>
																		
																		<li class="menu-laser-pegs">
																			<a href="#">Laser Pegs</a>
																		</li>
																	</ul>
																</li>
																 
																<li class="res-dropdown menu-cameras-camcorders">
																	<a class="item-link dropdown-toggle" href="#">Cameras & Camcorders</a>
																	<span class="show-dropdown"></span>
																	
																	<ul class="dropdown-resmenu">
																		<li class="menu-canon-camera">
																			<a href="#">Canon Camera</a>
																		</li>
																		
																		<li class="menu-sony-camera">
																			<a href="#">Sony Camera</a>
																		</li>
																		
																		<li class="menu-nikon-camera">
																			<a href="#">Nikon Camera</a>
																		</li>
																		
																		<li class="menu-fujifilm-camera">
																			<a href="#">Fujifilm Camera</a>
																		</li>
																		
																		<li class="menu-leica-camera">
																			<a href="#">Leica Camera</a>
																		</li>
																	</ul>
																</li>
																
																<li class="menu-jewelry-watches">
																	<a class="item-link" href="#">Jewelry & Watches</a>
																</li>
																
																<li class="menu-consumer-electronics">
																	<a class="item-link" href="#">Consumer Electronics</a>
																</li>
																
																<li class="menu-mobiles">
																	<a class="item-link" href="#">Mobiles</a>
																</li>
															</ul>
														</div>
													</div>
													
													<ul id="menu-left-menu-1" class="vertical-megamenu flytheme-menures">
														 @foreach($result['commonContent']['categories'] as $categories_data)
														<li class="dropdown menu-smartphones-accessories ya-mega-menu level1">
															<a href="#" class="item-link  @if(count($categories_data->sub_categories)>0) dropdown-toggle @endif">
																<span class="have-title">
																	<span class="menu-title">{{$categories_data->name}}</span>
																</span>
															</a>
															 @if(count($categories_data->sub_categories)>0)
															<ul class="dropdown-menu nav-level1 one-column">
																@foreach($categories_data->sub_categories as $sub_categories_data) 
																<li class="dropdown-submenu one-column menu-categories-1">
																	<a href="{{ URL::to('/shop')}}?category={{$sub_categories_data->sub_slug}}">
																				<span class="have-title">
																					<span class="menu-title">{{$sub_categories_data->sub_name}}</span>
																				</span>
																	</a>
																
																	
																</li>
																@endforeach 
															</ul>
															 @endif
														</li>	
														@endforeach		
														
														
													  
														
													  
														
														
														
													  
														
													</ul>
												</div>
											</div>
											
											<div class="search-pro col-lg-9 col-md-8 col-sm-9 col-xs-9 no-padding-l">
												<a class="phone-icon-search fa fa-search" href="#" title="Search"></a>
												
												<div id="sm_serachbox_pro" class="sm-serachbox-pro">
													<div class="sm-searbox-content">
														<form method="get" id="searchform_special" action="#">
															<div class="form-search">
																<div class="cat-wrapper">
																	<div class="selector" id="uniform-cat">
																		<label class="label-search">
																			<select name="search_category" class="s1_option">
																				<option>All Categories</option>
																				<option>Smartphones & Tablets</option>
																				<option>Smartphones Accessories</option>
																				<option>Computers & Networking</option>
																				<option>Car Accessories</option>
																				<option>Consumer Electronics</option>
																				<option>Jewelry & Watches</option>
																				<option>Electronic</option>
																				<option>Mobiles</option>
																				<option>Computer</option>
																				<option>Sports</option>
																				<option>MenSell</option>
																				<option>Vesture</option>
																				<option>Women</option>
																				<option>Fashion</option>
																				<option>Watches</option>
																				<option>Purses</option>
																				<option>Sports & Outdoors</option>
																				<option>Lights & Lighting</option>
																				<option>Home & Office</option>
																				<option>Apparel & Accessories</option>
																				<option>Intimate Apparel</option>
																				<option>Health & Beauty</option>
																				<option>Toys & Hobbies</option>
																				<option>Cameras & Camcorders</option>
																				<option>Mobile</option>
																				<option>Accessories</option>
																				<option>Mobile Brands</option>
																				<option>Electronics</option>
																				<option>Computer & Accessories</option>
																				<option>Brand</option>
																				<option>Golf</option>
																				<option>Football</option>
																				<option>Tennis</option>
																				<option>Skiboarding</option>
																				<option>Aliquam</option>
																				<option>Apparel</option>
																				<option>Helmets</option>
																				<option>Mauris</option>
																				<option>Nullam viverra</option>
																				<option>Pellentesque</option>
																				<option>Apparel</option>
																				<option>Backboard</option>
																				<option>Basketballs</option>
																				<option>Footwear</option>
																				<option>Jiteme catem</option>
																				<option>Footballs</option>
																				<option>Mouth Guards</option>
																				<option>Pads Protection</option>
																				<option>Consectetur</option>
																				<option>Bags</option>
																				<option>Balls</option>
																				<option>Drivers</option>
																				<option>Jiteme</option>
																				<option>Jiteme catem</option>
																				<option>Accessories</option>
																				<option>Luxury ferume</option>
																				<option>Skin care</option>
																				<option>Hair care</option>
																				<option>jewelry</option>
																				<option>rings</option>
																				<option>jewelry accessories</option>
																				<option>Men</option>
																				<option>watch collection</option>
																				<option>T-shirt design</option>
																				<option>Bag collection</option>
																				<option>women dresses</option>
																				<option>Jeans collection</option>
																				<option>watch</option>
																				<option>shoes</option>
																				<option>Kid clothes</option>
																				<option>jeans</option>
																				<option>shorts</option>
																				<option>under wear</option>
																				<option>sport wear</option>
																				<option>toys & games</option>
																				<option>health & baby care</option>
																				<option>Women Style</option>
																				<option>Men Style</option>
																				<option>Kid style</option>
																				<option>Living room</option>
																				<option>Sofa</option>
																				<option>Appliances</option>
																				<option>Office</option>
																				<option>Kitchens</option>
																				<option>Bedroom</option>
																				<option>Sports Shoes</option>
																			</select>
																		</label>
																	</div>
																</div>
																
																<div class="input-search">
																	<input type="text" value="" placeholder="Search for products" />
																</div>
																
																<button type="submit" title="Search" class="fa fa-search button-search-pro form-button"></button>
															</div>
														</form>
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
				<!-- END HEADER CATEGORIES SEARCH -->