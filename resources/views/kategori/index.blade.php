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
                        <div class="panel-heading">Data Kategori</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="panel-heading">
                                <!-- <a href="#" class="btn btn-md btn-success">Tambah Data</a> -->
                                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                            </div>
                            <!-- Button trigger modal -->

                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <th>#</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                    <th>Aksi</th>
                                </thead>
                                <?php $i=1; ?>
                                <tbody>
                                
                                </tbody>
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

<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>

                <script> 
                    function cek(){ 
                        if(form.angka1.value == "" || form.angka2.value == ""){ 
                        alert("data kosong"); //jika angka kosong maka pesan akan tampil 
                        exit; 
                        } 
                    } 
                    function kali() { 
                        cek(); 
                        a=eval(form.angka1.value); 
                        b=eval(form.angka2.value); 
                        c=a*b
                        form.total.value = c; 
                    }
                </script> 

                <script>
                function sum() {
                    var txtFirstNumberValue = document.getElementById('txt1').value;
                    var txtSecondNumberValue = document.getElementById('txt2').value;
                    var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                    if (!isNaN(result)) {
                        document.getElementById('txt3').value = result;
                    }
                }
                </script>
                    <form name="form">
                    <div class="form-group">
                    <input type="number" id="txt1" onkeyup="sum();" />
                    <input type="number" id="txt2" onkeyup="sum();" />
                    <input type="number" id="txt3" />
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
