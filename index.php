<?php 
    
    include('includes/header.php');
    
    $site_created_by = 'Jak Ashuraliev';

?>

<!-- ============================= MAIN NAVIGATION ============================= -->

<!-- Workflow AUTOMATION DropDown Menu -->
<div class="main-nav-menu">
    <div class="container">
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WORKFLOW AUTOMATION<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                     <!--DropdownItems-->
                      <?php 
                    
                        foreach ($dropDownAutomation as $dropdownAuto) {
                            echo "<li><a href=\"$dropdownAuto[slug]\">$dropdownAuto[title]</a></li>";
                        }
                        
                      ?>
                  
                </ul>
            </li>
        
        <!-- Workflow PLATFORM DropDown Menu -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WORKFLOW PLATFORM<span class="caret"></span></a>
            <ul class="dropdown-menu">
              
                 <!--DropdownItems-->
                  <?php 
                
                    foreach ($dropDownPlatform as $dropdownPlat) {
                        echo "<li><a href=\"$dropdownPlat[slug]\">$dropdownPlat[title]</a></li>";
                    }
                    
                  ?>
              
            </ul>
        </li>
        
        <!-- Workflow SOLUTIONS DropDown Menu -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SOLUTIONS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              
                 <!--DropdownItems-->
                  <?php 
                
                    foreach ($dropDownSolutions as $dropdownSol) {
                        echo "<li><a href=\"$dropdownSol[slug]\">$dropdownSol[title]</a></li>";
                    }
                    
                  ?>
              
            </ul>
        </li>
        
        <!-- Workflow PARTNERS DropDown Menu -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PARTNERS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              
                 <!--DropdownItems-->
                  <?php 
                
                    foreach ($dropDownPartners as $dropdownPart) {
                        echo "<li><a href=\"$dropdownPart[slug]\">$dropdownPart[title]</a></li>";
                    }
                    
                  ?>
              
            </ul>
        </li>
        
        <!-- Workflow RESOURCES DropDown Menu -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RESOURCES<span class="caret"></span></a>
            <ul class="dropdown-menu">
              
                 <!--DropdownItems-->
                  <?php 
                
                    foreach ($dropDownResources as $dropdownRes) {
                        echo "<li><a href=\"$dropdownRes[slug]\">$dropdownRes[title]</a></li>";
                    }
                    
                  ?>
              
            </ul>
        </li>
    </div><!-- container -->
</div><!-- main menu --<

<!-- ============================= MAIN HEADING ============================= -->

<div class="main-heading">
    <h1>Enter the era of Intelligent Process Automation</h1>
    <p>Intelligent Process Automation empowers employees to automate and optimize their own business processes with no-code workflow and a content automation platform that’s trusted by IT.</p>
    <a role="button" class="btn-primary btn-lg btn-block text-center" href="index.php">Watch the IPA Video</a>
</div>

<div class="video-container" style='overflow-x: hidden;' style='with:100%;'>
  <video autoplay="" loop="" poster="http://13.93.233.106/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation">
  <source type="video/webm" src="https://www.nintex.com/-/media/files/videos/nintex-ipa-banner-video.ashx">
  Your browser does not support the video tag.
  </video>
</div>

<!-- ============================= POWER TO THE PEOPLE ============================= -->

<!-- Secton_One -->
<section class="section_one">
    <div class="container text-center">
        
        <?php 
            foreach ($section_one as $value) {
        ?>
            
            <h2><?php echo $value[heading]; ?></h2>
            
            <blockquote class="blockquote lead text-center"><?php echo $value[text]; ?></blockquote>
        
        <?php
            }
        ?>
        
        <div class="footerQuote">
            <i><?php echo $value[footerQuote]; ?></i>
        </div>
        <div class=custom-btn>
            <a href="">Read More</a>
        </div>
        
        
    </div><!-- container -->
</section>


<!-- Secton_Two -->
<section class="section_two">
    <div class="container text-center">
        
        <?php 
            foreach ($section_two as $value) {
        ?>
        
            <h2><?php echo $value[heading]; ?></h2>
        
            <p class="lead"><?php echo $value[text1]; ?></p>
        
        <?php
            }
        ?>
        
        <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/free-the-4th-wave-of-process-automation.ashx"></img>
        
        <?php 
            foreach ($section_two as $value) {
        ?>
        
            <p class="lead text-center"><?php echo $value[text2]; ?></p>
        
        <?php
            }
        ?>
        
    </div><!-- container -->
    
    <div class="section-bg-image">
        <div class="text-center custom-btn">
            <p class="lead"><span class="eraText">The IPA era is here</span></p>
            <a class="btn btn-primary btn-lg">Download the Whitepaper</a>
        </div>
    </div>
    
</section>
        

<!-- Secton_Three -->
<section class="section_three">
    <div class="container text-center">
        
        <?php 
            foreach ($section_three as $value) {
        ?>
        
            <h2><?php echo $value[heading]; ?></h2>
            
            <p class="lead"><?php echo $value[text]; ?></p>
        
        <?php
            }
        ?>
        
        
        <div class="row">
            
            <div class="col-sm-4">
                
                <div class="thumbnail">
                    <div class="title">
                        <h3>Advanced Workflow</h3>        
                    </div>
                </div>
                
                <div class="thumbnail">
                    <div class="body-caption">
                        
                    </div>
                </div>
                
            </div><!-- col -->
            
           
            
        </div><!-- row -->
        
    </div><!-- container -->
</section>



<?php include('includes/footer.php'); ?>
        