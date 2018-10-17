@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('addPhoto') }}" class="btn btn-instalara"><i class="fa fa-upload"></i> Subir Foto</a>
                <br><br>
                @forelse ($photos as $photo)

                @empty
                    <div class="alert alert-dark">No ha publicado fotos!</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
