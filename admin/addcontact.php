<?php
    require_once 'class/common.class.php';
    require_once 'class/contact.class.php';
    
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $contact=new contact;
    $error=[];


    if (isset($_POST['submit']))
    {
        // $this->con->real_escape_string($_GET['id']);
        
        if (isset($_POST['phone'])&& !empty($_POST['phone'])) 
        {
            $phone = $contact->escapestring($_POST['phone']);
        }
        else
        {
            $error[0] = "Phone No. Must Be Provided";
        }
        if (isset($_POST['address'])&& !empty($_POST['address'])) {
            $address = $_POST['address'];
        }
        else
        {
            $error[0] = "Address must be provided";
        }
        
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
      
        
        if (count($error)==0)
        {
            $contact->phone = $phone;
            $contact->email = $email;
            $contact->address = $address;
            
            $contact->created_by = $_SESSION['admin'];
            $contact->modified_by = $_SESSION['admin'];
            $date=date('Y-m-d H:i:s');
            $contact->created_at =$date;
            $contact->modified_at =$date;
           
            $ask = $contact->insertcontact();
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
                                    <label>Phone NO.</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>

                                <div class="form-group">
                                    <label>address</label>
                                    <textarea class="form-control" name="address" rows="20" placeholder="Enter address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>email</label>
                                    <input type="email" class="form-control" name="email" >
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
