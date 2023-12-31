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
            <button id="create-button" class="btn btn-success" data-toggle="modal" data-target="#regimeModal">Creer un nouveau regime</button>
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
                    <?php foreach ($regimes as $regime): ?>
                    <tr>
                    <td class="id"><?php echo $regime['id']; ?></td>
                        <td class="type"><?php echo $regime['type']; ?></td>
                        <td class="nom"><?php echo $regime['nom']; ?></td>
                        <td class="description"><?php echo $regime['description']; ?></td>
                        <td class="d-flex justify-content-center align-item-center"> 
                            <a class="btn btn-success mx-2 text-light edit-link" href="#regimeModal" data-toggle="modal" >EDIT</a>
                            <a class="btn btn-danger text-light" href="<?php echo base_url("backoffice/BoRegimeController/delete?id=".$regime['id']) ?>">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Modal REGIME MODAL -->
        <div class="modal fade" id="regimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AJOUT/MODIFIER UN REGIME</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?= view('backoffice/regime/create-form') ?>
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
            $('#regimeForm').find('input#name').val(nomVal)
            $('#regimeForm').find('input#description').val(descriptionVal)
            $('#regimeForm').find('select#type').val(typeVal)
            $('#regimeForm').find('input#id').val(idVal)
            $("#regimeModal").modal("show")
        })
        $("#create-button").click(function(event){
            $('#regimeForm')[0].reset();
        })
    })
</script>

</html>