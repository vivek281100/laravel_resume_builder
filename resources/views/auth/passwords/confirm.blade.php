@extends('menus.app')

@section('content')
<div class="outer">
         <div>{{ __('Confirm Password') }}</div>

        <div class="card-body">
            {{ __('Please confirm your password before continuing.') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                        <label for="password">{{ __('Password') }}</label>

                        <input id="password" type="password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </form>
        </div>
</div>
@endsection