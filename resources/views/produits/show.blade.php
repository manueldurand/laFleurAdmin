<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail produit</title>
</head>
<body>
    <h1>Détail-produit</h1>
    <h2>{{$produit->nom_produit}}</h2>
    <p>{{$produit->description}}</p>
    <p>Mode de vente : {{$produit->type}}</p>
    <p>Quantité en stock : {{$produit->stock}}</p>
</body>
</html>