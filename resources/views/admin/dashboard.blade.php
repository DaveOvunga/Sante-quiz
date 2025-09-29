@extends('layouts.app')

@section('content')
@php $hideFooter = true; @endphp

@include('users.header')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Tableau de bord administrateur</h2>
        <!-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Se déconnecter</button>
        </form> -->
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">👥 Utilisateurs</h5>
                    <p class="card-text">{{ $user }}</p>
                    <a href="#" class="btn btn-primary">Gérer</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"> Campagnes</h5>
                    <p class="card-text">Actives : 8</p>
                    <a href="#" class="btn btn-primary">Créer</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🎓 Formations</h5>
                    <p class="card-text">En cours : 3</p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
