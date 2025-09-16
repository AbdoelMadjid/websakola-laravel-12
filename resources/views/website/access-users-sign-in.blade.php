<x-auth-session-status class="mb-4" :status="session('status')" />
<form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Signin -->
    <div id="signin">
        <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
            <div class="u-heading-v6-2 text-center text-uppercase g-mb-20">
                <h2 class="h3 u-heading-v6__title g-brd-primary g-color-text-light-v1 g-font-weight-600">Sign in</h2>
            </div>
            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Email</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-education-166 u-line-icon-pro"></i>
                    </span>
                    <input id="email"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                        name="email" value="superadmin@example.com" required autofocus autocomplete="username" type="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Password</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-finance-135 u-line-icon-pro"></i>
                    </span>
                    <input id="password"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                        name="password" required autocomplete="current-password" value="password" type="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a class="g-color-text-light-v1 g-font-size-default" id="forgot-password-link" href="#!">Forgot
                    Password?</a>
                <button type="submit"
                    class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7">Signin</button>
            </div>
        </div>

        <div class="text-center g-pt-30">
            <p class="g-color-text-light-v1 g-font-size-default mb-0">Do not have an account? <a
                    class="g-font-size-default" id="signup-link" href="#!">Create Account</a>
            </p>
        </div>
    </div>
    <!-- End Signin -->
</form>
