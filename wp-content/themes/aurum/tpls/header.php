<?php

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 *
 * 
 * @author valeriocorda <v.corda@accentra.it>
 * 
 * 
 */
$header_sticky_menu = get_data('header_sticky_menu');
$header_type        = get_data('header_type');
$header_type        = $header_type ? $header_type : 1;

$has_secondary_menu = $header_type && has_nav_menu('secondary-menu');

?>

<header class="site-header site-header_custom">
	<div class="site-header-banner">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="mailto:info@waitaly.net">info@waitaly.net</a>
				</div>
				<div class="col switcher-languages">
					IT | EN
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="first-row row">
			<div class="btn-green-wai">
				Associati
			</div>
			<div class="activator-area-riservata">
				<svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.6667 6.76471C14.6667 4.89629 13.92 3.20512 12.7147 1.98206C11.508 0.757647 9.84133 0 8 0C6.15867 0 4.492 0.757647 3.28533 1.98206C2.08 3.20512 1.33333 4.89629 1.33333 6.76471C1.33333 8.63312 2.08 10.3243 3.28533 11.5474C4.492 12.7718 6.15867 13.5294 8 13.5294C9.84133 13.5294 11.508 12.7718 12.7147 11.5474C13.3345 10.9199 13.826 10.1744 14.161 9.35367C14.496 8.53291 14.6678 7.65307 14.6667 6.76471ZM0 20.2941C0 21.6471 3 23 8 23C12.6907 23 16 21.6471 16 20.2941C16 17.5882 12.8613 14.8824 8 14.8824C3 14.8824 0 17.5882 0 20.2941Z" fill="#008D86" />
				</svg>

			</div>
		</div>
		<div class="row site-header-row">
			<div class="container-logo">
				<?php get_template_part('tpls/header-logo'); ?>
			</div>
			<div class="container-menu">
				<?php get_template_part('tpls/header-menu'); ?>
			</div>
		</div>
	</div>
</header>



<!-- <header class="site-header<?php echo " header-type-{$header_type}";
								echo $header_sticky_menu ? " sticky" : ''; ?>">

	<?php get_template_part('tpls/header-top-bar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12<?php #echo $header_type == 3 ? ' no-horizontal-padding' : ''; 
									?>">

				<div class="header-menu<?php echo in_array($header_type, array(3, 4)) ? ' logo-is-centered' : '';
										echo $header_type == 4 ? ' menu-is-centered-also' : ''; ?>">

					<?php
					if ($header_type == 3) {
						get_template_part('tpls/header-menu');
					}

					get_template_part('tpls/header-logo');

					if ($header_type == 1) {
						get_template_part('tpls/header-menu');
					}
					?>

					<?php
					if (in_array($header_type, array(1, 2, 3))) :

						if ($header_type == 3 && $has_secondary_menu) :
							get_template_part('tpls/header-menu-secondary');
						else :
							get_template_part('tpls/header-links');
						endif;

					endif;
					?>

				</div>

			</div>
		</div>
	</div>

	<?php if (in_array($header_type, array(2, 4))) : ?>
	<div class="full-menu<?php echo $header_type == 4 ? ' menu-centered' : ''; ?>">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="menu-container">
					<?php if ($header_sticky_menu) : ?>
						<?php get_template_part('tpls/header-logo'); ?>
					<?php endif; ?>

					<?php get_template_part('tpls/header-menu'); ?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

</header>
 -->
<?php
// Header Mobile
get_template_part('tpls/header-mobile');

// Header title
get_template_part('tpls/header-title');
