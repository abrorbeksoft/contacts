@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        {{  $user->fullame }}
    </div>
@endsection

@section('footer')
    @parent
@endsection


