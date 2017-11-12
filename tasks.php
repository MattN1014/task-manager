<?php 
    $pageTitle = "Manage Task";
    include'includes/header.php'; 
?>

    <div class="container-fluid">
        <section class="col-lg-12 main">
            <h3 class="text-primary">Manage Task </h3><hr>

            <table class="table table-bordered table-responsive">
                <thead>
                    <tr><th>Name</th><th>Description</th><th>Status</th><th>Created</th><th>Action</th></tr>
                </thead>

                <tbody id="task-list"></tbody>
            </table>
        </section>
    </div>
        

<?php include'includes/footer.php'; ?>