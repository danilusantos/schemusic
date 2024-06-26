<div class="mb-3 row justify-content-center">
    <div class="col-lg-8">
        <label for="email" class="form-label fw-bold text-md-end">
            {{ __('Email Address') }}
        </label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="mb-3 row justify-content-center">
    <div class="col-lg-8">
        <label for="password" class="fw-bold form-label text-md-end">
            {{ __('Password') }}
        </label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="mb-3 row justify-content-center">
    <div class="col-lg-8">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div>

<div class="mb-0 row justify-content-center">
    <div class="col-lg-8 text-center">
        <button type="submit" class="btn btn-dark rounded rounded-1 py-2 px-3">
            <h6 class="fw-bold mb-0">{{ __('Login') }}</h6>
        </button>


    </div>
</div>

@if (Route::has('password.request'))
    <div class="mb-0 row justify-content-end">
        <div class="col-lg-8 text-end">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </div>
@endif
