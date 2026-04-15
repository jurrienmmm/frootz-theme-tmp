<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frootz Royale - Premium chocolate-dipped dehydrated fruit. Handcrafted with Callebaut chocolate in The Hague.">
    <link rel="icon" type="image/png" href="<?php echo esc_url(wp_get_attachment_image_url(14, 'full')); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url(wp_get_attachment_image_url(14, 'full')); ?>">

    <!-- Theme detection: light default, dark only if user prefers it -->
    <script>
    (function() {
        var saved = localStorage.getItem('theme');
        var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        // Light is default UNLESS: user explicitly chose dark, OR (no saved preference AND OS is dark)
        var useLight = saved !== 'dark';
        if (useLight) {
            document.documentElement.classList.add('theme-light');
        }
    })();
    </script>

    <!-- Hreflang -->
    <link rel="alternate" hreflang="nl" href="?lang=nl" />
    <link rel="alternate" hreflang="en" href="?lang=en" />
    <link rel="alternate" hreflang="x-default" href="?lang=nl" />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"#organization","name":"Frootz Royale","url":"<?php echo esc_url(home_url('/')); ?>","logo":"<?php echo esc_url(wp_get_attachment_image_url(20, 'full')); ?>","sameAs":["https://instagram.com/frootzroyale"],"description":"Premium chocolate-dipped dehydrated fruit, handcrafted in The Hague with Callebaut Belgian chocolate."},{"@type":"LocalBusiness","@id":"#business","name":"Frootz Royale","image":"<?php echo esc_url(wp_get_attachment_image_url(21, 'full')); ?>","priceRange":"EUR","address":{"@type":"PostalAddress","addressLocality":"The Hague","addressCountry":"NL"},"telephone":"+31638254957"},{"@type":"WebSite","@id":"#website","url":"<?php echo esc_url(home_url('/')); ?>","name":"Frootz Royale","inLanguage":"nl-NL"},{"@type":"Product","name":"Strawberry Royale","description":"Sun-ripened strawberries, dehydrated and dipped in Callebaut Belgian chocolate.","image":"<?php echo esc_url(wp_get_attachment_image_url(19, 'full')); ?>","brand":{"@type":"Brand","name":"Frootz Royale"}},{"@type":"Product","name":"Pineapple Royale","description":"Tropical pineapple, dehydrated and enrobed in Callebaut chocolate.","image":"<?php echo esc_url(wp_get_attachment_image_url(18, 'full')); ?>","brand":{"@type":"Brand","name":"Frootz Royale"}},{"@type":"Product","name":"Kiwi Royale","description":"Crisp kiwi slices, dehydrated and coated with premium Callebaut chocolate.","image":"<?php echo esc_url(wp_get_attachment_image_url(15, 'full')); ?>","brand":{"@type":"Brand","name":"Frootz Royale"}},{"@type":"Product","name":"Mango Royale","description":"Luscious mango, dehydrated and wrapped in velvety Callebaut chocolate.","image":"<?php echo esc_url(wp_get_attachment_image_url(16, 'full')); ?>","brand":{"@type":"Brand","name":"Frootz Royale"}},{"@type":"Product","name":"Melon Royale","description":"Honeyed melon, dehydrated and paired with Callebaut Belgian chocolate.","image":"<?php echo esc_url(wp_get_attachment_image_url(17, 'full')); ?>","brand":{"@type":"Brand","name":"Frootz Royale"}}]}    </script>

    <title>Frootz Royale</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link href='https://fonts.googleapis.com' crossorigin='1' rel='preconnect' />
<link href='https://fonts.gstatic.com' crossorigin='1' rel='preconnect' />
<meta name="generator" content="WordPress 6.9.4" />
<?php wp_head(); ?>
</head>
<body class="home frootz-royale-white <?php echo esc_attr(implode(' ', get_body_class())); ?>">

<!-- Ornate Frame — 4 fixed edges (cross-browser) -->
<div class="frame-top" aria-hidden="true"></div>
<div class="frame-bottom" aria-hidden="true"></div>
<div class="frame-left" aria-hidden="true"></div>
<div class="frame-right" aria-hidden="true"></div>

