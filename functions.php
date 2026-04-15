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

/* ========== i18n — simple server-side ========== */

function frootz_available_languages() {
    return [
        'nl' => 'Nederlands',
        'en' => 'English',
        'es' => 'Español',
    ];
}

function frootz_current_lang() {
    static $lang = null;
    if ($lang !== null) return $lang;
    $candidate = isset($_GET['lang']) ? strtolower(sanitize_key($_GET['lang'])) : '';
    $lang = array_key_exists($candidate, frootz_available_languages()) ? $candidate : 'nl';
    return $lang;
}

add_filter('language_attributes', function($output) {
    $lang = frootz_current_lang();
    return preg_replace('/lang="[^"]*"/', 'lang="' . esc_attr($lang) . '"', $output);
});

/* ========== Frootz Settings (editable, per language) ========== */

function frootz_default_settings() {
    return [
        'hero_title' => [
            'nl' => 'Frootz Royale',
            'en' => 'Frootz Royale',
            'es' => 'Frootz Royale',
        ],
        'hero_subtitle' => [
            'nl' => 'Premium gedroogd fruit gedoopt in chocolade',
            'en' => 'Premium dehydrated fruit dipped in chocolate',
            'es' => 'Fruta deshidratada premium bañada en chocolate',
        ],
        'hero_intro' => [
            'nl' => 'Ambachtelijk bereid in Den Haag met Callebaut Belgische chocolade en de finest gedroogde vruchten. Een koninklijke traktatie voor elke gelegenheid.',
            'en' => 'Handcrafted in The Hague with Callebaut Belgian chocolate and the finest dehydrated fruits. A royal treat for every occasion.',
            'es' => 'Elaborado artesanalmente en La Haya con chocolate belga Callebaut y las mejores frutas deshidratadas. Un placer real para cada ocasión.',
        ],
        'about_title' => [
            'nl' => 'Gemaakt met Passie',
            'en' => 'Made with Passion',
            'es' => 'Hecho con Pasión',
        ],
        'about_body' => [
            'nl' => "Frootz Royale is ontstaan vanuit een simpele overtuiging: fruit en chocolade verdienen beter. Wij gebruiken uitsluitend Callebaut Belgische chocolade — de gouden standaard — en combineren dit met zorgvuldig geselecteerd gedroogd fruit.\n\nWij drogen ons fruit om de natuurlijke smaak te behouden en die heerlijke crunch te creëren die je nergens anders vindt.\n\nVan onze keuken tot uw tafel, elk Frootz Royale product draagt ons commitment aan kwaliteit, vakmanschap en een vleugje koninklijke verwennerij.",
            'en' => "Frootz Royale was born from a simple belief: fruit and chocolate deserve better. We use only Callebaut Belgian chocolate — the gold standard — paired with carefully selected dehydrated fruit.\n\nWe dehydrate our fruit to preserve its natural flavour and create that irresistible crunch you won't find anywhere else.\n\nFrom our kitchen to your table, every Frootz Royale product carries our commitment to quality, craft and a touch of royal indulgence.",
            'es' => "Frootz Royale nació de una convicción sencilla: la fruta y el chocolate merecen algo mejor. Utilizamos exclusivamente chocolate belga Callebaut — el estándar de oro — combinado con fruta deshidratada seleccionada con cuidado.\n\nDeshidratamos nuestra fruta para conservar su sabor natural y crear ese crujido irresistible que no encontrarás en ningún otro sitio.\n\nDesde nuestra cocina hasta tu mesa, cada producto Frootz Royale lleva nuestro compromiso con la calidad, el oficio y un toque de indulgencia real.",
        ],
        'contact_intro' => [
            'nl' => 'Interesse in Frootz Royale voor uw bedrijf? Neem direct contact op via WhatsApp of stuur ons een bericht.',
            'en' => 'Interested in Frootz Royale for your business? Reach out directly via WhatsApp or send us a message.',
            'es' => '¿Interesado en Frootz Royale para su empresa? Contáctenos directamente por WhatsApp o envíenos un mensaje.',
        ],
        'whatsapp_number' => [
            'nl' => '31638254957',
            'en' => '31638254957',
            'es' => '31638254957',
        ],
        'instagram_url' => [
            'nl' => 'https://instagram.com/frootzroyale',
            'en' => 'https://instagram.com/frootzroyale',
            'es' => 'https://instagram.com/frootzroyale',
        ],
        'business_city' => [
            'nl' => 'Den Haag',
            'en' => 'The Hague',
            'es' => 'La Haya',
        ],
        'copyright_line' => [
            'nl' => '© 2026 Frootz Royale. Alle rechten voorbehouden.',
            'en' => '© 2026 Frootz Royale. All rights reserved.',
            'es' => '© 2026 Frootz Royale. Todos los derechos reservados.',
        ],
    ];
}

