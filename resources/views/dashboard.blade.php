<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    {{-- template bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link type="text/css" href="assets/css/vendor-morris.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-bootstrap-datepicker.css" rel="stylesheet">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/dashboard.css" rel="stylesheet">

    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" style="background-color: #F3FFE4" data-has-scrolling-region>

        <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                <!-- header -->
                <div class="mdk-header js-mdk-header" data-fixed >
                    <div class="mdk-header__content" >
                        <nav class="navbar navbar-expand-md navbar-dark d-flex-none" style="background-color: #F3FFE4;">
                            <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                                <i class="material-icons align-middle md-36" style="color: black">short_text</i>
                            </button>
                            <div class="collapse navbar-collapse" id="mainNavbar">
                                <ul class="navbar-nav ml-auto align-items-center">
                                    <li class="nav-item nav-link">
                                    </li>
                                    <li class="nav-item dropdown notifications d-flex align-self-center align-items-center" id="navbarNotifications">
                                        <a href="#" class="nav-link dropdown-toggle notifications--active" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons align-middle" style="color: black">notifications</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown" id="notificationsDropdown">
                                        </div>
                                    </li>
                                    <li class="nav-item nav-divider">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer" style="color: black">
                                            Frontted
                                            </a>
                                        </li>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>


                <!-- content -->
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->

                    <div class="container-fluid">
                        <h2>Dashboard</h2>
                            <h4>Ringkasan pinjaman</h4>
                            <div class="container mb-5">
                                <div class="row justify-content-between">
                                    <div class="col-3 bg-white shadow-lg mb-2 rounded p-lg-2 text-center">
                                        <h5 style="color: #787878">Total Pinjaman</h5>
                                        <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                                        <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                                        
                                    </div>
                                    <div class="col-3 bg-white shadow-lg mb-2 rounded-xs p-lg-2 text-center">
                                        <h5 style="color: #787878">Total Pinjaman</h5>
                                        <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                                        <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                                        
                                    </div>
                                    <div class="col-3 bg-white shadow-lg mb-2 rounded-xs p-lg-2 text-center">
                                        <h5 style="color: #787878">Total Pinjaman</h5>
                                        <h3 style="color: #DF3A3A">Rp 2.000.000</h3>
                                        <a href="#"><h5 style="font-size: 14px; color: #4ABD78">detail</h5></a>
                                        
                                    </div>
                                </div>
                            </div>

                        <div class="card">
                            <h4>Riwayat pengajuan pinjaman</h4>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr class="bg-fade">
                                            <th style="width: 120px;">ID</th>
                                            <th>pinjaman</th>
                                            <th>Jumlah</th>
                                            <th>Tgl Pinjam</th>
                                            <th>Tgl kembali</th>
                                            <th>Bunga</th>
                                            <th>Total</th>
                                            <th style="width: 100px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">08 Oct 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Karen Smith</a>
                                                    <em class="text-muted ml-1">(Sales Representative)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#1928</a>
                                            </td>
                                            <td class="align-middle">&dollar;1100.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-danger">failed</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- // END drawer-layout__content -->

        <!-- sidebar -->
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

                    <nav class="drawer  drawer--dark" style="
                        background: #1B2124;
                        color: #ffffff;
                    ">
                        <div class="drawer-spacer">
                            <div class="media align-items-center">
                                <div class="media-body" style="margin-left: 50px">
                                    <a href="/" class="h5 m-0 text-link"><img src="style/images/logo.png" alt=""/></a>
                                </div>
                            </div>
                        </div>
                        <!-- bikin garis line pembatas -->

                        <!-- DASHBOARDS MENU -->
                        <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                            <li class="drawer-menu-item active ">
                                <a href="#" style="color: #ffffff">
                                    <i class="material-icons" style="color: #ffffff">poll</i>
                                    <span class="drawer-menu-text"> Dashboard</span>
                                </a>
                            </li>
                            <li class="drawer-menu-item">
                                <a href="#" style="color: #ffffff">
                                    <i class="material-icons" style="color: #ffffff">dns</i>
                                    <span class="drawer-menu-text"> Pinjaman</span>
                                    {{-- <span class="badge badge-pill badge-success ml-1">4</span> --}}
                                </a>
                            </li>
                            <li class="drawer-menu-item " >
                                <a href="#" style="color: #ffffff">
                                    <i class="material-icons" style="color: #ffffff">store</i>
                                    <span class="drawer-menu-text"> Akun</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

    </div>
    <!-- // END sidebar -->



    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="assets/vendor/simplebar.js"></script>


    <!-- Vendor -->
    <script src="assets/vendor/Chart.min.js"></script>
    <script src="assets/vendor/moment.min.js"></script>


    <!-- APP -->
    <script src="assets/js/color_variables.js"></script>
    <script src="assets/js/app.js"></script>


    <script src="assets/vendor/dom-factory.js"></script>
    <!-- DOM Factory -->
    <script src="assets/vendor/material-design-kit.js"></script>
    <!-- MDK -->



    <script>
        (function() {
            'use strict';
            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()


            // Connect button(s) to drawer(s)
            var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        if (selector == '#default-drawer') {
                            $('.container-fluid').toggleClass('container--max');
                        }
                        drawer.mdkDrawer.toggle();
                    }
                })
            })
        })()
    </script>


    <script src="assets/vendor/morris.min.js"></script>
    <script src="assets/vendor/raphael.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/datepicker.js"></script>

    <script>
        $(function() {
            window.morrisDashboardChart = new Morris.Area({
                element: 'morris-area-chart',
                data: [{
                        year: '2017-01',
                        a: 6352.27
                    },
                    {
                        year: '2017-02',
                        a: 4309.98
                    },
                    {
                        year: '2017-03',
                        a: 1465.98
                    },
                    {
                        year: '2017-04',
                        a: 1298.25
                    },
                    {
                        year: '2017-05',
                        a: 3209
                    },
                    {
                        year: '2017-06',
                        a: 2083
                    },
                    {
                        year: '2017-07',
                        a: 1285.23
                    },
                    {
                        year: '2017-08',
                        a: 1289
                    },
                    {
                        year: '2017-09',
                        a: 4430
                    },
                    {
                        year: '2017-10',
                        a: 8921.19
                    }
                ],
                xkey: 'year',
                ykeys: ['a'],
                labels: ['Earnings'],
                lineColors: ['#fff'],
                fillOpacity: '0.2',
                gridEnabled: true,
                gridTextColor: '#ffffff',
                resize: true
            });

        });
    </script>


</body>

</html>