<!-- Ornate Frame Wrapper -->
<div class="site-frame">

    <!-- Sticky Header with Split Navigation -->
    <header class="site-header" role="banner">
        <div class="header-inner">

            <!-- Left Navigation -->
            <nav class="nav-left" id="nav-left" role="navigation" aria-label="Primary left navigation">
                <a href="?lang=nl#producten">Producten</a><a href="?lang=nl#zakelijk">Zakelijk</a>            </nav>

            <!-- Centered Logo -->
            <div class="header-logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link" aria-label="Frootz Royale - Home">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url(13, 'full')); ?>" alt="Frootz Royale" class="logo-crown-img" style="height: 52px; width: auto;">
                    </a>
                            </div>

            <!-- Right Navigation -->
            <nav class="nav-right" id="nav-right" role="navigation" aria-label="Primary right navigation">
                <a href="?lang=nl#over-ons">Over ons</a><a href="?lang=nl#contact">Contact</a>            </nav>

            <!-- Language Switcher -->
                        <div class="lang-switcher">
                <a href="?lang=nl" class="lang-btn active">NL</a>
                <a href="?lang=en" class="lang-btn ">EN</a>
            </div>

            <!-- Theme Toggle -->
            <button class="theme-toggle" aria-label="Toggle light/dark mode" onclick="document.documentElement.classList.toggle('theme-light'); document.body.classList.toggle('theme-light'); localStorage.setItem('theme', document.documentElement.classList.contains('theme-light') ? 'light' : 'dark');">
                <span class="theme-toggle-icon">&#9788;</span>
            </button>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="nav-left nav-right" aria-label="Toggle navigation menu">
                <span aria-hidden="true">&#9776;</span>
            </button>

        </div>
    </header>

    <!-- Frame Inner Content Area -->
    <div class="site-frame-inner">

