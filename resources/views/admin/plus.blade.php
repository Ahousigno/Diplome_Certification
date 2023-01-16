@extends('layouts.client_layout')

@section('content')
<br> <br>
<?php

use Carbon\Carbon; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title"></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="user-profile">
                        <img src="{{asset('/docs/lms/'.$formulaire->diplome)}}" alt="media" class="img-fluid">
                    </div>
                    <p>hash du document</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title">Informations</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mt-2 col-6">
                        <h6 class="mb-1">Nom:</h6>
                        <p>{{ $formulaire->nom }}</p>
                    </div>
                    <div class="mt-2 col-6">
                        <h6 class="mb-1">Prénom:</h6>
                        <p>{{ $formulaire->prenom }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 col-6">
                        <h6 class="mb-1">Diplome</h6>
                        <p></p>
                    </div>
                    <div class="mt-2 col-6">
                        <h6 class="mb-1">année:</h6>
                        <p>{{ Carbon::parse($formulaire->annee)->format('d-m-Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection