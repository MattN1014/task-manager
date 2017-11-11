<?php 
    $pageTitle = "Create Task";
    include'includes/header.php'; 
?>

    <div class="container-fluid">
        <section class="col-lg-6 col-sm-12">
            <h3 class="text-primary">Create a new task</h3><hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input name="name" class="form-control" id="name" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-12 control-label">Description</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                    </div>
                </div>
                <button type="submit" name="createBtn" class="btn btn-success pull-right">
                    Create Task <i class="fa fa-plus"></i>
                </button>
            </form>
        </section>
    </div>
        

<?php include'includes/footer.php'; ?>