=== Plugin Name ===
Contributors: jb510
Tags: users, authors, menus
Requires at least: 3.5
Tested up to: 3.5.1
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a metabox to the menu admin page listing users so they can be more easily added as custom links to the WordPress Custom Menus

== Description ==

Adds a metabox to the menu admin page listing users so they can be more easily added as custom links to the WordPress Custom Menus.

== Installation ==

Install like all other plugins.  This plugin has no options or settings.  Once activated a new metabox will show on custom menus screen.

== Frequently Asked Questions ==

= I don't see a new metabox on the menus page? =

Check that the metabox is turned on under Screen Options.  http://codex.wordpress.org/Administration_Screens#Screen_Options

= The link gets added but when I click it I get a 404? =

Does the user you added actually have posts assigned to them?  If they don't yet they don't have an author archive page in WordPress.  I'm currently thinking about what to do for these scenarios, let me know what you think? 

= Can I restrict the users listed to a particular user role? =

No, currently this plugin has no options and it shows user of the roles: super admin, administrator, editor, author & contributor.  It does not list subscribers.

= Will options be added? =

Maybe. Let me know what you want.

== Screenshots ==

1. This is what it looks like

== Changelog ==

= 0.2 =
Restricted user query to 'super admin','administrator','editor','author' & 'contributor'.  No longer includes subscribers.
Fixed adding multiple users to the menu at once.

= 0.1 =
* Initial release.  Rough but functional.  Known issues: Only one user link at a time gets added to the menus even if multiple are selected.