@extends('admin.master')
@section('title','Blog')
@section('content')
<section class="content">
      <div class="row">
      <div class="col-md-12">
      <div class="box">
        <div class="box-header">
              <h3 class="box-title">Create Blog</h3>
              @include('admin.includes.errorSuccessMessage')
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="{{route('admin.blog.store')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                    <label for="exampleForName">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleForStatus">Category</label>
                    <select name="status" id="exampleForStatus" class="form-control">
                        <option value="" disabled>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="ForImage">Image</label>
                    <input type="file" class="form-control" name="image" id="ForImage">
                    </div>
                    <div class="form-group">
                    <label for="exampleForDescription">Description</label>
                    <textarea name="description" class="form-control" id="exampleForDescription"></textarea>
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