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
        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">

            </li>
          </ol>
        </div>
      </div>

    </div>
    <!-- DataTales Example -->
    <div class="card mt-2">
      <div class="card-header">
        <h3>{{ $title }}</h3>
        {{-- <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah
        </button> --}}
      </div>
      <div class="table-responsive">
        <form action="/friends/store" method="POST">
            @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="0">

          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>Nama
                  <td><input type="text" name="nama" class="form-control" ></td></td>
            </tr>
            <tr>
                <td>Nomor Handphone
                    <td><input type="text" name="nohp" class="form-control" ></td></td>
              </tr>
              <tr>
                <td>Alamat
                    <td><input type="text" name="alamat" class="form-control" ></td></td>
              </tr>
              <tr align="center">
                  <td colspan="2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </td>
              </tr>
        </tbody>
        </table>
        </form>
      </div>
    </div>
  </div>
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
