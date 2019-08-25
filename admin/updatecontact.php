<?php
    require_once 'class/common.class.php';
    require_once 'class/contact.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $contact = new contact;
    if(isset($_GET['id']))
    {           
        $contact->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                    
                    $phone= $_POST['phone'];
                    $email= $_POST['email'];
                    $address= $_POST['address'];
                    $created_by= $_SESSION['admin'];
                    $modified_by= $_SESSION['admin'];
                    $contact->phone = $phone;
                    $contact->email = $email;
                    $contact->address = $address;
                    $contact->modified_by = $modified_by;
                    $contact->created_by = $created_by;
                    $ask = $contact->updatecontact();

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
    $data = $contact->selectcontactbyid();
   
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
                <h1 class="page-header">UPDATE contact</h1>
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
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $data[0]->phone; ?>">
                                </div>

                                 <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $data[0]->email; ?>">
                                </div>
                               

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address"  value="<?php echo $data[0]->address; ?>"></textarea>
                                </div> 
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

        
    </div>