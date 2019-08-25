<?php
    require_once 'class/common.class.php';
    require_once 'class/about.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $about = new about;
    if(isset($_GET['id']))
    {           
        $about->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                  
                    $description= $_POST['description'];
                    $fb_link= $_POST['fb_link'];
                    $twt_link= $_POST['twt_link'];
                    $insta= $_POST['insta'];
                    $modified_by= $_SESSION['admin'];
                   
                    $about->description = $description;
                    $about->fb_link = $fb_link;
                    $about->twt_link = $twt_link;
                    $about->insta_link= $insta_link;
                    $about->modified_by = $modified_by;
                    
                    
                    if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $about->image = $image;
                    }
                    $ask = $about->updateabout();
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
    $data = $about->selectaboutbyid();
   
?>



 





    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
      
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">UPDATE ABOUT YOU</h1>
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
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description"><?php echo $data[0]->description; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"></textarea>
                                </div> 

                                <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link" value="<?php echo $data[0]->fb_link; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" class="form-control" name="twt_link" value="<?php echo $data[0]->twt_link; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" class="form-control" name="insta_link" value="<?php echo $data[0]->insta_link; ?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

        
    </div>