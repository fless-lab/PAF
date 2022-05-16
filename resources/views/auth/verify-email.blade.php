@extends('regular.base')

@section('main')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Vérification</h6>
                <h1 class="mb-5">Veuillez vérifier votre compte pour continuer</h1>
                @if (session('status'))
                    <p style="color: green">Un mail vous a été envoyé avec le lien de vérification de votre compte.</p>
                @endif
                <center>
                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <div class="login-footer">

                            <div class="center g-3">
                                <div class="col-4 mb-2">Si vous n'avez reçu aucun mail, vérifiez vos spam ou </div>

                                <div class="col-4">
                                    <button class="btn sm btn-primary w-50 py-3" type="submit">Renvoyer le lien</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>


    </div>
@endsection
