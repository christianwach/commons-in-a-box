
		<div class="wrap about-wrap">
			<h1><?php printf( __( 'Welcome to Commons In A Box %s', 'cbox' ), cbox_get_version() ); ?></h1>

			<div class="about-text" style="min-height:90px;"><?php printf( __( 'Thank you for updating to the latest version!', 'cbox' ), cbox_get_version() ); ?></div>

			<div class="wp-badge"><?php printf( __( 'Version %s' ), cbox_get_version() ); ?></div>

			<h2 class="nav-tab-wrapper">
				<a href="<?php echo self_admin_url( 'admin.php?page=cbox&whatsnew=1' ); ?>" class="nav-tab nav-tab-active">
					<?php _e( 'What&#8217;s New', 'cbox' ); ?>
				</a>
				<a href="<?php echo self_admin_url( 'admin.php?page=cbox&credits=1' ); ?>" class="nav-tab">
					<?php _e( 'Credits', 'cbox' ); ?>
				</a>
			</h2>

			<div class="changelog">
				<h3><?php _e( '1.0.9 Maintenance Release', 'cbox' ); ?></h3>
				<p><?php _e( 'The 1.0.9 release brings a number of plugins up to date, and improves compatibility with WordPress 4.0 and BuddyPress 2.1.', 'cbox' ) ?></p>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Plugin Updates', 'cbox' ); ?></h3>

				<div class="feature-section">
					<h4><?php _e( 'Since the last version release, the following plugins were updated in CBOX:', 'cbox' ); ?></h4>
					<ul>
						<li>BuddyPress 2.1.1</li>
						<li>BuddyPress Docs 1.8.5</li>
						<li>BuddyPress Docs Wiki add-on 1.0.8</li>
					</ul>

				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Theme Improvements', 'cbox' ); ?></h3>

				<div class="feature-section">
					<h4><?php _e( 'Since the last version release, the following bugfixes and enhancements were added to the Commons In A Box theme:', 'cbox' ); ?></h4>
					<ul>
						<li><?php _e( 'Improved menu rendering', 'cbox' ) ?></li>
						<li><?php _e( 'Fixed the "Background Color" theme option in some instances', 'cbox' ) ?></li>
						<li><?php _e( 'Fixed the footer "Background Overlay" theme option', 'cbox' ) ?></li>
						<li><?php _e( 'Minor styling enhancements to bbPress', 'cbox' ) ?></li>
					</ul>

				</div>
			</div>

			<?php /*
			<div class="changelog">
				<h3><?php _e( 'Under the Hood', 'cbox' ); ?></h3>

				<div class="feature-section col two-col">

					<div class="last-feature">

						<p><strong>Paste from Microsoft Word in forums</strong> We've added a button to the visual editor to make it easier to paste content that you've formatted in Microsoft Word.</p>

					</div>
				</div>
			</div>
			*/ ?>

			<div class="return-to-dashboard">
				<?php printf( __( '<a href="%s">Return to the CBOX dashboard &rarr;</a>', 'cbox' ), self_admin_url( 'admin.php?page=cbox' ) ); ?>
			</div>

		</div>
