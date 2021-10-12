@extends('public')

@section('title')
    Project {{$project['id']}}
@endsection

@section('body')
    Ceci est le projet numéro {{ $project['id'] }}
@endsection