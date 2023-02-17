@extends('layouts.app')
@section('titre', 'index des produits')
@section('contenu')

        <h1>Index des produits</h1>
       
    <table class="ml-4 bg-white">
        <tr class="border" >
            <td class="p-3">NOM</td>
            <td class="p-3">COULEUR</td>
            <td>DESCRIPTION</td>
            <td class="p-3">TYPE</td>
            <td>STOCK</td>
        </tr>
       @foreach($produits as $produit)
       <tr class="shadow">
        <td>
            <a href="{{route('produits.show',$produit->id)}}"> {{$produit -> nom_produit}}</a>
        </td>
        <td>{{$produit -> nom_couleur}}</td>

        <td class="text-gray-500">
            <a href="{{route('produits.show',$produit->id)}}"> {{$produit -> description}}</a>
        </td>
        <td>{{$produit->type}}</td>
        <td>{{$produit->stock}}</td>
        <td><a href="{{route('produits.show',$produit->id)}}" ><x-bouton action="Voir" bgColor='bg-gray-300'/></a></td>
        <td><a href="{{route('produits.edit',$produit->id)}}" ><x-bouton action="Modifier" bgColor='bg-blue-500'/></a></td>
        <td><form action="{{route('produits.destroy', $produit->id)}}" /><x-bouton action='Supprimer' bgColor='bg-red-400'/></td>
       </tr>

    @endforeach     
    </table>
@endsection