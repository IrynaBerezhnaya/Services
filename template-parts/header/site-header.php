<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
$header_link 	  = get_field( 'header_link', 'option' );
$logo             = get_field('logo', 'option');
$subscribe_link   = get_field('subscribe_link', 'option');
?>

<header id="masthead" class="header header-sticky">

    <div class="header-top">
        <div class="header-top__section">
            <div class="cn-container header-top__wrap">
				<?php if ( ! empty( $header_link ) ) : ?>
                    <a class="header-top__link" href="<?php echo $header_link['url']; ?>" target="<?php echo $header_link['target']; ?>">
						<?php echo $header_link['title']; ?>
                    </a><!-- /.brand -->
				<?php endif; ?>
            </div>
			<?php if ( has_nav_menu( 'secondary' ) ) : ?>
                <nav class="nav-secondary header__nav navbar navbar-expand-lg">
						<?php
						wp_nav_menu(
							[
								'theme_location'  => 'secondary',
								'menu_id'         => 'secondary-menu',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'secondaryNavBar',
								'menu_class'      => 'navbar-nav',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]
						); ?>
                </nav>
			<?php endif; ?>
        </div>
    </div>

    <div class="header-inner">
        <div class="header-inner__bg"></div>
        <div class="header-inner__overlay"></div>
        <div class="header-inner__mobile">
            <div class="header-inner__mobile_left">
                <button class="navbar-toggler" type="button" data-name="menu" data-toggle="collapse"
                        data-target="#primaryNavBar"
                        aria-controls="primaryNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 14">
                            <path d="M0 0h24v2H0zm0 6h24v2H0zm0 6h24v2H0z"/>
                        </svg>
                    </div>
                    <span class="navbar-toggler-text"></span>
                </button>
            </div>

            <div class="header-inner__mobile_logo">
            </div>

            <div class="header-inner__mobile_navbar">
                <nav class="nav-primary nav-primary__mobile navbar">
                    <div id="primaryNavBar">
                        <div class="nav-primary__mobile_close">
                        </div>

						<?php
						if ( has_nav_menu( 'primary' ) ) :
							wp_nav_menu(
								[
									'theme_location'  => 'primary',
									'menu_id'         => 'primary-menu',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'primaryNavBar',
									'menu_class'      => 'navbar-nav',
									'items_wrap'      => '%3$s',
								]
							);
						endif; ?>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header-inner__desktop">
            <div class="header-inner__section">
                <div class="header-inner__desktop_logo">
                    <a tabindex="-1" href="#">
						<?php if ( ! empty( $logo ) ) : ?>
                            <img src="<?php echo $logo['url']; ?>" height="80" width="280" alt="<?php bloginfo( 'name' ); ?>"/>
						<?php endif; ?>
                    </a>
                </div>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <nav class="nav-primary header__nav navbar navbar-expand-lg">
							<?php
							wp_nav_menu(
								[
									'theme_location'  => 'primary',
									'menu_id'         => 'primary-menu',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'primaryNavBar',
									'menu_class'      => 'navbar-nav',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								]
							); ?>
                    </nav>
				<?php endif; ?>
				<?php if ( ! empty( $subscribe_link ) ) : ?>
                    <a class="subscribe-link subscribe_js" href="<?php echo $subscribe_link['url']; ?>" target="<?php echo $subscribe_link['target']; ?>">
						<?php echo $subscribe_link['title']; ?>
                        <span class="arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                        </span>
                    </a>
				<?php endif; ?>
            </div>
        </div>
    </div>

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
