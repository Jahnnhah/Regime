<form action="<?php echo base_url("backoffice/BoRegimeController/doCreate")?>" method="post">
     <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>

     <?php if (isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
     <?php } ?>

     <div class="form-group">
          <label>Type du regime</label><br>
          <select class="form-control" name="type" id="genre" required>
               <option value="Diminuer">Diminuer</option>
               <option value="Augmenter">Augmenter</option>
          </select>
     </div>

     <div class="form-group">
          <label>Nom du Regime</label>
          <input type="text"
               class="form-control" 
               name="name" 
               placeholder="Nom du Regime" required>
     </div>
    

     <div class="form-group">
     <label>Description du regime</label>
     
     <input type="text" 
          class="form-control"
          name="description" 
          placeholder="Description du regime">
     </div>
     
     <button type="submit" class="btn btn-success center w-100">Sauvegarder</button>
</form>