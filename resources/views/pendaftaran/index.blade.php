@extends('layout.main')

@section('title', 'Pendaftaran Project')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Pendaftaran Project</h1>
                
                <a href="/pendaftaran/create" class="btn btn-primary my-3">Tambah Data</a>
                
                @if (session('status'))
                    <div class = "alert alert-succes">
                {{ session('status') }}
                    </div>
                @endif
                {{-- <ul class="list-group">
                    @foreach ($pendaftaran as $p)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $p-> nm_pendaftaran}}
                    <a href="/pendaftaran/{{$p->id_pendaftaran}}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul> --}}
        </div>
    </div>
</div>
@endsection
