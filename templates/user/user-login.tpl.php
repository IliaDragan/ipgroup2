<?php

/**
 * @file
 *
 * User login form template.
 */
?>
<div class="ipgroup-user-login-form-wrapper">
  <div id="login" class="ptb ptb-xs-40 page-signin">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-body">
            <div class="body-inner">
              <div class="card bg-white">
                <div class="card-content">
                  <section class="logo text-center">
                    <h2>Login</h2>
                  </section>
                  <form class="form-horizontal ng-pristine ng-valid">
                    <fieldset>
                      <div class="form-group">
                          <?php print drupal_render($form['name']); ?>
                      </div>
                      <div class="form-group">
                        <?php print drupal_render($form['pass']); ?>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <div class="card-action no-border text-right"> <a href="#/" class="color-primary">Sign in</a> </div>
              </div>
<!--              <div class="additional-info"> <a href="#/page/signup">Register</a><span class="divider-h"></span><a href="#/page/forgot-password">Forgot your password?</a> </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php print drupal_render_children($form) ?>
</div>
