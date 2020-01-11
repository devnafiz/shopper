@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{ URL::to('admin/addcustomers')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewCustomers') }}</a>
    </div>
 </div> 
 <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
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
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.Picture') }}</th>
                                          <th>{{ trans('labels.PersonalInfo') }}</th>
                                          <th>{{ trans('labels.Address') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($customers['result']) > 0)
                                      @foreach ($customers['result']  as $key=>$listingCustomers)
                                    <tr>
                                        <td>{{ $listingCustomers->customers_id }}</td>
                                        <td>
                                            @if(!empty($listingCustomers->customers_picture))
                                            <img src="../{{ $listingCustomers->customers_picture }}" style="width: 100px; float: left; margin-right: 10px">
                                            @else
                                            <img src="../resources/assets/images/default_images/user.png" style="width: 100px; float: left; margin-right: 10px">
                                            @endif
                                          </td>
                                        <td><strong>{{ trans('labels.Name') }}: </strong> {{ $listingCustomers->customers_firstname }} {{ $listingCustomers->customers_lastname }} <br>
                  <strong>{{ trans('labels.DOB') }}: </strong> {{ $listingCustomers->customers_dob }}  <br>
                  <strong>{{ trans('labels.Email') }}: </strong> {{ $listingCustomers->email }} <br>
                  <strong>{{ trans('labels.Telephone') }}: </strong> {{ $listingCustomers->customers_telephone }} <br>
                  <br>
                                    <strong>{{ trans('labels.Devices') }}: </strong> 
                                    @if(count($listingCustomers->devices)>0)
                                      <a href="javaScript:avoid(0)" id="notification-popup" customers_id = "{{ $listingCustomers->customers_id }}"> 
                                      @foreach($listingCustomers->devices as $devices_data)
                                          <span>
                                              @if($devices_data->device_type == 1)
                                                {{ trans('labels.IOS') }}
                                                @elseif($devices_data->device_type == 2)
                                                  {{ trans('labels.Android') }}
                                                @elseif($devices_data->device_type == 3)
                                                  {{ trans('labels.Website') }} 
                                                @endif
                                            </span> 
                                      @endforeach
                                      </a>
                                    @endif</td>
                                       <td> <strong>{{ trans('labels.Company') }}: </strong> {{ $listingCustomers->entry_company }} <br>
                                    <strong>{{ trans('labels.Address') }}: </strong> 
                                    @if(!empty($listingCustomers->entry_street_address)) 
                                      {{ $listingCustomers->entry_street_address }},
                                    @endif
                                     @if(!empty($listingCustomers->entry_city)) 
                                      {{ $listingCustomers->entry_city }},
                                    @endif
                                     @if(!empty($listingCustomers->entry_state)) 
                                      {{ $listingCustomers->entry_state }},
                                    @endif
                                     @if(!empty($listingCustomers->entry_postcode)) 
                                      {{ $listingCustomers->entry_postcode }}
                                    @endif
                                     @if(!empty($listingCustomers->countries_name)) 
                                      {{ $listingCustomers->countries_name }}
                                    @endif </td>
                                         
                                        
                                        <td>

                                             <ul class="nav table-nav">
                                                <li class="dropdown">
                                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    {{ trans('labels.Action') }} <span class="caret"></span>
                                                  </a>
                                                  <ul class="dropdown-menu">
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="editcustomers/{{ $listingCustomers->customers_id }}">{{ trans('labels.EditCustomers') }}</a></li>
                                                      <li role="presentation" class="divider"></li>
                                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="addaddress/{{ $listingCustomers->customers_id }}">{{ trans('labels.EditAddress') }}</a></li>
                                                      <li role="presentation" class="divider"></li>
                                                      <li role="presentation"><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCustomerFrom" customers_id="{{ $listingCustomers->customers_id }}">{{ trans('labels.Delete') }}</a></li>
                                                </ul>

                                                 </li>
                                           </ul>
                                           
                                        </td>
                                    </tr>
                                    @endforeach 
                                     @else
                       <tr>
                            <td colspan="6">{{ trans('labels.NoRecordFound') }}</td>
                       </tr>
                    @endif   
                                </tbody>
                            </table>

                        </div>
                        <div class="col-xs-12 text-right">
                    
                </div>
                    </div>
                    <div class="card">
                        <div class="body">                            
                            <ul class="pagination pagination-primary m-b-0">
                                @if (count($customers['result']) > 0)
                                <div class="col-xs-12 text-right">
                                  {{$customers['result']->links()}}
                                </div>
                                @endif
                                <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    
                </div>
 </div>

@endsection