@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Test PAge') }}</div>

                    <div class="card-body">
                            <div class="design"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-alert/>
    <script>
        var app = @json($arr);

        var app = @json($arr, JSON_PRETTY_PRINT);
        console.log(app)

        for (const appKey in app) {
            console.log("INdex: ", appKey,"  Value is : ", app[appKey])
        }
    </script>
@endsection
