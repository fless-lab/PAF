<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route("welcome") }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>PAF &middot; LEARN</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route("welcome") }}" class="nav-item nav-link {{request()->is("home")||request()->is("/")||request()->is("accueil")? 'active':''}}">Accueil</a>
            <a href="{{ route("regular.about") }}" class="nav-item nav-link {{request()->is("a-propos")?'active':''}}">ÀPropos</a>
            <a href="{{ route("regular.courses") }}" class="nav-item nav-link {{request()->is("nos-cours")?'active':''}}">Cours</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{request()->is("notre-equipe")||request()->is("temoignages")||request()->is("contactez-nous")?'active':''}}" data-bs-toggle="dropdown">Nous</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route("regular.our-team") }}" class="dropdown-item {{request()->is("notre-equipe")?'active':''}}">Notre équipe</a>
                    <a href="{{ route("regular.testimonial") }}" class="dropdown-item {{request()->is("temoignages")?'active':''}}">Témoignages</a>
                    <a href="{{ route("regular.contact-us") }}" class="dropdown-item {{request()->is("contactez-nous")?'active':''}}">Contact</a>
                </div>
            </div>
            @if (Auth::check())
            <a href="{{ route("regular.account") }}" class="nav-item nav-link {{request()->is("moncompte")?'active':''}}">Compte</a>

            @else
            <a href="{{ route("login") }}" class="nav-item nav-link {{request()->is("login")?'active':''}}">Connexion</a>
            @endif
            {{-- Ici lorsque le gars sera logué on devra afficher un truc du genre Compte --}}
        </div>
        @if(Auth::check())
        <form action="{{ route("logout") }}" method="post">
            @csrf
            <button class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Deconnexion<i class="fas fa-sign-out-alt ms-3"></i></button>
        </form>

@else
<a href="{{ route("register") }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Rejoignez-Nous<i class="fa fa-arrow-right ms-3"></i></a>

@endif
        {{-- Lorsque le gars est connecté, ça passe en route pour fire deconnexion --}}
        {{-- <a href="{{ route("register") }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Rejoignez-Nous &VerticalBar;<i class="fa fa-sign-out ms-3"></i></a> --}}

    </div>
</nav>
