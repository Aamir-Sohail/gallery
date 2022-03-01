<?= $this->extend('Template/base') ?>
<?php $this->section('title') ?>
Gallery
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<h2>This is Gallery</h2>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gallery  as $row) :?>
              

                <tr>
                    <td><?php echo  $row['id'];?></td>
                    <td><?php echo  $row['name'];?></td>
                    <td><?php echo  $row['file'];?></td>

                    

                    <td><a href="<?php base_url('Gallery/delete/'.$row['id'])?>" class="btn btn-danger">Delete</td>
                </tr>
               <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>
</body>



<?php $this->endSection() ?>

