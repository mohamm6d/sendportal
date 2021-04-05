@extends('sendportal::layouts.base')

@section('htmlBody')
    <div class="container-fluid">
        <div class="row">

            <div class="sidebar bg-purple-100 min-vh-100 d-none d-xl-block">

                <div class="mt-4">
                    <div class="logo text-center">
                        <a href="{{ route('sendportal.dashboard') }}">
                            <img src="{{ asset('/img/logo-main.png') }}" alt="" height="40px">
                        </a>
                    </div>
                </div>

                <div class="mt-5">
                    @include('sendportal::layouts.partials.sidebar')
                </div>
            </div>

            @include('sendportal::layouts.main')
        </div>
    </div>
@endsection