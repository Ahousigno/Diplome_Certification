@extends('layouts.client_layout')
@section ('content')



<?php $nav = 'form'; ?>

<div class="container">

    <section class="content" style=" padding-bottom:20px">
        <div class="card-body mt-5">
            <div class="row">
                <h4 class="text-center mb-4" id="title-form-s"></h4>

                @if (session('success'))
                <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}

                    </div>
                </div>
                @endif
                @if ($errors->any())
                <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <span>
                            <p>{{ $error }}</p>
                        </span>
                        @endforeach

                    </div>
                </div>
                @endif <form role="form" action="{{ route('form.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center"></h4>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">Nom<span
                                                    style="color: red;"></span></label>
                                            <input type="text" id="nom" class="form-control" name="nom" value="">
                                            @if ($errors->has('nom'))
                                            <span class="text-danger fst-italic">
                                                {{ $errors->first('nom') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">prenom <span
                                                    style="color: red;"></span></label>
                                            <input type="text" id="prenom" class="form-control" name="prenom" value="">
                                            @if ($errors->has('prenom'))
                                            <span class="text-danger fst-italic">
                                                {{ $errors->first('prenom') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="nom">diplome<span
                                                    style="color: red;"></span></label>
                                            <input type="file" id="diplome" name="diplome" class="file form-control"
                                                placeholder=" pdf">
                                            @if ($errors->has('diplome'))
                                            <span class="text-danger fst-italic">
                                                {{ $errors->first('diplome') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="prenom">année d'obtention du
                                                diplome<span style="color: red;"></span></label>
                                            <input type="date" id="annee" name="anee" class="file form-control">
                                            @if ($errors->has('annee'))
                                            <span class="text-danger fst-italic">
                                                {{ $errors->first('annee') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="row m-0">
                                        <input type="submit" class="btn btn-primary d-block " value="Certifier" />
                                    </div>
                                </div>


                            </div>
                        </div>
                </form>
            </div>
        </div>

        @endsection