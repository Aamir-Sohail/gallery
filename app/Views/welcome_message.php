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
                

                <tr>
                    <td>  ['id']</td>
                    <td>  ['name']</td>
                    <td>  ['file']</td>

                    

                    <td><a href="" class="btn btn-danger">Delete</td>
                </tr>
               
               
            </tbody>
        </table>
    </div>
</body>



<?php $this->endSection() ?>

