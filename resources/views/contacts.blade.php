@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        <table class="table table-hover">
            <tr><th>#</th><th>Name</th></tr>
            @foreach($user->contacts as $contact)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contact->name }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('footer')
    @parent
@endsection


