@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">
        <!-- Page-Title -->
            <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Dashboard APLIKASIKU</h4>
                <ol class="breadcrumb">
                    <li>
                        <a>APLIKASIKU</a>
                    </li>
                    <li class="active">
                        <a>Data Barang</a>
                    </li>
                </ol>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Data Master Barang</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="panel-heading">
                                <a href="#" class="btn btn-md btn-success">Tambah Data</a>
                            </div>
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                    <th>Rak</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </thead>
                                <?php $i=1; ?>
                                <tbody>
                                @foreach ($barang as $items)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $items->kode_barang }}</td>
                                        <td>{{ $items->id_kategori }}</td>
                                        <td>{{ $items->id_subkategori }}</td>
                                        <td>{{ $items->id_rak }}</td>
                                        <td>{{ $items->harga_beli }}</td>
                                        <td>{{ $items->stok }}</td>
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
