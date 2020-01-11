
@extends('backend.layout')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
         @if (count($errors) > 0)
                              @if($errors->any())
                                <div class="alert alert-success alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  {{$errors->first()}}
                                </div>
                              @endif
                        @endif
        
    </div>
    
</div>

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewoptions')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                                
                            	
                            	 @foreach($result['languages'] as $languages)
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Name') }} ({{ $languages->name }})</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="OptionsName_<?=$languages->languages_id?>" class="form-control" placeholder="Enter Name">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Option Name Text') }} ({{ $languages->name }}).</span> 
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                                

                               
                               

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddOptions') }}</button>
                                        <a href="{{ URL::to('admin/attributes')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
