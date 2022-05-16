@extends("auth.layout")


@section("content")
<div class="login-form-area">
    <div class="login-form">

        <div class="login-heading">
            <span>Connexion</span>
            <p>Saisissez vos coordonnées pour continuer</p>
        </div>

        <form action="{{ route("login") }}" method="post">
            @csrf
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Nom d'utilisateur ou Adresse mail</label>
                    <input type="text" name="username" required placeholder="Nom d'utilisateur ou adresse mail" value="{{ old("username") }}">
                    @error("username")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields">
                    <label>Mot de passe</label>
                    <input type="password" name="password" required placeholder="Saisir le mot de passe">
                    @error("password")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields login-check">
                    <input type="checkbox" id="fruit1" name="keep-log">
                    <label for="fruit1">Se souvenir de moi</label>
                    <a href="{{ url("forgot-password") }}" class="f-right">Mot de passe oublié?</a>
                </div>
            </div>

            <div class="login-footer">
                <p>Pas encore de compte? <a href="{{ route("register") }}">Inscrivez-vous</a> ici</p>
                <button class="submit-btn3">Connexion</button>
            </div>
        </form>
    </div>
</div>
@endsection
