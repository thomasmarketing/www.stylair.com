<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">
    <div class="container">
        <div class="sf-top-wrap">
        <div class="sf-col-1">
        <?php $logo = get_field('global_footer_logo','option');
        if( !empty($logo) ): ?>
            <a href="<?php bloginfo('url'); ?>" class="sf-logo">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
            </a>
        <?php endif;?>

        <a href="https://www.thomasnet.com/profile/10056513?src=tnbadge" target="_blank" class="tn-badge__link tse-remove-border">
        <img src="https://img.thomascdn.com/badges/shield-tier-r-sm.png?cid=10056513" srcset="https://img.thomascdn.com/badges/shield-tier-r-sm-2x.png?cid=10056513 2x" alt="Thomas Supplier" title="Thomas Supplier" class="tn-badge__img">
        </a>
      
            </div>
        <div class="sf-col-2">
            <h3 class="sf-head">Explore Links</h3>
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           

            <div class="sf-col-3">
                <h3 class="sf-head">Quick Links</h3>
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Right Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>

            <div class="sf-col-4">
                <h3 class="sf-head">Contact us</h3>
                
                <ul class="sf-contact-info">
                    <?php if(get_field('global_address','option')):?>
                        <li class="sf-address"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo get_field('global_company_name','option');?> <?php echo get_field('global_address','option');?></span></li>
                    <?php endif;?>

                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    <?php if ($string): ?>
                        <li class="sf-ph"><i class="fa fa-phone" aria-hidden="true"></i><span><a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></span></li>
                    <?php endif ?>

                    <?php $string1 = get_field('global_phone_number_1','option');$string1 = preg_replace("/[^0-9]/", '', $string1);?>
                    <?php if ($string1): ?>
                       
                        <li class="sf-ph"><i class="fa fa-phone" aria-hidden="true"></i><span><a href="tel:<?php echo $string1;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number_1','option');?></a> <?php echo get_field('global_phone_number_1_area','option');?></span></li>
                    <?php endif ?>                  

                    <?php if (get_field('global_fax','option')): ?>
                        <li class="sf-fax"><i class="fa fa-fax" aria-hidden="true"></i><span><a href="javascript:void(0)" class="nonlink fax" tabindex="-1" aria-label="Fax Number"><?php echo get_field('global_fax','option');?></a></span></li>
                    <?php endif;?>

                    <?php if(get_field('global_email','option')):?>
                        <li><i class=" fa fa-solid fa-envelope"></i> <span><a href="mailto:<?php echo get_field('global_email','option');?>" class="sf-mail" aria-label="Email Us"><?php echo get_field('global_email','option');?></a></span></li>
                    <?php endif;?>
                    
				



                </ul>
                
            </div>
        </div>
    </div>
    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a> , All Rights Reserved &nbsp;|&nbsp; Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a></p>
              </div>
        </div>

    
</footer>
<!--Site Footer End-->

