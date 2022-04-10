@extends('menus.app')

@section('content')
<div class="outer">
    
    <div>{{ __('Reset Password') }}</div>
    <div>
    @if (session('status'))
         <div role="alert">
             {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div>
        <label for="email">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
        <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <button type="submit">
       {{ __('Send Password Reset Link') }}
    </button>

    </form>
    </div>
</div>
@endsection