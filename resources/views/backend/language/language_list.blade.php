@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
       <!--  <a href="{{ URL::to('admin/addlanguages')}}" class="btn btn-primary pull-left">{{ trans('labels.AddLanguage') }}</a> -->
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.Default') }}</th>
                                          <th>{{ trans('labels.Language') }}</th>
                                          <th>{{ trans('labels.Icon') }}</th>
                                          <th>{{ trans('labels.Code') }}</th>
                                          
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($result['languages'])>0)
                                    @foreach($result['languages'] as $key=>$languages)
                                    <tr>
                                        <td><label>
                                  <input type="radio" name="languages_id" value="{{ $languages->languages_id}}"  class="default_language" @if($languages->is_default==1) checked @endif >
                                </label></td>
                                        <td><h5>{{ $languages->name }}</h5></td>
                                        <td><img src="{{asset('').'/'.$languages->image}}" width="25px" alt=""></td>
                                      <td> {{ $languages->code }}</td>
                                        
                                        <td>

                                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="{{ URL::to('admin/editlanguages/'.$languages->languages_id)}}" class="badge bg-light-blue"><i class="zmdi zmdi-edit" aria-hidden="true"></i></a>
                                             @if($languages->languages_id!=1 and $languages->is_default==0) 
                            <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteLanguageId" languages_id ="{{ $languages->languages_id }}" class="badge bg-red"><i class="zmdi zmdi-delete" aria-hidden="true"></i></a>
                                          @endif  
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
                                {{$result['languages']->links()}}
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