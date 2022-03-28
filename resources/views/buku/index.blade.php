@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Data Buku</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Data Buku</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@section('addCss')
<link rel="stylesheet" href="{{asset ('css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('addJavascript')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script>
	$(function(){
		$("#data-table").DataTable()})</script>	
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script>
	confirmDelete = function(button){
		var url = $(button).data('url');
		swal({
			'title' : 'Konfirmasi Hapus',
			'text' : 'Apakah Kamu yakin ingin menghapus ini?',
			'dangerMode' :true,
			'buttons': true
		}).then(function(value) {
			if (value) {
				window.location = url;
			}
		})
	}
</script>
@endsection

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
	
		{{-- main content here --}}
        <div class="card">
			<div class="card-header text-right">
				<a href="{{ route('createBuku')}}" class="btn btn-primary " role="button">Tambah Buku</a>
			</div>
            <div class= "card-body">
				<table class="table table-bordered table-success table-stripped" id="data-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Judul</th>
							<th>Nama Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>Jumlah Buku</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data_bukus as $data_buku)
						<tr>
							<td> {{ $loop->index + 1}}</td>
							<td> {{ $data_buku->judul}}</td>
							<td> {{ $data_buku->pengarang}}</td>
							<td> {{ $data_buku->penerbit}}</td>
							<td> {{ $data_buku->tahun_terbit}}</td>
							<td> {{ $data_buku->jumlah_buku}}</td>
							<td> {{ $data_buku->deskripsi}}</td>
							<td>
								<a href="{{ route('editBuku', ['id' => $data_buku->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
								<a onclick="confirmDelete(this)" date-url="{{ route('deleteBuku', ['id'=> $data_buku->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
							</td>
						</tr>
							
						@endforeach
					</tbody>

				</table>
                
            </div>

        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection