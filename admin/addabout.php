<?php
    require_once 'class/common.class.php';
    require_once 'class/about.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $about=new about;
    $error=[];


    if (isset($_POST['submit']))
    {
        // $this->con->real_escape_string($_GET['id']);
        
        
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
           if (isset($_POST['fb_link'])) {
            $fb_link = $_POST['fb_link'];
        }
         if (isset($_POST['twt_link'])) {
            $twt_link = $_POST['twt_link'];
        }
         if (isset($_POST['insta_link'])) {
            $insta_link = $_POST['insta_link'];
        }
        
        if (count($error)==0)
        {
            $about->description = $description;
            $about->fb_link = $fb_link;  
            $about->twt_link = $twt_link;
            $about->insta_link = $insta_link;
            $about->created_by = $_SESSION['admin'];
            $about->modified_by = $_SESSION['admin'];
            $date=date('Y-m-d H:i:s');
            $about->created_at =$date;
            $about->modified_at =$date;
            if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0) 
            {
                $iname=$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$iname);
                 $about->image=$iname;
                $ask = $about->insertabout();
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
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="20" placeholder="Enter Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>


                                 <div class="form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link">
                                </div>

                                 <div class="form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" class="form-control" name="twt_link">
                                </div>

                                 <div class="form-group">
                                    <label>Insta Link</label>
                                    <input type="text" class="form-control" name="insta_link">
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
