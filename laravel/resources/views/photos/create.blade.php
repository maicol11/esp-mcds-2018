@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header card-header-instalara"><i class="fa fa-upload"></i>SUBIR FOTO</div>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('photos.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="photo" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="3" cols="30" class="form-control" placeholder="Comentario"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-instalara"><i class="fa fa-save">  Guardar</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
