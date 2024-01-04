<?php include("includes/header.php") ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add students
                        <a href="index.php" class="btn btn-warning float end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Last name</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone_number">Phone number</label>
                            <input type="number" name="phone_number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="save_student" class="btn btn-success" >Save student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>


