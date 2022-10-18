@extends('master')
@section('title','Mahasiswa')
@section('judul')
<div class="mahasiswa justify-content-center">
    <div class="container">
        <div class="bg-shape-2 col-lg-10 m-auto">
            <h1>Mahasiswa</h1>
            <ol class="list-group list-group-numbered">
                @foreach ($mahasiswa as $ds)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">{{ $ds }}</div>
                    </div>
                  </li>
                @endforeach
              </ol>
        </div>
    </div>
</div>
@endsection
