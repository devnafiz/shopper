
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal form-validate" method="post" action="{{url('admin/addnewproduct')}}"  id="add_product" novalidate="novalidate" enctype="multipart/form-data">
                                              
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Product Type') }} </label>
                                  <div class="col-sm-10 col-md-8">
                                      <select class="form-control ms field-validate prodcust-type" name="products_type" onChange="prodcust_type();">
                                          <option value="">{{ trans('labels.Choose Type') }}</option> 
                                          <option value="0">{{ trans('labels.Simple') }}</option>
                                          <option value="1">{{ trans('labels.Variable') }}</option>
                                          <option value="2">{{ trans('labels.External') }}</option>
                                      </select><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.Product Type Text') }}.</span>
                                  </div>
                                </div>
                                
                                <hr>                                           
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Category') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                  @if(!empty(session('categories_id')))
                                        @php
                                        $cat_array = explode(',', session('categories_id'));                                        
                                        @endphp
                                        <ul class="list-group list-group-root well">    
                                          @foreach ($result['categories'] as $categories)   
                                          @if(in_array($categories->id,$cat_array))                                 
                                          <li href="#" class="list-group-item"><label style="width:100%"><input id="categories_<?=$categories->id?>" type="checkbox" class=" required_one categories" name="categories[]" value="{{ $categories->id }}" > {{ $categories->name }}</label></li>
                                          @endif
                                              @if(!empty($categories->sub_categories))
                                              <ul class="list-group">
                                                        <li class="list-group-item" >
                                                    @foreach ($categories->sub_categories as $sub_category)
                                                    @if(in_array($sub_category->sub_id,$cat_array))  
                                                    <label><input type="checkbox" name="categories[]" class="required_one sub_categories sub_categories_<?=$categories->id?>" parents_id = '<?=$categories->id?>' value="{{ $sub_category->sub_id }}"> {{ $sub_category->sub_name }}</label> @endif @endforeach</li>
                                                    
                                              </ul>
                                              @endif
                                          @endforeach                                          
                                        </ul>                                           
                                  @else
                                   <ul class="list-group list-group-root well">    
                                      @foreach ($result['categories'] as $categories)                                    
                                      <li href="#" class="list-group-item"><label style="width:100%"><input id="categories_<?=$categories->id?>" type="checkbox" class=" required_one categories" name="categories[]" value="{{ $categories->id }}" > {{ $categories->name }}</label></li>
                                          @if(!empty($categories->sub_categories))
                                          <ul class="list-group">
                                                    <li class="list-group-item" >
                                                @foreach ($categories->sub_categories as $sub_category)<label><input type="checkbox" name="categories[]" class="required_one sub_categories sub_categories_<?=$categories->id?>" parents_id = '<?=$categories->id?>' value="{{ $sub_category->sub_id }}"> {{ $sub_category->sub_name }}</label>@endforeach</li>
                                                
                                          </ul>
                                          @endif
                                      @endforeach                                          
                                    </ul>   
                                  @endif
                                                                               
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.ChooseCatgoryText') }}.</span>
                                      <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                  </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Manufacturers') }} </label>
                                  <div class="col-sm-10 col-md-8">
                                      <select class="form-control ms" name="manufacturers_id">
                                          <option value="">{{ trans('labels.ChooseManufacturers') }}</option>                                       
                                         @foreach ($result['manufacturer'] as $manufacturer)
                                          <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                         @endforeach
                                      </select><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.ChooseManufacturerText') }}.</span>
                                  </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FlashSale') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                       <select class="form-control ms" onChange="showFlash()" name="isFlash" id="isFlash">
                                          <option value="no">{{ trans('labels.No') }}</option>
                                          <option value="yes">{{ trans('labels.Yes') }}</option>
                                      </select>
                                  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  {{ trans('labels.FlashSaleText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="flash-container" style="display: none;">
                                    <div class="row clearfix">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FlashSalePrice') }}</label>
                                      <div class="col-sm-10 col-md-8">
                                        <input  class="form-control" type="text" name="flash_sale_products_price" id="flash_sale_products_price" value="">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.FlashSalePriceText') }}</span>
                                        <span class="help-block hidden">{{ trans('labels.FlashSalePriceText') }}</span>
                                      </div>
                                    </div>
                                    
                                    <div class="row clearfix">                                    
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FlashSaleDate') }}</label>
                                      <div class="col-sm-10 col-md-2">
                                        <input  class="form-control datepicker" readonly type="text" name="flash_start_date" id="flash_start_date" readonly value="">     
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.FlashSaleDateText') }}</span>                               
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                      <div class="col-sm-10 col-md-2 bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker" name="flash_start_time" readonly id="flash_start_time" value="" >
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                    </div>
                                    
                                    <div class="row clearfix">                                    
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FlashExpireDate') }}</label>
                                      <div class="col-sm-10 col-md-2">
                                        <input  class="form-control datepicker" readonly type="text" readonly name="flash_expires_date" id="flash_expires_date" value="">     
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.FlashExpireDateText') }}</span>                               
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                      <div class="col-sm-10 col-md-2 bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker" readonly name="flash_end_time" id="flash_end_time" value="" >
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Status') }}</label>
                                      <div class="col-sm-10 col-md-8">
                                          <select class="form-control ms" name="flash_status">
                                              <option value="1">{{ trans('labels.Active') }}</option>
                                              <option value="0">{{ trans('labels.Inactive') }}</option>
                                          </select>
                                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          {{ trans('labels.ActiveFlashSaleProductText') }}</span>                                     
                                      </div>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row clearfix special-link">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Special') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                       <select class="form-control ms" onChange="showSpecial()" name="isSpecial" id="isSpecial">
                                          <option value="no">{{ trans('labels.No') }}</option>
                                          <option value="yes">{{ trans('labels.Yes') }}</option>
                                      </select>
                                  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  {{ trans('labels.SpecialProductText') }}.</span>
                                  </div>
                                </div>
                                
                                <div class="special-container" style="display: none;">
                                    <div class="row clearfix">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.SpecialPrice') }}</label>
                                      <div class="col-sm-10 col-md-8">
                                        <input  class="form-control" type="text" name="specials_new_products_price" id="special-price" value="">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.SpecialPriceTxt') }}.</span>
                                        <span class="help-block hidden">{{ trans('labels.SpecialPriceNote') }}.</span>
                                      </div>
                                    </div>
                                    <div class="row clearfix">                                    
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ExpiryDate') }}</label>                                      <div class="col-sm-10 col-md-8">
                                        <input  class="form-control datepicker" readonly readonly type="text" name="expires_date" id="expiry-date" value="">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.SpecialExpiryDateTxt') }}
                                        </span>
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                    </div>
                                    <div class="row clearfix">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Status') }}</label>
                                      <div class="col-sm-10 col-md-8">
                                          <select class="form-control" name="status">
                                              <option value="1">{{ trans('labels.Active') }}</option>
                                              <option value="0">{{ trans('labels.Inactive') }}</option>
                                          </select>
                                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          {{ trans('labels.ActiveSpecialProductText') }}.</span>                                      
                                      </div>
                                    </div>
                                </div>
                                
                                <hr>
                                
                              @foreach($result['languages'] as $languages)
                                
                                <div class="row clearfix">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductName') }} ({{ $languages->name }})</label>
                                      <div class="col-sm-10 col-md-8">
                                            <input type="text" name="products_name_<?=$languages->languages_id?>" class="form-control field-validate">
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                           {{ trans('labels.EnterProductNameIn') }} {{ $languages->name }} </span>
                                      <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                </div>
                                
                                <div class="row clearfix external_link" style="display: none">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.External URL') }} ({{ $languages->name }})</label>
                                      <div class="col-sm-10 col-md-8">
                                            <input type="text" name="products_url_<?=$languages->languages_id?>" class="form-control products_url">
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                           {{ trans('labels.External URL Text') }} {{ $languages->name }} </span>
                                      <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                    <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Description') }} ({{ $languages->name }})</label>
                                    <div class="col-sm-10 col-md-8">
                                        <textarea id="editor<?=$languages->languages_id?>" name="products_description_<?=$languages->languages_id?>"class="form-control" rows="5"></textarea>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                       {{ trans('labels.EnterProductDetailIn') }} {{ $languages->name }}</span>
                                      </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.left banner') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input type="file" name="products_left_banner_<?=$languages->languages_id?>" id="products_left_banner_<?=$languages->languages_id?>">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner text') }}</span>
                                  </div>
                                </div>                                                                
                                                               
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.banner start date') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input class="form-control datepicker" readonly type="text" name="products_left_banner_start_date_<?=$languages->languages_id?>" id="products_left_banner_start_date_<?=$languages->languages_id?>">
                                    
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner start date text') }}</span>
                                  </div>
                                </div>
                                                               
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.banner expire date') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input class="form-control datepicker" readonly type="text" name="products_left_banner_expire_date_<?=$languages->languages_id?>" id="products_left_banner_expire_date_<?=$languages->languages_id?>">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner expire date text') }}</span>
                                  </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.right banner') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input type="file" name="products_right_banner_<?=$languages->languages_id?>" id="products_right_banner_<?=$languages->languages_id?>">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner text') }}</span>
                                  </div>
                                </div>
                                                               
                                                               
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.banner start date') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input class="form-control datepicker" readonly type="text" name="products_right_banner_start_date_<?=$languages->languages_id?>" id="products_right_banner_start_date_<?=$languages->languages_id?>">
                                    
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner start date text') }}</span>
                                  </div>
                                </div>
                                                               
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.banner expire date') }} ({{ $languages->name }})</label>
                                  <div class="col-sm-10 col-md-8">
                                    <input class="form-control datepicker" readonly type="text" name="products_right_banner_expire_date_<?=$languages->languages_id?>" id="products_right_banner_expire_date_<?=$languages->languages_id?>">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.banner expire date text') }}</span>
                                  </div>
                                </div>
                                
                              @endforeach
                                                                
                                <div class="row clearfix" id="tax-class">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.TaxClass') }} </label>
                                  <div class="col-sm-10 col-md-8">
                                      <select class="form-control field-validate ms" name="tax_class_id">
                                        <option selected>{{ trans('labels.SelectTaxClass') }}</option>
                                         @foreach ($result['taxClass'] as $taxClass)
                                          <option value="{{ $taxClass->tax_class_id }}">{{ $taxClass->tax_class_title }}</option>
                                         @endforeach
                                      </select>                                      
                                     <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                     {{ trans('labels.ChooseTaxClassForProductText') }}
                                     </span>
                                      <span class="help-block hidden">{{ trans('labels.SelectProductTaxClass') }}</span>
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsPrice') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                   
                                    <input type="text" name="products_price" class="form-control number-validate" id="products_price">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ProductPriceText') }}
                                    </span>                                  
                                   
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Min Order Limit') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                    
                                    <input type="text" name="products_min_order" value="1" id="products_min_order" class="form-control">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.Min Order Limit Text') }}
                                    </span>                                  
                                    
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Max Order Limit') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                    
                                    <input type="text" name="products_max_stock" value="0" id="products_max_stock" class="form-control">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.Max Order Limit Text') }}
                                    </span>                                  
                                    
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsWeight') }}</label>
                                  <div class="col-sm-10 col-md-2">
                                    
                                    <input type="text" name="products_weight" class="form-control number-validate" id="products_weight">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.RequiredTextForWeight') }}
                                    </span>
                                  </div>
                                  <div class="col-sm-10 col-md-2" style="padding-left: 0;">
                                      <select class="form-control ms" name="products_weight_unit">
                                        @if(count($result['units'])>0)
                                              @foreach($result['units'] as $unit)
                                              <option value="{{$unit->unit_name}}">{{$unit->unit_name}}</option>
                                              @endforeach
                                        @endif
                                      </select>
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsModel') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                  
                                    <input type="text" name="products_model" id="products_model" class="form-control">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ProductsModelText') }}
                                    </span>
                                    
                                  </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Image') }}</label>
                                  <div class="col-sm-10 col-md-8">
                                    
                                    <input type="file" name="products_image" id="products_image" class="field-validate">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.UploadProductImageText') }}</span>
                                  </div>
                                </div>
                                                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.IsFeature') }} </label>
                                  <div class="col-sm-10 col-md-8">
                                      <select class="form-control ms" name="is_feature">
                                          <option value="0">{{ trans('labels.No') }}</option>
                                          <option value="1">{{ trans('labels.Yes') }}</option>                                       
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.IsFeatureProuctsText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="row clearfix">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Status') }} </label>
                                  <div class="col-sm-10 col-md-8">
                                      <select class="form-control ms" name="products_status">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.Inactive') }}</option>                                       
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.SelectStatus') }}</span>
                                  </div>
                                </div>
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary pull-right"  id="attribute-btn">{{ trans('labels.Add Atrributes') }} <i class="fa fa-angle-right 2x"></i></button>
                                  
                                <button type="submit" class="btn btn-primary pull-right"  id="normal-btn" style="display: none">{{ trans('labels.addinventory') }} <i class="fa fa-angle-right 2x"></i></button>
                                  
                                <button type="submit" class="btn btn-primary pull-right"  id="external-btn" style="display: none">{{ trans('labels.AddProducts') }} <i class="fa fa-angle-right 2x"></i></button>
                              </div>
                              
                              <!-- /.box-footer -->
                            
                            	
                            	
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
