      </div>
      <footer class="site__footer footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="footer-contact">
                <p>E-mail: <?php echo get_option( 'wpschool_api_settings' )['wpschool_api_text_field_0']; ?></p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="footer-contact">
                <p>Phone number: <?php echo get_option( 'wpschool_api_settings' )['wpschool_api_text_field_1']; ?></p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="footer__copyright">
                <p>© Metropolitan Anthony of Sourozh Foundation</p>
                <p>© Metropolitan Anthony of Sourozh Spiritual Heritage Foundation</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>