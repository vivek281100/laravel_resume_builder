@extends('menus.app')

@section('content')
<div class="outer">
        <div>{{ __('Reset Password') }}</div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email" >{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"  name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" >{{ __('Password') }}</label>

            <input id="password" type="password"  name="password" required autocomplete="new-password">

            @error('password')
                 <span  role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
            @enderror

                        
            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                           
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
           
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </form>
            
</div>
@endsection