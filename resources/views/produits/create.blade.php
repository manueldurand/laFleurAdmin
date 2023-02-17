@extends('layouts.app')
@section('titre', 'index des produits')
@section('contenu')
<form action="{{route('produits.store')}}" method="POST" class="ml-4 mt-4">
@csrf
<label for="">Nom de produit : <br>

    <input type="text" name="nom_produit">
</label>
<br>
<label for="">Description : <br>
<textarea name="description" rows="5" cols="30"></textarea></label>
<br>
<label for="">Type de produit : <br>
<select name="type">
    <option value="1">unite</option>
    <option value="2">bouquet</option>
    <option value="3">gerbe</option>
</select><br>
<x-bouton type="submit" name="valider" value="valider" action="créer" bgColor="bg-green-500" />
</form>
@endsection