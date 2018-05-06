        
    
        <footer class="footer">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sx-3 col-sm-3 col-md-3 text-left">
                            <h4>COMPANY</h4>
                            <ul class="list-unstyled">
                                <?php 
                        
                                    foreach ($footerMenuCompany as $value) {
                                        echo "<li><a href=\"$value[slug]\">$value[menuList]</a></li>";
                                    }
                                ?>
                            </ul>
                        </div><!-- col -->
                    
                        <div class="col-sx-3 col-sm-3 col-md-3 text-left">
                            <h4>RESOURCES</h4>
                            <ul class="list-unstyled">
                                <?php 
                        
                                    foreach ($footerMenuResources as $value) {
                                        echo "<li><a href=\"$value[slug]\">$value[menuList]</a></li>";
                                    }
                                ?>
                            </ul>
                        </div><!-- col -->
                    
                        <div class="col-sx-3 col-sm-3 col-md-3 text-left">
                            <h4>FREE TRIALS</h4>
                            <ul class="list-unstyled">
                                <?php 
                        
                                    foreach ($footerMenuTrial as $value) {
                                        echo "<li><a href=\"$value[slug]\">$value[menuList]</a></li>";
                                    }
                                ?>
                            </ul>
                        </div><!-- col -->
                
                        <div class="col-sx-3 col-sm-3 col-md-3 text-left">
                            <h4>CONNCET</h4>
                            <ul class="list-unstyled">
                                <?php 
                        
                                    foreach ($footerMenuConnect as $value) {
                                        echo "<li><a href=\"$value[slug]\">$value[menuList]</a></li>";
                                    }
                                ?>
                            </ul>
                        </div><!-- col -->
                        
                    </div><!-- row -->
                </div><!-- container -->

          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <samll>&copy; <?php echo date('Y'); ?> - <?php echo $site_created_by; ?></samll>
          </div>
        </footer>
        
        </div><!-- container -->
        
        <!--Bootstrap JavaScript and jQuery-->
        <script type="text/javascript" src="assets/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </body>
</html>