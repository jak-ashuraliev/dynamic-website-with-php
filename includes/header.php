<?php 

    include('includes/arrays.php');
    
    define('TITLE', 'Intelligent Process Automation for Better Business Processes - Nintex');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo TITLE; ?> </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Intelligent Process Automation, or IPA, is what happens when you combine the power of Nintex workflow automation with robotic process automation and machine learning. Learn more about how Nintex has pioneered the move to no-code process automation and is pushing forward with Intelligent Process Automation solutions.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Styles CSS -->
    <link href="/assets/styles.css" rel="stylesheet">
        
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
    
    <!-- BRAND -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment-example" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="https://www.nintex.com/-/media/images/nintex/sections/nintex-logo.ashx?h=50&w=174&la=en&hash=DF87DB84E303661159DCB02CA8FAA81EDC9E3CAF"></img></a>
    </div>
      
    <!-- COLLAPSIBLE NAVBAR -->
    <div class="collapse navbar-collapse" id="alignment-example">
        
        <!--Include navigation-->
        <?php include('includes/nav.php'); ?>
        
        <!-- Search -->
        <form class="navbar-form " action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
            <span class="freeTrial"><a href="index.php">FREE TRIAL</a></span>
        </form>
      
    </div>
    
    </div>
  </nav>