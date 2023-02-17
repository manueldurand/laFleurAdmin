@extends('layouts.app')
@section('titre', 'Détail produit')
@section('contenu')

    <h1>Détail-produit</h1>
    <h2>{{$produit->nom_produit}}</h2>
    <p>{{$produit->description}}</p>
    <p>Mode de vente : {{$produit->type}}</p>
    <p>Quantité en stock : {{$produit->stock}}</p>
    <td><a href="{{route('produits.edit',$produit->id)}}" ><x-bouton action="Modifier" bgColor='bg-blue-500'/></a></td>

@endsection