
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payement</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/animate.min.css">
    <script>
        new WOW().init();

    </script>

    <!-- Jquery   -->
    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker();
        });
        $(function() {
            $("#datepicker1").datepicker();
        });

    </script>

</head>

<body style="background-color:#FFFFCC;">
 <header id="header">
        <nav class="navbar st-navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                </div>

    <!-- HEADER  -->

    <!--  SLIDER  -->

<h4 align="left"><b>MY BUS</b></h4>
<form action="abc.php" method="post">
 <section id="search">
        <div class="container">
        <h3 align="center"><b>PAYMENT</b></h3>
           
            <form class="searchbox">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="#sizing-addon1"><i class="fa fa-user"></i></span>
                             <input type="text"  placeholder="Name" autofocus class="form-control" area-describedby="sizing-addon1" required >
                        </div>
                    </div>  </div><br>
                    <div class="row">
                    
		                <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="#sizing-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <input type="text"  placeholder="MM(Expire)" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div></div><br>
                    <div class="row">
                     <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="#sizing-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                             <input type="text"  placeholder="YY(Exprire)" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div></div><br>
                    <div class="row">
                     <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="#sizing-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                               <input type="password"  placeholder="CVV" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div></div><br>
                    <div class="row">
                     <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon" id="#sizing-addon1"><i class="fa fa-credit-card place" aria-hidden="true"></i></span>
                              <input type="tel"   placeholder="Card Number(format:xxxx-xxxx-xxxx-xxxx)"  pattern="^\d{4}-\d{4}-\d{4}-\d{4}$" class="form-control" area-describedby="sizing-addon1" required>
                        </div>
                    </div>
                    </div><br>
                     <div class="row">
                        <div class="col-md-3">
                            <button type="reset" class="btn btn-md" value="Reset">Reset</button>
                        <div class="col-md-6">
                                                 <button type="submit" class="btn btn-md" value="Submit">Submit</button>
                        </div></div>
		
		<div class="form-inline">
                        <div class="form-group">
                            
		
		
		  </div>
                   </div>
               
                </div>
            </form>
       </div>
    </section>
    </body>