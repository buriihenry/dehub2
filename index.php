<!DOCTYPE html> <html lang="en">

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

<body onload="callall()">

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
                        <span class="subheading">Hack Day</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        
        <div class="row">
            <div class="col-lg-5 col-lg-offset-0">

                    <h2>Event Registration Form</h2>
            <form action="processor.php" method="post" id="regform">
                   FIRST NAME:<input type="text" name="fname" placeholder="first name" value="" class="form-control" required>
                   SECOND NAME:<input type="text" name="sname" placeholder="second name" value=""class="form-control" required>
                   GENDER: <br>
                   MALE <input type ="radio" name="gender" value="male" required>
                   FEMALE<input type ="radio" name="gender" value="female" required>
                   <br>
                   PHONE NUMBER<input type="text" name="phonenumber" value=""class="form-control" required>
                   E-mail:<input type="text" name="email" placeholder="e-mail" value="" class="form-control" required><br>

                   ARE YOU A STUDENT?<br>
                   STUDENT: <input type="radio" name="student" id="student" value="student" onclick="studentfxn()" required>
                   NONE STUDENT <input type="radio"name="student" id="nonestudent" onclick="studentfxn()" value="nonestudent" required>
                   <br>
                   
                   <p id="studentp"></p>

                   WHAT ARE YOU?<br>
                   A DESIGNER:<input type="checkbox" name="designer" value="designer" >
                   A DEVELOPER:<input type="checkbox" name="developer" value="developer" >
                   <br>
                   PLEASE  TELL  US YOUR  FAVOURITE  CODING  LANGUAGE<input type="text" name="language"class="form-control" required><br>
                   
                   PLEASE  PROVIDE  US  WITH  A  LINK  TO  YOUR  GITHUB  OR  BIT BUCKET  PROFILE<input type="text" name="link" class="form-control" value=""><br>
                    
                   INCLUDE  A  LINK  TO  A  PROJECT YOU  HAVE WORKED  ON<input type="text" name="project" class="form-control" value=""><br>
                   
                   WHAT DID  YOU  CONTRIBUTE  TO  THIS PROJECT? WHAT  WAS  THE  BEST  PART  Simba WORKING  ON  IT <input type="text" name="contribute" class="form-control" value""><br>
                   WHICH SECTOR DO YOU WANT TO CHANGE?
                    <select name="sector" id="Sector" class="form-control" required>  
                        <option value="education" onclick="sectorfxn2()" selected>EDUCATION</option>
                        <option value="others" onclick="sectorfxn()">OTHERS</option>
                        <option value="finance" onclick="sectorfxn2()">FINANCE </option>
                        <option value="agriculture" onclick="sectorfxn2()">AGRICULTURE </option>
                        <option value="environment" onclick="sectorfxn2()">ENVIRONMENT </option>
                        <option value="health" onclick="sectorfxn2()">HEALTH </option>
                        <option value="security" onclick="sectorfxn2()">SECURITY</option>
                    </select>
                              </br>

                    <p id="sectorp"></p>
                    PLEASE DESCRIBE YOUR PROJECT<input type="text" name="describe" required>
                   
                    <br>
                    <input type="submit" name="submit" value="Submit">
                </form>



                </div>
                <div class="col-lg-6 col-lg-offset-0">
                    <img src="hack.png"  width="100%">
                </div>
                </div>

                    
                <hr>
                <!-- Pager -->
            

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

    <script>
    function studentfxn(){
        if(document.getElementById('nonestudent').checked){
            document.getElementById("studentp").innerHTML = "Correct";
            document.getElementById("studentp").innerHTML = 'If none student tell us your organiztion of work<input type ="text" name="organ"><br>';
        }else if(document.getElementById('student').checked){
            document.getElementById("studentp").innerHTML = 'If a student which University?<select name="university"  value=""class="form-control"><option value=""></option><option value="Adventist University">Adventist University</option><option value="Africa International University">Africa International University </option><option value="Africa Nazarene University">Africa Nazarene University</option><option value="Chuka University">Chuka University </option>   <option value="Daystar University">Daystar University </option>  <option value=">Dedan Kimathi University">Dedan Kimathi University of Technology </option> <option value="Africa International University">Africa International University </option> <option value="Egerton University">Egerton University</option>  <option value="Great Lakes University of Kisumu ">Great Lakes University of Kisumu </option> <option value="Gretsa University ">Gretsa University  </option> <option value="Inoorero University ">Inoorero University </option> <option value="Jaramogi Oginga Odinga University">Jaramogi Oginga Odinga University</option> <option value="JKUAT ">Jomo Kenyatta University of Agriculture and Technology </option><option value="Kabarak University">Kabarak University </option> <option value="Karatina University">Karatina University</option> <option value="KCA University">KCA University</option> <option value="Kenya Highlands Evangelical University ">Kenya Highlands Evangelical University  </option> <option value="Kenya Methodist University">Kenya Methodist University  </option> <option value="Kenyatta University">Kenyatta University</option> <option value="Kiriri Women`s University of Science and Technology ">Kiriri Women`s University of Science and Technology  </option>  <option value="Kisii University">Kisii University </option> <option value="Laikipia University">Laikipia University </option> <option value="Maasai Mara University">Maasai Mara University </option> <option value="Management University of Africa ">Management University of Africa </option> <option value="Maseno University ">Maseno University  </option> <option value="Masinde Muliro University of Science and Technology">Masinde Muliro University of Science and Technology</option> <option value="Meru University of Science and Technology">Meru University of Science and Technology  </option> <option value="Moi University ">Moi University </option><option value="Mount Kenya University">Mount Kenya University</option> <option value="Multimedia University of Kenya ">Multimedia University of Kenya </option> <option value="Pan Africa Christian University ">Pan Africa Christian University  </option> <option value="Pwani University">Pwani University  </option><option value="South Eastern Kenya University">South Eastern Kenya University</option>   <option value="St. Paul`s University">St. Paul`s University  </option> <option value="Strathmore University">Strathmore University </option> <option value="Technical University of Kenya ">Technical University of Kenya </option><option value="Technical University of Mombasa  ">Technical University of Mombasa    </option> <option value="The East African University  ">The East African University     </option><option value="The Presbyterian University">The Presbyterian University </option> <option value="United States International Universit">United States International University</option>y   <option value="University of Eastern Africa, Baraton  ">University of Eastern Africa, Baraton  </option> <option value="University of Eldoret  ">University of Eldoret   </option> <option value="University of Kabianga">University of Kabianga </option><option value="University of Nairobi ">University of Nairobi  </option></select>                   Year of Study<input type="text" name="year" value=""><br>';
        }
    }
    function sectorfxn(){
        var sector = "";
        var sector = document.getElementById("regform").elements.namedItem("sector").value;
        if(sector == "others"){
            document.getElementById("sectorp").innerHTML = 'OTHERS SPECIFY<input type="text" name="others" value=""> <br>';
        }
    }
    function sectorfxn2(){
        var sector = "";
        var sector = document.getElementById("regform").elements.namedItem("sector").value;
        document.getElementById("sectorp").innerHTML = '';
    }
    function callall(){
        studentfxn();
        sectorfxn();
    }
    </script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>


</body>

</html>

<!-- Start 1FreeCounter.com code -->
  
  <script language="JavaScript">
  var data = '&r=' + escape(document.referrer)
    + '&n=' + escape(navigator.userAgent)
    + '&p=' + escape(navigator.userAgent)
    + '&g=' + escape(document.location.href);

  if (navigator.userAgent.substring(0,1)>'3')
    data = data + '&sd=' + screen.colorDepth 
    + '&sw=' + escape(screen.width+'x'+screen.height);

  document.write('<a href="http://www.1freecounter.com/stats.php?i=116590" target=\"_blank\" >');
  document.write('<img alt="Free Counter" border=0 hspace=0 '+'vspace=0 src="http://www.1freecounter.com/counter.php?i=116590' + data + '">');
  document.write('</a>');
  </script>

<!-- End 1FreeCounter.com code -->