# Evaluation DWM8

### Prérequis
<p> Je suis partis du principe que je fournissais une interface administrateur d'un gérant de (grand) dépôt/magasin de voitures, cela justifie le fait que l'on peut ajouter / supprimer sans se connecter.

## Technologies utilisées
* HTML
* CSS
* Jquery
* PHP
* [Laravel](https://laravel.com/)
* Vagrant
* [Laravel Collectiv](https://laravelcollective.com/)
* [Lavacharts](http://lavacharts.com/) 

## Principe de l'interface
<p>Étant donné mon talent inné pour le design, j'ai préféré opter pour, comme indiqué plus haut, une interface en panneau d'administrateur. 
<p> Ainsi, puisque l'ux est quelque peu délaissé, j'ai essayer d'agrémenter mon interface de graphiques permettant une visualisation plus claires des éléments.

## Fonctionnalités
<p> CRUD basique sans grande complexité
<p> Navbar pour les liens vers d'autres fonctionnalités, ajout de véhicules, l'ajout de marques n'a pas été completé.

## Problèmes rencontrés
<p> J'ai voulu implémenter le fait d'ajouter des marques mais cela aurait perturbé toutes mes tables.
(j'ai commencé les controlleurs mais me suis rendu compte des problèmes que cela pouvait engendrer, j'ai donc laissé tombé et n'ai pas eu le temps pour me repencher dessus)
<p> J'ai essayé de faire les graph dans les controlleurs, comme indiqué dans la doc, au lieu des vue directement mais j'ai des erreurs, pas eu le temps non plus.
<p> Je voulais faire une requete ajax qui, quand on clique sur le graph en bar, récupère le nom de la marque sur laquelle on a cliqué, puis affiche sur un autre graphique les véhicules de la marque, problème: c'est compliqué...

#### Notes
<p> Les liens sur la page d'acceuil ne se font pas en cliquant sur les balises "a" mais en cliquant sur la "div" contenant la balise, puis je récupère le contenu href de la balise <a> en jquery, et renvoie à l'url de ce href, toujours en jquery
<p> Plutôt fier de l'intégration de Lavacharts, même si finalement suivre la doc suffit.  

