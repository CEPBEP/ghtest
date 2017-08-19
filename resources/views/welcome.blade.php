@extends('layouts.welcome')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                $_[d{{ config('app.name', 'Laravel') }}]
                </div>

                <div class="links">
                    <a href="curl">tools</a>
                    <a href="ipfs">blockchain</a>
                    <a href="terminal">cmd</a>
                    <a href="frontend">frontend</a>
                    <a href="backend">backend</a>
                </div>
            </div>
        </div>
        @endsection

