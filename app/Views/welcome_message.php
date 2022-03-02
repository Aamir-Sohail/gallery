<?= $this->extend('Template/base') ?>
<?php use App\Models\GalleryModel;?>
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
                <?php if (isset($gallery)) { ?>
                          <?php foreach($gallery as $image):?>
     
         

                <tr>
                    <td> <?php $image['id']?></td>
                    <td>  <?php $image['username'] ?></td>
                    <td> <img src="<?="uploads/".$image['image']; ?>" height="100px" width="100px"  alt="image"></td>

                    

                    <td><a href="" class="btn btn-danger">Delete</td>
                </tr>
               
               <?php endforeach ; ?>
               <?php  } ?>
            </tbody>
        </table>
    </div>
</body>



<?php $this->endSection() ?>

