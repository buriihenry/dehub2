<?php
session_start();
include "dbconn.php";
if(mysql_select_db("dehub")){

}else{
	echo "error connecting to database";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DeHUB</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    
    
    
    


    <!-- Custom Fonts -- 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">WELCOME TO DeHUB KENYA HACK</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>DeHUB</h1>
                        <hr class="small">
                        <span class="subheading">27th-29th MAY</span>

<?php
if(isset($_POST['fname'])){
    if(isset($_POST['designer'])){
        $designer = $_POST['designer'];
    }else{
        $designer = "";
    }
    if(isset($_POST['developer'])){
        $developer = $_POST['developer'];
    }else{
        $developer = "";
    }
    $reason ="";
	$fname=$_POST['fname'];
    $fname = trim($fname);
    if($fname == ""){
        $dbauth="no";
        $reason = $reason."|Your name should contain characters";
    }
	$sname =$_POST['sname'];
    $sname = trim($sname);
    if($sname == ""){
        $dbauth="no";
        $reason = $reason."|Your name should contain characters";
    }
	$gender =$_POST['gender'];
	$phonenumber =$_POST['phonenumber'];
    $phonenumber = trim($phonenumber);
    if($phonenumber == ""){
        $dbauth="no";
        $reason = $reason."|Your phonenumber should contain characters";
    }
	$email =$_POST['email'];
    $email = trim($email);
    if($email == ""){
        $dbauth="no";
        $reason = $reason."|Your email should contain characters";
    }
	$student =$_POST['student'];
    if(isset($_POST['university']) ){
	   $university =$_POST['university'];
       $university = trim($university);
        if($university == ""){
            $dbauth="no";
            $reason = $reason."|You did not select a university";
        }
       $year =$_POST['year'];
    }else{
        $university = "n/a";
        $year = "n/a";
    }
    if($_POST['student'] == "nonestudent"){
        $organ =$_POST['organ'];
        $organ = trim($organ);
        if($organ == ""){
            $organ ="n/a";    
        }    
    }else{
        $organ ="n/a";
    }
	
	$language=$_POST['language'];
    $language = trim($language);
    if($language == ""){
        $dbauth="no";
        $reason = $reason."|Your language should contain characters";
    }
	$link=$_POST['link'];
    $link = trim($link);
    if($link == ""){
        $link ="n/a";    
    }  
	$project=$_POST['project'];
    $sector=$_POST['sector'];
	$contribute =$_POST['contribute'];
    if($sector == "others"){
        $others=$_POST['others'];
    }else{
        $others = "Already in a sector";
    }
	$describe=$_POST['describe'];
	$submit=$_POST['submit'];
	$present="no";
	$lastindex = 0;
	$sql1="SELECT * from questionnaire";
	$result1=mysql_query($sql1);
	while ($row1=mysql_fetch_array($result1)) {
		# code...
		$present= "yes";
		$lastindex = $row1['index'];
	}
	if($present=="yes"){
		$uniqueid=$fname.$sname.$lastindex;
	}else{
		
		$uniqueid=$fname.$sname.$lastindex;
	}
	$sql2="INSERT INTO questionnaire (confirmed, designer, developer, uniqueid, fname, sname, gender, phonenumber, email, student, university, year, organ, language, link, project, contribute, others, `describe`)
		VALUES ('no', '".$designer."', '".$developer."', '".$uniqueid."', '".$fname."', '".$sname."', '".$gender."', '".$phonenumber."', '".$email."', '".$student."', '".$university."','".$year."', '".$organ."', '".$language."', '".$link."', '".$project."', '".$contribute."', '".$others."', '".$describe."')";
	$sql3="SELECT * from questionnaire";
    $result3=mysql_query($sql3);
    $dbauth = "yes";
    $isthere2 = "no";
    while ($row3=mysql_fetch_array($result3)) {
        if($email == $row3['email']){
            $dbauth = "no";
            $isthere2 = "yes";
        }
    }
    if($isthere2 == "yes"){
        $reason = $reason."|Your email is already registered";
    }
    if($dbauth == "yes"){
        mysql_query($sql2);
		echo "<h2>registration successful! Wait for a ticket confirmation in your e-mail </h2>";
	}else{
        if($dbauth=="no"){
            echo"<h2>".$reason."</h2>";    
        }
		echo mysql_error();
		echo"<h2>There was an error in processing your ticket</h2>";
	}

}else if((isset($_POST['who']))&&($_POST['who']=="adminlogin")){
    $sql3="SELECT * from admin";
    $result3=mysql_query($sql3);
    $isthere = "no";
    while ($row3=mysql_fetch_array($result3)) {
        if($_POST['username'] == $row3['username']){
            $isthere = "yes";
            if($_POST['password']==$row3['password']){
                $_SESSION['admin'] = $row3['username'];
                header("location: admin.php");
            }
        }
    }
    if($isthere == "yes"){
        echo "<h3>You entered the wrong password!</h3>";
    }else{
        echo "<h3>The username ".$_POST['username']." does not exist!</h3>";
    }
}else if((isset($_POST['who']))&&($_POST['who']=="confirm")){
    $sql4 = "UPDATE questionnaire SET confirmed='yes' WHERE uniqueid='".$_POST['uniqueid']."'";
    if(mysql_query($sql4)){
        echo "
        Email: ".$_POST['email']."<br>
        RE: Dekut Kenya Hack<br>
        Message: You ticked has been reserved. Your ticket ID is <b>".$_POST['uniqueid']."</b>. Note down your ticket ID for use at the entrance.
        ";
        ?>
        <br>
        <a href=<?php echo "'mailto:".$_POST['email']."?subject=Dekut Kenya Hack&body=You ticked has been reserved. Your ticket ID is ".$_POST['uniqueid'].". Note down your ticket ID for use at the entrance.'"; ?> class='btn btn-success'>Send</a><br>
        <?php
        echo "<br><a href='admin.php' class='btn btn-warning'>Admin</a>";
    }else{
        echo "<h2>Error confirming ticket</h2>";
    }
}else{
	echo "Error";
	//header("location: index.php");
}


?>

                    </div>
                </div>
            </div>
        </div>
    </header>
        

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                      <img src="hack.png" height="30%" width="40%">
                    <p class="copyright text-muted">Copyright &copy; @DeHUB2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>


