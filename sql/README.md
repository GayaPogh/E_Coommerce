# VillageGreen(VG) — Projet SQL

Ce projet constitue la base de données relationnelle du site **VillageGreen(VG)** , une entreprise fictive spécialisée dans la vente de matériel musical aux professionnels et particuliers.

---

# Structure du dossier `/sql/`

Ce répertoire regroupe tous les scripts SQL nécessaires pour :

- Créer la structure de la base
- Alimenter en données d'exemple
- Générer des vues analytiques
- Organiser le reporting par tableau de bord

---

# Contenu des fichiers principaux

| Fichier / Dossier     | Contenu                                                                |
| --------------------- | ---------------------------------------------------------------------- |
| `create_tables.sql`   | Définition complète des tables, clés primaires et étrangères, types... |
| `insert_data.sql`     | Données d'exemple : produits, clients, fournisseurs, commandes, etc.   |
| `index_creation.sql`  | Création des index pour optimiser les requêtes SQL                     |
| `views/`              | Vues fonctionnelles facilitant les requêtes complexes                  |
| `views_dashboard.sql` | Vues spécifiques au tableau de bord et à l’analyse commerciale         |
| `procedures/`         | Procédures stockées classées par thème                                 |

---

# Objectifs pédagogiques

Ce projet SQL répond à plusieurs objectifs concrets :

- Modélisation relationnelle normalisée
- Traduction du schéma conceptuel en schéma physique
- Gestion des contraintes d’intégrité
- Création de vues et procédures analytiques
- Visualisation des performances via requêtes SQL

---

# Lancement de la base de données

Pour installer VillageGreen sur votre serveur MySQL/MariaDB :

```bash
mysql -u votre_utilisateur -p

```
