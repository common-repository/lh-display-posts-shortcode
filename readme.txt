=== LH Display Posts Shortcode ===
Contributors: shawfactor
Donate link: https://lhero.org/portfolio/lh-display-posts-shortcode/
Tags: shortcode, pages, posts, page, query, display, list
Requires at least: 4.0
Tested up to: 6.0
Stable tag: 1.01

Add a listing of content on your website using a simple shortcode. Filter the results by author, post type and more.

== Description ==

LH Display Posts allows you easily list content from all across your website. Whilst respecting the current users capability to view the posts displayed.

Just add the [lh_display_posts] shortcode to you content. The shortcode has 5 optional parameters

* post_parent: show only post/pages with the parent id specified
* post__in: a comma separated list of post ids to query
* post_type: the post type, this defaults to 'post'
* post_author: the id of the post author
* template: see details below on how to alter the template used to output the shortcode

**Like this plugin? Please consider [leaving a 5-star review](https://wordpress.org/support/view/plugin-reviews/lh-display-posts-shortcode/).**

**Love this plugin or want to help the LocalHero Project? Please consider [making a donation](https://lhero.org/portfolio/lh-display-posts-shortcode/).**

== Frequently Asked Questions ==

= How can I add my own template for outputting the rss feed? =

Copy folder lh_dps-templates from the plugin into your active child theme directory, then edit or add templates as required. The plugin will also look to see if the specified teamplate exists there first.

= Why did you write this plugin? =

Because I wanted a simple shortcode that respected the statuses viewable by the user.

= What is something does not work?  =

LH Display Posts Shortcode, and all [https://lhero.org](LocalHero) plugins are made to WordPress standards. Therefore they should work with all well coded plugins and themes. However not all plugins and themes are well coded (and this includes many popular ones). 

If something does not work properly, firstly deactivate ALL other plugins and switch to one of the themes that come with core, e.g. twentyfirteen, twentysixteen etc.

If the problem persists please leave a post in the support forum: [https://wordpress.org/support/plugin/lh-display-posts-shortcode/](https://wordpress.org/support/plugin/lh-display-posts-shortcode/). I look there regularly and resolve most queries.

= What if I need a feature that is not in the plugin?  =

Please contact me for custom work and enhancements here: [https://shawfactor.com/contact/](https://shawfactor.com/contact/)


== Installation ==

1. Upload the `lh-display-posts-shortcode` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Use the shortcode in your posts and pages.


== Changelog ==

**1.00 June 04, 2019** 
* Initial release