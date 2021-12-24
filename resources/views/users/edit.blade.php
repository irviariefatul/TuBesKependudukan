@extends('layouts.app3')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">EDIT DATA USER</h4>
                                <br>
                                <div class="basic-form">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <form method="POST" action="/users/{{$user->id}}">
                                        {{csrf_field()}}
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{$user->id}}"></br>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">{{ __('Username') }}</label>
                                                <input type="text" class="form-control" name="username" required="required"  value="{{$user->username}}"></br>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="email">{{ __('E-Mail Address') }}</label>
                                                <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
                                            </div>
                                        </div>

                                        <button type="submit" name="edit" class="btn login-form__btn submit w-100">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection