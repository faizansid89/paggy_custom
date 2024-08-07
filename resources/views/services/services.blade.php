@extends('layouts.dashboard')

@section('content')

    <div class="page-wrapper cardhead">
        <div class="content container-fluid">
            <div class="row">
                    <!-- main alert @s -->
                    @include('partials.alerts')
                    <!-- main alert @e -->

                    <div class="col-md-12 text-center mb-4">
                        <h1 style="text-transform: uppercase;">Select Any Service then fill the form</h1>
                    </div>

                    @foreach($services as $key => $service)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ $service->service_link }}"><h3>{{ $service->title }}</h3></a>
                                </div>
                                <div class="card-body text-center">
                                    <a href="{{ $service->service_link }}"><img src="{{ $service->thumbnail }}" class="rounded" /></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    
@endsection