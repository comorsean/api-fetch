@extends('app')
@section('content') 
    @include('includes.post-header')
    <div class="container px-4 px-lg-5">
        @foreach ($collections as $collection)
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-12 col-xl-12">
                        <h2>Post id: {{ $collection['id'] }}</h2>
                        <h3>Post title: {{ $collection['title'] }}</h3>
                        <p>
                            Post body:
                            {{ $collection['body'] }}
                        </p>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection