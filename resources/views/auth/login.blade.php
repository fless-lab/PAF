@extends('regular.base')

@section('main')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Connexion</h6>
                <h1 class="mb-5">Connectez-vous pour continuer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old("username") }}"
                                        placeholder="Nom d'utilisateur ou Email">
                                    <label for="username">Nom d'utilisateur ou Email</label>
                                </div>
                            </div>
                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </div>
                            @enderror
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" required class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                        placeholder="Mot de passe">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </div>
                            @enderror
                            <a href="{{ url('motdepasse-oublie') }}" class="f-right">Mot de passe oublié?</a>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Se Connecter</button>
                            </div>
                            <p>Pas encore de compte? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </div>
@endsection
