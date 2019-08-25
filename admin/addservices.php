<?php
    require_once 'class/common.class.php';
    require_once 'class/services.class.php';
    
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $services=new services;
    $error=[];


    if (isset($_POST['submit']))
    {
        
        if (isset($_POST['service_desc'])&& !empty($_POST['service_desc'])) {
            $service_desc = $_POST['service_desc'];
        }
        else
        {
            $error[0] = "Services must be provided";
        }
        
        
        if (count($error)==0)
        {
            $services->service_desc = $service_desc;
            $services->created_by = $_SESSION['admin'];
            $services->modified_by = $_SESSION['admin'];
            $date=date('Y-m-d H:i:s');
            $services->created_at =$date;
            $services->modified_at =$date;
            
            $ask = $services->insertservices();
            if ($ask==1)
            {
                echo "<script>alert('inserted successfully')</script>";
            }
            else
            {
                echo "<script>alert('Failed to insert')</script>";
            }
        }
    }
?>





<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
       
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Form Elements</div> -->
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" enctype="multipart/form-data" method="post">
                            
                                <div class="form-group">
                                    <label>Services</label>
                                    <textarea class="form-control" name="service_desc" rows="20" placeholder="Enter Description"></textarea>
                                </div>

                                <?php 
                                    foreach ($error as $err) {
                                    echo $err."<br>";
                                } 
                                ?>

                                <button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div>
