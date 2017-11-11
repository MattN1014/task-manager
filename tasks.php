<?php 
    $pageTitle = "Manage Task";
    include'includes/header.php'; 
?>

    <div class="container-fluid">
        <section class="col-lg-12 main">
            <h3 class="text-primary">Manage Task </h3><hr>

            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr><th>Name</th><th>Description</th><th>Status</th><th>Created</th><th>Action</th></tr>
                </thead>

                <tbody id="task-list">
                    <tr>
                        <td><div>the task name</div></td>
                        <td><div> Task description</div></td>
                        <td><div>task status</div></td>
                        <td>date added</td>
                        <td style="width: 5%;"><button><i class="btn-danger fa fa-times"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
        

<?php include'includes/footer.php'; ?>