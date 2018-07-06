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
                    <h2><?php print t('Log in'); ?></h2>
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
                    <div class="card-action no-border text-right">
                      <?php print drupal_render_children($form); ?>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
