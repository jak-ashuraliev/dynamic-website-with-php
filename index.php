<?php 
    
    include('includes/header.php');
    
    $site_created_by = 'Jak Ashuraliev';

?>

<!-- ============================= MAIN NAVIGATION ============================= -->


<!-- Workflow AUTOMATION DropDown Menu -->
<div class="custom-dropdown">
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
</div>

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
 


<h1>Workflow Automation</h1>
        
        <!--<div class="video-container">-->
        <!--  <video autoplay="" loop="" poster="http://13.93.233.106/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation">-->
        <!--  <source type="video/webm" src="https://www.nintex.com/-/media/files/videos/nintex-ipa-banner-video.ashx">-->
        <!--  Your browser does not support the video tag.-->
        <!--  </video>-->
        <!--</div>-->
        

<?php include('includes/footer.php'); ?>
        