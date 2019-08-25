<?php
    require_once 'class/common.class.php';
    require_once 'class/intro.class.php';
    
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $intro=new intro;
    $error=[];


    if (isset($_POST['submit']))
    {
        // $this->con->real_escape_string($_GET['id']);
        
        if (isset($_POST['name'])&& !empty($_POST['name'])) 
        {
            $name = $intro->escapestring($_POST['name']);
        }
        else
        {
            $error[0] = "username Must Be Provided";
        }
        if (isset($_POST['description'])&& !empty($_POST['description'])) {
            $description = $_POST['description'];
        }
        else
        {
            $error[0] = "Description name must be provided";
        }
        
        if (isset($_POST['image'])) {
            $image = $_POST['image'];
        }
      
        
        if (count($error)==0)
        {
            $intro->name = $name;
            
            $intro->description = $description;
            
            $intro->created_by = $_SESSION['admin'];
            $intro->modified_by = $_SESSION['admin'];
            $date=date('Y-m-d H:i:s');
            $intro->created_at =$date;
            $intro->modified_at =$date;
            if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0) 
            {
                $iname=$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$iname);
                 $intro->image=$iname;
                $ask = $intro->insertintro();
            }
            
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
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="20" placeholder="Enter Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" >
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
