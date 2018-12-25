<!DOCTYPE html>
<html lang="en">

@section('head')

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('img/template/logo.png')}}" type="image/ico" />
        <title>{{ config('app.name') }} </title>

        <!-- Bootstrap -->
        <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    </head>

@show

@section('body')

@show

</html>

