<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <!-- Styles -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script>var hostUrl = "{{ asset('assets/') }}";</script>
</head>
<body id="kt_body" class="app-blank">

    
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!-- Aside section (left side) -->
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <div class="position-relative overflow-hidden h-100">
                    <video autoplay muted loop class="position-absolute w-100 h-100 object-fit-cover">
                        <source src="{{ asset('assets/media/logos/call5.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="position-relative z-index-1 d-flex flex-column flex-center p-10 p-lg-15">
                        <!-- ... (Keep the existing content of the left side) ... -->
                    </div>
                </div>
            </div>

            <!-- Main content (right side) -->
            <div class="d-flex flex-column flex-lg-row-fluid py-10" style="background-color: #f8e5e5;">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto" style="background-color: #fff1f1; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                        <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                            @csrf

                            <!-- Email Address -->
                            <div class="fv-row mb-10">
                                <label for="email" class="form-label fs-6 fw-bold text-dark">{{ __('Email') }}</label>
                                <input id="email" class="form-control form-control-lg form-control-solid" type="email" name="email" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label for="password" class="form-label fw-bold text-dark fs-6 mb-0">{{ __('Password') }}</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bold">{{ __('Forgot Password ?') }}</a>
                                    @endif
                                </div>
                                <input id="password" class="form-control form-control-lg form-control-solid" type="password" name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="fv-row mb-10">
                                <label for="remember_me" class="form-check form-check-custom form-check-solid">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <span class="form-check-label fw-semibold text-gray-700 fs-6">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">{{ __('Log in') }}</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!-- ... (Keep the footer content as in your provided HTML) ... -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
</body>
</html>
