

<aside id="left" class="sidebar col-lg-3 col-md-4 col-sm-12">
					
					
					<div class="widget woocommerce_price_filter-2 woocommerce widget_price_filter">
						@if($result['filters'])
				
 <div id="accordion"  class="filters" role="tablist">
 	  
    
 	<form enctype="multipart/form-data" name="filters" method="get">
        <input type="hidden" name="min_price" id="min_price" value="0">
        <input type="hidden" name="max_price" id="max_price" value="{{$result['filters']['maxPrice']}}">
        @if(app('request')->input('filters_applied')==1)
        <input type="hidden" name="filters_applied" id="filters_applied" value="1">
        <input type="hidden" name="options" id="options" value="<?php echo implode($result['filter_attribute']['options'],',')?>">
        <input type="hidden" name="options_value" id="options_value" value="<?php echo implode($result['filter_attribute']['option_values'], ',')?>">
        @else
        <input type="hidden" name="filters_applied" id="filters_applied" value="0">
        @endif
        <div class="card">
        	<!--id="headingOne"-->
			<div class="card-header" >
				<h2 class="title">
					@lang('website.Filters')
				</h2>
			</div>
			<div class="block">
            	<div class="card-title">@lang('website.Price')</div>
				<div class="card-body">
                    <!-- <div id="slider-range"></div>  --> 
                    <div class="price_slider_wrapper">
                    <div class="price_slider" style="display:none;"></div>
                    <div class="price_slider_amount">
										<input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price">
										<input type="text" id="max_price" name="max_price" value="" data-max="800" placeholder="Max price">
										<!-- <button type="submit" class="button">Filter</button> -->
										
										<div class="price_label" style="display:none;">
											Price: <span class="from"></span> — <span class="to"></span>
										</div>
										
										<div class="clear"></div>
			</div>
		</div>
                    <!-- <div id="slider-values">
                        <div class="slider-value-0"><input type="text" readonly id="min_price_show"></div>
                        <div class="slider-value-1"><input type="text" readonly id="max_price_show"></div>
                    </div> -->
                    <input type="hidden" class="maximum_price" value="{{$result['filters']['maxPrice']}}">                        
				</div>
			</div>
            @if(count($result['filters']['attr_data'])>0)
            @foreach($result['filters']['attr_data'] as $key=>$attr_data)
                <div class="block">
                    <div class="card-title @if(count($result['filters']['attr_data'])==$key+1) last @endif">{{$attr_data['option']['name']}}</div>
                       <div class="card-body">
                        <ul class="list">
                            @foreach($attr_data['values'] as $key=>$values)
                            <li >
                                <div class="form-check">
                                  <label class="form-check-label">                                    
                                    <input class="form-check-input filters_box" name="{{$attr_data['option']['name']}}[]" type="checkbox" value="{{$values['value']}}" 								 									<?php 
          if(!empty($result['filter_attribute']['option_values']) and in_array($values['value_id'],$result['filter_attribute']['option_values'])) print 'checked';
                                    ?>>
                                    {{$values['value']}}
                                  </label>
                                </div>
                            </li>
                            @endforeach
                        </ul>					                    
                    </div>
                </div>
            @endforeach
            @endif
            
            <div class="alret alert-danger" id="filter_required">
            </div>
            
            <div class="button">
            <?php
				$url = '';
            	if(isset($_REQUEST['category'])){
					$url = "?category=".$_REQUEST['category'];
					$sign = '&';
				}else{
					$sign = '?';					
				}
				if(isset($_REQUEST['search'])){
					$url.= $sign."search=".$_REQUEST['search'];
				}
			?>
        	<a href="{{ URL::to('/shop'.$url)}}" class="btn btn-dark" id="apply_options"> @lang('website.Reset') </a>
             @if(app('request')->input('filters_applied')==1)
        	<button type="button" class="btn btn-secondary" id="apply_options_btn"> @lang('website.Apply')</button>
            @else
        	<!--<button type="button" class="btn btn-secondary" id="apply_options_btn" disabled> @lang('website.Apply')</button>-->
            <button type="button" class="btn btn-secondary" id="apply_options_btn" > @lang('website.Apply')</button>
            @endif
        </div>
		</div>
  </form>
