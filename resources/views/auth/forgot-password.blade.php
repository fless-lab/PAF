@extends('regular.base')

@section('main')
    <div class="container-xxl py-5">
        @if (!session("status"))
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Mot de passe oublié</h6>
                <h1 class="mb-5">Veuillez renseigner votre adresse mail</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3">
                </div>

                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ route("password.request") }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old("email") }}"
                                        placeholder="Adresse mail">
                                    <label for="email">Adresse mail</label>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </span>
                            @enderror

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Continuer</button>
                            </div>

                            <p>Pas encore de compte? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
        @else
<div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Récupération de compte</h6>
                <h1 class="mb-5">Réinitialiser votre mot de passe</h1>
                <p style="color: green">Nous vous avons envoyé par mail le lien pour réinitialiser votre mot de passe</p>
                <br><br><form action="{{ route("password.request") }}" method="post">
                    @csrf
                    <div class="login-footer">

                        <small class="submit-btn3" type="submit">Si vous n'avez reçu aucun mail, vérifiez vos spam ou <a href="{{ url('forgot-password') }}" class="f-right">demandez un nouveu lien</a></small>
                    </div>
                </form>
            </div>
        </div>
        @endif


    </div>
@endsection
