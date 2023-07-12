<!DOCTYPE html>
<html>
<head>
	<title>Back Office</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap.min.css") ?>">
</head>
<body>
    <?= view('backoffice/commons/header') ?>
    <div class="container-fluid">
        <div class="row px-5 pt-4">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>USER NAME</th>
                        <th>name</th>
                        <th>taille</th>
                        <th>poids</th>
                        <th>genre</th>
                        <th>age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                    <td class="id"><?php echo $user['id']; ?></td>
                        <td class="user_name"><?php echo $user['user_name']; ?></td>
                        <td class="user_name"><?php echo $user['name']; ?></td>
                        <td class="taille"><?php echo $user['taille']; ?></td>
                        <td class="poids"><?php echo $user['poids']; ?></td>
                        <td class="genre"><?php echo $user['genre']; ?></td>
                        <td class="age"><?php echo $user['age']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>
    <?= view('backoffice/commons/footer') ?>

</body>
<script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>

</html>