</div>
@endif
					</div>
				
					<div class="widget ya_best_seller_product-2 ya_best_seller_product">
						<div class="widget-inner">
							<div class="block-title">
								<strong>
									<span>Best sellers</span>
								</strong>
								
								<div class="sn-img icon-bacsic2"></div>
							</div>
							
							<div id="best-seller-01" class="sw-best-seller-product">
								<ul class="list-unstyled">
									<li class="clearfix">
										<div class="item-img">
											<a href="home_style_1_shop_product_default.html" title="Sint drumstick">
												<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""  
														src="images/51-180x180.jpg" 
														srcset="images/51-180x180.jpg 180w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-300x300.jpg 300w" 
														sizes="(max-width: 180px) 100vw, 180px" />
											</a>
										</div>
										
										<div class="item-content">
											<h4>
												<a href="home_style_1_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
											</h4>
											
											<p>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>55.00
												</span>
											</p>
											
											<div class="star">
												<span style="width: 56px"></span>
											</div>
											
											<div class="review">
												<span>2 review(s)</span>
											</div>
										</div>
									</li>
									
									<li class="clearfix">
										<div class="item-img">
											<a href="home_style_1_shop_product_default.html" title="Steak veniam">
												<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
														src="images/2-3-180x180.jpg" 
														srcset="images/2-3-180x180.jpg 180w, images/2-3-260x260.jpg 260w, images/2-3.jpg 600w, images/2-3-300x300.jpg 300w" 
														sizes="(max-width: 180px) 100vw, 180px" />
											</a>
										</div>
										
										<div class="item-content">
											<h4>
												<a href="home_style_1_shop_product_default.html" title="Steak veniam">Steak veniam</a>
											</h4>
											
											<p>
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>86.00
													</span>
												</del> 
												
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>80.00
													</span>
												</ins>
											</p>
											
											<div class="star"></div>
											
											<div class="review">
												<span>0 review(s)</span>
											</div>
										</div>
									</li>
									
									<li class="clearfix">
										<div class="item-img">
											<a href="home_style_1_shop_product_default.html" title="Boudi ullamco">
												<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
														src="images/8-1-180x180.jpg" 
														srcset="images/8-1-180x180.jpg 180w, images/8-1-260x260.jpg 260w, images/8-1.jpg 600w, images/8-1-300x300.jpg 300w" 
														sizes="(max-width: 180px) 100vw, 180px" />
											</a>
										</div>
										
										<div class="item-content">
											<h4>
												<a href="home_style_1_shop_product_default.html" title="Boudi ullamco">Boudi ullamco</a>
											</h4>
											
											<p>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>80.00
												</span>
											</p>
											
											<div class="star"></div>
								
											<div class="review">
												<span>0 review(s)</span>
											</div>
										</div>
									</li>
										
									<li class="clearfix">
										<div class="item-img">
											<a href="home_style_1_shop_product_default.html" title="Molore magna">
												<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
														src="images/7-2-180x180.jpg" 
														srcset="images/7-2-180x180.jpg 180w, images/7-2-260x260.jpg 260w, images/7-2.jpg 600w, images/7-2-300x300.jpg 300w" 
														sizes="(max-width: 180px) 100vw, 180px" />
											</a>
										</div>
										
										<div class="item-content">
											<h4>
												<a href="home_style_1_shop_product_default.html" title="Molore magna">Molore magna</a>
											</h4>
											
											<p>
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>171.00
													</span>
												</del> 
												
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>157.00
													</span>
												</ins>
											</p>
											
											<div class="star"></div>
								 
											<div class="review">
												<span>0 review(s)</span>
											</div>
										</div>
									</li>
									
									<li class="clearfix">
										<div class="item-img">
											<a href="home_style_1_shop_product_default.html" title="Pisan maze ikan kazen">
												<img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
														src="images/26-180x180.jpg" 
														srcset="images/26-180x180.jpg 180w, images/26-260x260.jpg 260w, images/26.jpg 600w, images/26-300x300.jpg 300w" 
														sizes="(max-width: 180px) 100vw, 180px" />
											</a>
										</div>
										
										<div class="item-content">
											<h4>
												<a href="home_style_1_shop_product_default.html" title="Pisan maze ikan kazen">Pisan maze ikan kazen</a>
											</h4>
											
											<p>
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
											</p>
											
											<div class="star"></div>
											
											<div class="review">
												<span>0 review(s)</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</aside>
				