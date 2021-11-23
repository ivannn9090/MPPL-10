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
                @include('dashboard.layout.navbar')

                <!-- isi konten -->
                {{-- @yield('content') --}}
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->
            
                    <div class="container-fluid">
                        <h2 class="fw-bold">Akun</h2>

                        <div class="row justify-content-between">
                            <button class="fw-bold border-0 m-2 col-5 py-2">
                                Data Pribadi
                            </button>
                            <button class="fw-bold border-0 m-2 col-5 py-2">
                                Dokumen
                            </button>
                        </div>

                        <form action="" method="get" class="row justify-content-between mt-3">
                            @csrf

                            <div class="col-5 my-2">
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Lengkap :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">NIM :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Tempat, tanggal lahir :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Jenis kelamin :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Agama :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                  
                                </div>
                            </div>
                            <div class="col-5 my-2">
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">No HP :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Ayah :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Ibu :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Pekerjaan Ayah :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Pekerjaan Ibu :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                  
                                </div>
                            </div>
                        </form>

                        {{-- <div class="row justify-content-between">
                            <div class="col-5 my-2">
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Lengkap :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">NIM :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Tempat, tanggal lahir :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Jenis kelamin :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Agama :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                  
                                </div>
                            </div>
                            <div class="col-5 my-2">
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Lengkap :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">NIM :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Tempat, tanggal lahir :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Jenis kelamin :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Agama :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4">                                  
                                </div>
                            </div>
                        </div> --}}


                    </div>
                </div>
                
            </div>
        </div>

        <!-- sidebar -->
        @include('dashboard.layout.sidebar')
    </div>



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