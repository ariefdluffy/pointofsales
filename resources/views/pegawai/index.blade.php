@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Data Karyawan</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="panel-heading">
                                <a href="#" class="btn btn-md btn-success">Tambah Data</a>
                            </div>
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>OPD</th>
                                    <th>Aksi</th>
                                </thead>
                                <?php $i=1; ?>
                                <tbody>
                                @foreach ($pegawai as $emp)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $emp->nama }}</td>
                                        <td>{{ $emp->nip }}</td>
                                        <td>{{ $emp->opd }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs">Detail</a>
                                            <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- container -->                       
    </div> <!-- content -->

    <footer class="footer">
        2017 © TEAMIT.
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
@endsection

@section('datatable')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection