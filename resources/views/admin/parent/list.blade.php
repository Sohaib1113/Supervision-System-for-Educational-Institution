@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Parent List(Total:{{$getRecord->total()}})</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('admin/parent/add')}}" class="btn btn-primary">Add new Parent</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Search Parent</h3>
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
                                <label>Email</label>
                                <input type="text" name="email" value="{{Request::get('email')}}" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-3 align-self-end">
                                <button class="btn btn-primary" type="submit">Search Parent</button>
                                <a href="{{url('admin/parent/list')}}" class="btn btn-success">Clear</a>
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
                    <!-- /.col -->
                    <div class="col-md-12">
                        @include('_message')
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Parent List(Total:{{$getRecord->total()}})</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Profile Pic</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Mobile Number</th>
                                            <th>Occupation</th>
                                            <th>Address</th>
                                            <th>Status</th>
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

                                                <td>{{$value->gender}}</td>
                                                <td>{{$value->mobile_number}}</td>
                                                <td>{{$value->occupation}}</td>
                                                <td>{{$value->address}}</td>
                                                <td>{{($value->status == 0) ? 'Active' : 'Inactive'}}</td>

                                                <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>

                                                <td><a href="{{url('admin/parent/edit/' . $value->id)}}"
                                                        class="btn btn-primary">Edit</a></td>
                                                <td><a href="{{url('admin/parent/delete/' . $value->id)}}"
                                                        class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="padding:10px;float:right;"> {!!$getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}</div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection