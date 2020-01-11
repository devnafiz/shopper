@extends('backend.layout')

@section('content')


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
 <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
    <div class="card">

      <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#addAdressModal">{{ trans('labels.AddAddress') }}</button>
    </div>
      
    </div>
   
 </div> 
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.BasicInfo') }}</th>
                                          <th>{{ trans('labels.AddressInfo') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data['customer_addresses']) > 0)
                                     @foreach($data['customer_addresses'] as $customer_addresses)
                                    <tr>
                                        <td>{{ $customer_addresses->address_book_id }}</td>
                                        <td>
                                           
                                          <strong>{{ trans('labels.Company') }}:</strong> {{ $customer_addresses->entry_company }}<br>
                                          <!--<strong>Gender:</strong> {{ $customer_addresses->entry_gender }}<br>-->
                                          <strong>{{ trans('labels.FirstName') }}:</strong> {{ $customer_addresses->entry_firstname }}<br>
                                          <strong>{{ trans('labels.LastName') }}:</strong> {{ $customer_addresses->entry_lastname }}
                                          </td>
                                        <td><strong>{{ trans('labels.Street') }}:</strong> {{ $customer_addresses->entry_street_address }}<br>
                                    <strong>{{ trans('labels.Suburb') }}:</strong> {{ $customer_addresses->entry_suburb }}<br>
                                    <strong>{{ trans('labels.Postcode') }}:</strong> {{ $customer_addresses->entry_postcode }}<br>
                                    <strong>{{ trans('labels.City') }}:</strong> {{ $customer_addresses->entry_city }}<br>
                                    <strong>{{ trans('labels.State') }}:</strong> {{ $customer_addresses->entry_state }}<br>
                                    <strong>{{ trans('labels.Zone') }}:</strong> {{ $customer_addresses->zone_name }}<br>
                                    <strong>{{ trans('labels.Country') }}:</strong> {{ $customer_addresses->countries_name }}</td>
                                      
                                         
                                        
                                        <td>
                                    <a class="badge bg-light-blue editAddressModal" customers_id = '{{ $data['customers_id'] }}' address_book_id = "{{ $customer_addresses->address_book_id }}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                  
                                    <a customers_id = '{{ $data['customers_id'] }}' address_book_id = "{{ $customer_addresses->address_book_id }}" class="badge bg-red deleteAddressModal"><i class="fa fa-trash " aria-hidden="true"></i></a>
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
                   
                </div>
 </div>

   <!-- addAdressModal -->
    <div class="modal fade" id="addAdressModal" tabindex="-1" role="dialog" aria-labelledby="addAdressModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="addAdressModalLabel">{{ trans('labels.AddAddress') }}</h4>
          </div>
          
          <form action="{{url('admin/addNewCustomerAddress')}}" name="addAddressFrom" id="addAddressFrom" method="post" class="form-horizontal" entype="multipart/form-data">
         
          <input type="hidden" name="customers_id" class="form-control" id="customers_id" value="{{$data['customers_id']}}">
          <div class="modal-body">  
              <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Company') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    
                    <input type="text" name="entry_company" class="form-control" id="entry_company">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FirstName') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    <input type="text" name="entry_firstname" class="form-control" id="entry_firstname">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.LastName') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    <input type="text" name="entry_lastname" class="form-control" id="entry_lastname">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.StreetAddress') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    
                    <input type="text" name="entry_street_address" class="form-control" id="entry_street_address">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Suburb') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    <input type="text" name="entry_suburb" class="form-control" id="entry_suburb">
                  </div>
                  </div>
               </div>
               
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Postcode') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    
                    <input type="text" name="entry_postcode" class="form-control" id="entry_postcode">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.City') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    <input type="text" name="entry_city" class="form-control" id="entry_city">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.State') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                    <input type="text" name="entry_state" class="form-control" id="entry_state">
                  </div>
                  </div>
               </div>
                                        
              <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Country') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                      <select id="entry_country_id" class="form-control ms" name="entry_country_id"> 
                         <option value="">{{ trans('labels.SelectCountry') }}</option>
                         @foreach($data['countries'] as $countries_data)
                          <option value="{{ $countries_data->countries_id }}">{{ $countries_data->countries_name }}</option>
                         @endforeach                     
                      </select>
                    </div>
                  </div>
                </div>

               <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.State') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                      <select class="form-control zoneContent ms" name="entry_zone_id">    
                          <option value="">{{ trans('labels.SelectState') }}</option>                  
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.DefaultShippingAddress') }}</label>
                  <div class="col-sm-10 col-md-8">
                    <div class="form-group">
                      <select id="is_default" class="form-control ms" name="is_default"> 
                          <option value="0">{{ trans('labels.No') }}</option>
                          <option value="1">{{ trans('labels.Yes') }}</option>                 
                      </select>
                    </div>
                  </div>
                </div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
            <button type="button" class="btn btn-primary" id="addAddress">{{ trans('labels.AddAddress') }}</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    

@endsection