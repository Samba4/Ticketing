<?php $this->titre = "Incidents"; ?>


<div class="container-fluid">
   <h6 class="blog-post-title" style="text-align:center;">Gestion des incidents</h6>
   </br>
   <div class="row mb-2">
      <?php foreach ($tickets as $ticket) : ?>
         <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
               <div class="col p-4 d-flex flex-column position-static">
                  <?php if ($ticket['id_etat'] == 1) : ?>
                     <strong class="d-inline-block mb-2 text-primary"><?= ($ticket['nometat']) ?></strong>
                  <?php endif; ?>
                  <?php if ($ticket['id_etat'] == 2) : ?>
                     <strong class="d-inline-block mb-2 text-warning"><?= ($ticket['nometat']) ?></strong>
                  <?php endif; ?>
                  <?php if ($ticket['id_etat'] == 3) : ?>
                     <strong class="d-inline-block mb-2 text-success"><?= ($ticket['nometat']) ?></strong>
                  <?php endif; ?>
                  <?php if ($ticket['id_etat'] >= 4) : ?>
                     <strong class="d-inline-block mb-2 text-danger"><?= ($ticket['nometat']) ?></strong>
                  <?php endif; ?>
                  <strong class="d-inline-block mb-2 text-secondary">Incident n°<?= ($ticket['id']) ?> - <?= ($ticket['auteur']) ?></strong>
                  <h3 class="titreTicket" style="text-align: justify;"><?= ($ticket['titre']) ?></h3>
                  <p class="card-text mb-auto"><?= ($ticket['contenu']) ?></br></br></p>

                  <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                        <a href="<?= "index.php?action=ticket&id=" . $ticket['id'] ?>" button type="button" class="btn btn-sm btn-outline-secondary">Afficher</a>
                        <a href="<?= "index.php?action=editerticket&id=" . $ticket['id'] ?>" button type=" button" class="btn btn-sm btn-outline-secondary">Modifier</a>
                        <a onclick="return confirm('&Ecirc;êtes vous sur de supprimer ce ticket?')" href="<?= "index.php?action=supprimerticket&id=" . $ticket['id'] ?>" button type="button" class="btn btn-sm btn-outline-secondary">Supprimer</a>
                     </div>
                     <small class="text-muted"><?= strftime("%d %B %Y"); ?> - <?= strftime("%H:%M"); ?> <?php strtotime($ticket['date']); ?></small>
                  </div>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
   </div>

</div>


<div class="container-fluid">
   <h6>Signaler votre problème</h6>
   <form method="post" action="index.php?action=ticketadd">
      <div class="col">
         <input type="hidden" name="etat" value="etat">
         <input type="text" id="titre" name="titre" class="form-control" placeholder="Le titre de votre ticket" required>
         <input type="text" id="auteur" name="auteur" class="form-control" placeholder="Votre prénom" required>
      </div>
      <div class="form-group">
         <div class="col">
            <textarea id="contenu" class="form-control" name="contenu" rows="4" placeholder="Exprimez votre problème." .." required></textarea><br />
            <input type="hidden" name="id" value="" />
            <input type="hidden" name="date" />
            <button type="submit" class="btn btn-dark" value="Signaler">Signaler</button>
         </div>
      </div>