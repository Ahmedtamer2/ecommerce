@extends('admin.layouts.template')
@section('page_title')
Add Produts
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Add a New Product</h4>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0"><i>Product addtion</i></h5>
          <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
          @if($errors->any())
          <div class="alter alter-danger">
           <ul>
             @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
             @endforeach
             @endif
          <form method="POST" action="{{route('updateproducts',$edit_products->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">

            </div>
            <div class="row mb-3">
                <input type="hidden" name="{{$edit_products->id}}" id="id">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Product Name</label>
              <div class="col-sm-10">
                <input
                  type="text"
                  id="product_name"
                  name="product_name"
                  class="form-control phone-mask"
                  value="{{$edit_products->product_name}}"
                  aria-describedby="basic-default-phone"/>
              </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Product Price</label>
                <div class="col-sm-10">
                  <input
                    type="number"
                    id="	price"
                    name="price"
                    value="{{$edit_products->price}}"
                    class="form-control phone-mask"
                    
                    aria-describedby="basic-default-phone"/>
                </div>
              </div>


              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Long description</label>
                <div class="col-sm-10">
                    <textarea name="product_long_des" id="product_long_des" cols="30" rows="10"
                    id="basic-default-phone"
                    class="form-control "
                    
                    value="{{$edit_products->product_long_des}}"

                    aria-describedby="basic-default-phone"/>
                </textarea>
                </div>
              </div>


              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">Short description</label>
                <div class="col-sm-10" >
                 
                    <textarea name="product_short_des" id="product_short_des" cols="30" rows="10"
                        id="basic-default-phone"
                        class="form-control "
                    value="{{$edit_products->product_short_des}}"
                        
                        aria-describedby="basic-default-phone"/>
                    </textarea>
                </div>
              </div>


            

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">quantity Prodcts</label>
            <div class="col-sm-10">
            
                <div class="mb-3">
                    <input class="form-control"
                    value="{{$edit_products->quantity}}"
                    type="number" id="quantity" name="quantity" multiple="">
                  </div>
            </div></div>

            
        
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Edit Category</button>
                        </div>
                      </div>
                    </form>
     
      </div>
    </div>
</div>
@endsection