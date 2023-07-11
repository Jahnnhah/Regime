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
            <button class="btn btn-success" data-toggle="modal" data-target="#regimeModal">Creer un nouveau regime</button>
        </div>
        <div class="row px-5 pt-4">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>TYPE</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($regimes as $regime): ?>
                    <tr>
                    <td><?php echo $regime['id']; ?></td>
                        <td><?php echo $regime['type']; ?></td>
                        <td><?php echo $regime['nom']; ?></td>
                        <td><?php echo $regime['description']; ?></td>
                        <td class="d-flex justify-content-center align-item-center"> <button class="btn btn-danger">DELETE</button></td>
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
                <h5 class="modal-title" id="exampleModalLabel">CREER UN REGIME</h5>
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


</body>
<script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</html>