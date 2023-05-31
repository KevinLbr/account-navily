@extends('layouts.template')

@section('content')
    <div class="container container-large">
        <div class="row py-4">
            <div class="col-3">
                @include('account.partials.menu')
            </div>

            <div class="col-9">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        <span class="text-success">
                            Vos informations ont été mises a jour
                        </span>
                    </div>
                @endif

                <h1 class="text-xl-plus text-weight-700 text-center text-main-deep-color pb-3">
                    Skipper
                </h1>
                
                <div class="d-flex justify-content-center">
                    <img src="{{ $user->image_or_default }}"
                         alt="Kevin Labre"
                         class="rounded-full"
                         width="100"
                    >
                </div>

                <div class="text-center pb-5 pt-4">
                    <a class="text-main-light-color" style="cursor: pointer">
                        Changer la photo de profil
                    </a>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 offset-sm-3">
                        <form action="{{ route('account.skipper') }}" method="POST">
                            @csrf

                            <div class="form-group pt-2">
                                <label for="last_name" class="text-secondary-color">
                                    Nom
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    class="input-navily form-control @error('last_name') is-invalid @enderror"
                                    value="{{ old('last_name', $user->last_name) }}"
                                >

                                @error('last_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="first_name" class="text-secondary-color">
                                    Prenom
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    class="input-navily form-control"
                                    value="{{ old('first_name', $user->first_name) }}"
                                >

                                @error('first_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="email" class="text-secondary-color">
                                    E-mail
                                </label>

                                <input
                                    required
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="input-navily form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $user->email) }}"
                                >

                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="phone" class="text-secondary-color">
                                    Téléphone
                                </label>

                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    class="input-navily form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone', $user->phone) }}"
                                >

                                @error('phone')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="birth_date" class="text-secondary-color">
                                    Date de naissance
                                </label>

                                <input
                                    type="date"
                                    id="birth_date"
                                    name="birth_date"
                                    class="input-navily form-control @error('birth_date') is-invalid @enderror"
                                    value="{{ old('birth_date', $user->birth_date) }}"
                                >

                                @error('birthdate')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="description" class="text-secondary-color">
                                    Description
                                </label>

                                <textarea
                                    id="description"
                                    name="description"
                                    class="input-navily form-control @error('description') is-invalid @enderror"
                                >{{ old('description', $user->description) }}</textarea>

                                @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-plainsailing" id="dusk-save-btn">
                                    Valider
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection