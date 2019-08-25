<?php
    require_once 'class/common.class.php';
    require_once 'class/intro.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $intro = new intro;
    if(isset($_GET['id']))
    {           
        $intro->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                    $name= $_POST['name'];
                    $description= $_POST['description'];
                   
                    $modified_by= $_SESSION['admin'];
                    
                    $intro->name = $name;
                    $intro->description = $description;
                    $intro->modified_by = $modified_by;
                    
                    
                    if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $intro->image = $image;
                    }
                    $ask = $intro->updateintro();
                    echo $ask;
                    if($ask==="Duplicate")
                    {
                        echo "<script>alert('Duplicate Entry')</script>";
                    }
                    else if($ask)
                    {
                        echo "<script>alert('Updated Sucessfully')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Update Unsucessfully')</script>";
                    }
                }
    }
    $data = $intro->selectintrobyid();
   
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
                <h1 class="page-header">UPDATE INTRO</h1>
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
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data[0]->username; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description"><?php echo $data[0]->description; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"></textarea>
                                </div> 
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

        
    </div>