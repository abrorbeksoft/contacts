@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        <a class="btn btn-primary my-2" href="{{ route('addcontact') }}">Add new!</a>
            @foreach($contacts as $contact)
                <div class="row border shadow rounded-2 py-2 my-3">
                    <div class="col-md-1  col-4">
                        <img class="w-100  rounded-circle" src="{{ asset('storage') }}/{{ $contact->image }}" alt="yuklanmadi">
                    </div>
                    <div class="col-md-10">
                        <h5 class="text-muted " >
                            {{ $contact->name }}
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div>Emails:</div>
                                @foreach($contact->emails as $email)
                                    <div class="text-muted" >{{ $email->name }}</div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <div>Numbers:</div>
                                @foreach($contact->numbers as $number)
                                    <div class="text-muted" >{{ $number->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

    </div>
@endsection

@section('footer')
    @parent
@endsection


