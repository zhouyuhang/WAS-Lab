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
                    </button> <a class="navbar-brand" href="./index.php">WAS Lab <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Start Learning<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="./view/sql.html">SQL Injection</a>
                                </li>                                
                                <li>
                                    <a href="./view/clientside.html">Bypass Client Side Control</a>
                                </li>
                                <li>
                                    <a href="./view/authentication.html">Attack Authentication</a>
                                </li>
                                <li>
                                    <a href="./view/access.html">Attack Access Control</a>
                                </li>
                                <li>
                                    <a href="./view/xss.html">Cross Site Scripting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./view/faq.html">FAQ</a>
                        </li>
                    </ul>                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="https://www.linkedin.com/pub/yuhang-zhou/57/a54/859" target="_blank">About Author</a>
                        </li>
                    </ul>
                </div>
                
            </nav>        

            
            <div class="jumbotron" style="background:url('./images/security_background.jpg') no-repeat fixed center;">
                <div style="background-color:rgba(255,255,255,0.7);padding:10px;">
                    <h2>
                        Welcome to the world of Web App Security(WAS)!
                    </h2>
                    <p>
                        Join our Web App Security lab now! You can learn about web application security vulnerabilities by taking part in various interactive labs. Your knowledge of web application security grows as you understand these vulnerabilities, which helps you to build more secure web applications.
                    </p>                    
                    <a class="btn btn-warning btn-lg" href="#start">Start !</a>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <a name="start"></a> 
        <div class="col-md-4">
            <h2>
                SQL Injection
            </h2>
            <p>
                Injection attacks take advantage of the way how interpreted languages are executed. An attacker can use crafted input as program instruction to compromise the application.
            </p>
            <p>
                <a class="btn btn1" href="view/sql.html">Learn More »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Bypass Client Side Control
            </h2>
            <p>
            An application may rely on client-side controls to restrict user input, this is achieved by 
            HTML form features, client-side scripts, or browsers extention technologies.   
            </p>
            <p>
                <a class="btn btn1" href="./view/clientside.html">Learn More »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Attack Authentication
            </h2>
            <p>
                Authentication is the front line of defence an application. However there are some design flaws with authentication mechanisms. If broken, the protected functionality and sensitive data will be explored to attackers.
            </p>
            <p>
                <a class="btn btn1" href="./view/authentication.html">Learn More »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Attack Access Control
            </h2>
            <p>
                Access Controls are critical defence mechanism in a application that make key decisions. And access Control vulnerabilities are conceptually simple: The application lets you do something you should not be able to.
            </p>
            <p>
                <a class="btn btn1" href="./view/access.html">Learn More »</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>
                Cross Site Scripting
            </h2>
            <p>
                Today Cross Site Scripting(XSS) is often cited as the number-one security threat on the web. XSS attacks target on the users than the server, and they can carry out malicious actions to users.
            </p>
            <p>
                <a class="btn btn1" href="./view/xss.html">Learn More »</a>
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
            console.log(data);
        }
    
});
</script>