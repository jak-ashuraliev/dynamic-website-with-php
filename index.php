<?php 
    
    include('includes/header.php');
    
    $site_created_by = 'Jak Ashuraliev';

?>

<!-- ============================= MAIN NAVIGATION ============================= -->

<!-- Workflow AUTOMATION DropDown Menu -->
<div class="main-nav-menu">
    <div class="container">
        <divc class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
        
            </div>
        </div>
    </div><!-- container -->
</div><!-- main menu -->

<!-- ============================= MAIN HEADING ============================= -->

<div class="video-container" style='overflow-x: hidden;'>
    <video autoplay="" loop="" poster="http://13.93.233.106/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation">
    <source type="video/webm" src="https://www.nintex.com/-/media/files/videos/nintex-ipa-banner-video.ashx">
    Your browser does not support the video tag.
    </video>
    
    <div class="main-heading overlay">
        <h1>Enter the era of Intelligent Process Automation</h1>
        <p>Intelligent Process Automation empowers employees to automate and optimize their own business processes with no-code workflow and a content automation platform that’s trusted by IT.</p>
        <a role="button" class="btn-primary btn-lg btn-block text-center" href="index.php">Watch the IPA Video</a>
    </div>
    
</div>

<!-- ============================= POWER TO THE PEOPLE ============================= -->

<!-- Section_One -->
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

<!-- ============================= THE 4TH WAVE OF PROCESS AUTOMATION ============================= -->

<!-- Section_Two -->
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
            <a class="btn btn-primary btn-lg"><i class="far fa-edit"></i> Download the Whitepaper</a>
        </div>
    </div>
    
</section>

<!-- ============================= HUMANS AND MACHINES WORKING IN HARMONY ============================= -->

<!-- Section_Three -->
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
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleWorkflow]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/advanced-workflow.ashx?h=91&w=115&la=en&hash=068ADE3AD801779A1BEE777D5FCFD2329B767C36">
                        <div class="body-text">
                            <p><?php echo $value[textWorkflow]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
        
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleDocument]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/document-generation.ashx?h=91&w=75&la=en&hash=07F5FF3DDFC45EC19C06E14D3ABE6505E5E3703B">
                        <div class="body-text">
                            <p><?php echo $value[textDocument]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
            
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleMobile]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/mobile-apps-and-forms.ashx?h=91&w=53&la=en&hash=11B80B77CB4377D724C8F551ACDCC13800A501B5">
                        <div class="body-text">
                            <p><?php echo $value[textMobile]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
            

        </div><!-- row -->
        
    
            <div class="row">
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleRobotic]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/robotic-process-automation.ashx?h=90&w=93&la=en&hash=1726FBC1BC8B6A7708EB69152C3A5D2589F0CBBF">
                        <div class="body-text">
                            <p><?php echo $value[textRobotic]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
        
            
         <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleProcess]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/process-intelligence.ashx?h=92&w=103&la=en&hash=816D3F2BD1D3BDF54E32DCB311721311C0ECCE9E">
                        <div class="body-text">
                            <p><?php echo $value[textProcess]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
            
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="thumbnail">
                    <div class="title">
                        <h3><a href=""><?php echo $value[titleMachine]; ?></a></h3>
                    </div>
                    <img src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/machine-intelligence.ashx?h=91&w=89&la=en&hash=4397DD6B3213B88298B28486A2968BA9A2A79018">
                        <div class="body-text">
                            <p><?php echo $value[textMachine]; ?></p>
                        </div>
                </div>
            </div><!-- col -->
            

        </div><!-- row -->
        
        <div class="text-center custom-btn btn-spacing">
            <a class="btn btn-primary btn-lg"><i class="far fa-edit"></i> Download the Whitepaper</a>
        </div>
        
        
    </div><!-- container -->
</section>

<!-- ============================= NINTEX WINS NEW INVESTOR ============================= -->

