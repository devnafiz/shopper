@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{url('admin/addadmins')}}" class="btn btn-primary pull-left">{{ trans('labels.addadmins') }}</a>
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
                                          <th>{{ trans('labels.AdminType') }}</th>
                                          <th>{{ trans('labels.Status') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($result['admins']) > 0)
                                    @foreach($result['admins']  as $key=>$admin)
                                    <tr>
                                        <td>{{ $admin->myid }}</td>
                                        <td>
                                @if(!empty($admin->image))
                                <img src="../{{ $admin->image }}" style="width: 100px; float: left; margin-right: 10px">
                                @else
                                <img src="../resources/assets/images/default_images/user.png" style="width: 100px; float: left; margin-right: 10px">
                                @endif
                  </td>
                                        <td>  <strong>{{ trans('labels.Name') }}: </strong> {{ $admin->first_name }} {{ $admin->last_name }} <br>
                  <strong>{{ trans('labels.Email') }}: </strong> {{ $admin->email }} <br>
                  <strong>{{ trans('labels.phone') }}: </strong> {{ $admin->phone }} <br></td>
                                       <td>  <strong>{{ trans('labels.Name') }}: </strong> {{ $admin->first_name }} {{ $admin->last_name }} <br>
                  <strong>{{ trans('labels.Email') }}: </strong> {{ $admin->email }} <br>
                  <strong>{{ trans('labels.phone') }}: </strong> {{ $admin->phone }} <br></td>
                                         <td> @if($admin->admin_type_id==1)
                                  <strong class="badge bg-green">
                                @else
                                  <strong class="badge bg-light-blue">
                                @endif
                                  {{$admin->admin_type_name}}</strong></td>
                                  <td>
                                  @if($admin->isActive==1)
                                    <strong class="badge bg-green">{{trans('labels.Active')}} </strong>
                                  @else
                                  <strong class="badge bg-light-grey">{{trans('labels.InActive')}} </strong>
                                  @endif
                                  
                                </td>


                                        
                                        <td>


                                              <ul class="nav table-nav">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                  {{ trans('labels.Action') }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="editadmin/{{ $admin->myid }}">{{ trans('labels.editadmin') }}</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCustomerFrom" customers_id="{{ $admin->myid }}">{{ trans('labels.Delete') }}</a></li>
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



                  <!-- deleteCustomerModal -->
  <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteCustomerModalLabel">{{ trans('labels.deleteAdmin') }}</h4>
      </div>
     
      <form action="{{url('admin/deleteadmin')}}" name="deleteAdmin" id="deleteAdmin" method="post" class="form-horizontal" enctype="multipart/form-data">
          
         <input type="hidden" name="action" class="form-control">
         <input type="hidden" name="myid" class="form-control" id="customers_id">
      <div class="modal-body">            
        <p>{{ trans('labels.Are you sure you want to delete this admin') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary">{{ trans('labels.Delete') }}</button>
      </div>
    </form>
      
    </div>
    </div>
  </div>
    
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content notificationContent">

    </div>
    </div>
  </div>
 </div>

@endsection