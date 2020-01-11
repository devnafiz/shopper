
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addNewBanner')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                            	
                            	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Name') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="banners_title" class="form-control" placeholder="{{ trans('labels.BannerTitletext') }}">
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
                                          <option value="top seller">{{ trans('labels.TopSeller') }}</option>
                                          <option value="deals">{{ trans('labels.Deals') }}</option>
                                          <option value="most liked">{{ trans('labels.MostLiked') }}</option>
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
                                        <option value="{{ $category->id}}">{{ $category->name}}</option>
                                      @endforeach
                                      </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div><br>
                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Products') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                           <select class="form-control ms" name="products_id" id="products_id">
                                              @foreach($result['products'] as $products_data)
                                                <option value="{{ $products_data->products_id }}">{{ $products_data->products_name }}</option>
                                              @endforeach
                                             </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>
                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.ExpiryDate') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input readonly class="form-control datepicker field-validate" type="text" name="expires_date" value="">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>
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
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddBanner') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
