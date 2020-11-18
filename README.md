# TP2ticketingMVCO

Avant d'utiliser ce produit,créer puis importer la base de données se situant dans le repertoire BD avec les commandes : 

mysql 

create database ticket;

sortez de Mysql et faites(e étant dans le répertoire de base :

mysql ticket < ./BD/ticket.sql

Suite à cela faites : mysql

Ensuite : use ticket;

Puis créez un utilisateur avec la commande suivante : CREATE USER 'user'@'localhost' IDENTIFIED BY 'hehetest';

Après vous devez accorder les droits à l'utilisateur sur la base de données, avec la commande : GRANT ALL PRIVILEGES ON ticket.* TO 'user'@'localhost';

Pour finir, vous devez actualiser les droits avec : FLUSH PRIVILEGES ;
