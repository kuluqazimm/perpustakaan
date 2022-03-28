@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit Buku</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Edit Buku</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="card">
    <div class="card-body">
        <form action="" method="post">
            @csrf


            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="form-control" required="required" value=" {{ $data_bukus->judul }}">
            </div>

            <div class="form-group">
                <label for="pengarang">Nama Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control" required="required" placeholder="Masukkan Nama Pengarang">
            </div>
            
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" required="required">
            </div>
            
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku</label>
                <input type="number" name="jumlah_buku" id="jumlah_buku" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required"></textarea>
            </div>

            <div class="text-right">
                <a href="{{ route('daftarBuku') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>


<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
