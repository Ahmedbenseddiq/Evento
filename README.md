# Evento

Evento est une plateforme de gestion et de réservation d'événements développée avec Laravel. Ce projet a pour objectif principal de se familiariser avec Laravel et ses principales fonctionnalités.

## Fonctionnalités
- Gestion des catégories d'événements
- Gestion des événements
- Gestion des reservations
- Système d'authentification avec Laravel Breeze
- Relations entre les reservations, les événements et les catégories

## Installation

1. Cloner le dépôt :
   ```bash
   git clone https://github.com/Ahmedbenseddiq/evento.git
   cd evento
   ```

2. Installer les dépendances :
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Configurer l'environnement :
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configurer la base de données dans le fichier `.env`, puis exécuter les migrations :
   ```bash
   php artisan migrate --seed
   ```

5. Lancer le serveur de développement :
   ```bash
   php artisan serve
   ```

## Technologies Utilisées
- Laravel
- Laravel Breeze (Authentification)
- MySQL
- Html CSS (Frontend de base)

## Objectif Pédagogique
Ce projet me permet d'explorer les concepts fondamentaux de Laravel, notamment :
- La création de migrations, modèles et contrôleurs
- L'utilisation des relations entre modèles
- L'authentification basic avec Laravel Breeze

## Améliorations Futures
- Ajout d'un système de réservation complet
- Ajout d'un système de ticket
- Intégration d'un système de paiement
- Interface utilisateur améliorée avec Vue.js ou React

---
Projet en cours de développement 🚀

