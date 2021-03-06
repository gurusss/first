@extends('layouts.master')
@section('content')

@php 
use App\Model\Visitor; 
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
                                    {{$visitor->name}}
                                    <!-- dd($user); -->
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username :</label>
                                    {{$visitor->username}}
                                    <div class="text-danger">{{ $errors->first('username') }}</div>
                                </div>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email :</label>
                                    {{$visitor->email}}
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile :</label>
                                    {{$visitor->mobile}}
                                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                </div>
                            </div>





                            
                                
                                <div class="text-danger">{{ $errors->first('role') }}</div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status :</label>
                                    {{($visitor->status == 1)? 'Enable' : 'Disable'}}
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Profile Image :</label>
                                <p><img src="{{(isset($visitor->profileImage))? asset('/uploads/profilepics/'.$visitor->profileImage) : asset('uploads/no_image.png')}}" height="120px" width="120px;" alt="profileImage"></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection