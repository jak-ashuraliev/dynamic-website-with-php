<?php 

    include('includes/arrays.php');
    
    define('TITLE', 'Intelligent Process Automation for Better Business Processes - Nintex');
    

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Jak Ashuraliev" content="Dynamic Website using PHP">
        <title> <?php echo TITLE; ?> </title>
        
        <!--Bootstrap CSS-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       
        <!-- Stylesheet -->
        <link href="/assets/styles.css" rel="stylesheet">
        
    </head>
    
    <body>
      <div class="container">
        
       <nav class="navbar navbar-expand-sm navbar-dark bg-dark mr-auto">
           <a class="navbar-brand" href="."><img src="https://www.nintex.com/-/media/images/nintex/sections/nintex-logo.ashx?h=50&w=174&la=en&hash=DF87DB84E303661159DCB02CA8FAA81EDC9E3CAF"></img></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarsExampleDefault">
               
            <!--Include navigation-->
            <?php include('includes/nav.php'); ?>
             
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </form>
           </div>
        </nav>