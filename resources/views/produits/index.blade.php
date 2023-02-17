<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Produits</title>
</head>
<body>
    <section>
        <h1>Index des produits</h1>
    <table class="ml-4 bg-white">
        <tr class="border" >
            <td>NOM</td>
            <td>DESCRIPTION</td>
            <td>TYPE</td>
            <td>STOCK (UNITES)</td>
        </tr>
       @foreach($produits as $produit)
       <tr class="shadow">
        <td>
            <a href="{{route('produits.show',$produit->id)}}"> {{$produit -> nom_produit}}</a>
        </td>
        <td>
            <a href="{{route('produits.show',$produit->id)}}"> {{$produit -> description}}</a>
        </td>
        <td>{{$produit->type}}</td>
        <td>{{$produit->stock}}</td>
        <td><a href="{{route('produits.show',$produit->id)}}" ><button/>Voir</a></td>
        <td><a href="{{route('produits.edit',$produit->id)}}" ><button/>Modifier</a></td>
        <td><form action="{{route('produits.destroy', $produit->id)}}" /></td>
       </tr>

    @endforeach     
    </table>

    </section>
    
</body>
</html>