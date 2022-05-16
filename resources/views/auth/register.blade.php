@extends("regular.base")

@section("main")
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Inscription</h6>
            <h1 class="mb-5">Inscrivez-vous pour démarrer</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{ route("register") }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" required value="{{ old("lastname") }}" id="lastname" name="lastname" placeholder="Votre nom">
                                <label for="lastname">Votre nom</label>
                            </div>
                        </div>
                        @error('lastname')
                            <div class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </div>
                        @enderror
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" required value="{{ old("firstname") }}" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="Votre prénom">
                                <label for="firstname">Votre prénom</label>
                            </div>
                        </div>
                        @error('firstname')
                            <div class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </div>
                        @enderror
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
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe">
                                <label for="password">Mot de passe</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" @error('password_confirmation') is-invalid @enderror id="password_confirmation" name="password_confirmation" placeholder="Confirmez le mot de passe">
                                <label for="password_confirmation">Confirmez le mot de passe</label>
                            </div>
                        </div>
                            @error('password')
                            <div class="col-12 invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </div>
                        @enderror
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">S'inscrire</button>
                        </div>
                        <p>Avez-vous déjà un compte? <a href="{{ route('login') }}">Connectez-vous</a></p>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">

            </div>
        </div>
    </div>
</div>
@endsection
