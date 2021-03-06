@extends('backend.layouts.master')
@section('content')

@php 
use App\Model\User; 
@endphp

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">User Details</h3>
                    @if (session('status'))
                    <p style="color: green;">{{session('status')}}</p>
                    @endif
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form role="form">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name :</label>
                                    {{$user->name}}
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username :</label>
                                    {{$user->username}}
                                    <div class="text-danger">{{ $errors->first('username') }}</div>
                                </div>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email :</label>
                                    {{$user->email}}
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >User Type :</label>
                                    @if($user->role == User::DOCTOR)
                                    Doctor
                                    @elseif($user->role == User::CUSTOMER)
                                    Customer
                                    @else
                                    Comapany
                                    @endif
                                </div>
                                <div class="text-danger">{{ $errors->first('role') }}</div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status :</label>
                                    {{($user->status == 1)? 'Enable' : 'Disable'}}
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Profile Image :</label>
                                <p><img src="{{(isset($user->profileImage))? asset('/uploads/profilepics/'.$user->profileImage) : asset('uploads/no_image.png')}}" height="120px" width="120px;" alt="profileImage"></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        @if($user->role == User::DOCTOR)
                        <a href="{{ route('admin.doctors') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                        @elseif($user->role == User::CUSTOMER)
                        <a href="{{ route('admin.customers') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                        @else
                        <a href="{{ route('admin.company') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection