<!DOCTYPE html>
<html>
<head>
    <title>Web Application Security</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <script type="text/javascript" src="lib/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="scripts/styles.css">
</head>  
    
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="#">WAP Lab</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
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
            <div class="jumbotron">
                <h2>
                    Hello, Welcome to the world of Web App Security(WAP)!
                </h2>
                <p>
                    This is Web App Security lab. You can learn about web application security vulnerabilities by 
                    take part in various examples lists below. Your knowledge of web application security grows
                    as you understand these vulnerabilities, it can help you to build more secure web applications.
                </p>
                <p>
                    <a class="btn btn-primary btn-large" href="#">Start!</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>
                Bypass Client Side Control
            </h2>
            <p>
            An application may rely on client-side controls to restrict user input, this is achieved by 
            HTML form features, client-side scripts, or browsers extention technologies.   
            </p>
            <p>
                <a class="btn" href="#">Learn More »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn" href="#">View details »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Heading
            </h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
            <p>
                <a class="btn" href="#">View details »</a>
            </p>
        </div>
    </div>
</div>

<script type="text/javascript">
$.ajax({
    url:'scripts/php/test.php',
    type:'POST',
    data:{},
    dataType:'json',
    success: function(data){
            alert('Data: '+data);
        }
    
});
</script>