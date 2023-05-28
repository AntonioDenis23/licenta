<div class="container mt-4">
   <div class="d-flex justify-content-end">
      <a href="<?php echo './create-alegeri.php' ?>" class="btn btn-success buton-absolut">Adaugă Alegere</a>
   </div>

   <div class="mt-3">
      <div class="mb-3">
         <h1 style="text-align:center;">Alegeri</h1>
      </div>
      <table class="table table-bordered" id="alegeri-list">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nume Alegere:</th>
               <th>Acțiune</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($alegeri) : ?>
               <?php foreach ($alegeri as $key => $alegere) : ?>
                  <tr>
                     <td><?php echo $key; ?></td>
                     <td><?php echo $alegere->name; ?></td>
                     <td>
                        <a href="<?= './edit-alegeri.php?id=' . $alegere->id ?>" class="btn btn-primary btn-sm">Editeaza</a>
                        <button type='button' onclick='confirmFunctionAlegeri(<?= $alegere->id ?>)' class="btn btn-danger btn-sm">Șterge</button>
                     </td>
                  </tr>
               <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
      </table>
   </div>
</div>

<script>
   async function confirmFunctionAlegeri(id) {
      if (confirm("Ștergere?")) {
         let resonse = await fetch(`http://localhost:5050/deleteElection?electionId=${id}`, {
            method: "POST",
            headers: {
               "Content-Type": "application/json",
            }
         })
         location.reload();
      }
   }
</script>