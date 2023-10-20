@extends('layouts.petugas.app')
@section('content')

<!-- Begin Page Content -->
                <div class="container">
                <h2 class="h4 mb-0 text-gray-800">Dashboard</h2>
                </div>
                <br>
                <br />
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row justify-content-evenly">

                        <!-- Earnings (Monthly) Card Example -->
                        
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-200 py-1" style="background-color: royalblue;">
                                <div class="card-body">
                                    <div class="container">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-4">
                                                <h2>Jumlah Pasien</h2></div>
                                                    <br><br>
                                            <div class="h4 mb-0 font-weight-bold text-white">{{ count($pasien) }} Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-4x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-200 py-2" style="background-color: royalblue;">
                                <div class="card-body">
                                    <div class="container">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-4">
                                                <h2>Jumlah laki-Laki</h2></div>
                                                <br><br>
                                            <div class="h4 mb-0 font-weight-bold text-white">{{ count($lakis) }} Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-4x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <div class="row justify-content-evenly">
                        
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="background-color: royalblue;">
                                <div class="card-body">
                                    <div class="container">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-4"><h2>Jumlah Perempuan</h2>
                                            </div>
                                            <br><br>
                                            <div class="h4 mb-0 font-weight-bold text-white">{{ count($perempuans) }} Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-female fa-4x text-white"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-1" style="background-color: royalblue;">
                                <div class="card-body">
                                    <div class="container">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-4"><h2>Jumlah Berkas</h2>
                                            </div>
                                            <br><br>
                                            <div class="h4 mb-0 font-weight-bold text-white">{{ count($berkas) }} Buah</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-4x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        
                </div>
            <!-- End of Main Content -->

            </div>

@endsection