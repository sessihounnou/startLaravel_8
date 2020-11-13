
@extends('session')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Gestion des salles </title>

            <!-- Fonts -->
            <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
            <!-- Styles -->
            <style>

            </style>
    </head>
    <body>
        <form action="admin-auth" method="POST" style="margin:40%;margin-right:35%;margin-left:35%;margin-top: 10%;">
                @csrf
            <div class="form-group">
                <label >identifiant</label>
                <input type="text" class="form-control" name="identifiant"  placeholder="votre nom / adresse electronique ">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password"  class="form-control" name="password" placeholder="mot de passe">
            </div>
            <div class="form-check">
            </div>
            <button type="submit" class="btn btn-primary">ENVOYER</button>
        </form>
    </body>
</html>
@stop
