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

                <div class="text-center pb-5">
                    <a class="text-main-light-color ">
                        Changer la photo de profil
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection