@extends('admin.master2')
@section('title','Edit Products')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Product</h3>
                    @include('admin.includes.errorSuccessMessage')
                </div>
                <div class="box-body">
                    <form role="form" class="form-horizontal" action="{{route('seller.products.update', $products)}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                        @csrf

                        <div class="form-group">
                            <label for="inputpName" class="col-sm-2 control-label">Product Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputpName" placeholder="Product Name" name="pname" value="{{$products->pname}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice" class="col-sm-2 control-label">Price</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPrice" placeholder="Price" name="pprice" value="{{$products->pprice}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputColor" class="col-sm-2 control-label">Color</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputColor" placeholder="Color" name="pcolor"value="{{$products->pcolor}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSize" class="col-sm-2 control-label">Sizes</label>
                            <select name="psize" id="inputSize" value="{{$products->pname}}">
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                                <option value="e">Extra Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pquantity" class="col-sm-2 control-label">Quantity</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="pquantity" placeholder="Quantity" name="pquantity" required>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="category" class="col-sm-2 control-label">Category</label>
                                <select name="category_id" id="category">
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{($products->category_id == $category->id)?'selected':''}}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="inputImage" class="col-sm-2 control-label">Product's Image</label>

                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputImage" name="pimage"value="{{$products->pimage}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleForStatus" class="col-sm-2 control-label">Status</label>
                            <select name="pstatus" id="exampleForStatus" value="{{$products->pstatus}}">
                                <option value="1" {{($products->status==1)?'selected':''}}>Active</option>
                                <option value="0" {{($products->status==0)?'selected':''}}>In-Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger" >Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection