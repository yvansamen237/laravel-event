@extends('layout.default')
@section('styles')
    <link rel="apple-touch-icon" sizes="60x60" href="/app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
@endsection

@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid"><!-- Zero configuration table -->
                    <section id="configuration">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-success"
                                             style="display: flex;justify-content: space-between">
                                            <h4 class="card-title">Liste des types de Comptes</h4>
                                            <a class="btn mr-1 btn-round shadow-z-2 btn-outline-pinterest"
                                               href="/admin/account/create">Nouveau Type de Compte</a>

                                        </div>
                                    </div>
                                    <div class="card-body collapse show">
                                        <div class="card-block card-dashboard">
                                            <p class="card-text"></p>
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nom</th>
                                                    <th>prix</th>
                                                    <th>description</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($formations as $c)
                                                    <tr>
                                                        <td>{{$c->id}}</td>
                                                        <td>{{$c->name}}</td>
                                                        <td>{{$c->price}}</td>
                                                        <td>{{$c->description}}</td>
                                                        <td> <button class="btn btn-red" data-toggle="modal" data-target="#success{{$c->id}}">Dépot <i class="fa fa-arrow-left"></i> </button> </td>


                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nom</th>
                                                    <th>prix</th>
                                                    <th>description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ Zero configuration table -->


                </div>
            </div>
        </div>

        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2018 <a
                            href="#" id="pixinventLink" target="_blank"
                            class="text-bold-800 primary darken-2">MICRO-STARTUP </a>, All rights reserved. </span></p>
        </footer>

    </div>
@endsection
@section('scripts')
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="/app-assets/vendors/js/core/popper.min.js"></script>
    <script src="/app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="/app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/app-assets/vendors/js/prism.min.js"></script>
    <script src="/app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="/app-assets/vendors/js/screenfull.min.js"></script>
    <script src="/app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/datatable/datatables.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="/app-assets/js/app-sidebar.js"></script>
    <script src="/app-assets/js/notification-sidebar.js"></script>
    <script src="/app-assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/data-tables/datatable-basic.js"></script>
    <!-- END PAGE LEVEL JS-->
@endsection