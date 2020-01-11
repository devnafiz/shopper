@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <a href="{{url('admin/addproduct')}}" class="btn btn-primary pull-left">{{ trans('labels.AddNewProducts') }}</a>
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
                                          <th>{{ trans('labels.ProductDescription') }}</th>
                                          <th>{{ trans('labels.AddedLastModifiedDate') }}</th>
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($results['products'])>0)
                                   @foreach ($results['products'] as  $key=>$product)
                                    <tr>
                                        <td>{{ $product->products_id }}</td>
                                        <td><img src="{{asset('').'/'.$product->products_image}}" alt="" width=" 100px" height="100px"></h5></td>
                                        <td width="45%"><strong>{{ $product->products_name }} @if(!empty($product->products_model)) ( {{ $product->products_model }} ) @endif</strong><br>
                                
                                <strong>{{ trans('labels.Product Type') }}:</strong>
                                  @if($product->products_type==0)
                                      {{ trans('labels.Simple') }}
                                    @elseif($product->products_type==1)
                                      {{ trans('labels.Variable') }}
                                    @elseif($product->products_type==2)
                                      {{ trans('labels.External') }}
                                    @endif
                                <br>
                                @if(!empty($product->manufacturers_name))
                                <strong>{{ trans('labels.Manufacturer') }}:</strong> {{ $product->manufacturers_name }}<br>
                                @endif
                                <strong>{{ trans('labels.Price') }}: </strong>     {{ $results['currency'][19]->value }}{{ $product->products_price }}<br>
                                <strong>{{ trans('labels.Weight') }}: </strong>  {{ $product->products_weight }}{{ $product->products_weight_unit }}<br>
                                <strong>{{ trans('labels.Viewed') }}: </strong>  {{ $product->products_viewed }}<br>
                                @if(!empty($product->specials_id))
                <strong class="badge bg-light-blue">{{ trans('labels.Special Product') }}</strong><br>
                                <strong>{{ trans('labels.SpecialPrice') }}: </strong>  {{ $product->specials_products_price }}<br>
                                  @if(!empty($product->specials_id)>0)
                                  <strong>{{ trans('labels.ExpiryDate') }}: </strong>  
                                  @if($product->expires_date > time())
                                     {{ date('d/m/Y', $product->expires_date) }}
                                   @else
                                    <strong class="badge bg-red">{{ trans('labels.Expired') }}</strong>
                                   
                                    @endif
                                  <br>
                                  @endif
                                @endif</td>
                                       <td> <strong>{{ trans('labels.AddedDate') }}: </strong> {{ $product->products_date_added }}<br>
                              <strong>{{ trans('labels.ModifiedDate') }}: </strong>{{ $product->products_last_modified }}</td>
                                         
                                        
                                        <td>

                                            <ul class="nav table-nav">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                  {{ trans('labels.Action') }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="editproduct/{{ $product->products_id }}">{{ trans('labels.EditProduct') }}</a></li>
                                    @if($product->products_type==1)
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="addproductattribute/{{ $product->products_id }}">{{ trans('labels.ProductAttributes') }}</a></li>
                                    @endif
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="addinventory/{{ $product->products_id }}">{{ trans('labels.addinventory') }}</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="addproductimages/{{ $product->products_id }}">{{ trans('labels.ProductImages') }}</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" id="deleteProductId" products_id="{{ $product->products_id }}">{{ trans('labels.DeleteProduct') }}</a></li>
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
                                {{$results['products']->links()}}
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