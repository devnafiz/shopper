
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                            @if(count($customers['message'])>0)
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         {{ $customers['message'] }}
                        </div>
                        @endif

                       @if(count($customers['errorMessage'])>0)
                        <div class="alert alert-danger" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         {{ $customers['errorMessage'] }}
                        </div>
                        @endif

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewcustomers')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                                
                            	
                            	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.FirstName') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="customers_firstname" class="form-control"  id="customers_firstname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.LastName') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="customers_lastname" class="form-control"  id="customers_lastname" >
                                        </div>
                                    </div>
                                </div>
                                
                                

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Gender') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<label>
                                              <input type="radio" name="customers_gender" value="1" class="minimal" checked> {{ trans('labels.Male') }}
                                            </label><br>

                                            <label>
                                              <input type="radio" name="customers_gender" value="0" class="minimal"> {{ trans('labels.Female') }}
                                            </label>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Picture') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="newImage" id="newImage">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.DOB') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="customers_dob" class="form-control"  id="customers_dob" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Telephone') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="customers_telephone" class="form-control"  id="customers_telephone" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.EmailAddress') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="text"  name="email" class="form-control"  id="customers_lastemailname" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Password') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <input type="password"  name="password" class="form-control"  id="password" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Status') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select class="form-control ms" name="isActive">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.Inactive') }}</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.AddCustomer') }}</button>
                                        <a href="{{ URL::to('admin/customers')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
