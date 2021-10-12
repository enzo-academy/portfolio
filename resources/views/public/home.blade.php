@extends('public')

@section('title')
    Homepage
@endsection

@section('body')
<div class="body-height">
    <main class="homepage-main">
        <div class="homepage-wrapper">
            <div class="first-title">
                <h1>
                    Enzo Legallais
                </h1>
            </div>
            <div class="second-title">
                <h2>
                    Web Developper
                </h2>
            </div>
        </div>
        <a class="explore-link" href="{{ url('projects') }}">
            Explore...
        </a>
    </main>
</div>
@endsection
