@extends('layouts.template')

@section('content')
    <div class="container container-large">
        <div class="row py-4">
            <div class="col-3">
                <ul class="list-group list-account ">
                    <a class="list-group-item active" href="{{ route('account.informations') }}">
                        <i class="fa-solid fa-info pr-4"></i>

                        Informations
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-person pr-4"></i>

                        Skipper
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-ship pr-4"></i>

                        Bateau
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-file pr-4"></i>

                        Documents
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-credit-card pr-4"></i>

                        Paiement
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-cogs pr-4"></i>

                        Parametres
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-lock pr-4"></i>

                        Changer mot de passe
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-share-nodes pr-4"></i>

                        Inviter un ami
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-heart pr-4"></i>

                        Favoris
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-question pr-4"></i>

                        Aide
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-newspaper pr-4"></i>

                        Tutoriels
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-map-location-dot pr-4"></i>

                        Legende de la carte
                    </a>

                    <a href="#" class="list-group-item">
                        <i class="fa-solid fa-comments pr-4"></i>

                        Chattez avec nous
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-circle-info pr-4"></i>

                        A propos de Navily
                    </a>

                    <a href="" class="list-group-item">
                        <i class="fa-solid fa-user-slash pr-4"></i>

                        Deconnexion
                    </a>
                </ul>

                <p class="text-center pt-2">
                    <a href="" class="text-danger font-weight-bold">
                        Supprimer le compte
                    </a>
                </p>

            </div>

            <div class="col-9">

            </div>
        </div>
    </div>
@endsection