@extends('layouts.template')

@section('content')
    <div class="container-login">
        <div class="text-center py-5">
            <img src="/images/logo/logo-primary.svg" alt="Logo" class="pt-5 d-inline">
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                <form-login
                        route_redirect_logged="{{ route('account.informations') }}"
                >
                </form-login>
            </div>
        </div>
    </div>
@endsection