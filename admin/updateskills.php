<?php
    require_once 'class/common.class.php';
    require_once 'class/skills.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $skills = new skills;
    if(isset($_GET['id']))
    {           
        $skills->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                    $html= $_POST['html'];
                    $css= $_POST['css'];
                    $jquery= $_POST['jquery'];
                    $php= $_POST['php'];
                    $photoshop= $_POST['photoshop'];
                    $description= $_POST['description']; 
                    $skills->html = $html;
                    $skills->css = $css;
                    $skills->jquery = $jquery;
                    $skills->php = $php;
                    $skills->photoshop = $photoshop;
                    $skills->description = $description;
                    
                    
                    if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $skills->image = $image;
                    }
                    $ask = $skills->updateskills();
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
    $data = $skills->selectskillsbyid();
   
?>



 





    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
       
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">UPDATE skills</h1>
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
                                    <label>HTML5</label>
                                    <input type="percentage" class="form-control" name="html" value="<?php echo $data[0]->html5; ?>">
                                </div>

                                 <div class="form-group">
                                    <label>CSS</label>
                                    <input type="percentage" class="form-control" name="css" value="<?php echo $data[0]->css4; ?>">
                                </div>

                                <div class="form-group">
                                    <label>jquery</label>
                                    <input type="percentage" class="form-control" name="jquery" value="<?php echo $data[0]->jquery; ?>">
                                </div>

                                 <div class="form-group">
                                    <label>php</label>
                                    <input type="percentage" class="form-control" name="php" value="<?php echo $data[0]->php; ?>">
                                </div>

                                 <div class="form-group">
                                    <label>photoshop</label>
                                    <input type="percentage" class="form-control" name="photoshop" value="<?php echo $data[0]->photoshop; ?>">
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