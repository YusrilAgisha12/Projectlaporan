@extends('layout.main')

@section('title', 'Tentang Kami')

@section('content')

    <div class="container">        
        <div class="row mt-3">
            <nav class="breadcrumb bg-white">
                <ul class="breadcrumb bg-white">
                    <li class="breadcrumb-item">
                        <a href="/" class="nav-links text-decoration-none text-dark">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/about" class="nav-links text-decoration-none text-dark active font-weight-bold">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-sm">
                <img src="{{ url('frontend/images/studentbg.jpg') }}" height="70%" alt="">
            </div>
            <div class="col-sm">
                <h3>Aduan<span>Siswa</span></h3>
                <p>Merupakan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas impedit quis ipsa, voluptatem alias at eum cupiditate quos id nesciunt accusamus vitae nobis praesentium ad et minima ut mollitia assumenda!</p>
                <a href="/create/laporkan" class="btn btn-primary">Kirim Laporan!</a>
            </div>
            
        </div>
    </div>

    
@endsection
