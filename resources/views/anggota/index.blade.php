@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Daftar Anggota</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Daftar Anggota</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@section('addCss')
<link rel="stylesheet" href="{{asset ('css/dataTables.bootstrap4.min.css')}}">
@endsection


<!-- Main content -->
<div class="content">
	<div class="container-fluid">
	
		{{-- main content here --}}
        <div class="card">
			<div class="card-header text-right">
				<a href="{{ route('createAnggota')}}" class="btn btn-primary " role="button">Tambah Anggota</a>
			</div>
            <div class= "card-body">
				<table class="table table-bordered table-success table-stripped" id="data-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Anggota</th>
							<th>Buku yang dipinjam</th>
					</thead>
					<tbody>
						@foreach ($anggotas as $anggota)
						<tr>
							<td> {{ $loop->index + 1}}</td>
							<td> {{ $anggota->nama}}</td>
							<td> {{ $anggota->id_buku}}</td>
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