/**
 * Get a setting, trying the current language first, then NL fallback, then default.
 */
function frootz_get($key, $lang = null) {
    if ($lang === null) $lang = frootz_current_lang();
    $defaults = frootz_default_settings();
    // Try saved option for requested lang
    $val = get_option('frootz_' . $key . '_' . $lang, null);
    if ($val !== null && $val !== '') return $val;
    // Fallback to saved NL
    if ($lang !== 'nl') {
        $val = get_option('frootz_' . $key . '_nl', null);
        if ($val !== null && $val !== '') return $val;
    }
    // Fallback to default for current lang
    if (isset($defaults[$key][$lang])) return $defaults[$key][$lang];
    // Fallback to default NL
    if (isset($defaults[$key]['nl'])) return $defaults[$key]['nl'];
    return '';
}

/* ========== Admin page ========== */

add_action('admin_init', function() {
    $keys = array_keys(frootz_default_settings());
    $langs = array_keys(frootz_available_languages());
    foreach ($keys as $key) {
        foreach ($langs as $lang) {
            register_setting('frootz_settings_group', 'frootz_' . $key . '_' . $lang, [
                'type' => 'string',
                'sanitize_callback' => 'wp_kses_post',
            ]);
        }
    }
});

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
    $langs = frootz_available_languages();
    $labels = [
        'hero_title'       => 'Hero — titel',
        'hero_subtitle'    => 'Hero — subtitel',
        'hero_intro'       => 'Hero — intro',
        'about_title'      => 'Over ons — titel',
        'about_body'       => 'Over ons — tekst',
        'contact_intro'    => 'Contact — intro',
        'whatsapp_number'  => 'WhatsApp nummer',
        'instagram_url'    => 'Instagram URL',
        'business_city'    => 'Stad',
        'copyright_line'   => 'Copyright regel',
    ];
    $multiline = ['hero_intro', 'about_body', 'contact_intro'];
    ?>
    <div class="wrap">
        <h1>Frootz Royale — Content</h1>
        <p>Content per taal. Leeg = default wordt gebruikt. Talen: <strong>NL / EN / ES</strong>.</p>
        <form method="post" action="options.php">
            <?php settings_fields('frootz_settings_group'); ?>
            <?php foreach ($labels as $key => $label): ?>
                <h2 style="margin-top:2em;border-bottom:1px solid #ccc;padding-bottom:4px;"><?php echo esc_html($label); ?></h2>
                <table class="form-table"><tbody>
                <?php foreach ($langs as $code => $lang_label):
                    $opt = 'frootz_' . $key . '_' . $code;
                    $val = get_option($opt, '');
                    $def = $defaults[$key][$code] ?? '';
                ?>
                    <tr>
                        <th scope="row" style="width:90px;">
                            <label for="<?php echo esc_attr($opt); ?>"><?php echo esc_html($lang_label); ?></label>
                        </th>
                        <td>
                            <?php if (in_array($key, $multiline, true)): ?>
                                <textarea id="<?php echo esc_attr($opt); ?>" name="<?php echo esc_attr($opt); ?>" rows="4" style="width:700px;" placeholder="<?php echo esc_attr($def); ?>"><?php echo esc_textarea($val); ?></textarea>
                            <?php else: ?>
                                <input type="text" id="<?php echo esc_attr($opt); ?>" name="<?php echo esc_attr($opt); ?>" value="<?php echo esc_attr($val); ?>" placeholder="<?php echo esc_attr($def); ?>" style="width:600px;" />
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody></table>
            <?php endforeach; ?>
            <?php submit_button('Opslaan'); ?>
        </form>
    </div>
    <?php
}
