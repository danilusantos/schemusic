@extends('site.layout.app')

@section('content')
    <div class="container">

        @can('admin')
            <h1>ADMIN</h1>
        @endcan

    </div>
@endsection
