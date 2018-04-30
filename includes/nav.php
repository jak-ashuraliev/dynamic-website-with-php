<ul class="navbar-nav mr-auto">
    <?php 
        
        foreach ($navItems as $item) {
            echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"$item[slug]\">$item[title]<span class=\"sr-only\">(current)</span></a></li>";
        }
        
    ?>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
           <?php 
                foreach ($languageItems as $language){
                    echo "<a class=\"dropdown-item\" href=\"$language[slug]\">$language[title]</a>";
                }
           ?>
        </div>
    </li>
</ul>
