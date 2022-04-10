@extends('menus.app')

@section('content')
<div class="outer">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <label for="email" >E-Mail Address :</label>

    <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span  role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </br>
</br>
</br>
    <label for="password" >{{ __('Password') }}</label>

    <input id="password" type="password"  name="password" required autocomplete="current-password">

    @error('password')
        <span  role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</br>

    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

    <label for="remember">{{ __('Remember Me') }}</label>
</br>
    <button type="submit" >{{ __('Login') }}</button>

    @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    @endif
    </form>
</div>
@endsection