<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/template/logo.png')}}" type="image/ico" />
    <title>{{ config('app.name') }} </title>

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
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>请登陆</h1>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" class="form-control" placeholder="邮箱" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" class="form-control" name="password" placeholder="密码" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group row">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                                </label>
                            </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">登陆</button>
                        <a class="reset_pass" href="{{asset('password/reset')}}">忘记密码？</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">新用户？
                            <a href="{{route('register')}}" class="to_register"> 创建账户 </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1> <img src="{{asset('img/template/logo.png')}}" alt="..."  width="40" height="40"> {{config('app.name')}}</h1>
                            <p> &copy; {{ date('Y') }} {{ config('app.name') }}保留所有权利.</p>
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
