@extends('admin.master2')
@section('title','Edit Category')
@section('content')
<section class="content">
      <div class="row">
      <div class="col-md-12">
      <div class="box">
        <div class="box-header">
              <h3 class="box-title">Edit Categories</h3>
              @include('admin.includes.errorSuccessMessage')
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="{{route('seller.sellerCategories.update', $category->id)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                    <label for="exampleForName">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleForStatus">Status</label>
                    <select name="status" id="exampleForStatus" class="form-control" value="{{$category->status}}">
                        <option value="1" {{($category->status==1)?'selected':''}}>Active</option>
                        <option value="0" {{($category->status==0)?'selected':''}}>In-Active</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleForShowInMenu">Show In Menu</label>
                    <select name="show_in_menu" id="exampleForShowInMenu" class="form-control" value="{{$category->show_in_menu}}">
                        <option value="1" {{($category->show_in_menu==1)?'selected':''}}>Yes</option>
                        <option value="0" {{($category->show_in_menu)?'selected':''}}>No</option>
                    </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Store</button>
                </div>
                </form>

            </div>
      </div>
      </div>
      </div>  
</section>
@endsection