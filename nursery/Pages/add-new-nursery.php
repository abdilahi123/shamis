<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php'
?>



<body class="bg-gradient-primary">
    <div class="container">
        <form class="user" action="" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nursery-name" placeholder="Nursery Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="CONTACT INFORMATION" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="ID" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="ADDRESS" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="BOOKING ID" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="STAFF ID" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">SUBMIT</button>
        </form>
    </div>

    <?php include '../assets/components/footer.php'; ?>