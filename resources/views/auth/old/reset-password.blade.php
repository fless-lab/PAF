@extends("auth.layout")


@section("content")
<div class="login-form-area">
    <div class="login-form">

        <div class="login-heading">
            <span>Réinitialiser votre mot de passe</span>
            <p>Saisissez vos coordonnées pour continuer</p>
        </div>

        <form action="{{ route("password.update") }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route("token") }}">
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Adresse mail</label>
                    <input type="email" name="email" required  value="{{ $request->email }}" readonly>
                    @error("email")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields">
                    <label>Nouveau Mot de passe</label>
                    <input type="password" name="password" placeholder="Nouveau mot de passe" required autocomplete="new-password">
                    @error("password")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
                <div class="single-input-fields">
                    <label>Confirmez le nouveau mot de passe</label>
                    <input type="password" name="password_confirmation" placeholder="Confirmez le nouveau mot de passe" required autocomplete="new-password">
                </div>
            </div>

            <div class="login-footer">
                <p>Pas encore de compte? <a href="{{ route("register") }}">Inscrivez-vous</a> ici</p>
                <button class="submit-btn3">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>
@endsection
