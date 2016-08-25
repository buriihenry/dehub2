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
                    <h2>Admin portfolio</h2>
                    <form action="processor.php" method="post" id="regform">
                        USERNAME:<input type="text" name="username" text="">
                        <br>
                        PASSWORD:<input type="password" name="password" text="">
                        <br>
                        <input type="submit" name="submit" value="Submit">
                    </form>

                       <a href="index.html">Admin</a>

                    <table name="admin" class="table table-stripped table-bordered table-hover" >
                        <th>
                            <td>Fname </td>
                            <td>Sname </td>
                            <td>gender </td>
                            <td>phone</td>
                            <td>email </td>
                            <td>student </td>
                            <td>university </td>
                            <td>year</td>
                            <td>organization</td>
                            <td>language</td>
                            <td>link </td>
                            <td>project </td>
                            <td>contribution</td>
                            <td>others </td>
                            <td>describe </td>

                        </th>
                        <?php
                            include "dbconn.php";
                            if(mysql_select_db("dehub")){

                           }
                           else{
                              echo "error connecting to database";
                           }
                           $sql1="SELECT* from questionnaire";
                           $result1=mysql_query($sql1);
                           while ($row1=mysql_fetch_array($result1)){
                            ?>
                            <tr>
                                <td><?php echo $row1['fname']; ?></td>
                                <td><?php echo $row1['sname']; ?></td>
                                <td><?php echo $row1['gender']; ?>< </td>
                                <td><?php echo $row1['phonenumber']; ?><</td>
                                <td><?php echo $row1['email']; ?><</td>
                                <td><?php echo $row1['student']; ?><</td>
                                <td><?php echo $row1['university']; ?>< </td>
                                <td><?php echo $row1['year']; ?><</td>
                                <td><?php echo $row1['organ']; ?><</td>
                                <td><?php echo $row1['language']; ?><</td>
                                <td><?php echo $row1['link']; ?><</td>
                                <td><?php echo $row1['project']; ?><</td>
                                <td><?php echo $row1['contribute']; ?><</td>
                                <td><?php echo $row1['others']; ?><</td>
                                <td><?php echo $row1['describe']; ?>< </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>




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