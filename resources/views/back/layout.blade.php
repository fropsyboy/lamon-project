<!DOCTYPE HTML>
<html>
<head>
    <title> {{$title}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href=" {{ URL::asset('assets/back/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/back/css/style.css') }}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href=" {{ URL::asset('assets/back/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href=' {{ URL::asset('assets/back/css/SidebarNav.min.css') }}' media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->

    <!-- js-->
    <script src=" {{ URL::asset('assets/back/js/jquery-1.11.1.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/back/js/modernizr.custom.js') }}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src=" {{ URL::asset('assets/back/js/Chart.js') }}"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="{{ URL::asset('assets/back/js/metisMenu.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/back/js/custom.js') }}"></script>
    <link href=" {{ URL::asset('assets/back/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <Script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </Script>
    <Script>
        $(document).ready( function () {
            $('#myTableb').DataTable();
        } );
    </Script>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src=" {{ URL::asset('assets/back/js/pie-chart.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href=" {{ URL::asset('assets/back/css/owl.carousel.css') }}" rel="stylesheet">
    <script src="  {{ URL::asset('assets/back/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <aside class="sidebar-left">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="{{route('dashboard')}}"><span class="fa fa-share-square-o"></span> GreLa Mon  <span class="dashboard_text">Yoghurten</span></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-dashboard"></i> <span class="label label-primary">Dashboard</span>
                            </a>
                        </li>
                 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-sliders"></i> <span class="label label-default">Settings</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </aside>
    </div>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <div class="sticky-header header-section ">
        <div class="header-left">
            <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <!--toggle button end-->
            <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">



                </ul>
                <div class="clearfix"> </div>
            </div>
            <!--notification menu end -->
            <div class="clearfix"> </div>
        </div>
        <div class="header-right">


            <!--search-box-->


            <div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img src=" {{ URL::asset('assets/back/images/2.png') }}" alt=""> </span>
                                <div class="user-name">
                                    <p> Welcome {{ Auth::user()->name }}</p>
                                </div>
                                <i class="fa fa-angle-down lnr"></i>
                                <i class="fa fa-angle-up lnr"></i>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                            <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                {{ csrf_field() }}
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-trash"></i> 
                                <button class="btn btn-danger btn-xs">Log Out</button>
                            </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <form method="post" action="#">
                {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Make An Investment</h4>
                </div>
                <div class="modal-body">


                        <div class="form-group">
                            <label for="message-text" class="control-label">Account type:</label>
                            <select class="form-control"name="type" id="message-text">
                                <option value="1">Nigerian Account</option>
                                <option value="2" disabled>Bitcoin Account (coming soon)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Amount:</label>
                            <input type="text" class="form-control" name="amount" id="recipient-name">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Investment</button>
                </div>
            </div>
            </form>
        </div>
    </div>

@yield('content')

    <div class="footer">
        <p>&copy; 2018 Dashboard. All Rights Reserved </p>
    </div>
    <!--//footer-->
</div>
@include('back.footer')