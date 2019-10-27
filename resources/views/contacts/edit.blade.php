@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact edit</div>
                    <form action="{{ route('contact.update', [$contact->id]) }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $contact->name }}">
                            </div>

                            <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $contact->address }}">
                            </div>

                            <div class="form-group">
                            <label for="">phone</label>
                            <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $contact->phone }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Засах
                                </button>
                            </div>

                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
