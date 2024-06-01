@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Parent</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>First Name<span style="color:chartreuse;">*</span></label>
                                        <input type="text" name="name" value="{{old('name')}}" required
                                            class="form-control" placeholder="First Name">
                                        <div style="color:red">{{$errors->first('name')}}</div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>last_Name<span style="color:red;">*</span></label>
                                        <input type="text" name="last_name" value="{{old('last_name')}}" required
                                            class="form-control" placeholder="Last Name">
                                        <div style="color:red">{{$errors->first('last_name')}}</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Gender<span style="color:red;">*</span></label>
                                        <select class="form-control" required name="gender">
                                            <option value="">Select Gender</option>
                                            <option {{(old('gender') == 'Male') ? 'selected' : ''}} value="Male">Male
                                            </option>
                                            <option {{(old('gender') == 'Female') ? 'selected' : ''}} value="Female">
                                                Female
                                            </option>
                                            <option {{(old('gender') == 'Other') ? 'selected' : ''}} value="Other">Other
                                            </option>
                                        </select>
                                        <div style="color:red">{{$errors->first('gender')}}</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" value="{{old('occupation')}}"
                                            class="form-control" placeholder="Occupation">
                                        <div style="color:red">{{$errors->first('caste')}}</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Mobile Number<span style="color:red;">*</span></label>
                                        <input type="text" name="mobile_number" required
                                            value="{{old('mobile_number')}}" class="form-control"
                                            placeholder="Mobile Number">
                                        <div style="color:red">{{$errors->first('mobile_number')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address<span style="color:red;">*</span></label>
                                        <input type="text" name="address" value="{{old('address')}}"
                                            class="form-control" required placeholder="address">
                                        <div style="color:red">{{$errors->first('address')}}</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Profile Pic</label>
                                        <input type="file" name="profile_pic" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control" required name="status">
                                            <option value="">Select Status</option>
                                            <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                                            <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                        </select>
                                        <div style="color:red">{{$errors->first('status')}}</div>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Email<span style="color:red;">*</span></label>
                                    <input type="Email" name="email" value="{{old('name')}}" required
                                        class="form-control" placeholder="Email">
                                    {{$errors->first('email')}}
                                </div>
                                <div class="form-group">
                                    <label>Password<span style="color:red;">*</span></label>
                                    <input type="password" name="password" required class="form-control"
                                        placeholder="Password" placeholder="Password">
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection