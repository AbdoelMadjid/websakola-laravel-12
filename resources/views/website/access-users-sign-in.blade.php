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
                        name="email" value="superadmin@example.com" required autofocus autocomplete="username"
                        type="email">
                </div>
                {{-- Error message khusus login --}}
                <small id="emailErrorLogin" class="text-danger d-none">Format email tidak valid</small>
            </div>

            <script>
                const loginEmailInput = document.getElementById('email'); // id tetap "email"
                const loginEmailError = document.getElementById('emailErrorLogin');

                loginEmailInput.addEventListener('input', function() {
                    const emailValue = loginEmailInput.value.trim();
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (emailValue === '' || emailPattern.test(emailValue)) {
                        loginEmailError.classList.add('d-none'); // sembunyikan pesan
                    } else {
                        loginEmailError.classList.remove('d-none'); // tampilkan pesan
                    }
                });
            </script>


            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Password</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-finance-135 u-line-icon-pro"></i>
                    </span>

                    <input id="password"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-px-20 g-py-12"
                        name="password" required autocomplete="current-password" value="password" type="password">

                    {{-- Tombol Show/Hide Password --}}
                    <button type="button" id="togglePassword"
                        class="btn g-bg-secondary g-brd-secondary-light-v2 g-rounded-left-0">
                        <i class="fa fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
            </div>

            {{-- Script Toggle --}}
            <script>
                const togglePassword = document.querySelector('#togglePassword');
                const passwordInput = document.querySelector('#password');
                const toggleIcon = document.querySelector('#toggleIcon');

                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // ganti icon
                    toggleIcon.classList.toggle('fa-eye');
                    toggleIcon.classList.toggle('fa-eye-slash');
                });
            </script>


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

{{-- SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if (session('status'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: @json(session('status')),
            showConfirmButton: false,
            timer: 2000
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            html: `{!! implode('<br>', $errors->all()) !!}`,
        });
    @endif
</script>
