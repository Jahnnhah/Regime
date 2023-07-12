<form id="activiteForm" action="<?php echo base_url("backoffice/BoActiviteController/doCreate")?>" method="post">
     <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>

     <?php if (isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
     <?php } ?>

     <div class="form-group">
          <label>Type du regime</label><br>
          <select class="form-control" name="type" id="type" required>
               <option value="Diminuer">Diminuer</option>
               <option value="Augmenter">Augmenter</option>
          </select>
     </div>

     <div class="form-group">
          <label>Nom du Regime</label>
          <input type="text"
               id="name"
               class="form-control" 
               name="name" 
               placeholder="Nom du Regime" required>
     </div>
    

     <div class="form-group">
     <label>Description du regime</label>
     
     <input type="text" 
          id="description"
          class="form-control"
          name="description" 
          placeholder="Description du regime">
     </div>
     <input type="hidden" name="id" id="id"> 
     
     <button type="submit" class="btn btn-success center w-100">Sauvegarder</button>
</form>