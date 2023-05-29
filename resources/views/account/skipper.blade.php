@extends('layouts.template')

@section('content')
    <div class="container container-large">
        <div class="row py-4">
            <div class="col-3">
                @include('account.partials.menu')
            </div>

            <div class="col-9">
                <h1 class="text-xl-plus text-weight-700 text-center text-main-deep-color pb-3">
                    Skipper
                </h1>
                
                <div class="d-flex justify-content-center">
                    <img src="{{ url('/images/user/kevin-linkedin.jpeg') }}"
                         alt="Kevin Labre"
                         class="rounded-full">
                </div>

                <div class="text-center pb-5 pt-4">
                    <a class="text-main-light-color ">
                        Changer la photo de profil
                    </a>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 offset-sm-3">
                        <div class="form-group pt-2">
                            <label for="lastname" class="text-secondary-color">
                               Nom
                            </label>

                            <input
                                type="text"
                                id="lastname"
                                name="lastname"
                                class="input-navily form-control"
                            >
                        </div>

                        <div class="form-group pt-2">
                            <label for="fistname" class="text-secondary-color">
                                Prenom
                            </label>

                            <input
                                type="text"
                                id="fistname"
                                name="fistname"
                                class="input-navily form-control"
                            >
                        </div>

                        <div class="form-group pt-2">
                            <label for="email" class="text-secondary-color">
                                E-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="input-navily form-control"
                            >
                        </div>

                        <div class="form-group pt-2">
                            <label for="phone" class="text-secondary-color">
                                Téléphone
                            </label>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="input-navily form-control"
                            >
                        </div>

                        <div class="form-group pt-2">
                            <label for="birthdate" class="text-secondary-color">
                                Date de naissance
                            </label>

                            <input
                                type="text"
                                id="birthdate"
                                name="birthdate"
                                class="input-navily form-control"
                            >
                        </div>

                        <div class="form-group pt-2">
                            <label for="description" class="text-secondary-color">
                                Description
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                class="input-navily form-control"
                            ></textarea>
                        </div>

                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-plainsailing" id="dusk-save-btn">
                                Valider
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection