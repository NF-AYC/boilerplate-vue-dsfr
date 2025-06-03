# Components

Ce répertoire contient tous les composants Vue.js de l'application, organisés selon les principes de l'Atomic Design.

## Sous-répertoires

- `atoms/`: Contient les composants atomiques, les plus basiques et indivisibles (ex: boutons, champs de saisie).
- `molecules/`: Contient les composants moléculaires, des groupes d'atomes qui fonctionnent ensemble (ex: barre de recherche).
- `organisms/`: Contient les composants organiques, des groupes de molécules et/ou d'atomes qui forment des sections distinctes (ex: en-tête, pied de page).
- `templates/`: Contient les templates de page qui définissent la disposition des organismes et des molécules.
- `pages/`: Contient les composants de page, les composants de plus haut niveau qui utilisent des templates pour créer des pages spécifiques.
