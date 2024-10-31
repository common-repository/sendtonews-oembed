=== STN Video oEmbed ===
Contributors: STN Video
Tags: links, oembed, video, embed, player, sendtonews, stnvideo
Requires at least: 3.0
Tested up to: 6.6.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds oEmbed support for STN Video videos by registering STN Video as a provider.

== Description ==

The STN Video oEmbed plugin adds STN Video (formerly SendtoNews) as an oEmbed provider and adds it to the whitelist.  This allows users to drop oEmbed links from STN Video into their WordPress posts to add video to their posts.

== Installation ==

1. Install the plugin either by uploading the unpacked folder to the "wp-content/plugins" directory of your WordPress install via FTP or by using the "Add Plugin" function of WordPress.
2. Activate the STN Video oEmbed plugin through the "Plugins" menu in WordPress.

== Changelog ==

= 1.0.2 =
* Rebrand readme & plugin page. No technical changes.

= 1.0.1 =
* Add case insensitivity support to resource values.
* Enforce https access to services endpoint.
* Modify whitespace to conform to WordPress VIP coding standards.

= 1.0 =
* Initial release.

== Frequently Asked Questions ==

= How do I add an embed to my post/page template? =

This STN Video oEmbed plugin is meant for the content editors (Classic Editor & Block Editor). To embed in your templates just use the standard STN Video HTML embed code directly in your WordPress PHP template file. No plugin required.

= How do I avoid conflicts with cache/minify plugins? =

Using optimization plugins to minify your JavaScript files can cause some conflicts with the STN Video Embeds. To avoid these conflicts please exclude the following player scripts from your minify setup;
embed.sendtonews.com/player1/responsive.js
embed.sendtonews.com/player2/embedcode.php
embed.sendtonews.com/player3/embedcode.js
embed.sendtonews.com/player4/embedcode.js
