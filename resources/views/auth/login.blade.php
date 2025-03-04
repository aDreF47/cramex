<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form role="form" class="text-start" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">                  
        </div>
        <div>
            @error('email')
            <span class= "text-primary text-xs">{{$message}}</span>
            @enderror
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div>
            @error('password')
            <span class= "text-primary text-xs">{{$message}}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
            <label class="form-check-label mb-0 ms-3" for="rememberMe">{{ __('Remember me') }}</label>
        </div>

        <!-- Restablecer contraseña views/auth/forgot-pasword.blde.php -->
        <div>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Log in') }}</button>
        </div>
        </form>
</x-guest-layout>
