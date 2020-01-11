
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewsubcategory')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Category') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select class="form-control ms" name="parent_id">
                                         @foreach ($result['categories'] as $categories)
                                          <option value="{{$categories->mainId}}">{{$categories->mainName}}</option>
                                        @endforeach
                                      </select>
                                        </div>
                                    </div>
                                </div>
                            	
                            	 @foreach($result['languages'] as $languages)
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.SubCategoryName') }} ({{ $languages->name }})</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="categoryName_<?=$languages->languages_id?>" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                                

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
                                		 <label class="control-label">{{ trans('labels.Icon') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="newIcon" id="newIcon">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddCategory') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
