# starproject

 Utilier la commande **composer install** afin d'installer toutes les dépendences du projet

 Copier le fichier **.env.exemple** et le renommer en **.env** , inserer dedans ***le nom de la base de donnée à utiliser et les identifiants*** 

 Generer une *clé d'application* en utilisant la commande **php artisan key:generate**

 Creer un lien symbolique vers le disque local *pour les images* en utilisant la commande **php artisan storage:link**

 Utiliser la commande **php artisan migrate** (afin de **créer les tables** dans la base de donnée)

 Utiliser la commande **php artisan db:seed** pour **inserer des données** : 
 - compte administrateur **email** : ***admin@admin.com*** , **mot de passe** : ***password***
 - *stars*

 Utiliser la commande **php artisan serve** et se rendre sur l'url : *http://localhost:8000*
