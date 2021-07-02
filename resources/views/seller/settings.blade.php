@extends('seller.sellerProfile')
@section('title', 'Settings')
@section('content')
<div class="row">

    @include('admin.includes.errorSuccessMessage')

    <form class="form-horizontal" name="edit-profile" action="{{route('seller.changeSettings')}}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{$sellers->id}}" />

        <div class="form-group">
            <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFirstName" placeholder="Name" name="firstname" value="{{$sellers->firstname}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="lastname" value="{{$sellers->lastname}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhoneNo" class="col-sm-2 control-label">Phone No.</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPhoneNo" placeholder="Phone No" name="phone_no" value="{{$sellers->phone_no}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Address</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Address" value="{{$sellers->address}}" name="address">
            </div>
        </div>
        <div class="form-group">
            <label for="shopName" class="col-sm-2 control-label">Shop Name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="shopName" placeholder="Shop Name" name="shopname" value="{{$sellers->shopname}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{$sellers->email}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputExperience" class="col-sm-2 control-label">Bio</label>

            <div class="col-sm-10">
                <textarea class="form-control" id="inputExperience" placeholder="Bio" name="bio">{{$sellers->bio}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputImage" class="col-sm-2 control-label">Profile Picture</label>

            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputImage" placeholder="Image" name="image">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection