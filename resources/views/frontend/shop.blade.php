<!DOCTYPE html>
<html lang="en">
@include('frontend.common.meta')

<body id="body_wrapper" class="archive woocommerce woocommerce-page vc_responsive">	
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
	
	<!-- HEADER -->
		@include('frontend.common.header')
	<!-- END HEADER -->
	
	<!-- MAIN -->
	<div id="main" class="theme-clearfix" role="document">
		<div class="breadcrumbs theme-clearfix">
			<div class="container">
				<ul class="breadcrumb">
					<li>
						<a id="home" href="home_style_1.html">Home</a>
						<span class="go-page"></span>
					</li>
					
					<li class="active">
						<span>Products</span>
					</li>
				</ul>
			</div>
		</div>

		<div class="container">
			<div class="row">
				@include('frontend.common.shop_sidebar')
				
				<div id="contents" class="content col-lg-9 col-md-8 col-sm-0" role="main">
					<div id="container">
						<form method="get" enctype="multipart/form-data" id="load_products_form">
							 @if(!empty(app('request')->input('search')))
                <input type="hidden"  name="search" value="{{ app('request')->input('search') }}">
               @endif
               @if(!empty(app('request')->input('category')))
                <input type="hidden"  name="category" value="@if(app('request')->input('category')!='all'){{ app('request')->input('category') }} @endif">
               @endif
                <input type="hidden"  name="load_products" value="1">   

						<div id="content" role="main">
							<div class="products-wrapper">
								<div class="image-category">
									<div class="textwidget">
										<img src="images/mobile-cat.png" alt="">
									</div>
								</div>
								
								<div class="listing-title">
									<h1>
										<span>Shop</span>
									</h1>
								</div>

								@if(!empty(app('request')->input('search')))
                                <div class="search-result">
                                    <h4>@lang('website.Search result for') '{{app('request')->input('search')}}' @if($result['products']['total_record']>0) {{$result['products']['total_record']}} @else 0 @endif @lang('website.item found') <h4>
                                </div>
                            @endif
								 @if($result['products']['total_record']>0)
								<div class="products-nav">
									<ul class="view-mode-wrap">
										<li class="view-grid sel">
											<a></a>
										</li>
										
										<li class="view-list">
											<a></a>
										</li>
									</ul>
									
									<div class="catalog-ordering clearfix">
										<div class="orderby-order-container">
											<ul class="orderby order-dropdown">
												<!-- <li>
													<span class="current-li">
														<span class="current-li-content">
															<a>@lang('website.Sort')</a>
														</span>
													</span> -->
												<select class="col-12 col-lg-6 form-control sortby" name="type">
													 <option value="" @if(app('request')->input('type')=='desc') selected @endif>@lang('website.Sort')</option>
                                                <option value="desc" @if(app('request')->input('type')=='desc') selected @endif>@lang('website.Newest')</option>
                                                <option value="atoz" @if(app('request')->input('type')=='atoz') selected @endif>@lang('website.A - Z')</option>
                                                <option value="ztoa" @if(app('request')->input('type')=='ztoa') selected @endif>@lang('website.Z - A')</option>
                                                <option value="hightolow" @if(app('request')->input('type')=='hightolow') selected @endif>@lang('website.Price: High To Low')</option>
                                                <option value="lowtohigh" @if(app('request')->input('type')=='lowtohigh') selected @endif>@lang('website.Price: Low To High')</option>
                                                <option value="topseller" @if(app('request')->input('type')=='topseller') selected @endif>@lang('website.Top Seller')</option>
                                                <option value="special" @if(app('request')->input('type')=='special') selected @endif>@lang('website.Special Products')</option>
                                                <option value="mostliked" @if(app('request')->input('type')=='mostliked') selected @endif>@lang('website.Most Liked')</option>
                                            </select>
													
													<!-- <ul style="display: none;">
														<li>
															<a href="#">Sort by Default</a>
														</li>
														
														<li class="current">
															<a href="#">Sort by Popularity</a>
														</li>
														
														<li>
															<a href="#">Sort by Rating</a>
														</li>
														
														<li>
															<a href="#">Sort by Date</a>
														</li>
														
														<li>
															<a href="#">Sort by Price</a>
														</li>
													</ul> -->
												<!-- </li> -->
											</ul>
											
											
											
											<ul class="sort-count order-dropdown">
												<li>
													
													<select class="col-12 col-lg-3 form-control sortby" name="limit">
                                                <option value="15" @if(app('request')->input('limit')=='15') selected @endif>15</option>
                                                <option value="30" @if(app('request')->input('limit')=='30') selected @endif>30</option>
                                                <option value="60" @if(app('request')->input('limit')=='60') selected @endif>60</option>
                                            </select>
													<!-- <ul style="display: none;">
														<li class="current">
															<a href="#">8</a>
														</li>
														
														<li>
															<a href="#">16</a>
														</li>
														
														<li>
															<a href="#">24</a>
														</li>
													</ul> -->
												</li>
											</ul>
										</div>
									</div>
									
									<nav class="woocommerce-pagination">
										<ul class="page-numbers">
											<li>
												<span class="page-numbers current">1</span>
											</li>
											
											<li>
												<a class="page-numbers" href="">2</a>
											</li>
											
											<li>
												<span class="page-numbers dots">...</span>
											</li>
											
											<li>
												<a class="page-numbers" href="">28</a>
											</li>
											
											<li>
												<a class="next page-numbers" href="">?</a>
											</li>
									   </ul>
									</nav>
								</div>
								
								<div class="clear"></div>
								
								<ul class="products-loop grid clearfix">
									
									<li class="clearfix divider-product"></li>
									@if($result['products']['success']==1)
                                    @foreach($result['products']['product_data'] as $key=>$products)
									
									<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<div class="products-entry clearfix">
											<div class="products-thumb">
												<a href="" class="woocommerce-LoopProduct-link">
													<?php
                                                $current_date = date("Y-m-d", strtotime("now"));
                                                $string = substr($products->products_date_added, 0, strpos($products->products_date_added, ' '));
                                                $date=date_create($string);
                                                date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
                                                $after_date = date_format($date,"Y-m-d");                                        
                                                if($after_date>=$current_date){
                                                    print '<span class="onsale">New</span>';
                                                }                                        
                                                if(!empty($products->discount_price)){
                                                    $discount_price = $products->discount_price;	
                                                    $orignal_price = $products->products_price;	
													
                                                    if(($orignal_price+0)>0){
                                                    	$discounted_price = $orignal_price-$discount_price;
                                                    	$discount_percentage = $discounted_price/$orignal_price*100;
													}else{
														$discount_percentage = 0;
													}
                                                    echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
                                                }                                             
                                            ?>
													<!-- <span class="onsale">Sale!</span> -->
												</a>
												
												<a href="home_style_1_shop_product_default.html">
													<div class="product-thumb-hover">
														<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																src="{{asset('').$products->products_image}}" alt="{{$products->products_name}}"
																srcset="images/2-3-300x300.jpg 300w, images/2-3-260x260.jpg 260w, images/2-3.jpg 600w, images/2-3-180x180.jpg 180w" 
																sizes="(max-width: 300px) 100vw, 300px" />
													</div>
												</a>
												
												<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
											</div>
											
											<div class="products-content">
												<div class="item-content">
													<h4>
														<a href="{{ URL::to('/product-detail/'.$products->products_slug)}}" title="Steak veniam">{{$products->products_name}} </a>
													</h4>
													
													<div class="reviews-content">
														<div class="star"></div>
													</div>
													
													<div class="item-price">
														<span>
                                                           


															<!-- <del>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span>86.00
																</span>
															</del>  -->
															
															<ins>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span> @if(!empty($products->discount_price))
		                                                            {{$web_setting[19]->value}}{{$products->discount_price+0}}
		                                                            <span> {{$web_setting[19]->value}}{{$products->products_price+0}}</span>
		                                                        @else
		                                                            {{$web_setting[19]->value}}{{$products->products_price+0}}
		                                                        @endif
																</span>
															</ins>
														</span>
													</div>
													
													<div class="desc std">
														<p></p>
													</div>
													
													<div class="item-bottom clearfix">
														<div class="yith-wcwl-add-to-wishlist">
															<div class="yith-wcwl-add-button show" style="display:block">
																<a href="" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
															</div>
															
															<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																<span class="feedback">Product added!</span>
																<a href="" rel="nofollow">Browse Wishlist</a>
															</div>
															
															<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																<span class="feedback">The product is already in the wishlist!</span>
																<a href="" rel="nofollow">Browse Wishlist</a>
															</div>
															
															<div style="clear:both"></div>
															<div class="yith-wcwl-wishlistaddresponse"></div>
														</div>
														
														<div class="clear"></div>
														@if(!in_array($products->products_id,$result['cartArray']))
														<a rel="nofollow" href="" class="button product_type_simple add_to_cart_button ajax_add_to_cart cart" products_id="{{$products->products_id}}">Add to cart</a>
														 @elseif($products->products_min_order>1)
														  <a class="btn btn-block btn-secondary" href="{{ URL::to('/product-detail/'.$products->products_slug)}}">@lang('website.View Detail')</a>
														  @else
														   <a rel="nofollow" href="" class="button product_type_simple add_to_cart_button ajax_add_to_cart cart" >@lang('website.Added')</a>

														   @endif
														<div class="woocommerce product compare-button">
															<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									
									</li>
									 @endforeach
                                    @endif
									
									
									
									
									
									
									
									
									
									
								<div class="products-nav">
									<ul class="view-mode-wrap">
										<li class="view-grid sel">
											<a></a>
										</li>
										
										<li class="view-list">
											<a></a>
										</li>
									</ul>
									
									<div class="catalog-ordering clearfix">
										<div class="orderby-order-container">
											<ul class="orderby order-dropdown">
												<li>
													<span class="current-li">
														<span class="current-li-content">
															<a>Sort by Popularity</a>
														</span>
													</span>

													<ul style="display: none;">
														<li>
															<a href="#">Sort by Default</a>
														</li>
														
														<li class="current">
															<a href="#">Sort by Popularity</a>
														</li>
														
														<li>
															<a href="#">Sort by Rating</a>
														</li>
														
														<li>
															<a href="#">Sort by Date</a>
														</li>
														
														<li>
															<a href="#">Sort by Price</a>
														</li>
													</ul>
												</li>
											</ul>
											
											<ul class="order">
												<li class="asc">
													<a href="#">
														<i class="icon-arrow-down"></i>
													</a>
												</li>
											</ul>
											
											<ul class="sort-count order-dropdown">
												<li>
													<span class="current-li">
														<a>8</a>
													</span>
													
													<ul style="display: none;">
														<li class="current">
															<a href="#">8</a>
														</li>
														
														<li>
															<a href="#">16</a>
														</li>
														
														<li>
															<a href="#">24</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
									
									<nav class="woocommerce-pagination">
										<ul class="page-numbers">
											<li>
												<span class="page-numbers current">1</span>
											</li>
											
											<li>
												<a class="page-numbers" href="">2</a>
											</li>
											
											<li>
												<span class="page-numbers dots">...</span>
											</li>
											
											<li>
												<a class="page-numbers" href="">28</a>
											</li>
											
											<li>
												<a class="next page-numbers" href="">?</a>
											</li>
										</ul>


									</nav>
								</div>
								@elseif(empty(app('request')->input('search')))
                                    <p>@lang('website.Record not found')</p>
                                @endif 
								<div class="clear"></div>
							</div>
						</div>
					</form><!--ajax form-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN -->
	
	<!-- FOOTER -->
	@include('frontend.common.footer')
		<!-- end : footer wrap-->
	</div>
	<!-- END FOOTER -->
	<a id="ya-totop" href="#" style="display: none;"></a>
	
	
	@include('frontend.common.script')
	<!-- <script src="{{asset('frontend/js/jquery-ui.js')}}"></script> -->
	<script type="text/javascript" src="{{asset('frontend/js/widget.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/mouse.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/slider.min.js')}}"></script>
	
	<script type="text/javascript">
		/* <![CDATA[ */
			var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"0","max_price":"0.99"};
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('frontend/js/woocommerce/price-slider.min.js')}}"></script>

</body>
</html>