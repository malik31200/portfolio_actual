# Plan de test QA (MVP)

## Objectif
Vérifier l'intégration bout-en-bout des parcours critiques du MVP.

## Portée
- Authentification (inscription, connexion, logout)
- Cours et sessions (consultation, admin CRUD)
- Réservation (avec et sans sessionBook)
- Paiement Stripe et retour dashboard
- Annulation réservation

## Environnement
- Application Symfony locale (branche `feature/malik`)
- Base de données projet
- Stripe (mode test)

## Scénarios de test
| ID | Scénario | Type | Résultat attendu |
|---|---|---|---|
| T-001 | Inscription utilisateur valide | Manuel | Compte créé + redirection login |
| T-002 | Connexion utilisateur | Manuel | Accès dashboard |
| T-003 | Réservation avec sessionBook | Manuel | Réservation confirmée + décrément crédit |
| T-004 | Réservation sans sessionBook (Stripe) | Manuel | Paiement validé + réservation créée |
| T-005 | Annulation réservation | Manuel | Statut annulé + place/crédit restauré |
| T-006 | Admin crée un cours | Manuel | Cours visible en liste |
| T-007 | Admin crée une session cohérente | Manuel | Session créée |
| T-008 | Admin tente session durée invalide | Manuel | Refus avec message d'erreur |
| T-009 | Dashboard admin lisibilité cartes stats | Manuel | Texte lisible sur fond violet/bleu |
| T-010 | Exécution tests PHP existants | Automatisé | Exécution sans erreur bloquante |

## Critères d'acceptation
- Aucune régression sur parcours critiques.
- 100% des Must Have testés.
- Tout bug critique corrigé avant livraison.
