<?php
    require_once 'class/common.class.php';
    require_once 'class/services.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $services = new services;
    if(isset($_GET['id']))
    {           
        $services->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                    
                    $service_desc= $_POST['service_desc'];
                    $created_by= $_SESSION['admin'];
                    $modified_by= $_SESSION['admin'];
                    $services->service_desc = $service_desc;
                    $services->modified_by = $modified_by;
                    $services->created_by = $created_by;
                    $ask = $services->updateservices();

                    echo $ask;
                    if($ask==="Duplicate")
                    {
                        echo "<script>alert('Duplicate Entry')</script>";
                    }
                    else if($ask="1")
                    {
                        echo "<script>alert('Updated Sucessfully')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Update Unsucessfully')</script>";
                    }
                }
    }
    $data = $services->selectservicesbyid();
   
?>



 





    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">UPDATE services</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Form Elements</div> -->
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" method="post">
                                
                                <div class="form-group">
                                    <label>Services</label>
                                    <textarea class="form-control" name="service_desc" rows="20" placeholder="Enter Description" value="<?php echo $data[0]->Services; ?>"></textarea>
                                </div>

                               
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

        
    </div>