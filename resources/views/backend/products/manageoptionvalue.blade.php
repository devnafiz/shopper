@extends('backend.layout')

@section('content')



  <!-- Content Header (Page header) -->

  <div class="row">
    <div  class="col-md-12 col-sm-12">

    <h1> {{ trans('labels.Options Value') }} <small>{{ trans('labels.Options Value') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Options Value') }}</li>
    </ol>
  </div>
  </div> 

 

    <!-- Info boxes --> 
    <!-- /.row -->
    <div class="row">

      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> {{ trans('labels.Options Value for') }} @foreach($result['options'] as $option) <strong>{{$option->options_name}}</strong> <span> / </span>  @endforeach</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
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
              <div class="col-md-6">
               
                <form action="{{url('admin/addnewvalues')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="products_options_id" value="{{$result['options'][0]->products_options_id}}" id="{{$result['options'][0]->products_options_id}}" class="form-control">
                
                
                <h4>{{ trans('labels.Add Option Value') }}</h4>
                 @foreach($result['languages'] as $languages)
                    <div class="form-group">
                      <label for="name" class="col-sm-2 col-md-4 control-label">{{ trans('labels.Option Value') }} ({{ $languages->name }})</label>
                      <div class="col-sm-10 col-md-8">
                        <input type="text" name="ValuesName_<?=$languages->languages_id?>" class="form-control field-validate">
                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.Option Value Text') }} ({{ $languages->name }}).</span>          
                        <span class="help-block hidden">{{ trans('labels.Option Value Text') }}</span>
                      </div>
                    </div>
                 @endforeach
                 
                 <div class="">
                 	<a href="{{ URL::to('admin/attributes')}}" type="button" class="btn btn-default pull-left"><i class="fa fa-angle-left"></i> {{ trans('labels.attributes') }}</a>
                    <button type="submit" class="btn btn-primary pull-right">{{ trans('labels.Add Values') }}</button>
                </div>
                
                  <!-- /.box-footer -->
                </form>
                
              </div>
              <div class="col-md-6">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>{{ trans('labels.ID') }}</th>
                      <th>{{ trans('labels.Values') }}</th>
                      <th>{{ trans('labels.Action') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($result['content'])>0)
                  	@foreach($result['content'] as $data)
                    <tr id="tr_parent_{{$data->products_options_values_id}}">
                    	<td>{{$data->products_options_values_id}}</td>
                        <td dir="ltr">
                       	 @foreach($data->data as $language)
                         	<p>
                         	<strong>{{$language->name}}:</strong>
                            @if(count($language->values)>0)
                                @foreach($language->values as $value)
                                    {{$value->options_values_name}}<br>
                                @endforeach
                            @else
                                --- <br>
                            @endif
                            </p>
                       	 @endforeach
                        </td>                          
                          <td><a data-toggle="tooltip" data-placement="bottom" title="" href="{{ URL::to('admin/edit-values/')}}/{{$data->products_options_values_id}}" class="badge bg-light-blue" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                          <a href="javascript:void(0)" value_id="{{$data->products_options_values_id}}" option_id="{{$result['options'][0]->products_options_id}}" data-toggle="tooltip" data-placement="bottom" title="" class="badge bg-red delete-value" data-original-title="Delete Value"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>                          
                  	</tr>
                    	
                    @endforeach
                  @endif
                  </tbody>
                  
                </table>

                <div class="col-xs-12 text-right">


                </div>

              </div>

            </div>

          </div>

          <!-- /.box-body --> 

        </div>

        <!-- /.box --> 

      </div>

      <!-- /.col --> 

    </div>

    

    <!-- /.row --> 

    <div class="modal fade" id="productListModalValue" tabindex="-1" role="dialog" aria-labelledby="productListModalValueLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="productListModalValueLabel">{{ trans('labels.AssociatedProducts') }}</h4>
          </div>
          <div class="modal-body">	
          	<p><strong>{{ trans('labels.DeletingValueErrorMessage') }}</strong></p>	
              <ul style="padding:0" id="assciate-products-value">
              </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Ok') }}</button>
          </div>
        </div>
      </div>
    </div>

    

    <!-- deleteattributeModal -->

	<div class="modal fade" id="deleteValueModal" tabindex="-1" role="dialog" aria-labelledby="deleteValueModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deleteValueModalLabel">{{ trans('labels.DeleteValue') }}</h4>
		  </div>
      <form action="{{url('admin/deletevalue')}}" id="deleteValue" method="post" class="form-control" name="deleteValue" enctype="multipart/form-data">
        <input type="hidden" name="action" value="delete" >
        <input type="hidden" name="value_id" id="value_id">
        <input type="hidden" name="delete_language_id" id="delete_language_id">
		 
		  <div class="modal-body">
			  <p>{{ trans('labels.DeleteValuePrompt') }}</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
			<button type="button" class="btn btn-primary" id="deleteAttribute">{{ trans('labels.DeleteValue') }}</button>
		  </div>
		  </form>
		</div>

	  </div>

	</div>
    <!-- Main row -->   
   <!-- /.row --> 
  



@endsection 