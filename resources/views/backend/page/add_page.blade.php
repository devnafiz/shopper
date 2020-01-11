@extends('backend.layout')
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewpage')}}" name="add_slide" id="add_page" novalidate="novalidate" enctype="multipart/form-data">
                            	
                               
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">{{ trans('labels.PageSlug') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter url">
                                        </div>
                                    </div>
                                </div>
                                  @foreach($result['languages'] as $languages)
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">{{ trans('labels.PageName') }} ({{ $languages->name }})</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name_<?=$languages->languages_id?>" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">{{ trans('labels.Description') }} ({{ $languages->name }}) </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <textarea id="editor<?=$languages->languages_id?>" name="description_<?=$languages->languages_id?>" class="form-control" rows="10" cols="80">    	  
                                        </textarea>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">Status </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<select name="status" id="status" class="form-control ms">
		                                	<option value="1">{{ trans('labels.Active') }}</option>
		                                	<option value="0">{{ trans('labels.InActive') }}</option>
		                                </select>
                                		</div>
                                		
                                	</div>
                                	
                                </div>
                                
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body"> 
                          
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