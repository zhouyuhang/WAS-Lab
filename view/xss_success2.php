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
                    </button> <a class="navbar-brand" href="../index.php">WAP Lab</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Start Learning<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Bypass Client Side Control</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">One more separated link</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="https://www.linkedin.com/pub/yuhang-zhou/57/a54/859" target="_blank">About Author</a>
                        </li>
                        <li>
                            <a href="#">Link</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" />
                        </div> 
                        <button type="submit" class="btn btn-default">
                            Submit
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Link</a>
                        </li>
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Action</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                            </ul>
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
                <p>This is the real online bank.</p>
                <a href='xss2.html'>Go back to previous page >></a>
            </div>        
        </div>        
    </div>
    

        