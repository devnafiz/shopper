@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-slide')}}" class="btn btn-primary pull-left">Create Category</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.Name') }}</th>
                                          <th>{{ trans('labels.Image') }}</th>
                                          <th>{{ trans('labels.AddedModifiedDate') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($result['banners'])>0)
                                      @foreach ($result['banners'] as $key=>$banners)
                                    <tr>
                                        <td>{{ $banners->banners_id }}</td>
                                        <td><h5>{{ $banners->banners_title }}</h5></td>
                                        <td><img src="{{asset('').'/'.$banners->banners_image}}" alt="" width=" 100px"></td>
                                       
                                         <td><strong>{{ trans('labels.AddedDate') }}: </strong> {{ date('d M, Y', strtotime($banners->date_added)) }}<br>
                            <strong>{{ trans('labels.ModifiedDate') }}: </strong>@if(!empty($banners->date_status_change)) {{ date('d M, Y', strtotime($banners->date_status_change)) }}  @endif<br>
                            <strong>{{ trans('labels.ExpiryDate') }}: </strong>@if(!empty($banners->expires_date)) {{ date('d M, Y', strtotime($banners->expires_date)) }}  @endif</td>
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editbanner/{{ $banners->banners_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                            
                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteBannerId" banners_id ="{{ $banners->banners_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                           
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
                                {{$result['banners']->links()}}
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
 </div>
 <div class="modal fade" id="deleteBannerModal" tabindex="-1" role="dialog" aria-labelledby="deleteBannerModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteBannerModalLabel">{{ trans('labels.DeleteBanner') }}</h4>
      </div>
      <form action="{{url('admin/deleteBanner')}}" class="form-horizontal" name="deleteBanner" id="deleteBanner" method="post" enctype="multipart/form-data">
      <input type="hidden" name="action" value="delete" class="form-control">
      <input type="hidden" name="banners_id" id="banners_id" class="form-control">
          
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteBannerText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary" id="deleteBanner">{{ trans('labels.Delete') }}</button>
      </div>
      </form>
    </div>
    </div>
  </div>

@endsection