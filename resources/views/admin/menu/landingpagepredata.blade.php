@extends('layouts.admin.app')
@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container">
                    <h2 class="h3 mb-2 text-gray-800">Menu Landing Page (Presentase Data)</h2>
                    <br />
                @include('layouts.messages')
                <br />
                    <a href="/admin/landingpagenavpic">
                    <button class="bi bi-image btn" style="background-color: royalblue; color:white;"> Nav Picture</button></a>
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
                                            <th style="vertical-align: middle; text-align: center; width: 30%;">Judul Data</th>
                                            <th style="vertical-align: middle; text-align: center; width: 40%;">Icon</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($predata as $np)
                                        <tr>
                                            <td style="vertical-align: middle; text-align: center;">{{$no++}}.</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $np->judul_data }}</td>
                                            <td style="vertical-align: middle; text-align: center;">
                                                <i class="{{ $np->icon }} fa-4x"></i>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <div class="container mb-0">
                                                <button data-toggle="modal" data-target="#editModal{{ $np->id }}" class="bi bi-pencil-square editbtn btn btn-warning col-xl-3 col-md-4 mb-2" style="font-size: 1.3rem; color:white;" role="button"></button>
                                                <button class="bi bi-eye-fill detailbtn btn btn-info col-xl-3 col-md-4 mb-2" data-toggle="modal" data-target="#myModal{{ $np->id }}" style="font-size: 1.3rem; color:white;" role="button"></button>
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


    @foreach ($predata as $np)
    <div id="my-modal{{ $np->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">   
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">
                        <div class="card-header pb-0 bg-white border-0 "><div class="row"><div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div> </div>
                        <p class="font-weight-bold mb-2" style="color: black;"> Are you sure you wanna delete this ?</p><p class="text-muted "> These changes will be visible on your portal and the data will be deleted.</p>     </div>
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0"> 
                            <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button><a class="btn btn-danger px-4" href="/admin/landingpagepredata/{{ $np->id }}" role="button">Delete</a></div><div class="col-auto"></div></div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @endforeach

    
    @foreach ($predata as $np)
    <div id="myModal{{ $np->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
             <div class="modal-content" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%);">
                <div class="modal-header text-white">
                <h4>Detail landing Page Pre Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                    </div>
                <div class="modal-body text-white">
                    <div class="row">
                    <div class="col-lg-12">
                    <table class="table table-bordered no-margin" style="background-color: white;">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Judul Data</th>
                        <td style="vertical-align: middle; text-align: center;">{{ $np->judul_data }}</td>
                        </tr>
                        <tr>
                        <th style="vertical-align: middle; text-align: center;">Icon</th>
                        <td style="vertical-align: middle; text-align: center;">
                            <i class="{{ $np->icon }} fa-4x"></i>
                        </td>
                        </tr>
                        <tr>
                        
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
   
    @foreach ($predata as $np)
    <div class="modal fade" id="editModal{{ $np->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(43,43,255,1) 0%, rgba(0,212,255,1) 100%);">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ url('/admin/landingpagepredata/update',  $np->id) }}" method="POST" id="editform" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Judul Data</label>
                    <input type="text" name="judul_data" class="form-control" required="required" value="{{ $np->judul_data }}">
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" required="required" value="{{ $np->icon }}">
                    <label style="font-size: 10pt;">&nbsp; Ket : Untuk memasukkan nama icon bisa mengunjungi <a href="https://fontawesome.com/icons" target="_blank" style="color: white;"><u>link ini</u></a></label>
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
                <form action="{{ route('admin.storepredata') }}" method="POST" id="editform" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Judul Data</label>
                    <input type="text" name="judul_data" class="form-control" placeholder="Judul Data" required>
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" placeholder="Icon" required>
                    <label style="font-size: 10pt;">&nbsp; Ket : Untuk memasukkan nama icon bisa mengunjungi <a href="https://fontawesome.com/icons" target="_blank" style="color: white;"><u>link ini</u></a></label>
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

@endsection