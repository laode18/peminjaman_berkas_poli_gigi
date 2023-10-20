@extends('layouts.dokter.app')
@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container">
                    <h2 class="h3 mb-2 text-gray-800">Data Berkas</h2>
                    <br />
                @include('layouts.messages')
                <br />
                    </div>
                    <br/>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%); width: 100%;">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" style="background-color: white; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle; text-align: center; width: 10%;">No.</th>
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">No RM</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Nama Pasien</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Nama Dokter</th>
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">Keterangan</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($berkas as $np)
                                        <tr>
                                            <td style="vertical-align: middle; text-align: center;">{{$no++}}.</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $np->no_rm }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $np->nama_pasien }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $np->name }}</td>
                                            <?php
                                                if (is_null($np->tanggal_pinjam)) {
                                                    $ket = "Berkas Tidak Dipinjam";
                                                }else {
                                                    $ket = "Berkas Dipinjam";
                                                }
                                            ?>
                                            <td style="vertical-align: middle; text-align: center;">{{ $ket }}</td>
                                            <td style="text-align: center;">
                                                <div class="container mb-0">
                                                <button class="bi bi-eye-fill detailbtn btn btn-info col-xl-3 col-md-4 mb-2" data-toggle="modal" data-target="#myModal{{ $np->id_berkas }}" style="font-size: 1.3rem; color:white;" role="button"></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
            <!-- End of Main Content -->

    
    @foreach ($berkas as $np)
    <div id="myModal{{ $np->id_berkas }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
             <div class="modal-content" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%);">
                <div class="modal-header text-white">
                <h4>Detail Data Pasien</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                    </div>
                <div class="modal-body text-white">
                    <div class="row">
                    <div class="col-lg-12">
                    <table class="table table-bordered no-margin" style="background-color: white;">
                    <thead>
                    <tr>
                        <th style="text-align: center;">No RM</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->no_rm }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Nama Pasien</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->nama_pasien }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Nama Dokter</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->name }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Diagnosa</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->diagnosa }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Tindakan</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->tindakan }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Tanggal Berobat</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->tanggal_berobat }}</td>
                        </tr>
                        <tr>
                        <th style="text-align: center;">Tanggal Pinjam</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->tanggal_pinjam }}</td>
                        </tr>
                        
                        <tr>
                        <th style="text-align: center;">Tanggal Kembali</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->tanggal_kembali }}</td>
                        </tr>
                        
                    </thead>
                    </table>
                 </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach


@foreach ($berkas as $np)
<script>
        $('.datepickers{{ $np->id_berkas }}').datepicker({
            format: "dd-mm-yyyy",
            uiLibrary: 'bootstrap4'
        });
    </script>
@endforeach
<script>
        $('.datepicker2').datepicker({
            format: "dd-mm-yyyy",
            uiLibrary: 'bootstrap4'
        });
    </script>
<script>
        $('.datepicker3').datepicker({
            format: "dd-mm-yyyy",
            uiLibrary: 'bootstrap4'
        });
    </script>
<script>
        $('.datepicker4').datepicker({
            format: "dd-mm-yyyy",
            uiLibrary: 'bootstrap4'
        });
    </script>

@endsection