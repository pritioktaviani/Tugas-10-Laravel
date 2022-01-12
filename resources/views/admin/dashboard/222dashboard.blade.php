@php
// use App\Models\Data_kelas;
// use App\Models\Setting_kelas_siswa;
// use App\Models\Setting_kontrak_pengajaran;
// use App\Models\Setting_materi_pertemuan;
// use App\Models\Setting_master_materi;
// use App\Models\Data_jawaban_materi_pembelajaran;
@endphp

@extends('layouts.app')
@push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/app-invoice-list.min.css') }}">
@endpush
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">

                    </div>
                </div>
            </div>
            <div class="card">

                <div class="row p-2 justify-content-between">
                    <div class="col-lg-6 col-sm-4">
                        <a href="/logout" class="btn btn-danger"><h4 bgcolor=green>Logout</h4></a>
                        <a href="#" class="btn btn-success"><h4 bgcolor=green>Daftar Users - Dashboard Admin</h4></a>

                    </div>
                    <div class="col-lg-6 col-sm-8 text-right content-justify-end">

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($listuser as $index => $lt)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $lt->name }}</td>
                                    <td>{{ $lt->email }}</td>
                                    <td>{{ $lt->telepon }}</td>
                                    <td>{{ $lt->alamat }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- users edit ends -->

</div>


@endsection


@push('script')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('/js/core/app.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/pages/app-invoice-list.min.js') }}"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

    {{-- <script>
        })
    </script> --}}
 
@endpush
