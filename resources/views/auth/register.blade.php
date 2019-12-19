@extends('layouts.app')
@include('navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('registro') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row"> <!-- name -->
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row"> <!-- email -->
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('correo') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row"> <!-- Pais -->
                                <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>
                                <div class="col-md-6">
                                    <!-- <input id="pais" type="text" class="form-control @error('name') is-invalid @enderror" name="pais" value="{{ old('pais') }}" required autocomplete="pais" autofocus> -->
                                    <select name="pais" id="cod_pais">
                                        @foreach ($paises ?? '' as $cod_pais => $pais)
                                            <option value="{{$cod_pais}}" {{ (old("pais")== $cod_pais) ? "selected" : ""}}> {{$pais}}</option>
                                        @endforeach
                                    </select>
                                    @error('pais')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row"> <!-- Telefono -->
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row"> <!-- pasword -->
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row"> <!-- rePassword -->
                            <label for="rePassword" class="col-md-4 col-form-label text-md-right">{{ __('confirmar contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="rePassword" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0"> <!-- submit -->
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('validar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
