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
    <link rel="stylesheet" type="text/css" href="/app-assets/css/toastr.css">
@endsection

@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid"><!-- Basic form layout section start -->
                    <section id="basic-form-layouts">
                        {{--    <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="content-header">Création d'un nouveau compte</h2>
                                </div>
                            </div>--}}
                        <div class="row  col-md-12">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-success">
                                            <h4 class="card-title" id="basic-layout-form">Creer un Compte de collete
                                                journaliere pour un client en quelques
                                                clics</h4>
                                        </div>
                                        <p class="mb-0">Reseignez les informations du client pour creer un compte.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form" method="post"
                                                  action="{{isset($formation->id)?route("formation.update"):route("formation.store")}}">
                                                @csrf
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-user"></i> Informations Personnelles</h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">Nom</label>
                                                                <input type="text" id="projectinput1"
                                                                       class="form-control" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput2">prix</label>
                                                                <input type="number" id="projectinput2"
                                                                       class="form-control" name="price">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput2">Description</label>

                                                                <textarea class="form-control"
                                                                          name="description" cols="5"
                                                                          rows="5"></textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-bitbucket">
                                                        <i class=""></i> Enregistrer
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </section>
                    <!-- // Basic form layout section end -->
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
    <script src="/app-assets/js/toastr.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/data-tables/datatable-basic.js"></script>
    <!-- END PAGE LEVEL JS-->
    {!! Toastr::message() !!}
@endsection