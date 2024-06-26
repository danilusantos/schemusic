@extends('auth.layouts.app')

@section('content')
    <div class="container">

        @if (str_contains(session()->get('url.intended'), 'member'))
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="card card-auth p-0">
                        <div class="card-header text-center bg-light border-0 px-1">
                            <img src="{{ asset('assets/site/img/logo-original.png') }}" alt="Schemusic" width=250
                                class="img-fluid mb-3">

                            <ul class="nav nav-tabs mb-0 background-light border-0 rounded-3 px-1 py-2" id="myTab"
                                role="tablist">
                                <li class="nav-item px-3 w-50" role="presentation">
                                    <button class="nav-link link-dark fw-bold active border-0 rounded-1 w-100"
                                        id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                                        role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                        <i class="fas fa-sign-in-alt mr-1"></i> ENTRAR
                                    </button>
                                </li>

                                <li class="nav-item px-3 w-50" role="presentation">
                                    <button class="nav-link link-dark fw-bold border-0 rounded-1 w-100" id="profile-tab"
                                        data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                                        role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                        <i class="fas fa-user-plus mr-1"></i> REGISTRAR
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @include('auth.partials.form-login')
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">

                                    <div class="row mx-auto">
                                        @foreach ($planos as $plano)
                                            <div class="col-lg-6 col-12 mb-3">
                                                <div class="card shadow-sm elevation-3">
                                                    <div class="card-header border-0 bg-light">
                                                        <h5 class="card-title fw-bold text-uppercase arvo-bold">
                                                            {{ $plano['name'] }}
                                                        </h5>
                                                    </div>

                                                    <div class="card-body">

                                                        <p>{{ $plano['description'] }}</p>
                                                        <h5 class="title fw-bolder arvo-bold">
                                                            R$ {{ str_replace('.', ',', $plano['value']) }}
                                                        </h5>

                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="card rounded-0 elevation-3 shadow-sm p-3 p-xl-1">
                        <div class="card-header bg-light border-0">
                            <div class="row mx-auto align-items-center">
                                <div class="col-sm-6 col-12 h-100 text-center">
                                    <h2 class="h-100 text-primary fw-bolder arvo-regular">
                                        ADMIN
                                    </h2>
                                </div>
                                <div class="col-sm-6 col-12 h-100 text-center">
                                    <img src="{{ asset('assets/site/img/logo-original.png') }}" alt="Schemusic" width=280
                                        class="img-fluid mb-3">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                @include('auth.partials.form-login')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endsection
