# Template Laravel

Ce projet est un template Laravel pour démarrer un projet rapidement, il sera
utilisé pour tous les exercices et support de cours de DévProdMéd.

## Pour personnes qui étudient ou sans connaissance de Docker et devcontainer

### Prérequis

Les prérequis suivants sont nécessaires pour lancer le projet en local :

- [PHP](https://www.php.net/downloads) (version 8.4.4 ou supérieure)
- [Laravel](https://laravel.com/docs/8.x/installation) (version 5.14.0 ou
  supérieure)
- [Composer](https://getcomposer.org/download/) (version 2.8.6 ou supérieure)

### Démarer l'application pour le développement en local

Ouvrez un terminal et exécutez les commandes suivantes :

```bash
# Installez les dépendances du projet
composer install

# Copiez le fichier .env.example et renommez-le en .env

## Unix
cp .env.example .env

## Windows
copy .env.example .env

# Exécutez les migrations
php artisan migrate

# Générez une clé d'application
php artisan key:generate

# Démarrez le serveur de développement
php artisan serve
```

## Mettre un formatteur de code en place dans VSCode

### Prérequis

Les prérequis suivants sont nécessaires pour mettre en place un formateur de
code dans VSCode :

- [Visual Studio Code](https://code.visualstudio.com/download) must be
  installed.
- [Node.js](https://nodejs.org/en/download/) (version 18 ou supérieure)

### Mettre en place un formateur de code dans VSCode

- Installez l'extension `esbenp.prettier-vscode` dans VSCode
- Mettez à jour les dépandances du projet avec la commande suivante :

  ```bash
  # Installez les dépendances de développement
  npm install
  ```

Si ça fonctionne, c'est grace aux fichier `.prettierrc` et
`.vscode/settings.json` qui sont déjà configurés pour le projet.

## Pour personnes qui enseignent avec connaissance de Docker et devcontainer

### Prérequis

Les prérequis suivants sont nécessaires pour lancer le projet en local :

- [Docker](https://docs.docker.com/get-docker/)
- [Visual Studio Code](https://code.visualstudio.com/download) must be
  installed.

### Démarer l'application pour le développement en local

Ouvrez ce dossier dans Visual Studio Code, et ouvrez-le dans un conteneur de
développement. Dans un terminal, exécutez les commandes suivantes :

```bash
# Installez les dépendances du projet
composer install

# Installez les dépendances de développement
npm install

# Copiez le fichier .env.example et renommez-le en .env

## Unix
cp .env.example .env

## Windows
copy .env.example .env

# Exécutez les migrations
php artisan migrate

# Générez une clé d'application
php artisan key:generate

# Démarrez le serveur de développement
php artisan serve
```
