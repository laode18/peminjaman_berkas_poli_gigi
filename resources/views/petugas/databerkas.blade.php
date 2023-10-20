@extends('layouts.petugas.app')
@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container">
                    <h2 class="h3 mb-2 text-gray-800">Data Berkas</h2>
                    <br />
                @include('layouts.messages')
                <br />
                    <a data-toggle="modal" data-target="#addModal">
                        <button class="bi bi-plus-circle-fill btn" style="background-color: royalblue; color:white;"> Tambah Data</button>
                    </a>
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
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">Tanggal Pinjam</th>
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
                                            <td style="vertical-align: middle; text-align: center;">{{ $np->tanggal_pinjam }}</td>
                                            <td style="text-align: center;">
                                                <div class="container mb-0">
                                                <button data-toggle="modal" data-target="#editModal{{ $np->id_berkas }}" class="bi bi-pencil-square editbtn btn btn-warning col-xl-3 col-md-4 mb-2" style="font-size: 1.3rem; color:white;" role="button"></button>
                                                <button data-toggle="modal" data-target="#my-modal{{ $np->id_berkas }}" class="bi bi-trash-fill btn btn-danger col-xl-3 col-md-4 mb-2" style="font-size: 1.2rem; color:white;" role="button"></button>
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
    <div id="my-modal{{ $np->id_berkas }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">   
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">
                        <div class="card-header pb-0 bg-white border-0 "><div class="row"><div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div> </div>
                        <p class="font-weight-bold mb-2" style="color: black;"> Are you sure you wanna delete this ?</p><p class="text-muted "> These changes will be visible on your portal and the data will be deleted.</p>     </div>
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0"> 
                            <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button><a class="btn btn-danger px-4" href="/petugas/databerkas/{{ $np->id_berkas }}" role="button">Delete</a></div><div class="col-auto"></div></div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @endforeach

    
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
    <div class="modal fade" id="editModal{{ $np->id_berkas }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%);">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ url('/petugas/databerkas/update',  $np->id_berkas) }}" method="POST" id="editform" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>No RM</label>
                    <select name="id_pasien" class="form-select" required>
                        @foreach ($pasien as $jb)
                            <option value="{{ $jb->id_pasien }}" {{ old('id_pasien', $np->id_pasien) == $jb->id_pasien ? 'selected' : null}}>{{ $jb->no_rm }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Dokter</label>
                    <select name="id_dokter" class="form-select" required>
                        @foreach ($dokter as $bj)
                            <option value="{{ $bj->id_dokter }}" {{ old('id_dokter', $np->id_dokter) == $bj->id_dokter ? 'selected' : null}}>{{ $bj->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input class="datepickers{{ $np->id_berkas }}"  name="tanggal_pinjam" value="{{ $np->tanggal_pinjam }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input class="datepickerss{{ $np->id_berkas }}"  name="tanggal_kembali" value="{{ $np->tanggal_kembali }}">
                </div>
                
                <br />
                <div class="modal-footer">
                <center><button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    </div>
    @endforeach


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%);">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ route('petugas.storedataberkas') }}" method="POST" id="editform" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>No RM</label>
                    <select name="id_pasien" class="form-select" required>
                        <option value="" hidden>No RM</option>
                        @foreach ($pasien as $jb)
                        <option value="{{ $jb->id_pasien }}">{{ $jb->no_rm }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Dokter</label>
                    <select name="id_dokter" class="form-select" required>
                        <option value="" hidden>Nama Dokter</option>
                        @foreach ($dokter as $bj)
                        <option value="{{ $bj->id_dokter }}">{{ $bj->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input class="datepicker3"  name="tanggal_pinjam" placeholder="Tanggal Pinjam">
                </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input class="datepicker2"  name="tanggal_kembali" placeholder="Tanggal Kembali">
                </div>
                
                <br />
                <div class="modal-footer">
                <center><button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    </div>

@foreach ($berkas as $np)
<script>
        $('.datepickers{{ $np->id_berkas }}').datepicker({
            format: "dd-mm-yyyy",
            uiLibrary: 'bootstrap4'
        });
    </script>
@endforeach

@foreach ($berkas as $np)
<script>
        $('.datepickerss{{ $np->id_berkas }}').datepicker({
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