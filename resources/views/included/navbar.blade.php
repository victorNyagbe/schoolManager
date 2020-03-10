<nav class="navbar navbar-expand-lg navbar-dark primary-color scrolling-navbar fixed-top" style="letter-spacing: 1px;">
    <a class="navbar-brand" href="#">Education</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('visitors.home') }}"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('visitors.teachers') }}" class="nav-link"><i class="fa fa-users"></i> Enseignants</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-money"></i> Finances</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('visitors.groups') }}" class="nav-link"><i class="fa fa-object-group"></i> Groupes</a>
            </li>
            {{--<li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-sticky-note"></i> Renseignements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-star"></i> Atouts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-image"></i> Galerie</a>
            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-phone"></i> Contact</a>
            </li>
        </ul>
    </div>
</nav>
