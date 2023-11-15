![Image](https://i.imgur.com/L9rzeaL.png)

> Ce projet a été réalisé dans le cadre de mes études (SIO1).

[Lien vers le projet](https://github.com/eliamd/SmartZone)

SmartZone a été pour moi mon tout premier projet web de boutique e-commerce. Il m'a permis d'apprendre à gérer un projet qui nécessite du développement et l'apprentissage de nouvelles technologies.

### Technologies utilisées :

**Backend**

- PHP
- SQL
- JavaScript

**Frontend**

- HTML
- CSS
- TailwindCSS

**API de paiement**

- Stripe

J'ai commencé par créer une maquette sur Figma (un logiciel de conception de maquettes), puis j'ai réfléchi à la conception de ma base de données MySQL. J'ai créé mes premières pages et j'ai connecté ma base de données.

> Accueil du site
![Accueil du site](https://i.imgur.com/L9rzeaL.png)

Tous les composants frontend ont été créés ou pris sur le site de TailwindCSS, ce framework permet de modifier le style de la page et des composants plus rapidement et de manière responsive.

> Liste des smartphones en vente
![Liste de smartphones](https://i.imgur.com/LNxkpJ3.png)

La prochaine étape a été d'intégrer le JavaScript au site, notamment pour gérer le panier.

> Page produit
![Page produit](https://i.imgur.com/hNa6Cch.png)

Ensuite, pour gérer le paiement, j'ai utilisé l'API de Stripe (la plus grande plateforme de traitement de paiements en ligne). L'API est gérée par le PHP.

![Page de paiement](https://i.imgur.com/lkAoFAy.png)

Une fois le paiement effectué, l'API de Stripe envoie à mon site les informations suivantes :

- [x] Identifiant unique de commande
- [x] Statut du paiement
- [x] Adresse de facturation et de livraison
- [x] Numéro de téléphone du client

Ces informations sont ensuite traitées côté serveur et envoyées à ma base de données.

Le client peut ensuite retrouver les informations de commande sur son espace.

![Espace client](https://i.imgur.com/DxwMKOx.png)

> Aucune interface administrateur n'a été créée.
