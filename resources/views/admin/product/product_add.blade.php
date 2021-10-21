@extends('admin.admin_master')
@section('admin')

<div class="container-full">
		<!-- Content Header (Page header) -->
	 

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Product</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate>
					  <div class="row">
						<div class="col-12">						
							
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Brand <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="brand_id" class="form-control">
                                                <option value="" selected="" disabled>Select Brand</option>
                                                
                                                @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                @endforeach
            
                                            </select>
                                            @error('brand_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Category  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" class="form-control">
                                                <option value="" selected="" disabled>Select Category</option>
                                                
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
            
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>SubCategory  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subcategory_id" class="form-control">
                                                <option value="" selected="" disabled>Select SubCategory</option>
                            
            
                                            </select>
                                            @error('subcategory_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name" class="form-control"> 
                                            @error('subcategory_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Product Code <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_code" class="form-control"> 
                                            @error('product_code')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Product Quantity <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_qty" class="form-control"> 
                                            @error('product_qty')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                            </div>

                            

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Product Color <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_color" class="form-control" placeholder="White, Blue, Black"> 
                                            @error('product_color')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Selling Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="selling_price" class="form-control"> 
                                            @error('selling_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <h5>Product Discount Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="discount_price" class="form-control"> 
                                            @error('discount_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Product Tags <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_tags" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" placeholder="add tags"> 
                                            @error('product_tags')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5>Product Size <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size" class="form-control" value="Small, Medium, Large" data-role="tagsinput" placeholder="add tags"> 
                                            @error('product_size')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Main Thumbnail <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_thumbnail" class="form-control"> 
                                            @error('product_thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Multiple Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image_name[]" class="form-control"> 
                                            @error('image_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                            
                                <div class="col-md-12">

                                
                                    <div class="form-group">
                                        <h5>Short Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="short_description" id="editor1" class="form-control" required placeholder="Textarea text"></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>

                            <div class="row">
                            
                                <div class="col-md-12">

                                
                                    <div class="form-group">
                                        <h5>Long Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="long_description" id="editor2" class="form-control" required placeholder="Textarea text"></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>


							<hr>
						
					
						</div>
					  </div>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_1" name="hot_deals" value="1">
											<label for="checkbox_1">Hot Deals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_2" name="featured" value="1">
											<label for="checkbox_2">Featured</label>
										</fieldset>
									</div>
								</div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_3" name="special_offer" value="1">
											<label for="checkbox_3">Special Offer</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_4" name="special_deals" value="1">
											<label for="checkbox_4">Special Deals</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						
						<div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>


      <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id){
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success:function(data){
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="' + value.id + '"> ' + value.subcategory_name + '</option>');
                            })
                        }
                    })
                } else {
                    alert('danger');
                }
            })
        })
      </script>



@endsection