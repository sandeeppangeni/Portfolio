<?php
    require_once 'class/common.class.php';
    require_once 'class/skills.class.php';
    
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $skills=new skills;
    $error=[];


    if (isset($_POST['submit']))
    {
        
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
        
         if (isset($_POST['html'])) {
            $html = $_POST['html'];
        }

         if (isset($_POST['css'])) {
            $css = $_POST['css'];
        }
        
         if (isset($_POST['jquery'])) {
            $jquery = $_POST['jquery'];
        }

         if (isset($_POST['php'])) {
            $php = $_POST['php'];
        }

         if (isset($_POST['photoshop'])) {
            $photoshop = $_POST['photoshop'];
        }
        if (count($error)==0)
        {
           
            $skills->description = $description;
            $skills->html = $html;
            $skills->css = $css;
            $skills->jquery = $jquery;
            $skills->php = $php;
            $skills->photoshop = $photoshop;
            if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0) 
            {
                $iname=$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$iname);
                 $skills->image=$iname;
                $ask = $skills->insertskills();
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
                                    <label>HTML5</label>
                                    <input type="percentage" class="form-control" placeholder="Assign in %" name="html" max="100">
                                </div>

                                  <div class="form-group">
                                    <label>CSS4</label>
                                    <input type="percentage" class="form-control"  placeholder="Assign in %" name="css" max="100">
                                </div>

                                  <div class="form-group">
                                    <label>jquery</label>
                                    <input type="percentage"  placeholder="Assign in %" class="form-control" name="jquery" max="100">
                                </div>


                                  <div class="form-group">
                                    <label>PHP</label>
                                    <input type="percentage" class="form-control"  placeholder="Assign in %" name="php" max="100">
                                </div>

                                  <div class="form-group">
                                    <label>Photoshop</label>
                                    <input type="percentage" class="form-control"  placeholder="Assign in %" name="photoshop" max="100">
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
