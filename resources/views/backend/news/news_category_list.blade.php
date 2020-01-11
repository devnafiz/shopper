@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{url('admin/addnewscategory')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewsCategory') }}</a>
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
                                          <!--<th>Icon</th>-->
                                          <th>{{ trans('labels.AddedLastModifiedDate') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @if(count($listingCategories)>0)
                                       @foreach ($listingCategories as $key=>$categories)
                                    <tr>
                                        <td>{{ $categories->id }}</td>
                                        <td><h5>{{ $categories->name }}</h5></td>
                                        <td><img src="{{asset('').'/'.$categories->image}}" alt="" width=" 100px"></td>
                                       <td><strong>{{ trans('labels.AddedDate') }}: </strong> {{ $categories->date_added }}<br>
                            <strong>{{ trans('labels.ModifiedDate') }}: </strong>{{ $categories->last_modified }}  </td>
                                         
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="editnewscategory/{{ $categories->id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                           
                           <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteNewsCategroyId" category_id ="{{ $categories->id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                           
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
                               {{$listingCategories->links()}}
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
 </div>

 <div class="modal fade" id="deleteNewsCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteNewsCategoryModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteNewsCategoryModalLabel">{{ trans('labels.DeleteNewsCategory') }}</h4>
      </div>
      <form action="{{url('admin/deletenewscategory')}}" name="deletenewscategory" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="action" value="delete" class="form-control">
        <input type="hidden" name="id" id="id" class="form-control">
      
          
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteNewsCategoryText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary" id="deleteNewsCategory">{{ trans('labels.Delete') }}</button>
      </div>
      </form>
    </div>
    </div>
  </div>

@endsection