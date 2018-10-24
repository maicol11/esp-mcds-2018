@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img src="{{asset($photo->url)}}" alt="{{ $photo->description }}">
            <p> {{$photo->description}} </p>
        </div>
    </div>
</div>
@endsection
