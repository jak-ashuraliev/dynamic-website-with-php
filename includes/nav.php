<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav">
				
				
				
				 <?php 
        
                    // Nav Items
                    foreach ($navItems as $item) {
                        echo "<li class=\"active\"><a href=\"$item[slug]\">$item[title]<span class=\"sr-only\">(current)</span></a></li>";
                    }
                    
                ?>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                   <?php 
                   
                        // Languages 
                        foreach ($languageItems as $language){
                            echo "<a class=\"dropdown-item\" href=\"$language[slug]\">$language[title]</a>";
                        }
                   ?>
            </div>
        </li>
    </ul>
</div>
		
		
