@extends('layouts.template')

@section('content')
    <div class="container container-large">
        <div class="row py-4">
            <div class="col-3">
                @include('account.partials.menu')
            </div>

            <div class="col-9">
                <h1 class="text-xl-plus text-weight-700 text-center text-main-deep-color pb-3">
                    Informations
                </h1>
                
                <div class="d-flex justify-content-center">
                    <img src="{{ $user->image_or_default }}"
                         alt="Kevin Labre"
                         class="rounded-full"
                         width="100"
                    >
                </div>

                <div class="text-center pb-5">
                    <p class="text-main-deep-color pt-4 text-weight-700">
                        {{ $user->full_name }}
                    </p>

                    <p class="text-grey-medium">
                        Profil completé à {{ $user->progression }}%
                    </p>

                    <p class="text-main-deep-color pt-4 text-weight-700">
                        {{ $user->level }}
                    </p>

                    <p class="text-main-light-color ">
                        {{ $user->points_display }}
                    </p>
                </div>

                <div class="deep-blue-card md-rounded p-5" style="cursor: pointer;">
                    <div class="row">
                        <div class="col-6">
                            <img src="/images/logo/logo-premium.svg" alt="Navily premium" class="w-100" style="max-width:300px">
                        </div>

                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-arrow-right text-white" style="font-size: 40px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection