@extends('layout.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div>
                <div class="anak-judul">
                    <h4> Riwayat Mahasiswa
                    </h4>
                    <hr>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">


            <ol class="breadcrumb col-lg-12">
                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-black" href="#">Progress</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-item" href="#">Riwayat</a>
                </li>
            </ol>
            
            <table class="table table-responsive-lg table-bordered table-striped" style="width:100%" id="datatables">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" scope="col">Progress</th>
                        <th class="text-center" scope="col">Dosen Pembimbing</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Waktu</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @if(!$progress)
                        <td class="text-center" colspan="5">No Data Preview</td>
                        @else

                        <td class="text-center">Ahmad Fajri</td>
                        <td class="text-center">Perkuliahan</td>
                        <td class="text-center">RC1TI</td>
                        <td class="bg-success text-center">Accepted</td>
                        <td class="text-center">Senin, 16-10-2023 13.00</td>
                        @endif
                    </tr>



                </tbody>
            </table>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection