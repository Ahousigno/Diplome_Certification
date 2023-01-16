@extends('layouts.client_layout')

@section('content')

<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title fw-bold" style="color: blue; text-decoration: underline">Liste des
                            inscrits
                        </h4>
                    </div>
                    {{-- <div class="">
                             <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0
                    mt-md-0 mt-3">
                    <i class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </i>
                    
                    </a>
                </div>--}}
                </div>
                <div class="card-body px-0">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table table-bordered" role="grid" data-toggle="data-table">
                            <thead>
                                <tr class="ligth">
                                    <th>N°</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Diplome</th>
                                    <th>année</th>
                                    <th style=" min-width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formulaires as $formulaire)

                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$formulaire->nom}}</td>
                                    <td>{{$formulaire->prenom}}</td>
                                    <td>
                                        <div>
                                            <img src="{{asset('docs/lms/'.$formulaire->diplome)}}" width="100"
                                                height="100" class="card-img-bottom" alt="" />
                                            <br>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-primary mt-1 btn-sm" target="blank" width="10"
                                                    height="10" href=" {{route('admin.plus', $formulaire->id)}}">Voir
                                                    plus
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$formulaire->annee}}</td>
                                    <td>




                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $formulaires->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<style>
.table thead tr {
    background-color: blue;
    color: white;
}

.form-control {
    border: 1px solid #d5cdcd;
}

label {
    color: black;
}
</style>
@endsection