<?php
require_once 'Modele/Ticket.php';
require_once 'Vue/Vue.php';
class ControleurAccueil
{
   private $ticket;
   public function __construct()
   {
      $this->ticket = new Ticket();
   }
   // Affiche la liste de tous les billets du blog
   public function accueil()
   {
      $tickets = $this->ticket->getTickets();
      $vue = new Vue("Accueil");
      $vue->generer(array('tickets' => $tickets));
   }

   public function ticketadd($idTicket, $titre, $contenu, $auteur, $etat)
   {
      $this->ticket->ajouterticket($idTicket, $titre, $contenu, $auteur, $etat);
      header('Location: index.php?action=gestick');
      die();
   }
}
