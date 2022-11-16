<x-guest-layout>
    <div class="login-card">

        <form action="{{ route('login') }}" method="POST" class="theme-form login-form">
            @csrf
            <x-jet-authentication-card-logo></x-jet-authentication-card-logo>
            <h4>Login</h4>
            <h6>Welcome back! Log in to your account.</h6>
            <x-jet-validation-errors class="mb-3" />
            <div class="form-group">
                <label>Email Address</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="email"
                        required="" placeholder="Test@gmail.com" name="email">
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"> </span></div>

                </div>
            </div>
            <div class="form-group">

                <div class="checkbox">
                    <input id="remember" type="checkbox" name="remember">
                    <label class="text-muted" for="remember">Remember password</label>
                </div>
                @if (Route::has('password.request'))
                    <a class="link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
        </form>
    </div>
</x-guest-layout>
