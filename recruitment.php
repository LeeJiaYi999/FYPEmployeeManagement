<?php
session_start();
include("db_connection.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Recruitment</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include("sidebar.php");
        ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Recruitment
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Recruitment</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Register New Employee</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <img class="img-fluid mb-12" src="<?php
                                                    if (isset($current_data)) {
                                                        echo $current_data["img"];
                                                    }
                                                    ?>" alt="Photo" style="width: 100%;height:300px;padding-top: 10px" id="img_display" name="img_display">
                                                </div>
                                                <div class="col-md-12" >
                                                    <div class="form-group" style="padding-top: 15px">
                                                        <div class="custom-file">
                                                            <input type="file" accept="image/*" onchange="loadFile(event)" class="custom-file-input" id="img" name="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Employee ID</label>
                                                    <input type="text" class="form-control" name="eid" id="eid" placeholder="Employee ID" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee Name</label>
                                                    <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter Eployee Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="lname" id="lname" placeholder="Enter Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>IC Number</label>
                                                    <input type="text" class="form-control" name="ic" id="ic" placeholder="Enter IC Number">
                                                </div> 
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee Type</label>
                                                    <select class="form-control">
                                                        <option>Admin</option>
                                                        <option>Employee</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                                </div> 
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position">
                                                </div>
                                                <div class="from-group">
                                                    <label>Birth Date</label>
                                                    <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Enter Birthdate">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Leave Available</label>
                                                    <input type="text" class="form-control" name="leave" id="leave" placeholder="Enter Leave Available">
                                                </div>
                                                <div class="form-group">
                                                    <label>Salary Amount</label>
                                                    <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter Salary Amount">
                                                </div>
                                                <div class="form-group">
                                                    <label>Department Name</label>
                                                    <select class="form-control">
                                                        <option>Sales</option>
                                                        <option>IT</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Address"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" onclick="add()" id="btnsave" >Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->


                        </div><!--/.col (left) -->
                        <!-- right column -->

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>


        <script>var loadFile = function (event) {
            var image = document.getElementById('img_display');
            image.src = URL.createObjectURL(event.target.files[0]);
                };
        </script>
    </body>
</html>