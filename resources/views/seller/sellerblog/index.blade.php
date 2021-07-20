@extends('admin.master2')
@section('title','Blog')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Blog Table</h3>
          @include('admin.includes.errorSuccessMessage')
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if(count($blogs)>0)
              @foreach($blogs as $key=>$blog)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->category->name}}</td>
                <td><img src="/uploads/blogs/{{$blog->image}}" alt="{{$blog->image}}" width="100" height="80"></td>
                <td>{{\Illuminate\Support\Str::limit($blog->description,60)}}</td>
                <td>@if($blog->status == 1)
                  Active
                  @else
                  In-Active
                  @endif
                </td>
                <td>
                  <a href="{{route('seller.sellerblog.edit',$blog)}}"><i class="fa fa-edit" title="Edit"></i></a>
                  <a href="{{route('seller.sellerblog.delete',$blog)}}" onclick="return confirm('Are you sure you want to delete the blog?');"><i class="fa fa-trash text-danger" title="Delete"></i></a>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="7" class="text-center">No Records Found...</td>
              </tr>
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
</section>

@endsection
