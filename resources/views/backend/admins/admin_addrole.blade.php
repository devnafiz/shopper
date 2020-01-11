
@extends('backend.layout')
@section('content')
<div class="row">
      @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        
                        @if(session()->has('errorMessage'))
                            <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ session()->get('errorMessage') }}
                            </div>
                        @endif
    
</div>

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewroles')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                            	<input type="hidden" name="admin_type_id" value="{{$result['admin_type_id']}}">
                            	 @foreach($result['data'] as $datas)
                                 <hr>
                            <h4>{{ trans('labels.manage '.$datas['link_name']) }} </h4>                       
                            <hr>
                            @foreach($datas['permissions'] as $data) 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.manage '.$data['name']) }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                         <label class=" control-label">
                                          <input type="radio" name="{{$data['name']}}" value="1" class="flat-red" @if($data['value']==1) checked @endif > &nbsp;{{ trans('labels.Yes') }}
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
                                    <label class=" control-label">
                                          <input type="radio" name="{{$data['name']}}" value="0" class="flat-red" @if($data['value']==0) checked @endif >  &nbsp;{{ trans('labels.No') }}
                                    </label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            
                            @endforeach  
                                

                               
                                
                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.Add Roles') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
