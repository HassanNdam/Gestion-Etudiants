<?php 
session_start();
include("includes/header.php") ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <?php 
                if(isset($_SESSION['status'])){

                    echo "<h5 class='alert alert-success'>" . $_SESSION['status'] . "</h5>"; 
                    unset($_SESSION['status']);
                }

            ?>

            <div class="card">
                <div class="card-header">
                    <h4>
                        Firebase BDD student
                        <a href="add-contact.php" class="btn btn-primary float end">Add Students</a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>