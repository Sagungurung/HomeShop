@extends('admin.master')
@section('title','Blog')
@section('content')
<section class="content">
      <div class="row">
      <div class="col-md-12">
      <div class="box">
        <div class="box-header">
              <h3 class="box-title">Edit Blog</h3>
              @include('admin.includes.errorSuccessMessage')
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="{{route('admin.blog.update', $blog)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                    <label for="exampleTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleForTitle" placeholder="Enter Title" value="{{$blog->title}}" required>
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($blog->category_id == $category->id)?'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="ForImage">Image</label>
                    <input type="file" class="form-control" name="image" id="ForImage">
                    </div>
                    <div class="form-group">
                    <label for="exampleForDescription">Description</label>
                    <textarea name="description" class="form-control" id="exampleForDescription" cols="30" rows="10">{{$blog->description}}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleForStatus">Status</label>
                    <select name="status" id="exampleForStatus" class="form-control">
                        <option value="1" {{($blog->status == 1)?'selected':''}}>Active</option>
                        <option value="0" {{($blog->status == 0)?'selected':''}}>In-Active</option>
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