 <!-- FOOTER -->  
    <footer id="footer" class="text-dark spaced-big ">
      <div class="wrapper">
          <div class="spacer-big"></div>
           <?php
              if ( is_active_sidebar( 'instafeed-5' ) ) { ?>
                <?php dynamic_sidebar( 'instafeed-5' ); ?>
            <?php } ?>
        </div><!-- wrapper -->
        <div class="footer-inner wrapper">
            
            <div class="column-section spaced-big clearfix">
              <div class="column one-third address-bl">
                    <?php
                      if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    <?php } ?>
                </div>
                
                <div class="column one-third follow-us">
                    <?php
                      if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    <?php } ?>
                </div>
                
                <div class="column one-third last-col foot-menu">
                   <?php
                      if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- FOOTER -->
    
</div> <!-- END #page-content -->

<!-- SCRIPTS -->
<?php wp_footer(); ?>
</body>
</html>
