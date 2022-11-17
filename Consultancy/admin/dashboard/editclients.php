<?php
$con = mysqli_connect('localhost','root','','consultancy');
include 'header.php';
$id = $_GET['r'];
$query="SELECT * FROM user WHERE a_id='".$id."'";
$q=mysqli_query($con, $query);
$row=mysqli_fetch_array($q);
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Validation type</h4>
                                        <form action="editclientdb.php?r=<?php echo $row['a_id']?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label>Enter Your Reference Number</label>
                                                <input type="text" name="reference" class="form-control" required placeholder="Reference number" value=<?php echo $row['a_reference_number']?> />
                                            </div>
        
                                            <div class="mb-3">
                                                <label>Passport number</label>
                                                <div>
                                                    <input type="text" name="passport" id="pass2" class="form-control" required
                                                            placeholder="passport" value=<?php echo $row['a_passport_number']?> />
                                                </div>
                                            </div>
        
                                            <div class="mb-3">
                                                <label>File</label>
                                                <div>
                                                    <input type="file" name="file" class="form-control" required
                                                            parsley-type="file" placeholder="pdf" value=<?php echo $row['a_file']?>/>
                                                </div>
                                            </div>
                                           
                                            <div class="mb-3">
                                                <label>Textarea</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-2"></div>

                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php
                
                include 'footer.php'
                
                
                ?>