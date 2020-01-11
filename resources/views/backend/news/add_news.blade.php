
@extends('backend.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        @if( count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-success" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">{{ trans('labels.Error') }}:</span>
                                    {{ $error }}
                                </div>
                             @endforeach
    @endif
        
    </div>
    
</div>

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewnewsy')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                                
                            	
                            	 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Category') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select class="form-control field-validate ms" name="category_id">
                                         <option value="">{{ trans('labels.ChooseCategory') }}</option>
                                        @foreach ($result['newsCategories'] as $categories)
                                             <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                      </select>
                                        </div>
                                    </div>
                                </div>

                                @foreach($result['languages'] as $languages)
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.TitleNews') }} ({{ $languages->name }})</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="news_name_<?=$languages->languages_id?>" class="form-control">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            {{ trans('labels.TitleNews') }} ({{ $languages->name }})</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Description') }} ({{ $languages->name }})</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <textarea id="editor<?=$languages->languages_id?>" name="news_description_<?=$languages->languages_id?>" class="form-control" rows="10" cols="80">        
                                        </textarea>
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
                                			<input type="file" name="news_image" id="news_image">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.IsFeature') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<select class="form-control ms" name="is_feature">
                                          <option value="1">{{ trans('labels.Yes') }}</option>
                                          <option value="0" selected >{{ trans('labels.No') }}</option>
                                      </select>
                                		</div>
                                		
                                	</div>
                                	
                                </div> <br>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Status') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                        <select class="form-control ms" name="news_status">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.Inactive') }}</option>
                                      </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddNews') }}</button>
                                        <a href="{{ URL::to('admin/news')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection

@section('extra-js')
<script src="{{asset('backend/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor --> 
<script src="{{asset('backend/js/pages/forms/editors1.js')}}"></script>
<script type="text/javascript">
        $(function () {
            
            //for multiple languages
            @foreach($result['languages'] as $languages)
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor{{$languages->languages_id}}');
            
            @endforeach
            
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
            
    });
</script>

@endsection
