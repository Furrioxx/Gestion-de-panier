<?php

include_once("model/Produit.php");

function getSousTotal(Produit $produit){
    return $produit->getPrice() * $produit->getQuantity();
}




$produit1 = new Produit("Livre", 15, 2);
$produit2 = new Produit("Stylo", 3, 5);
$produit3 = new Produit("Sac", 25, 1);
$arrayProduit = [$produit1, $produit2, $produit3];

$sousTotal1 = getSousTotal($produit1);
$sousTotal2 = getSousTotal($produit2);
$sousTotal3 = getSousTotal($produit3);

echo "Le sous-total pour le " . $produit1->getName(). " est de " . $sousTotal1 . "€. <br/>";
echo "Le sous-total pour le " . $produit2->getName(). " est de " . $sousTotal2 . "€. <br/>";
echo "Le sous-total pour le " . $produit3->getName(). " est de " . $sousTotal3 . "€. <br/>";
echo "<br/>";


$totalGeneral = $sousTotal1 + $sousTotal2 + $sousTotal3;
echo "Le total du panier est de " . $totalGeneral . "€. <br/>";

if($totalGeneral > 50){
    $totalReduction = $totalGeneral - ($totalGeneral * (10 / 100));
    echo "Le total du panier après réduction est de " . $totalReduction . "€. <br/>";
}
else{
    echo "Une réduction est appliqué pour les panier de moins de 50€";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prix</th>
                    <th scope="col">quantite</th>
                    <th scope="col">sous total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($arrayProduit as $key => $produit) { ?>
                            <tr>
                                <th scope="row"><?php echo $key; ?></th>
                                <td><?php echo $produit->getName(); ?></td>
                                <td><?php echo $produit->getPrice(); ?></td>
                                <td><?php echo $produit->getQuantity(); ?></td>
                                <td><?php echo getSousTotal($produit); ?></td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
</body>
</html>