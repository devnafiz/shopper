@extends('backend.layout')

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
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
           
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                         <th>{{ trans('labels.ID') }}</th>
                                        <th>{{ trans('labels.CustomerName') }}</th>
                                        <th>{{ trans('labels.OrderTotal') }}</th>
                                        <th>{{ trans('labels.DatePurchased') }}</th>
                                        <th>{{ trans('labels.Status') }} </th>
                                        <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($listingOrders['orders'])>0)
                                      @foreach ($listingOrders['orders'] as $key=>$orderData)
                                    <tr>
                                        <td>{{ $orderData->orders_id }}</td>
                                        <td><h5>{{ $orderData->customers_name }}</h5></td>
                                        <td>{{ $listingOrders['currency'][19]->value }}{{ $orderData->order_price }}</td>
                                       <td>{{ date('d/m/Y', strtotime($orderData->date_purchased)) }}</td>
                                         <td>@if($orderData->orders_status_id==1)
                                              <span class="label label-warning">
                                              @elseif($orderData->orders_status_id==2)
                                                  <span class="label label-success">
                                              @elseif($orderData->orders_status_id==3)
                                                   <span class="label label-danger">
                                              @else
                                                   <span class="label label-primary">
                                              @endif
                                              {{ $orderData->orders_status }}
                                     </span></td>
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="View Order" href="vieworder/{{ $orderData->orders_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            
                             <a data-toggle="tooltip" data-placement="bottom" title="Delete Order" id="deleteOrdersId" orders_id ="{{ $orderData->orders_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                           
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
                                {{$listingOrders['orders']->links()}}
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
 </div>

 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteModalLabel">{{ trans('labels.DeleteOrder') }}</h4>
      </div>
      <form action="{{url('admin/deleteOrder')}}" name="deleteOrder" id="deleteOrder" method="post" class="form-horizontal" enctype="multipart/form-data">
          <input type="hidden" name="action" value="delete" class="form-control">
          <input type="hidden" name="orders_id" class="form-control" id="orders_id">
          
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteOrderText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary" id="deleteOrder">{{ trans('labels.Delete') }}</button>
      </div>
     </form>
    </div>
    </div>
  </div>

@endsection