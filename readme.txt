=== Plugin Name ===
Contributors: XAce90
Tags: external links, pop up disclaimer, exit warning, site abandonment notice, leaving notification, exit popup
Requires at least: 4.0
Tested up to: 5.2.2
Donate link: https://www.paypal.me/xace90
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick, easy way to notify your users when they are leaving your site. You can edit the content and add domain exclusions.

== Description ==

Casper's Leave Notice warns your users when they are about to leave your website. All you have to do is install and activate, and the plugin does the rest! You can edit the content that shows up in the pop up window to fine tune the message your users see. You can also add domain names to exclude from the pop up.

For example, if a link sends your users to a third party tool - like a shopping cart - just add the domain to the exclusion list and your guests will be none the wiser. 

== Screenshots ==

1. You can find the plugin under Settings -> External Links
2. You can edit both the title of the pop up and the body. 
3. You can add domains to a comma-separated list to universally exclude domains from being considered external. Alternatively, you can give certain links a class to prevent the pop up.

== Installation ==

= Manual Installation =

1. Download the plugin here
1. Upload it to your WordPress Plugins folder
1. Activate it through the WordPress Dashboard Plugin page

= Automatic Installation =

1. Log in to your WordPress Dashboard
1. Go to Plugins -> Add New
1. Search for Casper's Leave Notice
1. Install and activate.

= How to Change the Content of the Pop Up =

1. Go to Settings -> External Links
1. Write the content you want. You can edit the Title and/or the Body. Save!

= How to Add Exceptions to the Pop Up =

1. Go to Settings -> External Links
1. Click on the Exceptions tag
1. Add any external domains you want to exclude from this warning. Separate them by commas. Save!

It's that simple.

== Frequently Asked Questions ==

= Is there any way to change the style of the pop up? =

We are looking into adding styling and/or themes. If you have any design ideas, please reach out at @SirCaseyJames on Twitter, or leave a message here on the WordPress Support forums. In the meantime, you can add your own custom styling through custom CSS.

= I added a domain to the exclusion list; why is the pop up still showing up? =

There could be several reasons. Be sure to first try clearing your browser and site cache. If it still does not take affect, please check what you entered into the text area. Domains *must* be separated by commas (i.e. 'domain.com, test.com'). You must also use the most minimal amount of the domain to have the widest effect. For example, if you type in **www.domain.com**, any where that links to **domain.com** will *not* be excluded. Conversely, however, if you just type in **domain.com**, **www.domain.com** *will* be excluded. As such, it's best to use as little as possible in the exclusion list.

If the problem persists, please contact me either through the WordPress Support forms or on Twitter at @SirCaseyJames. 

== Changelog ==

= 1.2 =
* Added a feature that allows you to automatically redirect users to the URL after a certain time passes

= 1.1 =
* Now fully responsive
* UX improvements: pop up notice now closes when you go to the link in question; also closes on Esc
* Performance improvements: reducing the amount of memory usage by using more specific event handlers

= 1.0.1 =
* Fixed some debug errors when no Exclusions were set

= 1.0 =
* Plugin is live!