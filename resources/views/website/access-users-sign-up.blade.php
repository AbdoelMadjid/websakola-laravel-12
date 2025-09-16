<form>
    <!-- Signup -->
    <div id="signup" style="display: none;">
        <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
            <div class="u-heading-v6-2 text-center text-uppercase g-mb-20">
                <h2 class="h3 u-heading-v6__title g-brd-primary g-color-text-light-v1 g-font-weight-600">Sign Up</h2>
            </div>
            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Full name</label>
                <div class="input-group">
                    <span class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                    <input
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                        type="text" placeholder="John Doe">
                </div>
            </div>

            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Email</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-education-166 u-line-icon-pro"></i>
                    </span>
                    <input id="emailInput"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                        type="email" placeholder="Masukkan email">
                </div>
                {{-- Tempat pesan error --}}
                <small id="emailError" class="text-danger d-none">Format email tidak valid</small>
            </div>

            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Password</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-finance-135 u-line-icon-pro"></i>
                    </span>
                    <input id="passwordInput"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-px-20 g-py-12"
                        type="password">

                    {{-- Icon Show/Hide --}}
                    <span class="input-group-addon g-bg-secondary g-brd-secondary-light-v2 cursor-pointer"
                        id="togglePasswordBtn">
                        <i class="fa fa-eye" id="passwordIcon"></i>
                    </span>
                </div>
            </div>

            <div class="g-mb-20">
                <label class="g-color-text-light-v1 g-font-weight-500">Confirm Password</label>
                <div class="input-group">
                    <span
                        class="input-group-addon g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                        <i class="icon-real-estate-056 u-line-icon-pro"></i>
                    </span>
                    <input id="confirmPasswordInput"
                        class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-px-20 g-py-12"
                        type="password">

                    {{-- Icon Show/Hide --}}
                    <span class="input-group-addon g-bg-secondary g-brd-secondary-light-v2 cursor-pointer"
                        id="toggleConfirmBtn">
                        <i class="fa fa-eye" id="confirmPasswordIcon"></i>
                    </span>
                </div>

                {{-- Tempat pesan error --}}
                <small id="passwordError" class="text-danger d-none">Password dan Confirm Password tidak sama</small>
            </div>

            <div class="d-flex">
                <button type="submit"
                    class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">Signup</button>
            </div>
        </div>

        <div class="text-center g-pt-30">
            <p class="g-color-text-light-v1 g-font-size-default mb-0">Already have an account? <a
                    class="g-font-size-default" id="signin-link" href="#!">Signin</a></p>
        </div>
    </div>
    <!-- End Signup -->
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // === Validasi Email ===
        const emailInput = document.getElementById('emailInput');
        const emailError = document.getElementById('emailError');

        emailInput.addEventListener('input', function() {
            const emailValue = emailInput.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailValue === '' || emailPattern.test(emailValue)) {
                emailError.classList.add('d-none');
            } else {
                emailError.classList.remove('d-none');
            }
        });

        // === Toggle Password & Confirm Password ===
        function setupToggle(inputId, toggleId, iconId) {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId);
            const icon = document.getElementById(iconId);

            if (!input || !toggle || !icon) return;

            toggle.addEventListener('click', function () {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);

                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });
        }

        setupToggle('passwordInput', 'togglePasswordBtn', 'passwordIcon');
        setupToggle('confirmPasswordInput', 'toggleConfirmBtn', 'confirmPasswordIcon');

        // === Validasi Password & Confirm Password ===
        const passwordInput = document.getElementById('passwordInput');
        const confirmPasswordInput = document.getElementById('confirmPasswordInput');
        const passwordError = document.getElementById('passwordError');

        function validatePasswordMatch() {
            if (confirmPasswordInput.value === '') {
                passwordError.classList.add('d-none');
                return;
            }
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordError.classList.remove('d-none'); // tampilkan error
            } else {
                passwordError.classList.add('d-none'); // sembunyikan error
            }
        }

        passwordInput.addEventListener('input', validatePasswordMatch);
        confirmPasswordInput.addEventListener('input', validatePasswordMatch);
    });
</script>
