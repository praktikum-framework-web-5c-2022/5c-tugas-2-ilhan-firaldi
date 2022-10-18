@extends('master')
@section('title','Mahasiswa')
@section('judul')
<div class="matkul justify-content-center">
    <div class="container">
        <div class="bg-shape-3 col-lg-10 m-auto">
            <h1>Mata Kuliah</h1>
            <ol class="list-group list-group-numbered">
                @foreach ($matakuliah as $mk)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">{{ $mk }}</div>
                    </div>
                  </li>
                @endforeach
              </ol>
        </div>
    </div>
</div>
@endsection
