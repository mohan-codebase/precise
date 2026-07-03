<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.6.4' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.5.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// Add custom meta tags and schema for post ID 1512
function add_custom_meta_and_schema_for_post_1512() {
    if (is_single(1512)) {
        ?>
        <!-- Custom og:url -->
        <meta property="og:url" content="https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/" />

        <!-- Twitter Meta Tags -->
        <meta property="twitter:url" content="https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/" />
        <meta property="twitter:image" content="https://precise3dm.com/blogs/wp-content/uploads/2023/02/image31.png" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/" />

        <!-- Article Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/"
          },
          "headline": "Difference between Nurbs surface and Parametric surface in 3D Reverse Engineering",
          "description": "Difference between Nurbs surface and Parametric surface in 3D Reverse Engineering",
          "image": "https://precise3dm.com/blogs/wp-content/uploads/2023/02/image31-1024x592.png",  
          "author": {
            "@type": "Organization",
            "name": "Precise3DM",
            "url": "https://www.precise3dm.com/"
          },  
          "publisher": {
            "@type": "Organization",
            "name": "Precise3DM",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.precise3dm.com/assets/images/Precise%20Logos-08.png"
            }
          },
          "datePublished": "2025-04-20",
          "dateModified": "2025-05-01"
        }
        </script>

        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Precise3DM",
            "item": "https://www.precise3dm.com/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Blogs",
            "item": "https://precise3dm.com/blogs/"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Difference between Nurbs surface and Parametric surface in 3D Reverse Engineering",
            "item": "https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/"  
          }]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'add_custom_meta_and_schema_for_post_1512', 1);

// Override Yoast SEO og:url if active
add_filter('wpseo_opengraph_url', function($url) {
    if (is_single(1512)) {
        return 'https://precise3dm.com/blogs/difference-between-nurbs-surface-and-parametric-surface-in-3d-reverse-engineering/';
    }
    return $url;
});

// Add/replace meta tags and schema for post ID 1650
function custom_meta_and_schema_for_post_1650() {
    if (is_single(1650)) {
        ?>
        <!-- Replace og:url -->
        <meta property="og:url" content="https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/" />

        <!-- Twitter Meta Tags -->
        <meta property="twitter:url" content="https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/" />
        <meta property="twitter:image" content="https://precise3dm.com/blogs/wp-content/uploads/2023/07/Picture10.png" />

        <!-- Canonical Link -->
        <link rel="canonical" href="https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/" />

        <!-- Article Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/"
          },
          "headline": "Exploring Four Different 3D Scanning Modes in Freescan Combo",
          "description": "Freescan Combo is an advanced 3D scanner that offers a range of scanning modes, each designed to cater to specific scanning requirements",
          "image": "https://precise3dm.com/blogs/wp-content/uploads/2023/07/Picture10.png",  
          "author": {
            "@type": "Organization",
            "name": "Precise3DM",
            "url": "https://www.precise3dm.com/"
          },  
          "publisher": {
            "@type": "Organization",
            "name": "Precise3DM",
            "logo": {
              "@type": "ImageObject",
              "url": "https://precise3dm.com/blogs/wp-content/uploads/2021/07/Precise-Logos-08.png"
            }
          },
          "datePublished": "2025-04-20",
          "dateModified": "2025-05-01"
        }
        </script>

        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Precise3DM",
            "item": "https://www.precise3dm.com/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Blogs",
            "item": "https://precise3dm.com/blogs/"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Exploring Four Different 3D Scanning Modes in Freescan Combo",
            "item": "https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/"  
          }]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'custom_meta_and_schema_for_post_1650', 1);

// Override Yoast SEO og:url if Yoast SEO plugin is active
add_filter('wpseo_opengraph_url', function($url) {
    if (is_single(1650)) {
        return 'https://precise3dm.com/blogs/exploring-four-different-3d-scanning-modes-in-freescan-combo/';
    }
    return $url;
});

// Add custom meta tags and schema for post ID 1330 without replacing anything
function add_meta_and_schema_for_post_1330() {
    if (is_single(1330)) {
        ?>
        <!-- Twitter Meta Tags -->
        <meta property="twitter:url" content="https://precise3dm.com/blogs/full-vehicle-automotive-benchmarking-and-teardown-case-study/" />
        <meta property="twitter:image" content="https://precise3dm.com/blogs/wp-content/uploads/2022/08/fvbm-2-300x153-1-1.jpg" />

        <!-- Canonical Link -->
        <link rel="canonical" href="https://precise3dm.com/blogs/full-vehicle-automotive-benchmarking-and-teardown-case-study/" />

        <!-- Article Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://precise3dm.com/blogs/full-vehicle-automotive-benchmarking-and-teardown-case-study/"
          },
          "headline": "Full Vehicle Automotive Benchmarking and Teardown Case study",
          "description": "This Blog is about complete Automotive Benchmarking and NVH testing of a vehicle. It is a detailed case study.",
          "image": "https://precise3dm.com/blogs/wp-content/uploads/2022/08/fvbm-2-300x153-1-1.jpg",  
          "author": {
            "@type": "Organization",
            "name": "Precise3DM",
            "url": "https://www.precise3dm.com/"
          },  
          "publisher": {
            "@type": "Organization",
            "name": "Precise3DM",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.precise3dm.com/assets/images/Precise%20Logos-08.png"
            }
          },
          "datePublished": "2025-04-20",
          "dateModified": "2025-05-01"
        }
        </script>

        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Precise3DM",
            "item": "https://www.precise3dm.com/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Blogs",
            "item": "https://precise3dm.com/blogs/"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Full Vehicle Automotive Benchmarking and Teardown Case study",
            "item": "https://precise3dm.com/blogs/full-vehicle-automotive-benchmarking-and-teardown-case-study/"  
          }]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'add_meta_and_schema_for_post_1330', 1);

function add_custom_meta_and_schema_for_post_1118() {
    if (is_single(1118)) {
        ?>
        <!-- Twitter Meta Tag -->
        <meta property="twitter:url" content="https://precise3dm.com/blogs/vikram-movie-uses-3d-printing-and-3d-scanning-technology-for-making-prop-guns-for-movie-scenes/" />

        <!-- Article Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://precise3dm.com/blogs/vikram-movie-uses-3d-printing-and-3d-scanning-technology-for-making-prop-guns-for-movie-scenes/"
          },
          "headline": "Vikram Movie uses 3D printing and 3D scanning technology to make Prop guns",
          "description": "This blog shares how the movie Vikram used 3D printing and 3D scanning technology for making Prop guns for movie scenes",
          "image": "https://precise3dm.com/blogs/wp-content/uploads/2022/06/vikram-movie-review-1654215964.jpg",  
          "author": {
            "@type": "Organization",
            "name": "Precise3DM",
            "url": "https://www.precise3dm.com/"
          },  
          "publisher": {
            "@type": "Organization",
            "name": "Precise3DM",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.precise3dm.com/assets/images/Precise%20Logos-08.png"
            }
          },
          "datePublished": "2025-04-20",
          "dateModified": "2025-05-01"
        }
        </script>

        <!-- Breadcrumb Schema -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Precise3DM",
            "item": "https://www.precise3dm.com/"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Blogs",
            "item": "https://precise3dm.com/blogs/"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Vikram Movie uses 3D printing and 3D scanning technology to make Prop guns",
            "item": "https://precise3dm.com/blogs/vikram-movie-uses-3d-printing-and-3d-scanning-technology-for-making-prop-guns-for-movie-scenes/"  
          }]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'add_custom_meta_and_schema_for_post_1118', 1);

