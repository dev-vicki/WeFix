<?php 
// This wont work with localhost but it will work on Live Server Once connected with Domain wth the Help of Hoisting Server!!!
if(isset($_REQUEST['submit'])){
    // checking for empty fields
    if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['regarding'] == "")){
        // msg will be displayed if fields are empty
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else{
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['regarding'];

        $mailTo = "vignesh.r1999@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have received an email from ". $name. ".\n\n".$message;
        mail($mailTo, $message, $txt, $headers);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Sent Successfully</div>';
    }
}
?>

<section id="contactus" class="footer text-center">
    <div class="container">
        <h2>Get in touch with us</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter Your Name.." required>
            <input type="email" name="email" placeholder="Enter Your Email.." required>
            <input type="text" name="regarding" placeholder="Enter Your Queries.." required>
            <button type="submit" value="send" name="submit">SEND</button>
            <small>Copyright @ 2021, Designed by WeFix With <i class="fas fa-heart" style="color:white;"></i>&nbsp 
            <a href="./Admin/AdminLogin.php">Admin Login</a></small>
        </form>
    </div>
</section>