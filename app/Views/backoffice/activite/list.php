<!DOCTYPE html>
<html>
<head>
	<title>Back Office</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap.min.css") ?>">
</head>
<body>
    <?= view('backoffice/commons/header') ?>
    <div class="container-fluid">
        <div class="row pt-4 pl-5">
            <button id="create-button" class="btn btn-success" data-toggle="modal" data-target="#activiteModal">Creer une nouvelle activite</button>
        </div>
        <div class="row px-5 pt-4">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>TYPE</th>
                        <th>NOM</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activites as $activite): ?>
                    <tr>
                    <td class="id"><?php echo $activite['id']; ?></td>
                        <td class="type"><?php echo $activite['type']; ?></td>
                        <td class="nom"><?php echo $activite['nom']; ?></td>
                        <td class="description"><?php echo $activite['description']; ?></td>
                        <td class="d-flex justify-content-center align-item-center"> 
                            <a class="btn btn-success mx-2 text-light edit-link" href="#activiteModal" data-toggle="modal" >EDIT</a>
                            <a class="btn btn-danger text-light" href="<?php echo base_url("backoffice/BoActiviteController/delete?id=".$activite['id']) ?>">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Modal Activite MODAL -->
        <div class="modal fade" id="activiteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AJOUT/MODIFIER UNE ACTIVITE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?= view('backoffice/activite/create-form') ?>
            </div>
            </div>
        </div>
        </div>

    </div>
    <?= view('backoffice/commons/footer') ?>

</body>
<script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
<script>
   
    $(document).ready(function(){
        $(".edit-link").click(function(event){
            var row=$(this).closest("tr");
            var idVal=row.find(".id").text()
            var typeVal=row.find(".type").text()
            var nomVal=row.find(".nom").text()
            var descriptionVal=row.find(".description").text()
            console.log(idVal,typeVal,nomVal);
            $('#activiteForm').find('input#name').val(nomVal)
            $('#activiteForm').find('input#description').val(descriptionVal)
            $('#activiteForm').find('select#type').val(typeVal)
            $('#activiteForm').find('input#id').val(idVal)
            $("#activiteModal").modal("show")
        })
        $("#create-button").click(function(event){
            $('#activiteForm')[0].reset();
        })
    })
</script>

</html>