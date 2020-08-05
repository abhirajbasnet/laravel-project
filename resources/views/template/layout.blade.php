<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website name</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    @yield('heading')
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

@include('template.navbar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    @yield('contentheading')

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                @yield('contentbody')

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- Main Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4 bg-black">

        <!-- Footer Elements -->
        <div class="container">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-2 col-md-12 mb-4">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src="{{asset('images/ford.jpg')}}" class="img-fluid"
                             alt="">
                        <a href="">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src="{{asset('images/Mercedes-benz.jpg')}}" class="img-fluid"
                             alt="">
                        <a href="">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src="{{asset('images/nissan.jpeg')}}" class="img-fluid"
                             alt="">
                        <a href="">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-12 mb-4">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src="{{asset('images/red%20bull.png')}}" class="img-fluid"
                             alt="">
                        <a href="">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src=" {{asset('images/volkswagon.jpeg')}}" class="img-fluid"
                             alt="">
                        <a href="">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <hr>
<!-- newsletter -->
        <section class="bg-dark text-center ">
            <div class="container p-3">
                <h3>SUBSCRIBE NOW</h3>
                <form action="#" method="Post">
                    <input type="text" name="text" placeholder="Enter Your Email Id">
                    <button type="button" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </section>
        <hr>
<!-- social sites-->
            <div class="container">

                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 ">
                        <div class=" text-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <hr>


                <!-- Grid row-->
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> tracetrack.com</a>
            </div>
            <!-- Copyright -->
            </div>
        </footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</div>
</body>
</html>
