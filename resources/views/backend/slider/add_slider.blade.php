
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addNewSlide')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                            	
                            	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Language') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select class="form-control ms" name="languages_id">
                                          @foreach($result['languages'] as $language)
                                              <option value="{{$language->languages_id}}">{{ $language->name }}</option>
                                          @endforeach
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.ChooseLanguageText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Title') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="text" name="sliders_title" id="sliders_title" class="form-control">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.SliderTitletext') }}</span>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Image') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="newImage" id="newImage">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.ImageSliderText') }}</span>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 

                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Type') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <select class="form-control ms" name="type" id="bannerType">
                                          <option value="category">{{ trans('labels.ChooseSubCategory') }}</option>
                                          <option value="product">{{ trans('labels.Product') }}</option>
                                          <option value="topseller">{{ trans('labels.TopSeller') }}</option>
                                          <option value="special">{{ trans('labels.Deals') }}</option>
                                          <option value="mostliked">{{ trans('labels.MostLiked') }}</option>
                                      </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>
                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Categories') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <select class="form-control ms" name="categories_id" id="categories_id">
                                              @foreach($result['categories'] as $category)
                                                <option value="{{ $category->slug}}">{{ $category->name}}</option>
                                              @endforeach
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.CategoriessliderText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Products') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                      <select class="form-control ms" name="products_id" id="products_id">
                                      @foreach($result['products'] as $products_data)
                                        <option value="{{ $products_data->products_slug }}">{{ $products_data->products_name }}</option>
                                      @endforeach
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.ProductsSliderText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.ExpiryDate') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                             <input readonly class="form-control datepicker field-validate" type="text" name="expires_date" value="">
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ExpiryDateSlider') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Status') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <select class="form-control ms" name="status">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.InActive') }}</option>
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.StatusSliderText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddSliderImage') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
