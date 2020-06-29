<?php
$nom_produit = "T-shirt simple";
$couleur = "Blanc";
$prix = 10.50;
$disponible = true;
$quantite = 10;
$a = $prix * 3;
$b = $prix * $quantite;
$c = 3 - $quantite;
?>
<h3>
<?php
echo "Le nom du produit est ";
echo $nom_produit;
echo ".";
?>
</h3>
<h3>
<?php
echo "Il reste ";
echo $quantite;
echo " produit en stock.";
?>
</h3>
<h3>
<?php
echo "Le produit ";
echo $nom_produit;
echo "est de couleur ";
echo $couleur;
echo ".";
?>
</h3>

<h4>
<?php
echo "Acheter 3 produits couterait ";
echo "$a";
echo ".";
?>
</h4>
<h4>
<?php
echo "Acheter la totalité des produits disponibles coûterait ";
echo $b;
echo ".";
?>
</h4>
<h4>
<?php
echo "Si 3 produits sont vendus, alors il reste ";
echo $c;
echo " produits en stock.";
?>
</h4>
<?php
if ($quantite > 0)
{
    echo "Le produit ";
    echo $nom_produit;
    echo " est disponible en ligne.";
    $disponible = "true";
}
elseif ($quantite < 0)
{
    echo "Le produit";
    echo $nom_produit;
    echo " n'est malheureusement plus disponible.";
    $disponible = "false";
?>
}

