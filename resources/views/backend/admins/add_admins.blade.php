
@extends('backend.layout')
@section('content')

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewadmin')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                            	
                            	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.AdminType') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <select class="form-control ms" name="adminType">
                                    @foreach($result['adminTypes'] as $adminType)
                                          <option value="{{$adminType->admin_type_id}}">{{$adminType->admin_type_name}}</option>
                                    @endforeach
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                 
                                 <h4>{{ trans('labels.Personal Info') }} </h4>

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.FirstName') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="text" name="first_name" id="first_name" class="form-control">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.LastName') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="last_name" id="last_name" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Telephone') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                   {{ trans('labels.TelephoneText') }}</span>
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
                                 <h4>{{ trans('labels.AddressInfo') }}</h4>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.StreetAddress') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="address" id="address" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Zip/Postal Code') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="text" name="zip" id="zip" class="form-control">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.City') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="city" id="city" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Country') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <select class="form-control ms" name="country" id="entry_country_id">
                                        <option value="">{{ trans('labels.SelectCountry') }}</option>
                                        @foreach($result['countries'] as $countries_data)
                                        <option value="{{ $countries_data->countries_id }}">{{ $countries_data->countries_name }}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                             <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.State') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                             <select class="form-control zoneContent ms" name="state">     
                                              <option value="">{{ trans('labels.SelectState') }}</option>                                    
                                           </select>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                             <hr>
                                <h4>{{ trans('labels.Login Info') }}</h4>
                                <hr>

                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.EmailAddress') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.EmailAddress') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div> 

                                 <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Status') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <select class="form-control ms" name="isActive">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.Inactive') }}</option>
                                    </select>
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
