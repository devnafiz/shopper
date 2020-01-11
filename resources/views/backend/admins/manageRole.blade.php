@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{ URL::to('admin/addadmintype')}}" class="btn btn-primary pull-left">{{ trans('labels.addadmintype') }}</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.types') }}</th>
                                          <th>{{ trans('labels.Date') }}</th>
                                          <th>{{ trans('labels.Status') }}</th>
                                          <th>{{ trans('labels.Manage Role') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($result['adminTypes']) > 0)
                                    @foreach($result['adminTypes']  as $key=>$adminType)
                                    <tr>
                                        <td>{{ $adminType->admin_type_id }}</td>
                                        <td><h5>{{ $adminType->admin_type_name }}</h5></td>
                                        <td> <strong>{{ trans('labels.AddedDate')}}: </strong>{{ date('d-m-Y', $adminType->created_at) }}<br>
                       <strong>{{ trans('labels.ModifiedDate')}}: </strong>@if(!empty($adminType->updated_at)){{ date('d-m-Y', $adminType->updated_at) }}@else --- @endif<br>
                         </td>
                                  <td>
                                        @if($adminType->isActive==1)
                                          <strong class="badge bg-green">{{trans('labels.Active')}} </strong>
                                        @else
                                        <strong class="badge bg-light-grey">{{trans('labels.InActive')}} </strong>
                                        @endif
                                </td>
                                         <td> <a href="addrole/{{ $adminType->admin_type_id }}" class="manage-role-popup" admin_type_id = "{{ $adminType->admin_type_id }}"> {{ trans('labels.Manage Role')}}</span>
                                        
                                        <td>

                                            <ul class="nav table-nav">
                                  <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      {{ trans('labels.Action') }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="editadmintype/{{ $adminType->admin_type_id }}">{{ trans('labels.editadmintype') }}</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCustomerFrom" customers_id="{{ $adminType->admin_type_id }}">{{ trans('labels.Delete') }}</a></li>
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
 </div>

@endsection