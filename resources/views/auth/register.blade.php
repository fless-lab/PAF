@extends("auth.layout")


@section("content")
<div class="login-form-area">
    <div class="login-form">

        <div class="login-heading">
            <span>Inscription</span>
            <p>Commencez par créer votre compte</p>
        </div>

        <form action="{{ route("register") }}" method="POST">
            @csrf
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Nom et prénoms</label>
                    <input type="text" name="lastname" required placeholder="Votre nom" value="{{ old("lastname") }}">
                    @error("lastname")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                    <input type="text" name="firstname" required placeholder="Votre/Vos prénom(s)" value="{{ old("firstname") }}">
                    @error("firstname")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>

                <div class="single-input-fields">
                    <label>Adresse mail</label>
                    <input type="email" name="email" placeholder="Votre adresse mail" value="{{ old("email") }}" required>
                    @error("email")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                    @error("password")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields">
                    <label>Confirmez le mot de passe</label>
                    <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                </div>

            </div>

            <div class="login-footer">
                <p>Vous avez déjà un compte? <a href="{{ route('login') }}">Connectez-vous</a> ici</p>
                <button class="submit-btn3" type="submit">Login</button>
            </div>
        </form>


    </div>
</div>
@endsection
