@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('Message'))
        <div class="alert alert-success">{{ Session::get('Message') }}</div>
    @endif
    <h2>Зургийн цомог</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('album.image.upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id='1' value="1" name="id">
                    <input type="file" name="image" class="form-control">
                    <button type="submit" class="btn btn-success">Зураг засах</button>
                </form>
            </div>
        </div>
        @foreach ($albums as $album)
            <img src="{{ asset('uploads') }}/{{ $album->image }}" alt="">
        @endforeach

    </div>
</div>
@endsection
