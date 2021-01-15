@extends('layout.layout')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="col-md-7 mt-4 mx-auto">
            <form action="{{ route('do.register') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid  @enderror" placeholder="Fullname">
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <input type="text" name="username" class="form-control @error('username') is-invalid  @enderror" placeholder="Username">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" placeholder="Email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Remember me
                    </label>
                </div>

                <button class="btn mt-2  btn-primary">Send</button>
            </form>
        </div>
    </div>

@endsection

@section('footer')
    @parent
@endsection

@section('scripts')

@endsection


