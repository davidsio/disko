# disko
Site permettant d'envoyer des formulaires de contact.

1) Téléchargement du code source.

2) Configuration de la base de données.

- Dans le code source, dans le fichier ".env" il faut modifier la ligne 29 :

                      DATABASE_URL=mysql://IDENTIFIANT:MOTDEPASSE@127.0.0.1:3306/NOMDELABASEDEDONNEES
                      
 - En ligne de commande symfony :
                        
                      symfony console doctrine:schema:validate
                      symfony console doctrine:schema:update --force
                      symfony console doctrine:fixtures:load
                      
- Résultat : le compte admin est créé (Identifiant: adminDisko, Mot de passe : adminDisko).


3) Configuration de SwiftMailer.

Aller dans le controller "DiskoController" et modifier avec les bonnes informations (Ligne 41 et 42):

                    ->setFrom('PRECISER ADRESSE MAIL DU COMPTE EXPÉDITEUR')
                    ->setTo("PRECISER ADRESSE MAIL DE L'ADMIN")
                    
Ensuite il faut aller dans le fichier ".env" et modifier la ligne 38 :

                    MAILER_URL=gmail://IDENTIFIANT:MOTDEPASSE@localhost

4) Configuration finale :
- Modifier le fichier ".env" ligne 17 :

                    APP_ENV=PROD

- En ligne de commande symfony :

                    symfony console cache:clear

5) URL du frontOffice : http://votrenomdedomaine/
URL du backOffice : http://votrenomdedomaine/admin

                    
