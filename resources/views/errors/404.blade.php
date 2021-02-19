@extends('master')
@section('content')
    <div class="error-404-banner bg-grey-light-three">
        <div class="container">
            <div class="error-404-content text-center">
                <div class="txt-404 tilt-this">404</div>
                <div class="error-inner-content">
                    <h1 class="h1 m-b-xs-20 m-b-md-40">
                        Sorry, This Page Doesn't Exist.
                    </h1>
                    <a href="{{ URL::route('index') }}" class="btn btn-primary">BACK TO HOMEPAGE</a>
                </div>
            </div>
            <!-- End of .error-404-content -->
        </div>
        <!-- End of .container -->
    </div>
@stop