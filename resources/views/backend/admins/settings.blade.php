
@extends('backend.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <section class="content-header">
   
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Setting') }}</li>
    </ol>
  </section>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
         @if( count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-success" role="alert">
                                      <span class="icon fa fa-check" aria-hidden="true"></span>
                                      <span class="sr-only">{{ trans('labels.Setting') }}:</span>
                                      {{ $error }}</div>
                             @endforeach
                          @endif
    </div>
</div>

<div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/updateSetting')}}"  id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                                 <h4>{{ trans('labels.generalSetting') }}</h4>
                            <hr>
                            	
                            	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.AppName') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="text" name="{{$result['settings'][18]->name}}" value="{{$result['settings'][18]->value}}" class="form-control" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.AppNameText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.websiteURL') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="text" name="{{$result['settings'][40]->name}}" value="{{$result['settings'][40]->value}}" class="form-control" id="{{$result['settings'][40]->value}}" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.websiteURLText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.CurrencySymbol') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="text" name="{{$result['settings'][19]->name}}" value="{{$result['settings'][19]->value}}" class="form-control" id="{{$result['settings'][19]->name}}" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.websiteURLText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.NewProductDuration') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="text" name="{{$result['settings'][20]->name}}" value="{{$result['settings'][20]->value}}" class="form-control" id="{{$result['settings'][20]->name}}" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.websiteURLText') }}</span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.WebLogo') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="file" name="{{$result['settings'][15]->name}}"  class="form-control" id="{{$result['settings'][15]->name}}" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.WebLogoText') }}</span>
                                    <br>
                                    <input type="hidden" name="oldImage" value="{{$result['settings'][15]->value }}" id="{{$result['settings'][15]->value }}">
                                    <img src="{{asset('').$result['settings'][15]->value}}" alt="" width=" 175px">
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{{ trans('labels.Favicon') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                       
                                    <input type="file" name="{{$result['settings'][86]->name}}"  class="form-control" id="{{$result['settings'][86]->name}}" >
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.FaviconText') }}</span>
                                    <br>
                                    <input type="hidden" name="oldImage" value="{{$result['settings'][86]->value }}" id="{{$result['settings'][86]->name }}">
                                    <img src="{{asset('').$result['settings'][86]->value}}" alt="" width=" 175px">
                                        </div>
                                    </div>
                                </div>
                                 <hr>
                                 <h4>{{ trans('labels.InqueryEmails') }} </h4>
                                 <hr>

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.ContactUsEmail') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="text" name="{{$result['settings'][3]->name}}" id="{{$result['settings'][3]->name}}" class="form-control" value="{{$result['settings'][3]->value}}">
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <hr>
                                <h4>{{ trans('labels.OrderEmail') }}</h4>
                                <hr>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.OrderEmail') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][70]->name}}" id="{{$result['settings'][70]->name}}" class="form-control" value="{{$result['settings'][70]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                {{ trans('labels.OrderEmailText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <hr>                            
                                 <h4>{{ trans('labels.Free Shpping on Min Order Price') }}</h4>
                                <hr>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Min Order Price') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][82]->name}}" id="{{$result['settings'][82]->name}}" class="form-control" value="{{$result['settings'][82]->value}}">
                                        </div>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                   {{ trans('labels.Min Order Price Text') }}</span>
                                    </div>
                                    
                                </div>
                                <hr>
                                <h4>{{ trans('labels.OurInfo') }}</h4>
                                <hr>
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.PhoneNumber') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][11]->name}}" id="{{$result['settings'][11]->name}}" value="{{$result['settings'][11]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                {{ trans('labels.PhoneNumberText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                 <h4>{{ trans('labels.AddressInfo') }}</h4>

                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Address') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][4]->name}}" id="{{$result['settings'][4]->name}}" class="form-control" value="{{$result['settings'][4]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.AddressText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.City') }} </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="text" name="{{$result['settings'][5]->name}}" id="{{$result['settings'][5]->name}}" class="form-control" value="{{$result['settings'][5]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.CityText') }}</span>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.State') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][6]->name}}" id="{{$result['settings'][6]->name}}" class="form-control" value="{{$result['settings'][6]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.StateText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Zip') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                         <input type="text" name="{{$result['settings'][7]->name}}" id="{{$result['settings'][7]->name}}" value="{{$result['settings'][7]->value}}" class="form-control">  
                                         <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.ZipText') }}</span> 
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                             <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Country') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                             <input type="text" name="{{$result['settings'][8]->name}}" value="{{$result['settings'][8]->value}}" id="{{$result['settings'][8]->name}}" class="form-control">
                                             <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.CountryContactUs') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                             <hr>
                                <h4>{{ trans('labels.Map Info') }}</h4>
                                <hr>

                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Latitude') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][9]->name}}" id="{{$result['settings'][9]->name}}" class="form-control" value="{{$result['settings'][9]->value}}">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.latitudeText') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Longitude') }} </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="{{$result['settings'][10]->name}}" id="{{$result['settings'][10]->name}}" class="form-control" value="{{$result['settings'][10]->value}}">
                                        </div>
                                        
                                    </div>
                                    
                                </div> 

                                 
                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">{{ trans('labels.Update') }}</button>
                                        <a href="{{ URL::to('admin/dashboard/this_month')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	
</div>


@endsection
