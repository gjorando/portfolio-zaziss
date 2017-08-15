# Portfolio de Zaziss

Alors, deux trois petites choses pour t'expliquer comment ajouter une image.

Déjà, la première chose à savoir, c'est que tout ce que tu dois modifier se trouve dans data/. Du coup, quand tu fais une modification de ton site, tout ce que tu as à faire depuis ton client FTP, c'est de ré-uploader le dossier data.

Ce dernier est construit comme suit :

```
_ data/
|
|__ gallery.d/ : le plus important. Il stocke les
|   descriptifs de chaque image.
|
|__ gallery/
| |
| |__ preview/ : les thumbnails de tes images.
| |
| |__ full/ : les images complètes.
|
|__ misc/ : utilise ce dossier pour organiser les autres
|   ressources (images notamment) que tu peux être
|   amenée à modifier.
|
|__ gallery.php : pas touche, il permet d'importer les
|   descriptifs de tes images.
```

Thumbnails et images complètes doivent avoir strictement le même nom (et donc la même extension). Pour les thumbnails, je te recommande de toutes mettre au même ratio, par exemple 3:2 (idéalement toutes de la même taille, par ex. 768px par 512px).

Concernant la structure d'un fichier de gallery.d, ça doit être un fichier .php contenant une variable nommé `$elem` et de type GalleryElement. Je t'ai mis un fichier de template dans gallery.d, que tu peux copier-coller et renommer à chaque fois que tu ajoutes une image. Voici le template pour information reproduit ci-dessous : 

```
<?php

$elem = new GalleryElement(
	'image.extension',
	'Titre',
	'Sous-titre',
	'Description.',
	'Disclaimer'
);
```

Aussi, à noter, les images sont ajoutées dans l'ordre alphanumérique de lecture, du coup pour organiser l'ordre d'affichage des images, il peut être utile de préfixer chaque fichier dans gallery.d par un numéro suivi d'un underscore (comme je l'ai fait avec les deux images d'exemple).

Du coup, les choses à faire pour ajouter une image à la galerie :

* ajouter une entrée dans gallery.d/ ;
* ajouter l'image et sa thumbnail ;
* reuploader le dossier data/ avec ton client ftp.

C'est tout ! J'aurais pu choisir une approche avec une base de données, mais ton hébergement n'en dispose pas, et quand bien même, ça serait un peu usine à gaz au vu de la simplicité du projet.
