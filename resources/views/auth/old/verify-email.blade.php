@extends("auth.layout")


@section("content")
<div class="login-form-area">
    <div class="login-form">

        <div class="login-heading">
            <span>Vérifiez votre compte</span>
            @if (session("status"))
            <p style="color: green">Un mail vous a été envoyé avec le lien de vérification de votre compte.</p>

            @endif
            <p>Veuillez vérifier votre compte afin de vous connecter</p>
        </div>
        <form action="{{ route("verification.send") }}" method="post">
            @csrf
            <div class="login-footer">
                <p>Aucun lien reçu ? vérifiez vos spam ou </p>
                <button class="submit-btn3" type="submit">Renvoyer le lien</button>
            </div>
        </form>
    </div>
</div>
@endsection
