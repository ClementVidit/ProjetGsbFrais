@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="blanc">
            <h1>Liste de mes Employes</h1>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Période</th>
                <th>Montant Validé</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            @foreach($mesFrais as $unFra)
                <tr>
                    <td>{{$unFra->anneemois}}</td>
                    <td>{{$unFra->montantvalide}}</td>
                    <td style="text-align: center;">
                        <a href="{{url('/modifierFrais')}}/{{$unFra->id_frais}}">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier">

                        </span></a>
                    </td>
                    <td style="text-align: center;">
                        <a href="{{url('/supprimerEmploye')}}/{{$unFra->id_frais}}">
                        <span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Modifier">

                        </span></a>
                    </td>
                </tr>
            @endforeach
            <br><br>
        </table>
    </div>
