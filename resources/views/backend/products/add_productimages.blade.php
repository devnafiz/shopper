@extends('backend.layout')

@section('content')

 <div class="row">
          <div class="col-lg-12">
    <div class="card">
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addImagesModal">
              {{ trans('labels.AddProductImage') }}</button>
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
                                          <th>{{ trans('labels.Description') }}</th>
                                          
                                          <th>{{ trans('labels.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if (count($result['products_images']) > 0)
                                   @foreach($result['products_images'] as $products_image)
                                    <tr>
                                        <td>{{ $products_image->id }}</td>
                                        <td><img src="{{asset('').'/'.$products_image->image}}" alt="" width=" 100px"></td>
                                        <td>{{ $products_image->htmlcontent }}</td>
                                       
                                        
                                        <td>

                                            <a class="badge bg-light-blue editProductImagesModal" products_id = '{{ $products_image->products_id }}' id = "{{ $products_image->id }}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                  <a products_id = '{{ $products_image->products_id }}' id = "{{ $products_image->id }}" class="badge bg-red deleteProductImagesModal"><i class="fa fa-trash " aria-hidden="true"></i></a>
                                           
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
                          <div class="box-footer text-center">
                              <a href="{{ URL::to("admin/products")}}" class="btn btn-primary">{{ trans('labels.SaveUpdate') }}</a>
                          </div>
                     
                          </div>
                    </div>
                    
                    
                </div>
 </div>

 <!-- addImagesModal -->
        <div class="modal fade" id="addImagesModal" tabindex="-1" role="dialog" aria-labelledby="addImagesModalLabel">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="addImagesModalLabel">{{ trans('labels.AddImage') }}</h4>
            </div>
            
                              <form action="{{url('admin/addNewProductImage')}}" name="addImageFrom" id="addImageFrom" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <input type="hidden" name="products_id" value="{{$result['data']['products_id']}}">
                                <input type="hidden" name="sort_order" value="{{count($result['products_images'])+1}}" id="sort_order">
            <div class="modal-body">
            
               <div class="form-group">
                <label for="name" class="col-sm-2 col-md-4 control-label">{{ trans('labels.Image') }}</label>
                <div class="col-sm-10 col-md-8">
                  
                  <input type="file" name="newImage" id="newImage" class="form-control">
                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                {{ trans('labels.UploadAdditionalImageText') }}</span>
                <br>
                </div>
              </div>

               
              

              <div class="form-group">
                <label for="name" class="col-sm-2 col-md-4 control-label">{{ trans('labels.Description') }} </label>
                <div class="col-sm-10 col-md-8">
                  <textarea name="htmlcontent" id="htmlcontent" colspan="3">
                    
                  </textarea>
                
                   <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                   {{ trans('labels.ImageDescription') }}
                   </span>
               
                </div>
              </div>
                            <div class="alert alert-danger addError" style="display: none; margin-bottom: 0;" role="alert"><i class="icon fa fa-ban"></i> {{ trans('labels.ChooseImageText') }} </div>
                             
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }} </button>
            <button type="button" class="btn btn-primary" id="addImage">{{ trans('labels.AddImage') }}</button>
            </div>
            </form>
          </div>
          </div>
        </div>
         
          <!-- editProductImagesModal -->
        <div class="modal fade" id="editProductImagesModal" tabindex="-1" role="dialog" aria-labelledby="editProductImagesModalLabel">
          <div class="modal-dialog" role="document">
          <div class="modal-content editImageContent">
            
          </div>
          </div>
        </div>
        
          <!-- deleteProductImageModal -->
        <div class="modal fade" id="deleteProductImageModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductImageModalLabel">
          <div class="modal-dialog" role="document">
          <div class="modal-content deleteImageEmbed">
            
            </div>
          </div>
            
             
                </div>

@endsection