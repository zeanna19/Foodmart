@extends('layouts.user_type.auth')

@section('content')
    <nav class="main-menu d-flex navbar navbar-expand-lg">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                    <li>
                        <a class="nav-link mx-1" href="dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a class="nav-link mx-1" href="tables">Petugas</a>
                    </li>
                    <li>
                        <a class="nav-link mx-1" href="itemList">Item List</a>
                    </li>
                    <li>
                        <a class="nav-link mx-1" href="histori">history transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis barang</label>
                                <select class="form-select" name="jenis" id="jenis"
                                    aria-label="Default select example" required>
                                    <option selected disabled>Pilih kategori</option>
                                    @foreach ($kategori as $Kategori)
                                        <option value="{{ $Kategori->id }}">{{ $Kategori->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga barang</label>
                                <input type="number" name="harga" class="form-control" id="harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" id="foto" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
