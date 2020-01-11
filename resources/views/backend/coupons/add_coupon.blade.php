
@extends('backend.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          {{$errors->first()}}
                        </div>
                      @endif
                  @endif
                  
                  @if(Session::has('success'))                    
                    <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {!! session('success') !!}
                        </div>
                  @endif
        
    </div>
    
</div>

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewcoupons')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                                
                            	
                            	 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Coupon') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="code" class="form-control" id="code">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.AddCouponsTaxt') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.CouponDescription') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="description" class="form-control" id="description">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CouponDescriptionText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Discounttype') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="discount_type" class='form-control ms'>
                                                <option value="fixed_cart" selected>Cart Discount</option>
                                                <option value="percent">Cart % Discount</option>
                                                <option value="fixed_product">Product Discount</option>
                                                <option value="percent_product">Product % Discount</option>
                                       </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.DiscounttypeText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.CouponAmount') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="amount" value="0" class="form-control" id="amount">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CouponAmountText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                 
                                

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.AllowFreeShipping') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="checkbox" name="free_shipping" id="newImage" value="1">
                                            &nbsp; {{ trans('labels.AllowFreeShippingText') }}
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.CouponExpiryDate') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="expiry_date" class="form-control coupondatepicker" id="expiry_date" readonly="readonly">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.CouponExpiryDateText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Minimumspend') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="minimum_amount" class="form-control" id="minimum_amount">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.MinimumspendText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.MaximumSpend') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="maximum_amount" class="form-control" id="maximum_amount">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.MaximumSpendText') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.IndividualUseOnly') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="checkbox"  name="individual_use" value="1">&nbsp;{{ trans('labels.IndividualUseOnlyText') }}
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.ExcludeSaleItems') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="checkbox"  name="exclude_sale_items" value="1">&nbsp;{{ trans('labels.ExcludeSaleItemsText') }}
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Products') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="product_ids[]" multiple="multiple" class="form-control show-tick ms select2">
                                        @foreach($result['products'] as $products)
                                         <option value="{{ $products->products_id }}">{{ $products->products_name }} {{ $products->products_model }}</option>
                                        @endforeach
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.DiscounttypeText') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.ExcludeProducts') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="exclude_product_ids[]" multiple="multiple" class="form-control show-tick ms select2">
                                        @foreach($result['products'] as $products)
                                         <option value="{{ $products->products_id }}">{{ $products->products_name }} {{ $products->products_model }}</option>
                                        @endforeach
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.ExcludeProductsText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.IncludeCategories') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="exclude_product_ids[]" multiple="multiple" class="form-control show-tick ms select2">
                                        @foreach($result['categories'] as $categories)
                                        <option value="{{ $categories->categories_id }}">{{ $categories->categories_name }}</option>
                                        @endforeach
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.IncludeCategoriesText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.ExcludeCategories') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="excluded_product_categories[]" multiple="multiple" class="form-control show-tick ms select2">
                                        @foreach($result['categories'] as $categories)
                                        <option value="{{ $categories->categories_id }}">{{ $categories->categories_name }}</option>
                                        @endforeach
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.ExcludeCategoriesText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.EmailRestrictions') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select name="email_restrictions[]" multiple="multiple" class="form-control show-tick ms select2">
                                        @foreach($result['emails'] as $emails)
                                        <option value="{{ $emails->email }}">{{ $emails->email }}</option>
                                        @endforeach
                                    </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"> {{ trans('labels.EmailRestrictionsText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.UsageLimitPerCoupon') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="number"  name="usage_limit" class="form-control" id="usage_limit">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.UsageLimitPerCouponText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.UsageLimitPerUser') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="number"  name="usage_limit_per_user" class="form-control" id="usage_limit_per_user">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.AddCouponsTaxt') }}</span>
                                        </div>
                                    </div>
                                </div>
                                

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddCoupons') }}</button>
                                        <a href="{{ URL::to('admin/coupons')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection

@section('extra-css')
<link rel="stylesheet" href="{{asset('backend/plugins/select2/select2.css')}}" />
<style type="text/css">
    .datepicker{
        width: 300px !important;
    }


</style>

@endsection

@section('extra-js')
<script type="text/javascript">
    $(document).ready(function(){

        $('.select2').select2();
    });
</script>
<script src="{{asset('backend/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
<script src="{{asset('backend/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

@endsection
