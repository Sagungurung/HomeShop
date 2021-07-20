@extends('admin.master2')
@section('title','Dashboard')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Orders</h3>
          @include('admin.includes.errorSuccessMessage')
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.N.</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Customer</th>
                <th>Contact</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
              @if(count($carts)>0)
              @foreach($products as $key=> $product)
              @foreach($carts as $cart)
              @if($cart->product_id == $product->id)
              <tr>
                <td>{{++$key}}</td>
                <td><img src="/uploads/sellerPhotos/products/{{$product->pimage}}" alt="{{$product->pimage}}" width="100" height="80"></td>
                <td>{{$product->pname}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->visitor->firstname}}</td>
                <td>{{$cart->visitor->phone_no}}</td>
                <td>{{$cart->visitor->address}}</td>
              </tr>
              @endif
              @endforeach
              @endforeach
              @else
              <tr>
                <td colspan="7" class="text-center">No Orders Yet.....</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
</section>
@endsection