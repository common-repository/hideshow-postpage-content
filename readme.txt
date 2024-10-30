=== Hide/Show Post/Page Content ===
Plugin Name: Hide/Show Post/Page Content
Contributors: sosidee
Tags: hide text, show text, hide content, show content, hide image, show image, hide post content, show post content
Requires at least: 5.3.0
Tested up to: 6.1
Stable tag: 1.5.3
Requires PHP: 7.4
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Hides or shows a selected part of public posts/pages content (text, images, etc.) depending on whether the user is logged or not. Compatible with Elementor.

== Description ==

It permits to **hide** or **show** part of the content of posts or pages to users that are *logged* or *not*.
It's also possibile to select the role(s) or the username(s) of logged users.

The content to be hidden or displayed must be included in a *shortcode* tagged as '**soshsc**'.

The info page is available under the **Tools** menu.

It's compatible with **Elementor** from the version 2.0.
The widget is in the *general* category.

**Shortcode parameters**

hide="guest"
*hides content to guests*

hide="logged"
*hides content to legged users*

show="guest"
*displays content to guests*

show="logged"
*displays content to legged users*

role="subscriber"
*enables the action (show/hide) only to users with the 'Subscriber' role*

role="subscriber,editor"
*enables the action (show/hide) only to users with the 'Subscriber' or 'Editor' role*

user="foo"
*enables the action (show/hide) only to the user with username 'foo'*

user="foo,bar"
*enables the action (show/hide) only to the users with username 'foo' or 'bar'*


Examples:

1. Hide content to unlogged users:
[soshsc hide="guest"]*This content is hidden only to users not logged.*[/soshsc]

2. Hide content to logged users:
[soshsc hide="logged"]*This content is hidden only to logged users.*[/soshsc]

3. Show content only to unlogged users:
[soshsc show="guest"]*This content is displayed only to users not logged.*[/soshsc]

4. Show content only to logged users:
[soshsc show="logged" role="administrator"]*This content is displayed only to administrators.*[/soshsc]


== Screenshots ==

1. The info page (Tools Menu)
2. The Elementor widget (General Category)


== Upgrade Notice ==
It seems this section is not used anymore.


== Changelog ==

= 1.5.3 =
* Added a workaround to load the core file 'pluggable.php' before using the cache_users() function [WordPress 6.1 bug]

= 1.5.2 =
* Updated the internal php library

= 1.5.1 =
* Fixed a PHP notice in the info page
* Updated the internal php library

= 1.5 =
* Added the do_shortcode() function to allow nested shortcodes
* Minor fixes and changes

= 1.4 =
* Added shortcode parameters to select logged users by role or username
* Minor changes

= 1.2 =
* Configured the localization settings
* Added the italian translation

= 1.1 =
Implemented the compatibility with Elementor 2.x

= 1.0 =
First release
