<?php

/**
 * Plugin Name:  Plugin Tutorial
 * Plugin URI:   https://github.com/MAALsLAB
 * Description:  Learning how to create WordPress Plugin.
 *               The pluin adds a message at the end of each article asking
 *               users to fllow us in Twitter. 
 * Version:      1.0
 * Author:       MAAL
 * Author URI:   https://github.com/MAALsLAB
 * License:      CoffeeRight
 * License URI:  https://github.com/MAALsLAB/wp-plugins/blob/main/CoffeeRight-License.txt
 */

function wp_follow_us($content)
{
    // Only do this when a single post is displayed
    if (is_single()) {
        // Message to display after the post
        // Add URL to your Twitter

        $content .= '<p class="follow-us">
                        If you liked this article, then please follow us on 
                        <a href="https://twitter.com/maalslab" 
                           title="MAAL\'s LAB on Twitter" 
                           target="_blank" 
                           rel="nofollow">
                            Twitter
                        </a>.
                    </p>';
    }
    // Return the content
    return $content;
}

// Hook our function to WordPress the_content filter
add_filter('the_content', 'wp_follow_us');
