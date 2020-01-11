@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{ URL::to('admin/addcoupons')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewCoupon') }}</a>
    </div>
 </div>  
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
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.Code') }}</th>
                                          <th>{{ trans('labels.CouponType') }}</th>
                                          <th>{{ trans('labels.CouponAmount') }}</th>
                                          <th>{{ trans('labels.Descrition') }}</th>
                                          <th>{{ trans('labels.ExpiryDate') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($result['coupons'])>0)
                                     @foreach ($result['coupons'] as $key=>$coupan)
                                    <tr>
                                         <td>{{ $coupan->code }}</td>
                                        <td>{{ str_replace('_', ' ', $coupan->discount_type) }} </td>
                                              <td>@if($coupan->discount_type=='fixed_product' or $coupan->discount_type=='fixed_cart')
                                        {{ $result['currency'][19]->value }}{{ $coupan->amount }}
                                      @else
                                        {{ $coupan->amount }}%
                                      @endif</td>
                                       <td>{{ $coupan->description }}</td>
                                         <td>{{ date('d/m/Y',strtotime($coupan->expiry_date)) }}</td>
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editcoupons/{{ $coupan->coupans_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCoupans_id" coupans_id ="{{ $coupan->coupans_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                           
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
                                {{ $result['coupons']->links() }}
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
 </div>

 <div class="modal fade" id="deleteCoupanModal" tabindex="-1" role="dialog" aria-labelledby="deleteCoupanModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteCoupanModalLabel">{{ trans('labels.DeleteCoupon') }}</h4>
      </div>
      <form action="{{url('admin/deletecoupon')}}" name="deleteCoupan" id="deleteCoupan" method="post" class="form-horizontal" enctype="multipart/form-data"> 
        <input type="hidden" name="action" value="delete" class="form-control">
        <input type="hidden" name="id" class="form-control" id="coupans_id">

      
          
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteCouponText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary" id="deleteCoupanBtn">{{ trans('labels.Delete') }} </button>
      </div>
      </form>
    </div>
    </div>
  </div>

@endsection