<?php
/**
 * Frootz Royale White — theme functions
 */

if (!defined('ABSPATH')) { exit; }

/* ========== Theme setup ========== */
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
});

add_action('wp_enqueue_scripts', function() {
    $ver = wp_get_theme()->get('Version');
    wp_enqueue_style('frootz-royale-fonts',
        'https://fonts.googleapis.com/css2?family=Glass+Antiqua&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Inter:wght@300;400;500;600;700&display=swap',
        [], null);
    wp_enqueue_style('frootz-royale-style', get_stylesheet_uri(), [], $ver);
    wp_enqueue_script('frootz-royale-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [], $ver, true);
});

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* ========== Frootz Settings (editable content) ========== */

/**
 * Default values for each setting — used as fallback and stored on first save.
 */
function frootz_default_settings() {
    return [
        'hero_title'       => 'Frootz Royale',
        'hero_subtitle'    => 'Premium gedroogd fruit gedoopt in chocolade',
        'hero_intro'       => 'Ambachtelijk bereid in Den Haag met Callebaut Belgische chocolade en de finest gedroogde vruchten. Een koninklijke traktatie voor elke gelegenheid.',
        'about_title'      => 'Gemaakt met Passie',
        'about_body'       => "Frootz Royale is ontstaan vanuit een simpele overtuiging: fruit en chocolade verdienen beter. Wij gebruiken uitsluitend Callebaut Belgische chocolade — de gouden standaard — en combineren dit met zorgvuldig geselecteerd gedroogd fruit.\n\nWij drogen ons fruit om de natuurlijke smaak te behouden en die heerlijke crunch te creëren die je nergens anders vindt.\n\nVan onze keuken tot uw tafel, elk Frootz Royale product draagt ons commitment aan kwaliteit, vakmanschap en een vleugje koninklijke verwennerij.",
        'contact_intro'    => 'Interesse in Frootz Royale voor uw bedrijf? Neem direct contact op via WhatsApp of stuur ons een bericht.',
        'whatsapp_number'  => '31638254957',
        'instagram_url'    => 'https://instagram.com/frootzroyale',
        'business_city'    => 'Den Haag',
        'copyright_line'   => '© 2026 Frootz Royale. Alle rechten voorbehouden.',
    ];
}

/**
 * Helper: get a Frootz setting with fallback to default.
 */
function frootz_get($key) {
    $defaults = frootz_default_settings();
    $val = get_option('frootz_' . $key, null);
    if ($val === null || $val === '') {
        return isset($defaults[$key]) ? $defaults[$key] : '';
    }
    return $val;
}

/**
 * Register settings via WP Settings API.
 */
add_action('admin_init', function() {
    foreach (array_keys(frootz_default_settings()) as $key) {
        register_setting('frootz_settings_group', 'frootz_' . $key, [
            'type' => 'string',
            'sanitize_callback' => 'wp_kses_post',
        ]);
    }
});

/**
 * Add admin menu page under Settings.
 */
add_action('admin_menu', function() {
    add_menu_page(
        'Frootz Royale',
        'Frootz Royale',
        'manage_options',
        'frootz-settings',
        'frootz_render_settings_page',
        'dashicons-awards',
        25
    );
});

function frootz_render_settings_page() {
    if (!current_user_can('manage_options')) return;
    $defaults = frootz_default_settings();
    $labels = [
        'hero_title'       => 'Hero — titel',
        'hero_subtitle'    => 'Hero — subtitel',
        'hero_intro'       => 'Hero — intro-paragraaf',
        'about_title'      => 'Over ons — titel',
        'about_body'       => 'Over ons — tekst',
        'contact_intro'    => 'Contact — intro',
        'whatsapp_number'  => 'WhatsApp nummer (zonder + of spaties, bv 31638254957)',
        'instagram_url'    => 'Instagram URL',
        'business_city'    => 'Stad (voor schema.org)',
        'copyright_line'   => 'Copyright regel',
    ];
    $multiline = ['hero_intro', 'about_body', 'contact_intro'];
    ?>
    <div class="wrap">
        <h1>Frootz Royale — Content</h1>
        <p>Hier pas je alle tekst van de homepage aan. Leeg laten = standaardwaarde wordt gebruikt.</p>
        <form method="post" action="options.php">
            <?php settings_fields('frootz_settings_group'); ?>
            <table class="form-table">
                <?php foreach ($labels as $key => $label):
                    $opt_name = 'frootz_' . $key;
                    $val = get_option($opt_name, '');
                    $placeholder = isset($defaults[$key]) ? $defaults[$key] : '';
                ?>
                <tr>
                    <th scope="row"><label for="<?php echo esc_attr($opt_name); ?>"><?php echo esc_html($label); ?></label></th>
                    <td>
                        <?php if (in_array($key, $multiline, true)): ?>
                            <textarea id="<?php echo esc_attr($opt_name); ?>"
                                name="<?php echo esc_attr($opt_name); ?>"
                                rows="4" cols="80"
                                placeholder="<?php echo esc_attr($placeholder); ?>"><?php echo esc_textarea($val); ?></textarea>
                        <?php else: ?>
                            <input type="text"
                                id="<?php echo esc_attr($opt_name); ?>"
                                name="<?php echo esc_attr($opt_name); ?>"
                                value="<?php echo esc_attr($val); ?>"
                                placeholder="<?php echo esc_attr($placeholder); ?>"
                                class="regular-text" style="width: 600px;" />
                        <?php endif; ?>
                        <p class="description"><em>Default: <?php echo esc_html($placeholder); ?></em></p>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php submit_button('Opslaan'); ?>
        </form>
    </div>
    <?php
}
