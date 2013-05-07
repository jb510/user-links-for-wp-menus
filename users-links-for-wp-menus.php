<?php
/*
Plugin Name: User Links for WP Menus
Plugin URI: http://wordpress.org/plugins/userlinks-for-wp-menus
Description: Adds a metabox to the menu admin page listing users so they can be more easily added as custom links to the WordPress Custom Menus
Version: 0.1
Author: Jon Brown
Author URI: http://jbrownstudios.com
License: GPLv2 only
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Custom Users Metabox on Menus 
 */
if ( !class_exists('u4wpm_user_metabox')) {
	class u4wpm_user_metabox {
		public function u4wpm_add_user_metabox() {
			add_meta_box(
				'u4wpm_user_custom_links',
				__('Users'),
				array( $this, 'u4wpm_user_custom_links'), 'nav-menus', 'side', 'low' );
		}

		public function u4wpm_user_custom_links() { ?>
        	<div id="userlinks-menu-metabox" class="posttypediv">
        		<div id="tabs-panel-users" class="tabs-panel tabs-panel-active">
        			<ul id ="userlinks-checklist" class="categorychecklist form-no-clear">
					<?php
			$u4wpm_users = get_users('orderby=nicename');
			foreach ( $u4wpm_users as $u4wpm_user ) { ?>
						<li>
        					<label class="menu-item-title">
        						<input type="checkbox" class="menu-item-checkbox" name="menu-item[-1][menu-item-object-id]" value="-1"> <?php echo $u4wpm_user->display_name ?>
        					</label>
        					<input type="hidden" class="menu-item-type" name="menu-item[-1][menu-item-type]" value="custom">
        					<input type="hidden" class="menu-item-title" name="menu-item[-1][menu-item-title]" value="<?php echo $u4wpm_user->display_name ?>">
        					<input type="hidden" class="menu-item-url" name="menu-item[-1][menu-item-url]" value="<?php bloginfo('wpurl'); ?>/author/<?php echo $u4wpm_user->user_nicename ?>">
        				</li>
        			<?php } ?>
        			</ul>
        		</div>
        		<p class="button-controls">
        			<span class="list-controls">
        				<a href="/wordpress/wp-admin/nav-menus.php?page-tab=all&amp;selectall=1#userlinks-menu-metabox" class="select-all">Select All</a>
        			</span>
        			<span class="add-to-menu">
        				<input type="submit" class="button-secondary submit-add-to-menu right" value="Add to Menu" name="add-user-menu-item" id="submit-userlinks-menu-metabox">
        				<span class="spinner"></span>
        			</span>
        		</p>
        	</div>
        <?php }
	}
	$u4wpm_user_metabox = new u4wpm_user_metabox;
}
add_action('admin_init', array($u4wpm_user_metabox, 'u4wpm_add_user_metabox'));