<!-- Section_Four -->
<section class="section_four">
    <div class="container text-center">
        
        <?php 
            foreach ($section_four as $value) {
        ?>
        
            <img src="https://www.nintex.com/-/media/images/nintex/sections/home/451-report/451-research-logo.ashx?h=70&w=182&hash=7AC5876EB69E2DB77C530BCE3601B274C59ABC83&hash=7AC5876EB69E2DB77C530BCE3601B274C59ABC83&la=en"></img>
        
            <h2><?php echo $value[headingNintex]; ?></h2>
        
            <p class="lead"><?php echo $value[textNintex]; ?></p>
            
            <div class="text-center custom-btn btn-spacing">
                <a class="btn btn-primary btn-lg"><i class="far fa-edit"></i> Download the Whitepaper</a>
            </div>
        
        <?php
            }
        ?>
        
    </div><!-- container -->
</section>

<!-- ============================= INTUITIVE. INTEGRATED. INTELLIGENT ============================= -->

<!-- Section_Five -->
<section class="section_five">
    <div class="container text-center">
        
        <?php 
            foreach ($section_five as $value) {
        ?>
        
            <h2><?php echo $value[headingIntuitive]; ?></h2>
        
            <p class="lead"><?php echo $value[textIntuitiveOne]; ?></p>
            
            <img class="img-responsive" src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/intuitive-integrated-intelligent-expect-nothing-less.ashx"></img>
        
        <?php
            }
        ?>
        
        
         <div class="row">
            
            <div class="col-sx-4 col-sm-4 col-md-4 text-center">
                <div class="caption">
                    <h3><?php echo $value[titleIntuitive]; ?></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[textIntuitive]; ?></p>
                    </div>
            </div><!-- col -->
        
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="caption">
                    <h3><?php echo $value[titleIntegrated]; ?></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[textIntegrated]; ?></p>
                    </div>
            </div><!-- col -->
            
            
            <div class="col-sx-4 col-sm-4 col-md-4">
                <div class="caption">
                    <h3><?php echo $value[titleIntelligent]; ?></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[textIntelligent]; ?></p>
                    </div>
            </div><!-- col -->

        </div><!-- row -->
        
    </div><!-- container -->
</section>

<!-- ============================= WHAT TO LEARN MORE ============================= -->

<!-- Section_Six -->
<section class="section_six">
    <div class="container text-center">
        
        <?php 
            foreach ($section_six as $value) {
        ?>
        
            <h2><?php echo $value[headingLearnMore]; ?></h2>
        
            <p class="lead"><?php echo $value[textLearnMore]; ?></p>
            
        
        <?php
            }
        ?>
        
        
         <div class="row">
            
            <div class="col-sx-4 col-sm-4 col-md-4 text-left">
                <div class="caption">
                    <img class="img-responsive" src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/disrupt-or-be-disrupted.ashx?h=233&w=355&la=en&hash=7E864954BF3C251E13E6AD8D16B1B9E702A308C6"></img>
                    <h3><a href="index.php"><?php echo $value[titleDisrupt]; ?></a></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[textDisrupt]; ?></p>
                    </div>
            </div><!-- col -->
        
            
            <div class="col-sx-4 col-sm-4 col-md-4 text-left">
                <div class="caption">
                    <img class="img-responsive" src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/dt-journey-circle-of-despair.ashx?h=234&w=350&la=en&hash=D3DD9ED9B5DDD8435533A8888C5DF291428D2C0E"></img>
                    <h3><a href="index.php"><?php echo $value[titleCircle]; ?></a></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[textCircle]; ?></p>
                    </div>
            </div><!-- col -->
            
            
            <div class="col-sx-4 col-sm-4 col-md-4 text-left">
                <div class="caption">
                    <img class="img-responsive"src="https://www.nintex.com/-/media/images/nintex/sections/workflow-automation-makes-collaborating-easy/a-new-era-of-intelligent-process-automation/4th-wave-of-automation.ashx?h=233&w=350&la=en&hash=D294C075021984D28A280C875574F0CC31DAA3D0"></img>
                    <h3><a href="index.php"><?php echo $value[title4thWave]; ?></a></h3>
                </div>
                    <div class="body-text">
                        <p><?php echo $value[text4thWave]; ?></p>
                    </div>
            </div><!-- col -->

        </div><!-- row -->
        
    </div><!-- container -->
</section>




<?php include('includes/footer.php'); ?>
        