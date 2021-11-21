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
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="card-title">Recent Orders</div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-6 d-flex justify-content-md-end sort-index">
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-white dropdown-toggle" type="button" id="sortOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort By
                  </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Date</a>
                                                        <a class="dropdown-item" href="#">ID</a>
                                                        <a class="dropdown-item" href="#">Name</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown mr-4">
                                                    <button class="btn btn-white dropdown-toggle" type="button" id="filterOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter
                  </button>
                                                    <div class="dropdown-menu" aria-labelledby="filterOrdersDropdown">
                                                        <a class="dropdown-item" href="#">Delivered</a>
                                                        <a class="dropdown-item" href="#">Failed</a>
                                                        <a class="dropdown-item" href="#">Pending</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                                <form class="form-inline float-right">
                                                    <div class="form-group mr-3">
                                                        <label class="control-label mr-1">From:</label>
                                                        <input type="text" class="datepicker form-control" value="10/24/2017">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="control-label mr-1">To: </label>
                                                        <input type="text" class="datepicker form-control" value="10/25/2017">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr class="bg-fade">
                                            <th style="width: 120px;">Date</th>
                                            <th>Name</th>
                                            <th style="width: 100px;"># INV</th>
                                            <th style="width: 140px;">Amount</th>
                                            <th style="width: 100px">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="align-middle">23 Feb 2018</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Tara Knows</a>
                                                    <em class="text-muted ml-1">(Sales Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#31982</a>
                                            </td>
                                            <td class="align-middle">&dollar;8650.99</td>
                                            <td class="align-middle">
                                                <div class="badge badge-warning">pending</div>
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

                                        <tr>
                                            <td class="align-middle">09 Feb 2018</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Karen Smith</a>
                                                    <em class="text-muted ml-1">(Sales Representative)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#11102</a>
                                            </td>
                                            <td class="align-middle">&dollar;3445.00</td>
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

                                        <tr>
                                            <td class="align-middle">08 Jan 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Steven Short</a>
                                                    <em class="text-muted ml-1">(Sales Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#11990</a>
                                            </td>
                                            <td class="align-middle">&dollar;2390.75</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
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

                                        <tr>
                                            <td class="align-middle">18 Dec 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Mark Ups</a>
                                                    <em class="text-muted ml-1">(CEO / Co-Founder)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#40915</a>
                                            </td>
                                            <td class="align-middle">&dollar;19231.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
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

                                        <tr>
                                            <td class="align-middle">17 Nov 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Steven Short</a>
                                                    <em class="text-muted ml-1">(Sales Assistant Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#40912</a>
                                            </td>
                                            <td class="align-middle">&dollar;19231.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
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