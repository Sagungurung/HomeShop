@extends('admin.master2')
@section('title','My Products')
@section('content')
<section class="content">
      <div class="row">
      <div class="col-md-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Products</h3>
              @include('admin.includes.errorSuccessMessage')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Image</th>
                    <th> Name</th>
                    <th>Price</th>
                    <th> Colors</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Category Name</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @if(count($products)>0)
                @foreach($products as $key=>$products)
                  <tr>
                    <td>{{++$key}}</td>
                    <td><img src="/uploads/sellerPhotos/products/{{$products->pimage}}" alt="{{$products->pimage}}" width="100" height="80"></td>
                    <td>{{$products->pname}}</td>
                    <td>{{$products->pprice}}</td>
                    <td>{{$products->pcolor}}</td>
                    <td>{{$products->psize}}</td>
                    <td>{{$products->pquantity}}</td>
                    <td>{{$products->category->name}}</td>
                    <td>
                        @if($products->pstatus == 1)
                            Active
                        @else
                            In-Active
                        @endif
                    </td>
                    <td>
                        <a href="{{route('seller.products.editProducts', $products->id)}}"><button class="btn btn-primary">
                          <i class="fa fa-edit"></i>
                        </button></a>
                        <a href="{{route('seller.products.delete', $products->id)}}" onclick="return confirm('Are You Sure?')"><button class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                        </button></a>
                    </td>
                  </tr>
                @endforeach 
                @else
                  <tr>
                    <td colspan="4" class="text-center">No Records Found...</td>
                  </tr>
                @endif
                </tbody>
              <tfoot>
                <tr>
                    <th>S.N.</th>
                    <th>Image</th>
                    <th> Name</th>
                    <th>Price</th>
                    <th> Colors</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Category Name</th>
                    <th>Status</th>
                </tr>
              </tfoot>
          </table>
      </div>
    </div>     
</section>
@endsection