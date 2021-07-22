@extends('layout.app')

@push('styles')
@endpush

@section('content')
    <form id="login">
        <div class="input-control">
            <input type="email" id="email" name="email" placeholder="E-mail" />
            <label for="email"><i class="fas fa-envelope"></i></label>
        </div>
        <div class="input-control">
            <input type="password" id="password" name="password" placeholder="Password" />
            <label for="password"><i class="fas fa-key"></i></label>
        </div>
        <div class="submit-button">
            <div class="options">
                <p class="default">Entrar</p>
                <p class="loading"><i class="fas fa-spinner"></i></p>
                <p class="ready"><i class="fas fa-check"></i></p>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        var emailInput = document.querySelector('#login #email');
        var passwordInput = document.querySelector('#login #password');
        var submitButton = document.querySelector('#login .submit-button');

        submitButton.addEventListener('click', async function () {
            document.querySelector('#login .submit-button .options').style.top = '-34px';

            const options = {
                method: 'POST',
                body: JSON.stringify({
                    "email": emailInput.value,
                    "password": passwordInput.value
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            }
            const auth = await fetch('{{ route('api.login') }}', options)
                .then(res => res.json())
                .then(res => res)
                .catch(err => err);

            if(auth == true) {
                document.querySelector('#login .submit-button .options').style.top = '-68px';
                submitButton.classList.add('active');

                setTimeout(function () {
                    document.body.style.opacity = 0;

                    setTimeout(function () {
                        document.location.reload(true);
                    }, 400);
                }, 400);
            } else {
                document.querySelector('#login .submit-button .options').style.top = '0';
            }
        });
    </script>
@endpush
