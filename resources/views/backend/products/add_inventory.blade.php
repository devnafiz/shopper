
@extends('backend.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <h4><strong>{{ trans('labels.productName') }}:</strong> {{ $result['products'][0]->products_name }}</h4>
</div>
</div>

<div class="row">
	 <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('admin/addnewstock')}}"  id="ddewinventoryfrom" name="inventoryfrom" novalidate="novalidate" enctype="multipart/form-data">
                                <input type="hidden" name="products_id" value="{{$result['products'][0]->products_id}}" id="products_id">
                            	 @if(count($result['attributes'])==0 and $result['products'][0]->products_type==1)
                                        <div class="alert alert-danger" role="alert">
                                          {{ trans('labels.You can not add stock without attribute for variable product') }}
                                        </div>
                                    @endif
                            	 @if($result['products'][0]->products_type==1) 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">{ trans('labels.products_attributes') }}</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                        <ul class="list-group list-group-root well list-group-root2">    
                                              @foreach ($result['attributes'] as $attribute)                                    
                                              <li href="#" class="list-group-item"><label style="width:100%">
                                              <input id="attribute" type="hidden" class="attributeid_<?=$attribute['option']['id']?>" name="attributeid[]" value="" > {{ $attribute['option']['name']}}</label></li>
                                              <ul class="list-group">
                                                        <li class="list-group-item" >
                                                    @foreach ($attribute['values'] as $value)<label><input name="values_<?=$attribute['option']['id']?>" type="radio" class="currentstock required_one" value="{{ $value['products_attributes_id'] }}" attributeid = "{{ $attribute['option']['id'] }}"> {{ $value['value'] }}</label> @endforeach</li>
                                              </ul>
                                              @endforeach                                          
                                          </ul>    
                                        </div>
                                    </div>
                                </div>
                                 @endif
                                

                               <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label"> {{ trans('labels.Current Stock') }}  </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<p id="current_stocks" style="width:100%">{{$result['stocks']}}</p><br>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">{{ trans('labels.Total Purchase Price') }}  </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<p class="purchase_price_content" style="width:100%">{{ $result['currency'][19]->value }}<span id="total_purchases">{{$result['purchase_price']}}</span></p><br>
                                		</div>
                                		
                                	</div>
                                	
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Enter Stock') }}  </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="stock" value=""  class="form-control number-validate">
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Purchase Price') }}  </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                            <input type="text" name="purchase_price" value=""  class="form-control number-validate">
                                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          {{ trans('labels.Purchase Price Text') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                         <label class="control-label">{{ trans('labels.Reference / Purchase Code') }}  </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">
                                             <input type="text" name="reference_code" value=""  class="form-control field-required">
                                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          {{ trans('labels.Reference / Purchase Code Text') }}</span>
                                        </div>
                                        
                                    </div>
                                    
                                </div> 

                              
                                 
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        @if(count($result['attributes'])>0 and $result['products'][0]->products_type==1 or $result['products'][0]->products_type==0)
                                        <!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <button type="submit" class="btn btn-primary pull-right">{{ trans('labels.Add Stock') }}</button> 
                                        </div>
                                        
                                    @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="card">

                   <div class="body">
                     <div class="row">
                                <!-- /.col -->
                                <div class="col-md-12">
                                  <!-- USERS LIST -->
                                  <div class="box box-danger">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">{{ trans('labels.Manage Min/Max Quantity') }}</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <form class="form-horizontal form-validate-level" action="{{url('admin/addminmax')}}" name="addminmax" id="addminmax" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="products_id" value="{{$result['products'][0]->products_id}}" id="products_id">
                                   
                                    
                                    @if($result['products'][0]->products_type==1)
                                        
                                        <input type="hidden" name="inventory_ref_id" class="form-control check_reference_id" id="inventory_ref_id">
                                    @endif
                                    
                                  
                                   <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-4 control-label">
                                         {{ trans('labels.Min Level') }}                                 
                                      </label>
                                      <div class="col-sm-10 col-md-8">
                                            <input type="text" name="min_level" id="min_level" value="{{$result['min_level']}}"  class="form-control number-validate-level">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            {{ trans('labels.Min Level Text') }}</span>                             
                                      </div>
                                   </div>
                                   
                                   <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-4 control-label">
                                         {{ trans('labels.Max Level') }}                                 
                                      </label>
                                      <div class="col-sm-10 col-md-8">
                                            <input type="text" name="max_level" id="max_level" value="{{$result['max_level']}}"  class="form-control number-validate-level">
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            {{ trans('labels.Min Level Text') }}</span>                             
                                      </div>
                                   </div>
                                    <div class="alert alert-danger alert-dismissible" id="minmax-error" role="alert" style="display: none">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      {{ trans('labels.This stock is not asscociated with any attributes. Please choose products attributes first') }}
                                    </div>
                                    <!-- /.users-list -->
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <button type="submit" class="btn btn-primary pull-right">{{ trans('labels.Update') }}</button> 
                                    </div>
                                    
                                  </form>
                                    <!-- /.box-footer -->
                                  </div>
                                  <!--/.box -->
                                </div>
                                
                                <!-- /.col -->
                              </div>
                          </div>
                      </div>
                    
                </div>
	
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="box-footer col-xs-12">
                                @if($result['products'][0]->products_type==1)
                                        <a href="{{ URL::to('admin/addproductattribute/'.$result['products'][0]->products_id) }}"  class="btn btn-default pull-left">{{ trans('labels.AddOptions') }}</a>
                                      @else
                                  <a href="{{ URL::to("admin/products")}}" class="btn btn-default pull-left"> <i class="fa fa-angle-left"></i> {{ trans('labels.back') }}</a>
                                  @endif
                                  <a href="{{ URL::to("admin/addproductimages/{$result['products'][0]->products_id}")}}" class="btn btn-primary pull-right">  {{ trans('labels.AddImages') }} <i class="fa fa-angle-right"></i></a>                             
                            </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

@endsection
