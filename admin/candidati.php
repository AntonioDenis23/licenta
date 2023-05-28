<div class="container mt-4">
   <div class="d-flex justify-content-end">
      <a href="<?php echo './create-candidati.php' ?>" class="btn btn-success buton-absolut">Adaugă Candidat</a>
   </div>
   <?php
   if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
   }
   ?>
   <div class="mt-3">
      <div class="mb-3">
         <h1 style="text-align:center;">Candidați</h1>
      </div>
      <table class="table table-bordered" id="candidati-list">
         <thead>
            <tr>
               <th>Id</th>
               <!-- <th>Topic Nume</th> -->
               <th>Voturi</th>
               <th>Nume</th>
               <th>Prenume</th>
               <th>Job</th>
               <th>Despre</th>
               <th>Acțiune</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($candidates) : ?>
               <?php foreach ($candidates as $key => $candidate) : ?>
                  <tr>
                     <td><?php echo $key; ?></td>
                     <td><?php echo $candidate->votes; ?></td>
                     <td><?php echo $candidate->firstName; ?></td>
                     <td><?php echo $candidate->lastName; ?></td>
                     <td><?php echo $candidate->job; ?></td>
                     <td><?php echo $candidate->about; ?></td>
                     <td>
                        <a href="<?= './edit-candidati.php?id=' . $candidate->id ?>" class="btn btn-primary btn-sm">Editeaza</a>
                        <button type='button' onclick='confirmFunction(<?= $candidate->id ?>)' class="btn btn-danger btn-sm">Șterge</button>
                     </td>
                  </tr>
               <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
      </table>
   </div>
</div>
<script>
   async function confirmFunction(id) {
      if (confirm("Ștergere?")) {
         let resonse = await fetch(`http://localhost:5050/deleteCandidate?candidateId=${id}`, {
            method: "POST",
            headers: {
               "Content-Type": "application/json",
            }
         });

         location.reload();
      }
   }
</script>