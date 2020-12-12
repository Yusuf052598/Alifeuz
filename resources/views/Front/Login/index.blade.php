@extends('Front.layouts.login')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        {{--    @if(session()->get('success'))
                <div class="alert alert-success text-dark">
                    {{session()->get('success')}}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif--}}
        </div>
        <div class="col-lg-12">
            <form method="POST" action="{{ route('login.check') }}">
                @csrf
                <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>
                <div class="form-group">
                    <label for="password" class="form-control-label">{{ __('Email') }}</label>
                    <input id="password" type="text" placeholder="Enter your Email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="current-name">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-control-label">{{ __('Password') }}</label>
                    <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <!-- form-group -->
                <button type="submit" class="btn btn-block">
                    {{ __('Login') }}
                </button>
            </form>
        </div><!-- col-7 -->
    </div><!-- row -->
@endsection
