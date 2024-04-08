<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$social_media_title     = get_field('social_media_title','option');
$facebook_url           = get_field('facebook_url','option');
$instagram_url          = get_field('instagram_url','option');
$youtube_url            = get_field('youtube_url','option');
$linkedin_url           = get_field('linkedin_url','option');
$newsletter_title       = get_field('newsletter_title','option');
$logo_text              = get_field('logo_text','option');

?>
<!-- Add your FOOTER HTML HERE  -->
    <footer class="footer w-100">
        <div class="container">
            <div class="footer-bg">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-12">
                            <?php if($social_media_title):?><h4><?= $social_media_title; ?></h4><?php endif;?>
                            
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="footer-contact-box">
                                <?php if ( is_active_sidebar( 'footer-6' )) : ?>
                                    <?php dynamic_sidebar( 'footer-6' ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="footer-logo-desktop">
                                <?php if($logo_text):?><h2><?= $logo_text; ?></h2><?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 spacing-footer">
                            <div class="row">
                                <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                                    <div class="col"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                                <?php endif; ?>

                                <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                                    <div class="col"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                                <?php endif; ?>

                                <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                                    <div class="col"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                                    <div class="col"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                                <?php endif; ?>
                                
                                <?php if ( is_active_sidebar( 'footer-5' )) : ?>
                                    <div class="col"><?php dynamic_sidebar( 'footer-5' ); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ( is_active_sidebar( 'copyright-menu' )) : ?>
                    <div class="sub-footer">
                        <div class="row align-items-center ">
                            <div class="col-lg-8">
                                <div class="disclaimar">
                                    <?php dynamic_sidebar( 'copyright-menu' ); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="social-icon-desktop pt-0 d-flex mt-4 mt-lg-0 justify-content-lg-end">
                                    <ul>
                                        <?php if($facebook_url):?><li><a class="facebook" href="<?= $facebook_url; ?>" target="_blank" title="Facebook"></a></li><?php endif;?>
                                        <?php if($instagram_url):?><li><a class="instagram" href="<?= $instagram_url; ?>" target="_blank" title="Instagram"></a></li><?php endif;?>
                                        <?php if($youtube_url):?><li><a class="youtube" href="<?= $youtube_url; ?>" target="_blank" title="Youtube"></a></li><?php endif;?>
                                        <?php if($linkedin_url):?><li><a class="linkedin" href="<?= $linkedin_url; ?>" target="_blank" title="LinkedIN"></a></li><?php endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>
<!-- Add your FOOTER HTML HERE  -->
<div class="modal fade product_details_modal" id="product_details_modal" tabindex="-1" role="dialog" aria-labelledby="product_details_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" id="product_quickview_cascade_window">
                           
            </div>
           
        </div>
    </div>
  
</div>


<!-- Add your FOOTER HTML HERE  -->
<div class="modal fade get_inspired_details_modal" id="get_inspired_details_modal" tabindex="-1" role="dialog" aria-labelledby="product_details_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" id="get_inspired_cascade_window">
                 <!-- Ajax data -->
            </div>
           
        </div>
    </div>
  
</div>


<?php wp_footer(); ?>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "e9a08a57122ed20ecee2cd6c8b375866f604a72abf26db07119d8c6df8b6c86f", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);"<div id='zsiqwidget'></div>"</script>
<script type="text/javascript" src='https://crm.zoho.eu/crm/javascript/zcga.js'> </script>
</body>
</html>