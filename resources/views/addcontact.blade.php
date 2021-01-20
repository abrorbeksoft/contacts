@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
    @isset($error)
        <div  class="display-1" >
            {{ $error }}
        </div>
    @endisset
    <div class=" container-fluid " >
        <div class="col-md-8 mx-auto">
            <form action="{{ route('add.contact') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group my-2">
                    <label for="name">Name:</label>
                    <input name="name" type="text" id="name" class="form-control  @error('name') is-invalid @enderror " >
                    @error('name')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="image">Image:</label>
                    <input name="image" type="file" id="image" class="form-control  @error('image') is-invalid @enderror " >
                    @error('image')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="email">Email:</label>
                    <input name="email" type="email" id="email"  class="form-control  @error('email') is-invalid @enderror " >
                    @error('email')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="number">Number:</label>
                    <input name="number" type="text" id="number"  class="form-control  @error('number') is-invalid @enderror " >
                    @error('number')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection


