<!DOCTYPE html>
<html>
<head>
    <title>Web Application Security</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <script type="text/javascript" src="../lib/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../lib/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <link rel="stylesheet" href="../scripts/styles.css">
</head>  
    
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="../index.php">WAS Lab <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Start Learning<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="./sql.html">SQL Injection</a>
                                </li>
                                <li class="divider"></li>                               
                                <li>
                                    <a href="./clientside.html">Bypass Client Side Control</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="./authentication.html">Attack Authentication</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="./access.html">Attack Access Control</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="./xss.html">Cross Site Scripting</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="./tools.html">Toolkits for Developers/Hackers</a>
                                </li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="./faq.html">FAQ</a>
                        </li>
                    </ul>                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="https://www.linkedin.com/pub/yuhang-zhou/57/a54/859" target="_blank">About Author</a>
                        </li>
                    </ul>
                </div>                
            </nav>        
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            
            <ol class="breadcrumb">
              <li><a href="../index.php">Home</a></li>  
              <li><a href="../view/xss.html">Cross Site Scripting</a></li>  
              <li class="active">Lab2: Fake an online bank</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="bg-info">
                Welcome <?php echo $_GET["name"]; ?><br>
                <strong><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> ABC BANK</strong>
                <p>This is the fake online bank.</p>
                <a href='xss2.html'>Go back to previous page >></a>
            </div>        
        </div>        
    </div>
    

        
