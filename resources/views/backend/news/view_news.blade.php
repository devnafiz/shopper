@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{ URL::to('admin/addnews')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNews') }}</a>
    </div>
 </div>
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
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.Image') }}</th>
                                          <th>{{ trans('labels.Name') }}</th>
                                          <th>{{ trans('labels.Feature') }}</th>
                                          <th>{{ trans('labels.AddedLastModifiedDate') }}</th>
                                          <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($news)>0)
                                     @foreach ($news as  $key=>$new)
                                    <tr>
                                        <td>{{ $new->news_id }}</td>
                                        <td><img src="{{asset('').'/'.$new->news_image}}" alt="" width=" 100px" height="100px"></td>
                                        <td><strong>{{ $new->news_name }}</strong></td>
                                       <td> @if($new->is_feature==1)
                                              <span class="badge bg-green">{{ trans('labels.Yes') }}</span> 
                                            @elseif($new->is_feature==0)
                                             <span class="badge bg-red">{{ trans('labels.No') }}</span> 
                                            @endif
                                          </td>
                                         <td><strong>{{ trans('labels.AddedDate') }}: </strong> {{ $new->news_date_added }}<br>
                              <strong>{{ trans('labels.ModifiedDate') }}: </strong>{{ $new->news_last_modified }}</td>
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editnews/{{ $new->news_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                
                                <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteNewsId" news_id="{{ $new->news_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                           
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
                               {{$news->links()}}
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
<div class="modal fade" id="deleteNewsModal" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteNewsModalLabel">{{ trans('labels.DeleteNews') }}</h4>
      </div>
      <form action="{{url('admin/deletenews')}}" name="deleteNews" method="post" class="form-horizontal" enctype="multipart/form-data">
      <input type="hidden" name="action" value="delete" class="form-control">
      <input type="hidden" name="id" id="id" class="form-control">
          
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteNewsText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary" id="deleteNews">{{ trans('labels.Delete') }}</button>
      </div>
      </form>
    </div>
    </div>
  </div>
@endsection