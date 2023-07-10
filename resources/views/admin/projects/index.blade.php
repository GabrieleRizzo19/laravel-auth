@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            
            @foreach ($projects as $project)
                <div class="col-4">
                    <div class="card mt-3">
                        <img src="{{ $project['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $project['name'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div>
@endsection