
			<ul class="nav navbar-nav">
				
				
				 <?php 
        
                    // Nav Items
                    foreach ($navItems as $item) {
                        echo "<li class=\"active\"><a href=\"$item[slug]\">$item[title]<span class=\"sr-only\">(current)</span></a></li>";
                    }
                    
                ?>
                
         
            </div>
        </li>
    </ul>
</div>


		
		
