@extends('layouts.client_layout')
@section ('content')


<div class="my-3 p-3 bg-body rounded shadow-sm">
    <?php $nav = "home" ?>
    <div class="content bg-light">
        <div style="background-image: url({{asset('/img/client/assets/banners.jpg')}})" class=" banner">
            <div class="overlay container-fluid mt-2">
                <h2 class="text">
                    Plateforme de certification de diplome </h2>
                <h3 class="text2">la blockchain pour la sécurisation de vos documents </h3>
            </div>
        </div>
    </div>
    <br>

</div>
@endsection