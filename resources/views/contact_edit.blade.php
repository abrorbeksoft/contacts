@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
{{ $contact->name  }}
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card " style="margin-top: 120px;">
            <img class="card-img-top w-25  rounded mx-auto rounded-circle" style="margin-top: -12%;" src="{{ asset('storage') }}/{{ $contact->image }}" alt="">

            <div class="card-body">
                <h3 class="text-muted">{{ $contact->name }}</h3>
                <div class="row">
                    <div class="col-md-6">
                        @foreach($contact->emails as $email)
                            <div>{{ $email->name }}</div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach($contact->numbers as $number)
                            <div>{{ $number->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @parent
@endsection


