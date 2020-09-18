# git2revision
Révision de GIT sur github.com en vue de créer des projets communs

## Installation
- copiez et renommez le fichier config.php.local en config.php

### Installez la DB
Importez data/premiere-exportation-structure.sql

! le choix ici se fait sur mysql avec le port 3308, pour travailler sur le projet, utilisez le même port

### Voir les tickets et les issues sur github
#### Tickets
https://github.com/WebDevCF2m2020/git2revision/projects/2
#### Issues
https://github.com/WebDevCF2m2020/git2revision/issues

### Installation de Twig
Vous devez installer composer sur vos machines au préalable puis taper cette commande:

        composer require "twig/twig:^3.0"
Ensuite mettez le dossier vendor dans le .gitignore AVANT de faire un commit!        