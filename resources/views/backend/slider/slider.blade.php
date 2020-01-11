@extends('backend.layout')

@section('content')
<div class="row">
              <div class="col-xs-12">
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
        <a href="{{url('admin/addsliderimage')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewImage') }}</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.Title') }}</th>
                                          <th>{{ trans('labels.Image') }}</th>
                                          <th>{{ trans('labels.AddedModifiedDate') }}</th>
                                          <th>{{ trans('labels.languages') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($result['sliders'])>0)
                                    @foreach ($result['sliders'] as $key=>$sliders)
                                    <tr>
                                        <td>{{ $sliders->sliders_id }}</td>
                                        <td>
                                       {{ $sliders->sliders_title }}</td>
                                        <td>  <img src="{{asset('').'/'.$sliders->sliders_image}}" alt="" width=" 100px"></td>
                                       <td>  <strong>{{ trans('labels.AddedDate') }}: </strong> {{ date('d M, Y', strtotime($sliders->date_added)) }}<br>
                            <strong>{{ trans('labels.ModifiedDate') }}: </strong>@if(!empty($sliders->date_status_change)) {{ date('d M, Y', strtotime($sliders->date_status_change)) }}  @endif<br>
                            <strong>{{ trans('labels.ExpiryDate') }}: </strong>@if(!empty($sliders->expires_date)) {{ date('d M, Y', strtotime($sliders->expires_date)) }}  @endif</td>
                                         <td>{{ $sliders->name }}</td>
                                  


                                        
                                        <td>
                                          <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editslide/{{ $sliders->sliders_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                            
                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteSliderId" sliders_id ="{{ $sliders->sliders_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>


                                              
                                           
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
 
 </div>

@endsection