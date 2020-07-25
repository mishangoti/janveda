<?php include 'header.php' ?>

<body>

    <?php include 'sidebar.php' ?>

    <!-- place main content here -->
       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Of Products</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>PRODUCT NAME</th>
                                        <th>PACK STYLE</th>
                                        <th>PACK</th>
                                        <th>MOQ</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PARACETAMOL TABLETS IP 500 MG</td>
                                            <td>BLISTER</td>
                                            <td>1X10</td>
                                            <td>50000 TAB</td>
                                            <td>
                                                <btn class="btn btn-sm btn-info"><i class="ti-pencil-alt"></i></btn>
                                                <btn class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this location?');"><i class="fa fa-trash"></i></btn>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PARACETAMOL TABLETS IP 650 MG</td>
                                            <td>BLISTER</td>
                                            <td>1X10</td>
                                            <td>50000 TAB</td>
                                            <td>
                                                <btn class="btn btn-sm btn-info"><i class="ti-pencil-alt"></i></btn>
                                                <btn class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this location?');"><i class="fa fa-trash"></i></btn>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- end main content -->
    <?php include 'footer.php'; ?>  
    </div>


</body>

   
</html>
