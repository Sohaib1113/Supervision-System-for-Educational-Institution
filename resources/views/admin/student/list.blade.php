@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Student List</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('admin/student/add')}}" class="btn btn-primary">Add new Student</a>
                </div>
            </div>
        </div>
    </section>

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Search Student</h3>
                </div>
                <form method="get" action="">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{Request::get('name')}}" class="form-control"
                                    placeholder="Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Last Name</label>
                                <input type="text" name="last_name" value="{{Request::get('last_name')}}"
                                    class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Email</label>
                                <input type="text" name="email" value="{{Request::get('email')}}" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Admission Number</label>
                                <input type="text" name="admission_number" value="{{Request::get('admission_number')}}"
                                    class="form-control" placeholder="Admission Number">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Roll Number</label>
                                <input type="text" name="roll_number" value="{{Request::get('roll_number')}}"
                                    class="form-control" placeholder="Roll Number">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Class</label>
                                <input type="text" name="class" value="{{Request::get('class')}}" class="form-control"
                                    placeholder="Class">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Date</label>
                                <input type="date" name="date" value="{{Request::get('date')}}" class="form-control"
                                    placeholder="Date">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Gender<span style="color:red;">*</span></label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    <option {{(Request::get('gender') == 'Male') ? 'selected' : ''}} value="Male">Male
                                    </option>
                                    <option {{(Request::get('gender') == 'Female') ? 'selected' : ''}} value="Female">
                                        Female
                                    </option>
                                    <option {{(Request::get('gender') == 'Other') ? 'selected' : ''}} value="Other">Other
                                    </option>
                                </select>
                                <div style="color:red">{{$errors->first('gender')}}</div>
                            </div>
                            <div class="form-group col-md-3 align-self-end">
                                <button class="btn btn-primary" type="submit">Search</button>
                                <a href="{{url('admin/student/list')}}" class="btn btn-success">Clear</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('_message')

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Student List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Profile Pic</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Admission Number</th>
                                                <th>Roll Number</th>
                                                <th>Class</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Caste</th>
                                                <th>Religion</th>
                                                <th>Mobile Number</th>
                                                <th>Admission Date</th>
                                                <th>Blood Group</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getRecord as $value)
                                                <tr>
                                                    <td>{{$value->id}}</td>
                                                    <td>
                                                        @if(!empty($value->getProfile()))
                                                            <img src="{{$value->getProfile()}}"
                                                                style="height: 50px; width:50px; border-radius:50px;">
                                                        @endif
                                                    </td>
                                                    <td>{{$value->name}} {{$value->last_name}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->admission_number}}</td>
                                                    <td>{{$value->roll_number}}</td>
                                                    <td>{{$value->class_name}}</td>
                                                    <td>{{$value->gender}}</td>
                                                    <td>{{$value->date_of_birth}}</td>
                                                    <td>{{$value->caste}}</td>
                                                    <td>{{$value->religion}}</td>
                                                    <td>{{$value->mobile_number}}</td>
                                                    <td>{{$value->admission_date}}</td>
                                                    <td>{{$value->blood_group}}</td>
                                                    <td>{{$value->height}}</td>
                                                    <td>{{$value->weight}}</td>
                                                    <td>{{($value->status == 0) ? 'Active' : 'Inactive'}}</td>
                                                    <td>{{$value->created_at}}</td>
                                                    <td>
                                                        <a href="{{url('admin/student/edit/' . $value->id)}}"
                                                            class="btn btn-primary">Edit</a>
                                                        <a href="{{url('admin/student/delete/' . $value->id)}}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination-wrapper" style="padding:10px;float:right;">
                                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection