@extends('template.base')

@section('head')
    @parent
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    {{--<!-- jQuery -->--}}
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    {{--<!-- Bootstrap -->--}}
    <script src={{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}></script>
    {{--<!-- FastClick -->--}}
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    {{--<!-- NProgress -->--}}
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    {{--<!-- iCheck -->--}}
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
    {{--<!-- Datatables -->--}}
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/jquery.ba-replacetext.js')}}"></script>


@endsection

@section('main_content')

    <div class="right_col" role="main">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>用户管理</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered" style=" overflow: visible;" >
                            <thead>
                            <tr>
                            <tr>
                                <th>姓名</th>
                                <th>手机号</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td>John Doe</td>
                                <td>13876681721</td>
                                <td>test@gmail.com</td>
                                <td>2018-12-24 12:10:01</td>
                                <td>详情&nbsp; 修改 &nbsp;删除</td>
                            </tr>
                            <tr><td>Jack Ma</td>
                                <td>13411093744</td>
                                <td>2test@gmail.com</td>
                                <td>2018-12-24 15:34:01</td>
                                <td>详情&nbsp; 修改 &nbsp;删除</td>
                            </tr>
                            <tr><td>Marry Dick</td>
                                <td>19018173633</td>
                                <td>3test@gmail.com</td>
                                <td>2018-12-24 18:11:51</td>
                                <td>详情&nbsp; 修改 &nbsp;删除</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom')

    <script>
        $(document).ready(function(){
            $('label').replaceText( /\bShow\b/gi, '显示' );
            $('label').replaceText( /\bentries\b/gi, '条记录' );
            $('label').replaceText( /\bSearch\b/gi, '搜索' );

        })
    </script>

    <style>
        #datatable{
            overflow: visible;
        }
        td {
            position: relative; /* <-- added declaration */
        }
        td ul{
            position: relative;  /* <-- added declarations */
        }
        .dropdown-menu{
            position:absolute;
        }
        div {
            overflow: visible;
        }
    </style>
@endsection



