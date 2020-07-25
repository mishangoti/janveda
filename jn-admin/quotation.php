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
                                <h4 class="title">List Of Messages Or Quotation</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>misaasd@awd.asd</td>
                                            <td>9429011743</td>
                                            <td width="35%">"Oud-Turnhout awdwayfaw auwhd7arwaw awawda waad"</td>
                                            <td>12:20pm 20/20/2020</td>
                                            <td>
                                                <btn class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this location?');"><i class="fa fa-trash"></i></btn>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>mishan goti</td>
                                            <td>misaasd@awd.asd</td>
                                            <td>9429011743</td>
                                            <td width="35%">"Oud-Turnhouawdwd wdawda dw wadac wdawda dt awdwayfaw auwhd7arwaw awawda waad"</td>
                                            <td>12:20pm 20/20/2020</td>
                                            <td>
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
