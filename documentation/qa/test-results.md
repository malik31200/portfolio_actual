# Résultats de test QA (MVP)

## Preuves disponibles
- Tests PHPUnit configurés : `phpunit.dist.xml`
- Fichiers de tests présents :
  - `tests/Controller/Web/AdminControllerTest.php`
  - `tests/Controller/Web/BookingControllerTest.php`
- Logs applicatifs : `var/log/dev.log`

## Résultats (synthèse)
| ID | Exécution | Statut | Commentaire |
|---|---|---|---|
| T-001 | Manuel | OK | Parcours inscription validé |
| T-002 | Manuel | OK | Connexion validée |
| T-003 | Manuel | OK | Réservation carnet fonctionnelle |
| T-004 | Manuel | OK | Flux Stripe corrigé et validé |
| T-005 | Manuel | OK | Annulation + restitution validées |
| T-006 | Manuel | OK | Création cours validée |
| T-007 | Manuel | OK | Création session valide |
| T-008 | Manuel | OK | Blocage des durées invalides |
| T-009 | Manuel | OK | Lisibilité admin corrigée |
| T-010 | Automatisé | À renforcer | Couverture à améliorer (tests existants minimalistes) |

## Conclusion QA
- Parcours critiques MVP : validés.
- Points à améliorer : couverture des tests automatisés et traçabilité continue des exécutions.
