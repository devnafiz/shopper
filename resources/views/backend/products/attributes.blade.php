@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{ URL::to('admin/addoptions')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewOption') }}</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                          <th>{{ trans('labels.ID') }}</th>
                                          <th>{{ trans('labels.Options') }}</th>
                                          <th width="40%">{{ trans('labels.Values') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($result)>0)
                                       @foreach($result as $data)
                                    <tr>
                                        
                                        <td>{{$data->products_options_id}}</td>
                                        
                                        <td>@foreach($data->data as $language)
                                        <strong>{{$language->name}}:</strong>
                                            @if(count($language->attributes)>0)
                                                  @foreach($language->attributes as $attribute)
                                                      {{$attribute->options_name}}<br>
                                                  @endforeach
                                              @else
                                                --- <br>
                                              @endif
                                       @endforeach
                                        <a href="{{ URL::to('admin/manage-options')}}/{{$data->products_options_id}}" >{{ trans('labels.Manage Options') }}</a><br></td>
                                         <td>@foreach($data->data as $language)
                                        <strong>{{$language->name}}:</strong>
                                            @if(count($language->values)>0)
                                                  @foreach($language->values as $value)
                                                      {{$value->options_values_name}}, 
                                                  @endforeach
                                              @else
                                                --- <br>
                                              @endif
                                              <br>
                                       @endforeach
                                       <a href="{{ URL::to('admin/manage-options-values')}}/{{$data->products_options_id}}" >{{ trans('labels.Manage Values') }}</a><br></td>
                                        
                                        <td>

                                           
                           <a option_id="{{$data->products_options_id}}" class="badge bg-red deleteOption"><i class="fa fa-trash " aria-hidden="true"></i></a>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                 @endif
                          
                                </tbody>
                            </table>

                        </div>
                        <div class="col-xs-12 text-right">
                    
                </div>
                    </div>
                    
                    
                </div>
 </div>

@endsection