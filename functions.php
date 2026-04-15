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
// GENERATED additional translations
        'nav_products' => [
            'nl' => 'Producten',
            'en' => 'Products',
            'es' => 'Productos',
        ],
        'nav_business' => [
            'nl' => 'Zakelijk',
            'en' => 'Business',
            'es' => 'Empresas',
        ],
        'nav_about' => [
            'nl' => 'Over ons',
            'en' => 'About',
            'es' => 'Sobre nosotros',
        ],
        'nav_contact' => [
            'nl' => 'Contact',
            'en' => 'Contact',
            'es' => 'Contacto',
        ],
        'cta_discover' => [
            'nl' => 'Ontdek de Collectie',
            'en' => 'Discover the Collection',
            'es' => 'Descubre la Colección',
        ],
        'cta_business' => [
            'nl' => 'Zakelijke samenwerking',
            'en' => 'Business partnership',
            'es' => 'Colaboración empresarial',
        ],
        'sample_title' => [
            'nl' => 'Ervaar het zelf',
            'en' => 'Experience it yourself',
            'es' => 'Experiéncialo',
        ],
        'sample_intro' => [
            'nl' => 'Plan een proeverij op locatie — geheel vrijblijvend.',
            'en' => 'Book an on-site tasting — no obligations.',
            'es' => 'Reserva una degustación en tu local — sin compromiso.',
        ],
        'sample_cta' => [
            'nl' => 'Plan een proeverij',
            'en' => 'Book a tasting',
            'es' => 'Reservar degustación',
        ],
        'sample_small' => [
            'nl' => 'Voor hotels, restaurants en premium retail',
            'en' => 'For hotels, restaurants and premium retail',
            'es' => 'Para hoteles, restaurantes y retail premium',
        ],
        'products_subtitle' => [
            'nl' => 'De collectie',
            'en' => 'The collection',
            'es' => 'La colección',
        ],
        'products_title' => [
            'nl' => 'De koninklijke collectie',
            'en' => 'The royal collection',
            'es' => 'La colección real',
        ],
        'products_intro' => [
            'nl' => 'Vijf kenmerkende smaken, elk gedoopt in premium Callebaut Belgische chocolade. Gedroogd voor de perfecte crunch.',
            'en' => 'Five signature flavours, each dipped in premium Callebaut Belgian chocolate. Dehydrated for the perfect crunch.',
            'es' => 'Cinco sabores emblemáticos, cada uno bañado en chocolate belga Callebaut premium. Deshidratado para el crujido perfecto.',
        ],
        'product_strawberry_name' => [
            'nl' => 'Aardbei Royale',
            'en' => 'Strawberry Royale',
            'es' => 'Fresa Royale',
        ],
        'product_strawberry_desc' => [
            'nl' => 'Zongerijpte aardbeien, perfect gedroogd en rijkelijk gedoopt in Callebaut Belgische chocolade.',
            'en' => 'Sun-ripened strawberries, perfectly dehydrated and richly dipped in Callebaut Belgian chocolate.',
            'es' => 'Fresas maduradas al sol, deshidratadas a la perfección y bañadas generosamente en chocolate belga Callebaut.',
        ],
        'product_strawberry_tag' => [
            'nl' => 'Aardbei + chocolade',
            'en' => 'Strawberry + chocolate',
            'es' => 'Fresa + chocolate',
        ],
        'product_mango_name' => [
            'nl' => 'Mango Royale',
            'en' => 'Mango Royale',
            'es' => 'Mango Royale',
        ],
        'product_mango_desc' => [
            'nl' => 'Heerlijke mango, gedroogd voor die perfecte tropische crunch, omwikkeld met fluwelen Callebaut chocolade.',
            'en' => 'Luscious mango, dehydrated for that perfect tropical crunch, wrapped in velvety Callebaut chocolate.',
            'es' => 'Mango delicioso, deshidratado para lograr ese crujido tropical perfecto, envuelto en aterciopelado chocolate Callebaut.',
        ],
        'product_mango_tag' => [
            'nl' => 'Mango + chocolade',
            'en' => 'Mango + chocolate',
            'es' => 'Mango + chocolate',
        ],
        'product_whitestrawberry_name' => [
            'nl' => 'Aardbei Royale Wit',
            'en' => 'White Strawberry Royale',
            'es' => 'Fresa Royale Blanca',
        ],
        'product_whitestrawberry_desc' => [
            'nl' => 'Zongerijpte aardbeien, perfect gedroogd en omwikkeld met fluwelen Callebaut Belgische witte chocolade.',
            'en' => 'Sun-ripened strawberries, perfectly dehydrated and wrapped in velvety Callebaut Belgian white chocolate.',
            'es' => 'Fresas maduradas al sol, deshidratadas a la perfección y envueltas en aterciopelado chocolate blanco belga Callebaut.',
        ],
        'product_whitestrawberry_tag' => [
            'nl' => 'Aardbei + witte chocolade',
            'en' => 'Strawberry + white chocolate',
            'es' => 'Fresa + chocolate blanco',
        ],
        'product_pineapple_name' => [
            'nl' => 'Ananas Royale',
            'en' => 'Pineapple Royale',
            'es' => 'Piña Royale',
        ],
        'product_pineapple_desc' => [
            'nl' => 'Frisse tropische ananas, gedroogd voor intense smaak, omhuld met zachte Callebaut chocolade.',
            'en' => 'Fresh tropical pineapple, dehydrated for intense flavour, enrobed in soft Callebaut chocolate.',
            'es' => 'Piña tropical fresca, deshidratada para un sabor intenso, cubierta con suave chocolate Callebaut.',
        ],
        'product_pineapple_tag' => [
            'nl' => 'Ananas + chocolade',
            'en' => 'Pineapple + chocolate',
            'es' => 'Piña + chocolate',
        ],
        'product_kiwi_name' => [
            'nl' => 'Kiwi Royale',
            'en' => 'Kiwi Royale',
            'es' => 'Kiwi Royale',
        ],
        'product_kiwi_desc' => [
            'nl' => 'Knapperige kiwi, gedroogd om de frisse zoetheid vast te houden, afgewerkt met premium Callebaut.',
            'en' => 'Crisp kiwi, dehydrated to lock in its fresh sweetness, finished with premium Callebaut.',
            'es' => 'Kiwi crujiente, deshidratado para conservar su frescura dulce, terminado con Callebaut premium.',
        ],
        'product_kiwi_tag' => [
            'nl' => 'Kiwi + chocolade',
            'en' => 'Kiwi + chocolate',
            'es' => 'Kiwi + chocolate',
        ],
        'product_melon_name' => [
            'nl' => 'Meloen Royale',
            'en' => 'Melon Royale',
            'es' => 'Melón Royale',
        ],
        'product_melon_desc' => [
            'nl' => 'Honingzoete meloen, gedroogd om de natuurlijke zoetheid te concentreren, gecombineerd met de finest Callebaut Belgische chocolade.',
            'en' => 'Honey-sweet melon, dehydrated to concentrate its natural sweetness, paired with the finest Callebaut Belgian chocolate.',
            'es' => 'Melón dulce como la miel, deshidratado para concentrar su dulzor natural, combinado con el mejor chocolate belga Callebaut.',
        ],
        'product_melon_tag' => [
            'nl' => 'Meloen + chocolade',
            'en' => 'Melon + chocolate',
            'es' => 'Melón + chocolate',
        ],
        'coming_soon_badge' => [
            'nl' => 'Binnenkort',
            'en' => 'Coming soon',
            'es' => 'Próximamente',
        ],
        'business_subtitle' => [
            'nl' => 'Voor bedrijven',
            'en' => 'For businesses',
            'es' => 'Para empresas',
        ],
        'business_title' => [
            'nl' => 'Samenwerken met Frootz Royale',
            'en' => 'Partner with Frootz Royale',
            'es' => 'Colabora con Frootz Royale',
        ],
        'business_intro' => [
            'nl' => 'Verhef uw aanbod met premium in chocolade gedoopt fruit. Perfect voor hotels, restaurants, bedrijven en retail.',
            'en' => 'Elevate your offering with premium chocolate-dipped fruit. Perfect for hotels, restaurants, companies and retail.',
            'es' => 'Eleva tu oferta con fruta premium bañada en chocolate. Perfecta para hoteles, restaurantes, empresas y retail.',
        ],
        'b2b_card1_title' => [
            'nl' => 'Eigen verpakking',
            'en' => 'Custom packaging',
            'es' => 'Empaque personalizado',
        ],
        'b2b_card1_desc' => [
            'nl' => 'White-label opties en geschenkdozen op maat, afgestemd op uw huisstijl.',
            'en' => 'White-label options and custom gift boxes, matched to your brand identity.',
            'es' => 'Opciones de marca blanca y cajas de regalo a medida, adaptadas a tu identidad de marca.',
        ],
        'b2b_card2_title' => [
            'nl' => 'Betrouwbare levering',
            'en' => 'Reliable delivery',
            'es' => 'Entrega confiable',
        ],
        'b2b_card2_desc' => [
            'nl' => 'Consistente kwaliteit en tijdige levering. Handgemaakt in Den Haag met zorg en precisie.',
            'en' => 'Consistent quality and on-time delivery. Handmade in The Hague with care and precision.',
            'es' => 'Calidad constante y entregas a tiempo. Hecho a mano en La Haya con esmero y precisión.',
        ],
        'b2b_card3_title' => [
            'nl' => 'Premium kwaliteit',
            'en' => 'Premium quality',
            'es' => 'Calidad premium',
        ],
        'b2b_card3_desc' => [
            'nl' => 'Alleen Callebaut Belgische chocolade en de finest gedroogde vruchten. Zonder compromissen.',
            'en' => 'Only Callebaut Belgian chocolate and the finest dehydrated fruits. No compromises.',
            'es' => 'Solo chocolate belga Callebaut y las mejores frutas deshidratadas. Sin concesiones.',
        ],
        'business_cta' => [
            'nl' => 'Bespreek samenwerking via WhatsApp',
            'en' => 'Discuss a partnership via WhatsApp',
            'es' => 'Hablemos de colaboración por WhatsApp',
        ],
        'faq_label' => [
            'nl' => 'Veelgestelde Vragen',
            'en' => 'Frequently Asked Questions',
            'es' => 'Preguntas Frecuentes',
        ],
        'faq_title' => [
            'nl' => 'Veelgestelde Vragen',
            'en' => 'Frequently Asked Questions',
            'es' => 'Preguntas Frecuentes',
        ],
        'faq_intro' => [
            'nl' => 'Alles wat u moet weten over het bestellen van Frootz Royale voor uw bedrijf.',
            'en' => 'Everything you need to know about ordering Frootz Royale for your business.',
            'es' => 'Todo lo que necesitas saber sobre pedir Frootz Royale para tu empresa.',
        ],
        'faq_q1' => [
            'nl' => 'Wat is de minimale bestelhoeveelheid (MOQ)?',
            'en' => 'What is the minimum order quantity (MOQ)?',
            'es' => '¿Cuál es la cantidad mínima de pedido (MOQ)?',
        ],
        'faq_a1' => [
            'nl' => 'Onze standaard MOQ voor B2B bestellingen is flexibel — we werken zowel met kleine specialty stores als met grote hotelketens. Neem contact op via WhatsApp voor uw specifieke wensen.',
            'en' => 'Our standard MOQ for B2B orders is flexible — we work with small specialty stores as well as large hotel chains. Contact us via WhatsApp for your specific needs.',
            'es' => 'Nuestra MOQ estándar para pedidos B2B es flexible — trabajamos tanto con pequeñas tiendas de especialidades como con grandes cadenas hoteleras. Contáctanos por WhatsApp para tus necesidades específicas.',
        ],
        'faq_q2' => [
            'nl' => 'Wat is de houdbaarheid van uw producten?',
            'en' => 'What is the shelf life of your products?',
            'es' => '¿Cuál es la vida útil de sus productos?',
        ],
        'faq_a2' => [
            'nl' => 'Ons gedroogde fruit met Callebaut chocolade heeft een houdbaarheid van 6-9 maanden bewaard op een koele, droge plaats. Koeling is niet nodig.',
            'en' => 'Our dehydrated fruit with Callebaut chocolate has a shelf life of 6-9 months when stored in a cool, dry place. Refrigeration is not required.',
            'es' => 'Nuestra fruta deshidratada con chocolate Callebaut tiene una vida útil de 6-9 meses almacenada en un lugar fresco y seco. No requiere refrigeración.',
        ],
        'faq_q3' => [
            'nl' => 'Bieden jullie eigen verpakking of white-label opties aan?',
            'en' => 'Do you offer custom packaging or white-label options?',
            'es' => '¿Ofrecen empaque personalizado u opciones de marca blanca?',
        ],
        'faq_a3' => [
            'nl' => 'Ja, we bieden white-label verpakking en geschenkdozen op maat van uw merk. Perfect voor hotels, relatiegeschenken en private label retail.',
            'en' => 'Yes, we offer white-label packaging and custom gift boxes tailored to your brand. Perfect for hotels, corporate gifts and private-label retail.',
            'es' => 'Sí, ofrecemos empaque de marca blanca y cajas de regalo adaptadas a tu marca. Perfecto para hoteles, regalos corporativos y retail de marca propia.',
        ],
        'faq_q4' => [
            'nl' => 'Wat zijn de levertijden en leveringsgebieden?',
            'en' => 'What are delivery times and areas?',
            'es' => '¿Cuáles son los plazos y zonas de entrega?',
        ],
        'faq_a4' => [
            'nl' => 'We leveren in heel Nederland en België binnen 3-5 werkdagen. Europese levering op aanvraag beschikbaar.',
            'en' => 'We deliver throughout the Netherlands and Belgium within 3-5 business days. European delivery available on request.',
            'es' => 'Entregamos en todo Países Bajos y Bélgica en 3-5 días laborables. Entrega europea disponible bajo petición.',
        ],
        'faq_q5' => [
            'nl' => 'Zijn jullie producten allergenen-vrij?',
            'en' => 'Are your products allergen-free?',
            'es' => '¿Sus productos son libres de alérgenos?',
        ],
        'faq_a5' => [
            'nl' => 'Onze producten bevatten melk, soja (uit chocolade) en kunnen sporen van noten bevatten. Volledige allergenen- en ingredientenspecificaties op aanvraag beschikbaar.',
            'en' => 'Our products contain milk, soy (from chocolate) and may contain traces of nuts. Full allergen and ingredient specifications available on request.',
            'es' => 'Nuestros productos contienen leche, soja (del chocolate) y pueden contener trazas de frutos secos. Especificaciones completas de alérgenos e ingredientes disponibles bajo petición.',
        ],
        'faq_q6' => [
            'nl' => 'Kan ik een proefpakket bestellen voordat ik besluit?',
            'en' => 'Can I order a sample pack before deciding?',
            'es' => '¿Puedo pedir un paquete de muestra antes de decidir?',
        ],
        'faq_a6' => [
            'nl' => 'Zeker. We bieden proefpakketten aan voor gekwalificeerde B2B kopers. Vraag uw pakket aan via WhatsApp en we sturen u een geselecteerde samenstelling.',
            'en' => 'Absolutely. We offer sample packs to qualified B2B buyers. Request yours via WhatsApp and we will send you a curated selection.',
            'es' => 'Por supuesto. Ofrecemos paquetes de muestra a compradores B2B cualificados. Solicita el tuyo por WhatsApp y te enviaremos una selección personalizada.',
        ],
        'about_subtitle' => [
            'nl' => 'Ons verhaal',
            'en' => 'Our story',
            'es' => 'Nuestra historia',
        ],
        'about_cta' => [
            'nl' => 'Neem contact op',
            'en' => 'Get in touch',
            'es' => 'Ponte en contacto',
        ],
        'contact_subtitle' => [
            'nl' => 'Neem Contact Op',
            'en' => 'Get in touch',
            'es' => 'Ponte en contacto',
        ],
        'contact_title' => [
            'nl' => 'Laten We Praten',
            'en' => 'Let\'s Talk',
            'es' => 'Hablemos',
        ],
        'contact_whatsapp_btn' => [
            'nl' => 'Chat via WhatsApp',
            'en' => 'Chat on WhatsApp',
            'es' => 'Chat por WhatsApp',
        ],
        'contact_instagram_btn' => [
            'nl' => 'DM op Instagram',
            'en' => 'DM on Instagram',
            'es' => 'DM en Instagram',
        ],
        'contact_divider' => [
            'nl' => 'of stuur een bericht',
            'en' => 'or send a message',
            'es' => 'o envía un mensaje',
        ],
        'footer_tagline' => [
            'nl' => 'Ambachtelijk bereid in Den Haag',
            'en' => 'Handcrafted in The Hague',
            'es' => 'Elaborado artesanalmente en La Haya',
        ],
        'footer_privacy' => [
            'nl' => 'Privacybeleid',
            'en' => 'Privacy Policy',
            'es' => 'Política de privacidad',
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
