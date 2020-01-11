@extends('frontend.layout')
@section('extra-css')
<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/prettyPhoto.css')}}" />
@endsection

@section('content')

	<div id="main" class="theme-clearfix" role="document">
			<div class="breadcrumbs theme-clearfix">
				<div class="container">
					<ul class="breadcrumb">
						<li>
							<a id="home" href="home_style_1.html">Home</a>
							<span class="go-page"></span>
						</li>
						 @if(!empty($result['category_name']) and !empty($result['sub_category_name']))
	                    	<li class="breadcrumb-item"><a href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
	                    	<li class="breadcrumb-item"><a href="{{ URL::to('/shop?category='.$result['sub_category_slug'])}}">{{$result['sub_category_name']}}</a></li>
		                    @elseif(!empty($result['category_name']) and empty($result['sub_category_name']))
		                    	<li class="breadcrumb-item"><a href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
		                    @endif
						
						<!-- <li>
							<a id="shop" href="home_style_1_shop_full_sidebar.html">Apparel & Accessories</a>
							<span class="go-page"></span>
						</li> -->
						
						<li class="active">
							<span>{{$result['detail']['product_data'][0]->products_name}}</span>
						</li>
					</ul>
				</div>
			</div> 

			<div class="container">
				<div class="row">
					<div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12 col-xs-12" role="main">
						<div id="container">
							<div id="content" role="main"  class="archive woocommerce woocommerce-page vc_responsive">
								<div class="single-product clearfix">
									<div itemscope="" id="product-01" class="product">
										<div class="single-product-top row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div id="product_img_01" class="product-images" data-rtl="false" data-vertical="true">
													<div class="product-images-container clearfix thumbnail-left">
														<div class="slider product-responsive-thumbnail" id="product_thumbnail_01">

															 @foreach( $result['detail']['product_data'][0]->images as $key=>$images )
															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
																			src="{{asset('').$images->image }}" 
																			srcset="{{asset('').$images->image }}" 
																			sizes="(max-width: 180px) 100vw, 180px" />	
																</div>
															</div>
															@endforeach
															
														
															
														</div>
														
														<!-- Image Slider -->
														<div class="slider product-responsive">
															 @foreach( $result['detail']['product_data'][0]->images as $key=>$images )
															<div class="item-img-slider">
															   <div class="images">
																	<span class="onsale">Sale!</span>
																	<a href="{{asset('').$images->image }}" rel="prettyPhoto[product-gallery]" class="zoom">
																		<img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
																				src="i{{asset('').$images->image }}" 
																				srcset="{{asset('').$images->image }}" 
																				sizes="(max-width: 600px) 100vw, 600px"/>
																	</a>
															   </div>
															</div>
														@endforeach
														
														</div>
														<!-- Thumbnail Slider -->
													</div>
												</div>
											</div>
										
											<div class="product-summary col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<h1 class="product_title">{{$result['detail']['product_data'][0]->products_name}}</h1>
												
												<div class="reviews-content">
													<div class="star"></div>
													<a href="#reviews" class="woocommerce-review-link" rel="nofollow">
														<span class="count">0</span> Review(s)
													</a>
												</div>
												 @if($result['detail']['product_data'][0]->products_type == 0)
												<div class="product-stock in-stock">
													Availability: 
													@if($result['detail']['product_data'][0]->defaultStock == 0)
													<span> @lang('website.Out of Stock')</span>
													 @else 
													 <span>  @lang('website.In stock')</span>
													 @endif
												</div>
												 @endif 
												<div class="product_meta"></div>
												
												<div class="product-description">
													<h2 class="quick-overview">QUICK OVERVIEW</h2>
													<p>Fusce porttitor at ante eu egestas. Morbi vulputate diam at nibh imperdiet pretium. Nulla euismod, nibh nec tincidunt maximus, elit sem ornare nunc, et dictum elit dui sed justo. Donec scelerisque, erat vel pharetra luctus, nibh tortor efficitur nibh, non euismod leo diam ut risus.</p>
												</div>
												
												<div>
													<p class="price">

																	@if(!empty($result['detail']['product_data'][0]->flash_price))
			                                        <span class="discount">
			                                                    {{$web_setting[19]->value}}{{$result['detail']['product_data'][0]->flash_price+0}} 
			                                         </span>
			                                        @elseif(!empty($result['detail']['product_data'][0]->discount_price))
			                                            <span class="discount">
			                                                    {{$web_setting[19]->value}}{{$result['detail']['product_data'][0]->discount_price+0}} 
			                                            </span>
			                                        @endif	
			                                        <!--discount_price-->
                                        <span class="price @if(!empty($result['detail']['product_data'][0]->discount_price) or !empty($result['detail']['product_data'][0]->flash_price)) line-through @else change_price @endif" >
                                            {{$web_setting[19]->value}}{{$result['detail']['product_data'][0]->products_price+0}}
                                        </span> 
														<!-- <del>
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">$</span>560.00
															</span>
														</del> 
														
														<ins>
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">$</span>520.00
															</span>
														</ins> -->
													</p>
												</div>
												
												<div class="product-summary-bottom clearfix">
													<form class="cart" method="post" name="attributes" id="add-Product-form">
														<input type="hidden" name="products_id" value="{{$result['detail']['product_data'][0]->products_id}}">
                                        
				                                        <input type="hidden" name="products_price" id="products_price" value="@if(!empty($result['detail']['product_data'][0]->flash_price)) {{$result['detail']['product_data'][0]->flash_price+0}} @elseif(!empty($result['detail']['product_data'][0]->discount_price)){{$result['detail']['product_data'][0]->discount_price+0}}@else{{$result['detail']['product_data'][0]->products_price+0}}@endif">
				                                        
				                                        <input type="hidden" name="checkout" id="checkout_url" value="@if(!empty(app('request')->input('checkout'))) {{ app('request')->input('checkout') }} @else false @endif" >	
				                                        
				                                        <input type="hidden" id="max_order" value="@if(!empty($result['detail']['product_data'][0]->products_max_stock)) {{ $result['detail']['product_data'][0]->products_max_stock }} @else 0 @endif" > 
				                                      @if(count($result['detail']['product_data'][0]->attributes)>0)                                            
                                            <div class="form-row">                                             
                                        
                                                @php                                                    
                                                    $index = 0;                                                    
                                                @endphp 
                                                @foreach( $result['detail']['product_data'][0]->attributes as $key=>$attributes_data )  
                                                @php                                                    
                                                    $functionValue = 'function_'.$key++;                                                    
                                                @endphp                   
                                                <input type="hidden" name="option_name[]" value="{{ $attributes_data['option']['name'] }}" >
                                                <input type="hidden" name="option_id[]" value="{{ $attributes_data['option']['id'] }}" >
                                                <input type="hidden" name="{{ $functionValue }}" id="{{ $functionValue }}" value="0" >									
                                                <input id="attributeid_<?=$index?>" type="hidden" value="">										
                                                <input id="attribute_sign_<?=$index?>" type="hidden" value="">												
                                                <input id="attributeids_<?=$index?>" type="hidden" name="attributeid[]" value="" >
                                                <div class="form-group col-sm-4">							
                                                    <label for="values_<?=$index?>" class="col-sm-12 col-form-label">{{ $attributes_data['option']['name'] }}</label>		
                                                    <div class="col-sm-12">								
                                                      
                                                        <select name="{{ $attributes_data['option']['id'] }}" onChange="getQuantity()" class="currentstock form-control attributeid_<?=$index++?>" attributeid = "{{ $attributes_data['option']['id'] }}">
															@php
															$is_default = 0;
															@endphp
                                                            @foreach( $attributes_data['values'] as $values_data )
                                                            {{ $values_data['is_default'] }}
																@if($is_default==0)
																	@if($values_data['is_default']==1)
																		<option  attributes_value="{{ $values_data['products_attributes_id'] }}" value="{{ $values_data['id'] }}" prefix = '{{ $values_data['price_prefix'] }}'  value_price ="{{ $values_data['price']+0 }}" >{{ $values_data['value'] }}</option>
																	@endif	
																@endif

																@if($is_default==1){
																	@if($values_data['is_default']==0)
																		<option  attributes_value="{{ $values_data['products_attributes_id'] }}" value="{{ $values_data['id'] }}" prefix = '{{ $values_data['price_prefix'] }}'  value_price ="{{ $values_data['price']+0 }}" >{{ $values_data['value'] }}</option>
																	@endif	
																@endif

																@php
																$is_default++;
																@endphp
																													   
                                                            @endforeach								
                                                        </select>								
                                                    </div>							
                                                </div>
                                                @endforeach							
                                            </div>
                                        @endif	
												
												<div>
													 @php
                                        	
                                          	if($result['detail']['product_data'][0]->products_min_order>0){
                                             	$min_order_limit = $result['detail']['product_data'][0]->products_min_order;
                                            }else{ 
                                            	$min_order_limit = 1;
                                            }
											
                                            
                                            if(!empty($result['detail']['product_data'][0]->products_max_stock) and $result['detail']['product_data'][0]->products_max_stock>0 and  $result['detail']['product_data'][0]->products_max_stock < $result['detail']['product_data'][0]->defaultStock){
                                             	$max_order_limit = $result['detail']['product_data'][0]->products_max_stock;
                                             }else{ 
                                             	$max_order_limit = $result['detail']['product_data'][0]->defaultStock;
                                             }
                                            
											
                                        	if(!empty($result['detail']['product_data'][0]->flash_price)){
                                            	
                                                $product_price = $min_order_limit*$result['detail']['product_data'][0]->flash_price+0;
                                                $default_price = $result['detail']['product_data'][0]->flash_price+0;
                                                
                                            }elseif(!empty($result['detail']['product_data'][0]->discount_price)){
                                             
                                             	$product_price = $min_order_limit*$result['detail']['product_data'][0]->discount_price+0;
                                                $default_price = $result['detail']['product_data'][0]->discount_price+0;
                                                    
                                            }else{
                                             
                                                $product_price =$min_order_limit*$result['detail']['product_data'][0]->products_price+0;
                                                $default_price = $result['detail']['product_data'][0]->products_price+0;
                                             }
                                             
                                        @endphp
												</div>		
												<div class="quantity">
                                                       @if(!empty($result['detail']['product_data'][0]->flash_start_date) and $result['detail']['product_data'][0]->server_time < $result['detail']['product_data'][0]->flash_start_date ) style="display: none" @endif>

															<input type="number" step="1" min="{{$min_order_limit}}" max="{{$max_order_limit}}" name="quantity" value="{{$min_order_limit}}" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
														</div>
														@if(!empty($result['detail']['product_data'][0]->flash_start_date) and $result['detail']['product_data'][0]->server_time < $result['detail']['product_data'][0]->flash_start_date )
														    @else
				                                               @if($result['detail']['product_data'][0]->products_type == 0)
				                                        			
				                                                    @if($result['detail']['product_data'][0]->defaultStock == 0 or $result['detail']['product_data'][0]->defaultStock < $min_order_limit )
				                                                    <button class="btn btn-danger " type="button">@lang('website.Out of Stock')</button>
				                                                   @else 
														<button type="submit" class="single_add_to_cart_button button alt add-to-Cart" products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to cart</button>
														 @endif
													    @else
													    
													    <button type="submit" class="single_add_to_cart_button button alt add-to-Cart" products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to cart</button>	 

													    

													     @endif
                                              @endif   
														<div class="woocommerce product compare-button">
															<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
														</div>
														
														<div class="yith-wcwl-add-to-wishlist">
															<div class="yith-wcwl-add-button show" style="display:block">
																<a rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
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
														
														<div class="social-icon">
															<div class="social-icon-button"></div>

															<div class="social-share">
																<div class="social-share-fb social-share-item">
																	<div id="fb-root"></div>
																	<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
																	<div class="fb-like" data-href="" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>
																</div>
									
																<!--Facebook Button-->
																<div class="social-share-twitter social-share-item">
																	<a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-text="Umas tika lorem narem" data-count="horizontal">Tweet</a>
																	<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
																</div>

																<!--Twitter Button-->
																<div class="social-share-linkedin social-share-item">
																	<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script> 
																	<script type="IN/Share" data-url="" data-counter="right"></script> 
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="product_meta">
													<p class="price-box">
														<span>@lang('website.Total Price')&nbsp;:</span>
		                                                <span class="total_price">
		                                                {{$web_setting[19]->value}}{{$product_price}}
		                                                </span>	
													</p>
												</div>
											
											
												<div class="product_meta">
													<p class="posted_in">
														<b>Category:</b> 
														<a href="" rel="tag">Apparel & Accessories</a>, 
														<a href="" rel="tag">Car Accessories</a>, 
														<a href="" rel="tag">Computer</a>, 
														<a href="" rel="tag">Computers & Networking</a>, 
														<a href="" rel="tag">Consumer Electronics</a>, 
														<a href="" rel="tag">Intimate Apparel</a>, 
														<a href="" rel="tag">Jewelry & Watches</a>, 
														<a href="" rel="tag">Jiteme</a>, 
														<a href="" rel="tag">Jiteme catem</a>, 
														<a href="" rel="tag">Jiteme catem</a>, 
														<a href="" rel="tag">Mauris</a>, 
														<a href="" rel="tag">MenSell</a>, 
														<a href="" rel="tag">Purses</a>, 
														<a href="" rel="tag">Smartphones & Tablets</a>,
														<a href="" rel="tag">Smartphones Accessories</a>, 
														<a href="" rel="tag">Sports & Outdoors</a>,
														<a href="" rel="tag">Vesture</a>, 
														<a href="" rel="tag">Watches</a>,
														<a href="" rel="tag">Women</a>.	
													</p>
												</div>
											</div>
											<!--- summary-bottom --->
										</div>
								
										<!-- .summary -->
										<div class="row">
											<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 tab-col-3">
												<div id="relate-01" class="carousel slide sw-related-product" data-ride="carousel" data-interval="0">
													<div class="block-title title1">
														<h2>
															<span>Related Products</span>
														</h2>
														
														<div class="customNavigation nav-left-product">
															<a title="Previous" class="btn-bs prev-bs fa fa-angle-left" href="#relate-01" role="button" data-slide="prev"></a>
															<a title="Next" class="btn-bs next-bs fa fa-angle-right" href="#relate-01" role="button" data-slide="next"></a>
														</div>
													</div>
													
													<div class="carousel-inner">

														
														<div class="item active">
															 @foreach($result['simliar_products']['product_data'] as $key=>$products)
            
                                @if($result['detail']['product_data'][0]->products_id != $products->products_id)
                
                                @if(++$key<=5)
															<div class="bs-item cf">
																<div class="bs-item-inner">
																	<div class="item-img">
																		<a href="" title="Tausage porchetta">
																			<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
																					src="{{asset('').$products->products_image}}" 
																					srcset="{{asset('').$products->products_image}}" 
																					sizes="(max-width: 180px) 100vw, 180px" />
																		</a>
																	</div>
																	
																	<div class="item-content">
																		<div class="star"></div>
																		
																		<h4>
																			<a href="" title="Tausage porchetta">{{$products->products_name}}</a>
																		</h4>
																		
																		<p>
																			<span class="woocommerce-Price-amount amount">
																				<span class="woocommerce-Price-currencySymbol"></span>@if(!empty($products->discount_price))
							                                                {{$web_setting[19]->value}}{{$products->discount_price+0}}
							                                                <span>{{$web_setting[19]->value}}{{$products->products_price+0}}</span> 
							                                            @else
							                                                {{$web_setting[19]->value}}{{$products->products_price+0}}
							                                            @endif
																			</span>
																		</p>
																	</div>
																</div>
															</div>


															@endif		
                
						                                @endif
						                
						                                @endforeach
														
															
															
															
															
															
														
														
															
															
															
															
															
															
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 tab-col-9 description">
												<div class="woocommerce-tabs wc-tabs-wrapper">
													<ul class="tabs wc-tabs">
														<li class="description_tab active">
															<a href="#tab-description">Description</a>
														</li>
														
														<li class="reviews_tab">
															<a href="#tab-reviews">Reviews (0)</a>
														</li>
													</ul>
													
													<div class="panel entry-content wc-tab" id="tab-description" style="display: block;">
														<?=stripslashes($result['detail']['product_data'][0]->products_description)?>
													</div>
													
													<div class="panel entry-content wc-tab" id="tab-reviews" style="display: none;">
														<div id="reviews">
															<div id="comments">
																<h2>Reviews</h2>
																<p class="woocommerce-noreviews">There are no reviews yet.</p>
															</div>
															
															<div id="review_form_wrapper">
																<div id="review_form">
																	<div id="respond" class="comment-respond">
																		<h3 id="reply-title" class="comment-reply-title">Be the first to review “Morbi vulputate diam” 
																			<small>
																				<a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a>
																			</small>
																		</h3>
																		
																		<form action="" method="post" id="commentform" class="comment-form">
																			<p class="comment-form-rating">
																				<label for="rating">Your Rating</label>
																				
																				<select name="rating" id="rating" style="display: none;">
																					<option value="">Rate…</option>
																					<option value="5">Perfect</option>
																					<option value="4">Good</option>
																					<option value="3">Average</option>
																					<option value="2">Not that bad</option>
																					<option value="1">Very Poor</option>
																				</select>
																			</p>
																			
																			<p class="comment-form-comment">
																				<label for="comment">Your Review</label>
																				<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
																			</p>
																			
																			<p class="comment-form-author">
																				<label for="author">Name <span class="required">*</span></label> 
																				<input id="author" name="author" type="text" value="" size="30" aria-required="true" />
																			</p>
																			
																			<p class="comment-form-email">
																				<label for="email">Email <span class="required">*</span></label> 
																				<input id="email" name="email" type="text" value="" size="30" aria-required="true" />
																			</p>
																			
																			<p class="form-submit">
																				<input name="submit" type="submit" id="submit" class="submit" value="Submit" />
																			</p>
																		</form>
																	</div>
																	<!-- #respond -->
																</div>
															</div>
															<div class="clear"></div>
														</div>
													</div>
												</div>
												
												<div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
													<div class="widget-inner">
														<div id="sw_related_upsell_widget-2" class="sw-woo-container-slider upsells-products responsive-slider clearfix" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
															<div class="resp-slider-container">
																<div class="block-title">
																	<strong>
																		<span>UP-SELL PRODUCTS</span>
																	</strong>
																	<div class="sn-img icon-bacsic2"></div>
																</div>
																
																<div class="slider responsive">
																	<div class="item">
																		<div class="item-wrap">
																			<div class="item-detail">
																				<div class="item-img products-thumb">
																					<!-- quickview & thumbnail  -->								
																					<span class="onsale">Sale!</span>
																					
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																									src="images/1_2-300x300.jpg" 
																									srcset="images/1_2-300x300.jpg 300w, images/1_2-260x260.jpg 260w, images/1_2.jpg 600w, images/1_2-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																						
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star">
																							<span style="width:55px"></span>
																						</div>
																					</div>
																					<!-- end rating  -->
																					
																					<h4>
																						<a href="" title="Kaze dama pisa patem">Kaze dama pisa patem</a>
																					</h4>
																					
																					<div class="item-price">
																						<span>
																							<del>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>550.00
																								</span>
																							</del> 
																							
																							<ins>
																								<span class="woocommerce-Price-amount amount">
																									<span class="woocommerce-Price-currencySymbol">$</span>450.00
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
																				  <!-- quickview & thumbnail  -->								
																				  <span class="onsale">Sale!</span>
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																									src="images/30_1-300x300.jpg" 
																									srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star"></div>
																					</div>
																					<!-- end rating  -->
																					
																					<h4>
																						<a href="" title="Umas tika lorem narem">Umas tika lorem narem</a>
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
																					<!-- quickview & thumbnail  -->								
																					<span class="onsale">Sale!</span>
																		 
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
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
																					</div>
																					<!-- end rating  -->
																					
																					<h4>
																						<a href="" title="Pisan maze ikan kazen">Pisan maze ikan kazen</a>
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
																					<!-- quickview & thumbnail  -->								
																					<span class="onsale">Sale!</span>
																		 
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
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
																					</div>
																					<!-- end rating  -->
																					
																					<h4>
																						<a href="" title="Kore mire dase mazen">Kore mire dase mazen</a>
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
																					<!-- quickview & thumbnail  -->								
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
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
																					</div>
																					<!-- end rating  -->
																					
																					<h4>
																						<a href="" title="Wiru mise kaztem">Wiru mise kaztem</a>
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
																					<!-- quickview & thumbnail  -->								
																					<a href="">
																						<div class="product-thumb-hover">
																							<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																									src="images/6_5-300x300.jpg" 
																									srcset="images/6_5-300x300.jpg 300w, images/6_5-260x260.jpg 260w, images/6_5.jpg 600w, images/6_5-180x180.jpg 180w" 
																									sizes="(max-width: 300px) 100vw, 300px" />
																						</div>
																					</a>
																					
																					<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>					
																				</div>
																				
																				<div class="item-content">
																					<!-- rating  -->
																					<div class="reviews-content">
																						<div class="star">
																							<span style="width:55px"></span>
																						</div>
																					</div>
																					<!-- end rating  -->
																				  
																					<h4>
																						<a href="" title="Rika mire pisan">Rika mire pisan</a>
																					</h4>
																				 
																					<div class="item-price">
																						<span>
																							<span class="woocommerce-Price-amount amount">
																								<span class="woocommerce-Price-currencySymbol">$</span>0.99
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
					<!-- contents-detail -->
				</div>
			</div>
		<!-- </div> -->


@endsection

@section('extra-js')
<script type="text/javascript" src="{{asset('frontend/js/wc-quantity-increment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/woocommerce/single-product.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/prettyPhoto/jquery.prettyPhoto.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/prettyPhoto/jquery.prettyPhoto.init.min.js')}}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
	var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
	/* ]]> */
	</script>

@endsection