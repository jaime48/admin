{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Reset Password</div>--}}

{{--<div class="panel-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Send Password Reset Link--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    {{--<!-- Animate.css -->--}}
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    {{--<!-- Custom Theme Style -->--}}
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <title>Gentelella Alela! | </title>

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <h1>重置密码</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <div class="alert alert-error">
                            {{ $errors->first('email') }}
                        </div>
                    @endif

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-2 control-label">邮箱</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">发送</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div>
                            <h1> <img src="{{asset('img/template/logo.png')}}" alt="..."  width="40" height="40"> 融祥汽车</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div>
</body>
</html>

{{--@endsection--}}

