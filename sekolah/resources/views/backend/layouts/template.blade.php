<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('backend/assets/img/favicon.png')}}" />
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('backend/assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('backend/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{asset('backend/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/css/google-roboto-300-700.css')}}" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        @include('backend/layouts.sidebar')
        <div class="main-panel">
            @include('backend/layouts.navbar')
            @yield('dashboard')

            {{-- <div class="content">
                <div class="container-fluid">
                </div>
            </div> --}}

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="text-center">
                            <span class="badge filter badge-white" data-color="white"></span>
                            <span class="badge filter badge-black active" data-color="black"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox" unchecked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Image</p>
                        <div class="togglebutton switch-sidebar-image">
                            <label>
                                <input type="checkbox" checked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-2.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>
                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block">Buy Now</a>
                    </div>
                    <div class="">
                        <a href="http://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                    </div>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
                    <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot;</i>50</button>
                </li>
            </ul>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="{{asset('backend/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('backend/assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('backend/assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('backend/assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('backend/assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('backend/assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('backend/assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('backend/assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('backend/assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('backend/assets/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="{{asset('backend/assets/js/jquery.select-bootstrap.js')}}"></script>-->
<!-- Select Plugin -->
<script src="{{asset('backend/assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('backend/assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('backend/assets/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('backend/assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('backend/assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('backend/assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('backend/assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in backend/assets/js/demos.js')}}
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
</html>
