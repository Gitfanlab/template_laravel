# Template Laravel dit "SKELETOR"

## Description

Ceci est un template d'application pour les systèmes d'information créés par le FANLab.

L'objectif est de proposer une "starter kit" qui permet de développer une surcouche applicative par dessus certaines fonctionnalités intégrées par défaut comme l'authentification des utilisateurs, la gestion de rôles et permissions, etc.

Toutes applications web destinées au réseau NP/DR se feront en intégrant une surcouche sur ce template.

## Installation

**Cloner le projet :**

```bash
git clone https://github.com/Gitfanlab/template_laravel.git
mv template_laravel nom_du_projet_voulu
cd nom_du_projet_voulu
cd src
```

**Installation des dépendances PHP et JS :**

```bash
code .

# Dans le terminal VSCode :
distrobox enter laravel
composer install
npm install
cp .env.example .env
```

**Modification des variables d'environnement :**

```bash
# Dans le fichier .env, modifier :

APP_NAME="nom_du_projet_voulu"

APP_URL=http://localhost:8000

DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_du_projet_voulu
DB_USERNAME=admin
DB_PASSWORD=admin
```

```bash
php artisan key:generate
php artisan migrate --seed

# Dans deux terminaux séparés :
php artisan serve
npm run dev
```

### Configuration de l'application

Si nécessaire, modifier les fichiers `/database/migrations/*.php`

Si nécessaire, modifier les fichiers `/database/seeders/*.php`

Si nécessaire, modifier le fichier `/resources/views/layouts/app.blade.php` afin de supprimer/modifier les barres de navigation et footer inclus par défaut.

Si nécessaire, modifier le fichier `resources/views/uikit.blade.php` qui n'est utile qu'à apporter une idée des composants visuels à utiliser (n'oubliez pas de supprimer/modifier la route dans le fichier `routes/web.php` si vous ne souhaitez pas que cette page apparaisse dans l'application).

## Développement

### Synchronisation avec le nouveau repository Github (specifique au projet)

```bash
rm -rf .git
git init
git add .
git commit -m "premier commit"
git branch -M main
git remote remove origin
git remote add origin https://github.com/Gitfanlab/nom_du_projet_voulu.git
git push -u origin main
```

### Synchronisation d'une modification avec le repository Github distant

```bash
# Pour ajouter toutes les modifications à la phase de "staging"
git add .

# Pour ajouter seulement un fichier, veuillez executer la commande suivante :
git add ./nom_du_fichier_a_envoyer

git commit -m "votre message"
git push
```

## Améliorations

- Création d'un outil CLI qui permet de choisir les fonctionnalités à inclure dans le template pour assurer un principe de minimalisme.
- Ajout d'une authentification avec Keycloak pour intégrer API MinDefConnect et accéder aux données du personnel MINARM.