<main id="main" role="main">

    <!-- ============================================================
         HERO SECTION
         ============================================================ -->
    <section id="home" class="rf-section rf-section--dark hero">
        <div class="hero-content animate-in">
            <!-- Crown Image -->
            <img src="<?php echo esc_url(wp_get_attachment_image_url(13, 'full')); ?>" alt="Frootz Royale Crown" class="hero-crown-img" style="width: 180px; height: auto; margin: 0 auto 1.5rem; display: block;">

            <h1>Frootz Royale</h1>

            <p class="hero-tagline">Premium gedroogd fruit gedoopt in chocolade</p>

            <p class="hero-description">
                Ambachtelijk bereid in Den Haag met Callebaut Belgische chocolade en de finest gedroogde vruchten. Een koninklijke traktatie voor elke gelegenheid.            </p>

            <div class="btn-group">
                <a href="#producten" class="btn btn--primary">Ontdek de Collectie</a>
                <a href="#zakelijk" class="btn btn--secondary">Zakelijke samenwerking</a>
            </div>

        </div>
    </section>

    <!-- ============================================================
         SAMPLE CTA BANNER
         ============================================================ -->
    <section class="sample-cta-banner" id="sample">
        <div class="container">
            <div class="sample-cta-content">
                                <h3>Ervaar het zelf</h3>
                <p>Plan een proeverij op locatie — geheel vrijblijvend.</p>
                <a href="https://wa.me/31638254957?text=Plan+een+proeverij"
                   class="btn btn-primary btn-large"
                   target="_blank"
                   rel="noopener">
                    Plan een proeverij                </a>
                <small>Voor hotels, restaurants en premium retail</small>
            </div>
        </div>
    </section>

    <!-- ============================================================
         PRODUCTS SECTION
         ============================================================ -->
    <section id="producten" class="rf-section rf-section--dark-alt">
        <div class="section-inner">

            <div class="section-header">
                <span class="section-subtitle">De collectie</span>
                <h2>De koninklijke collectie</h2>
                <p style="max-width: 550px; margin: 15px auto 0; opacity: 0.7;">
                    Vijf kenmerkende smaken, elk gedoopt in premium Callebaut Belgische chocolade. Gedroogd voor de perfecte crunch.                </p>
                <div class="section-divider"></div>
            </div>

            <div class="products-grid">

                <!-- Strawberry Royale -->
                <article class="product-card animate-in">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(19, 'full')); ?>"
                         alt="Aardbei Royale"
                         class="product-img">
                    <h3>Aardbei Royale</h3>
                    <p>Zongerijpte aardbeien, perfect gedroogd en rijkelijk gedoopt in Callebaut Belgische chocolade.</p>
                    <span class="product-tag">Aardbei + chocolade</span>
                </article>

                <!-- Mango Royale -->
                <article class="product-card animate-in animate-in--delay-1">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(16, 'full')); ?>"
                         alt="Mango Royale"
                         class="product-img">
                    <h3>Mango Royale</h3>
                    <p>Heerlijke mango, gedroogd voor die perfecte tropische crunch, omwikkeld met fluwelen Callebaut chocolade.</p>
                    <span class="product-tag">Mango + chocolade</span>
                </article>

                <!-- Strawberry White Royale -->
                <article class="product-card animate-in animate-in--delay-2">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(22, 'full')); ?>"
                         alt="Aardbei Royale Wit"
                         class="product-img">
                    <h3>Aardbei Royale Wit</h3>
                    <p>Zongerijpte aardbeien, perfect gedroogd en omwikkeld met fluwelen Callebaut Belgische witte chocolade.</p>
                    <span class="product-tag">Aardbei + witte chocolade</span>
                </article>

                <!-- Pineapple Royale -->
                <article class="product-card product-card--coming-soon animate-in animate-in--delay-3">
                    <span class="coming-soon-badge" data-i18n="coming_soon">Binnenkort</span>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(18, 'full')); ?>"
                         alt="Ananas Royale"
                         class="product-img">
                    <h3>Ananas Royale</h3>
                    <p>Frisse tropische ananas, gedroogd voor intense smaak, omhuld met zachte Callebaut chocolade.</p>
                    <span class="product-tag">Ananas + chocolade</span>
                </article>

                <!-- Kiwi Royale -->
                <article class="product-card product-card--coming-soon animate-in animate-in--delay-4">
                    <span class="coming-soon-badge" data-i18n="coming_soon">Binnenkort</span>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(15, 'full')); ?>"
                         alt="Kiwi Royale"
                         class="product-img">
                    <h3>Kiwi Royale</h3>
                    <p>Knapperige kiwi, gedroogd om de frisse zoetheid vast te houden, afgewerkt met premium Callebaut.</p>
                    <span class="product-tag">Kiwi + chocolade</span>
                </article>

                <!-- Melon Royale -->
                <article class="product-card product-card--coming-soon animate-in animate-in--delay-5">
                    <span class="coming-soon-badge" data-i18n="coming_soon">Binnenkort</span>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(17, 'full')); ?>"
                         alt="Meloen Royale"
                         class="product-img">
                    <h3>Meloen Royale</h3>
                    <p>Honingzoete meloen, gedroogd om de natuurlijke zoetheid te concentreren, gecombineerd met de finest Callebaut Belgische chocolade.</p>
                    <span class="product-tag">Meloen + chocolade</span>
                </article>

            </div>

        </div>
    </section>

    <!-- ============================================================
         B2B / ZAKELIJK SECTION
         ============================================================ -->
    <section id="zakelijk" class="rf-section rf-section--cream">
        <div class="section-inner">

            <div class="section-header">
                <span class="section-subtitle">Voor bedrijven</span>
                <h2>Samenwerken met Frootz Royale</h2>
                <p style="max-width: 550px; margin: 15px auto 0; opacity: 0.7;">
                    Verhef uw aanbod met premium in chocolade gedoopt fruit. Perfect voor hotels, restaurants, bedrijven en retail.                </p>
                <div class="section-divider" style="background: var(--rf-frame-brown);"></div>
            </div>

            <div class="b2b-grid">

                <div class="b2b-card">
                    <div class="b2b-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--rf-frame-brown)" stroke-width="1.5">
                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3>Eigen verpakking</h3>
                    <p>White-label opties en geschenkdozen op maat, afgestemd op uw huisstijl.</p>
                </div>

                <div class="b2b-card">
                    <div class="b2b-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--rf-frame-brown)" stroke-width="1.5">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Betrouwbare levering</h3>
                    <p>Consistente kwaliteit en tijdige levering. Handgemaakt in Den Haag met zorg en precisie.</p>
                </div>

                <div class="b2b-card">
                    <div class="b2b-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--rf-frame-brown)" stroke-width="1.5">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3>Premium kwaliteit</h3>
                    <p>Alleen Callebaut Belgische chocolade en de finest gedroogde vruchten. Zonder compromissen.</p>
                </div>

            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="https://wa.me/31638254957?text=Hallo%20Frootz%20Royale%2C%20ik%20wil%20graag%20een%20afspraak%20maken." class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer">
                    Bespreek samenwerking via WhatsApp                </a>
            </div>

        </div>
    </section>

    <!-- ============================================================
         FAQ SECTION
         ============================================================ -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Veelgestelde Vragen</span>
                <h2 class="section-title">Veelgestelde Vragen</h2>
                <p class="section-subtitle">Alles wat u moet weten over het bestellen van Frootz Royale voor uw bedrijf.</p>
            </div>
            <div class="faq-list">
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Wat is de minimale bestelhoeveelheid (MOQ)?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Onze standaard MOQ voor B2B bestellingen is flexibel — we werken zowel met kleine specialty stores als met grote hotelketens. Neem contact op via WhatsApp voor uw specifieke wensen.                        </div>
                    </details>
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Wat is de houdbaarheid van uw producten?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Ons gedroogde fruit met Callebaut chocolade heeft een houdbaarheid van 6-9 maanden bewaard op een koele, droge plaats. Koeling is niet nodig.                        </div>
                    </details>
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Bieden jullie eigen verpakking of white-label opties aan?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Ja, we bieden white-label verpakking en geschenkdozen op maat van uw merk. Perfect voor hotels, relatiegeschenken en private label retail.                        </div>
                    </details>
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Wat zijn de levertijden en leveringsgebieden?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            We leveren in heel Nederland en België binnen 3-5 werkdagen. Europese levering op aanvraag beschikbaar.                        </div>
                    </details>
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Zijn jullie producten allergenen-vrij?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Onze producten bevatten melk, soja (uit chocolade) en kunnen sporen van noten bevatten. Volledige allergenen- en ingredientenspecificaties op aanvraag beschikbaar.                        </div>
                    </details>
                                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Kan ik een proefpakket bestellen voordat ik besluit?</span>
                            <span class="faq-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Zeker. We bieden proefpakketten aan voor gekwalificeerde B2B kopers. Vraag uw pakket aan via WhatsApp en we sturen u een geselecteerde samenstelling.                        </div>
                    </details>
                            </div>
        </div>
    </section>

    <!-- ============================================================
         ABOUT SECTION
         ============================================================ -->
    <section id="over-ons" class="rf-section rf-section--dark">
        <div class="section-inner">

            <div class="about-content">

                <div class="about-text">
                    <span class="section-subtitle">Ons verhaal</span>
                    <h2>Gemaakt met Passie</h2>
                    <p>Frootz Royale is ontstaan vanuit een simpele overtuiging: fruit en chocolade verdienen beter. Wij gebruiken uitsluitend Callebaut Belgische chocolade — de gouden standaard — en combineren dit met zorgvuldig geselecteerd gedroogd fruit.</p>
                    <p>Wij drogen ons fruit om de natuurlijke smaak te behouden en die heerlijke crunch te creëren die je nergens anders vindt.</p>
                    <p>Van onze keuken tot uw tafel, elk Frootz Royale product draagt ons commitment aan kwaliteit, vakmanschap en een vleugje koninklijke verwennerij.</p>
                    <div style="margin-top: 30px;">
                        <a href="#contact" class="btn btn--secondary">Neem contact op</a>
                    </div>
                </div>

                <div class="about-image">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url(21, 'full')); ?>" alt="Frootz Royale" style="max-width: 100%; height: auto;">
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================================
         CONTACT SECTION
         ============================================================ -->
    <section id="contact" class="rf-section rf-section--dark-alt">
        <div class="section-inner">

            <div class="contact-content">

                <div class="section-header">
                    <span class="section-subtitle">Neem Contact Op</span>
                    <h2>Laten We Praten</h2>
                    <p style="opacity: 0.7;">
                        Interesse in Frootz Royale voor uw bedrijf? Neem direct contact op via WhatsApp of stuur ons een bericht.                    </p>
                </div>

                <!-- Primary CTA: WhatsApp -->
                <div class="contact-buttons">
                    <a href="https://wa.me/31638254957?text=Hallo%20Frootz%20Royale!" class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle; margin-right: 8px;" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Chat via WhatsApp                    </a>
                    <a href="https://instagram.com/frootzroyale" class="btn btn--secondary" target="_blank" rel="noopener noreferrer">
                        DM op Instagram                    </a>
                </div>

                <div class="contact-divider">
                    <span>of stuur een bericht</span>
                </div>

                <!-- Contact Form (WPForms) -->
                <div class="contact-form">
                    <?php echo do_shortcode('[wpforms id="8" title="false" description="false"]'); ?>
                </div>

            </div>

        </div>
    </section>

</main>

    </div><!-- .site-frame-inner -->

    <!-- Footer (inside the frame) -->
    <footer class="site-footer rf-footer" role="contentinfo">
        <div class="footer-inner">

            <div class="footer-logo" aria-hidden="true">Frootz Royale</div>

            <nav class="footer-social" aria-label="Social media links">
                <a href="https://wa.me/31638254957" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
                <a href="https://instagram.com/frootzroyale" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </nav>

            <p class="footer-copyright">
                &copy; 2026 Frootz Royale. Alle rechten voorbehouden.                <br>
                <small>Ambachtelijk bereid in Den Haag</small><br>
                <small><a href="<?php echo esc_url(get_permalink(11)); ?>">Privacybeleid</a></small>
            </p>

        </div>
    </footer>

</div><!-- .site-frame -->

<!-- Sticky WhatsApp Button -->
<a href="https://wa.me/31638254957?text=Hallo+Frootz+Royale%21+Ik+ben+geinteresseerd+in+uw+producten."
   class="whatsapp-sticky"
   aria-label="WhatsApp"
   target="_blank"
   rel="noopener">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="white" aria-hidden="true">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/main.js?ver=1.4.0" id="frootz-royale-main-js"></script>
<?php wp_footer(); ?>
</body>
</html>


