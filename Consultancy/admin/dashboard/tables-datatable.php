<?php
$con = mysqli_connect('localhost','root','','consultancy');
include 'header.php';
?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data Tables</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Default Datatable</h4>
                                       
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Reference Number</th>
                                                <th>Passport Number</th>
                                                <th>PDF File</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query="SELECT * FROM user";
                                                $q=mysqli_query($con, $query);
                                                while($row=mysqli_fetch_array($q)){
                                                ?>
                                                <tr>
                                                <td>1</td>
                                                    <td><?php echo $row['a_reference_number']?></td>
                                                    <td><?php echo $row['a_passport_number']?></td>
                                                    <td><?php echo $row['a_file']?></td>
                                                    <td class="text-center"><a href="deleteclients.php?r=<?php echo $row['a_id']?>" onclick="confirm('are you sure');"><span style="color:red; font-size:20px"><i class="fas fa-circle-xmark"></i></span></a></td>
                                                    <td class="text-center"><a href="editclients.php?r=<?php echo $row['a_id']?>"><span style="color:green;  font-size:20px"><i class="fas fa-pencil"></i></span></a></td>
                                                </tr>
                                                <?php
                                                }
                                                
                                                ?>
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
         <?php
         include 'footer.php'
         ?>