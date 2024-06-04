@extends('layout.admin.master')
@push('link')
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endpush
@section('headTitle')
Manajemen Pembelian
@endsection
@section('title')
Manajemen Pembelian
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pembelian <small>List</small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      @if(session()->has('error'))
                      <div class="alert alert-danger alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{ session()->get('error') }}
                      </div>
                      @endif
                      @if(session()->has('succes'))
                      <div class="alert alert-success alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{ session()->get('succes') }}
                      </div>
                      @endif
                      <a href="/admin/assetCategory/create" class="btn btn-info mb-5">Tambah pembelian</a>
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>no</th>
                            <th>Kode Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            
                            <th>aksi</th>
                          </tr>
                        </thead>


                        <tbody>
                          
                          <tr>
                            <td>1</td>
                            <td>F-12</td>

                          
                           
                          
                            <td>Alex</td>

                          

                           

                            <td>
                              <a href="/buy/order" class="btn btn-primary">Pembelian</a>


                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>F-13</td>

                          
                           
                          
                            <td>Ujang Petot</td>

                          

                           

                            <td>
                              <a href="" class="btn btn-primary">Detail Pembelian</a>

                             
                              <a href="" class="btn btn-danger">Hapus</a>

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
</div>


@endsection

@push('script')
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@endpush