@extends("auth.layout")


@section("content")
<div class="login-form-area">
    <div class="login-form">


        @if (!session("status"))
        <div class="login-heading">
            <span>Récuperer votre mot de passe</span>
            <p>Saisissez vos adresse mail pour continuer</p>
        </div>
        <form action="{{ route("password.request") }}" method="post">
            @csrf
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Adresse mail</label>
                    <input type="email" name="email" required placeholder="Votre adresse mail" value="{{ old("email") }}">
                    @error("email")
                    <span class="invalid-feedback" role="alert">
                        <small style="color: red"><strong>{{ $message }}</strong></small>
                    </span>
                @enderror
                </div>
            </div>

            <div class="login-footer">
                <p>Pas encore de compte? <a href="{{ route("register") }}">Inscrivez-vous</a> ici</p>
                <button class="submit-btn3">Continuer</button>
            </div>
        </form>
        @else
        <div class="login-heading">
            <span>Reinitialiser votre mot de passe</span>
            <p style="color: green">
                {{ session("status") }}</p>
        </div>

    @endif

    </div>
</div>
@endsection
