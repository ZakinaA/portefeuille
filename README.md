# Mise en place de la sécurité via le composant «security» de Symofny:

## 1. Pré requis :
//liste des composants requis pour l’implémentation de la sécurité
```bash
> composer require security
> composer require symfony/maker-bundle –dev
> composer require symfony/form
```

//petit plus pour la barre d’outils en bas de page
```bash
> composer require --dev symfony/profiler-pack
```

## 2. Création de l’entité utilisateur:

//doctrine inclus la possibilité de créer une entité user directement
```bash
> php bin/console make:user
```

//nom de la class (ici User)
```bash
The name of the security user class (e.g. User) [User]:
> User
```

//Voulons nous sauvegarder les données en base (ici oui)
```bash
Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
> yes
```

//définisson la propriété unique pour chaque utilisateur (nous choisissions les mails car c’est le moyen de connexion des élèves au portefeuille)
```bash
Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid [email]
> email
```

//Voulons nous hasher les mot de passes en base (OUI!)
```bash
Does this app need to hash/check user passwords? (yes/no) [yes]:
> yes
```

//On effectue ensuite la migration de l’entity vers la base de données.
```bash
> php bin/console make:migration
> php bin/console doctrine:migrations:migrate
```

## 3. Création du formulaire de connexion utilisateur:
//doctrine inclus la possibilité de créer un formulaire de connexion très complet, aucune modification sont nécessaire, il suffit de chercher la route /login et un formulaire de connexion est prédéfinis, nous pouvons ensuite ajouter un design personnel.
```bash
> php bin/console make:auth

 What style of authentication do you want? [Empty authenticator]:
  [0] Empty authenticator
  [1] Login form authenticator
> 1

 The class name of the authenticator to create (e.g. AppCustomAuthenticator):
> LoginFormAuthenticator

 The entry point for your firewall is what should happen when an anonymous user tries to access
a protected page. For example, a common "entry point" behavior is to redirect to the login page.
The "entry point" behavior is controlled by the start() method on your authenticator.
However, you will now have multiple authenticators. You need to choose which authenticator\'s
start() method should be used as the entry point (the start() method on all other
authenticators will be ignored, and can be blank. [App\Security\LoginFormAuthenticator]:
  [0] App\Security\LoginFormAuthenticator
  [1] App\Security\LoginFormAuthenticator
> 1

#Controller qui gère la sécurité
 Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
> SecurityController

 Do you want to generate a '/logout' URL? (yes/no) [yes]:
> yes
 
```

# Importation des étudiants à partir d'un fichier csv
## 1. Pré requis :
```bash
composer require league/csv
composer require symfony/mailer
composer require symfony/swiftmailer-bundle
```
Il faudra aussi configurer un serveur smtp, ici j'utilise mon compte google pour faire des tests, 
mais rien n'empêche d'utiliser un véritable smtp avec une nom de domaine privé.