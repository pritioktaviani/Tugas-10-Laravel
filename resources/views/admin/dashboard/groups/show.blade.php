
@extends('layouts.app')
@section('content')
<div class="app-content content ecommerce-application">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="content-header-title float-left mb-0">{{$title}}</h2>
        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>

            </li>
          </ol>
        </div>
      </div>

    </div>
    <!-- DataTales Example -->
    <div class="card mt-2">
      <div class="card-header">
        <h3>Detail Groups</h3>
        {{-- <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah
        </button> --}}
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><h6>Nama Group : {{ $group['name'] }}</h6></td>
              <td><h6>Deskripsi : {{ $group['description'] }}</h6></td>
              <td>
                <?php
                if ($group->id==1) {
                    echo "<h6>Jumlah Anggota Group : $friend </h6>";
                } elseif ($group->id==2) {
                    echo "<h6>Jumlah Anggota Group : $friend2 </h6>";
                } elseif ($group->id==3) {
                    echo "<h6>Jumlah Anggota Group : $friend3 </h6>";
                } elseif ($group->id==4) {
                    echo "<h6>Jumlah Anggota Group : $friend4 </h6>";
                } else {
                    echo " Tidak Ada Grup";
                }
                 ?>
                </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>








<div>

</div>



@push('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/forms/select/select2.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-extended.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/colors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/components.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/themes/dark-layout.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/themes/bordered-layout.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/themes/semi-dark-layout.min.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/css/core/menu/menu-types/vertical-menu.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/plugins/forms/form-wizard.min.css')}}">
@endpush

@push('script')


<!-- BEGIN: Vendor JS-->
<script src="{{asset('/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('/js/core/app.min.js')}}"></script>
<script src="{{asset('/js/scripts/customizer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/js/scripts/forms/form-wizard.min.js')}}"></script>
@endpush



@endsection
