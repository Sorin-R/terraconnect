<!DOCTYPE html>
<html lang="en-GB">

<head><!-- Critical Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Preconnect / DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />

    <!-- Primary SEO -->
    <title>Frontend Development Services — Terra Connect | London Web Development</title>
    <meta name="description"
        content="Professional frontend development services in London. We create fast, responsive, and engaging websites that drive business growth. Expert web development company." />
    <meta name="keywords"
        content="frontend development London, web development UK, responsive web design, London web developers, website development company, UX/UI design London" />

    <!-- Canonical / Hreflang - CORRECTED -->
    <link rel="canonical" href="https://terraconnect.co.uk/frontend-development/" />
    <link rel="alternate" hreflang="en-gb" href="https://terraconnect.co.uk/frontend-development/" />
    <link rel="alternate" hreflang="x-default" href="https://terraconnect.co.uk/frontend-development/" />

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://terraconnect.co.uk/frontend-development/" />
    <meta property="og:title" content="Frontend Development Services — Terra Connect London" />
    <meta property="og:description"
        content="Professional frontend development services in London. We create fast, responsive, and engaging websites that drive business growth." />
    <meta property="og:image" content="https://terraconnect.co.uk/images/img-png/logo/logo.png" />
    <meta property="og:site_name" content="Terra Connect Ltd" />
    <meta property="og:locale" content="en_GB" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@terraconnect" />
    <meta name="twitter:creator" content="@terraconnect" />
    <meta name="twitter:title" content="Frontend Development Services — Terra Connect London" />
    <meta name="twitter:description"
        content="Professional frontend development services in London. We create fast, responsive, and engaging websites that drive business growth." />

    <!-- App / Theme -->
    <meta name="theme-color" content="#06B6D4" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="Terra Connect" />

    <!-- Favicons / Manifest -->
    <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png" />
    <link rel="manifest" href="/icon/site.webmanifest" />

    <!-- Preload critical - CORRECTED PATH -->
    <link rel="preload" href="/styles/index.css" as="style" />
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
        as="style" />

    <!-- Fonts / Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
        media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
media="print" onload="this.media='all'" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/fontawesome-kit.php'; ?>

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/styles/mobile-index.css?v=20260402-5" media="(max-width: 1024px)" />

    <link rel="stylesheet" href="/styles/pages/frontend-development.css" />

    <!-- Structured Data for Service Page -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "name": "Frontend Development Services",
            "provider": {
                "@type": "Organization",
                "name": "Terra Connect Ltd",
                "url": "https://terraconnect.co.uk/",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://terraconnect.co.uk/images/img-png/logo/logo.png",
                    "width": 200,
                    "height": 60
                }
            },
            "description": "Professional frontend development services including responsive web design, user interface development, and performance optimization.",
            "areaServed": "United Kingdom",
            "serviceType": "Web Development"
        }
    </script>

    <!-- Security (UPDATED CSP to allow GTM and other external resources) -->
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self';
        script-src 'self' https://www.googletagmanager.com https://maps.googleapis.com https://kit.fontawesome.com 'unsafe-inline';
        style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://ka-f.fontawesome.com;
        font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://ka-f.fontawesome.com;
        img-src 'self' data: https:;
        connect-src 'self' https://www.google-analytics.com https://stats.g.doubleclick.net https://ka-f.fontawesome.com;
        frame-src https://www.google.com;
        ">
    <meta http-equiv="X-Content-Type-Options" content="nosniff" />
    <meta http-equiv="X-Frame-Options" content="DENY" />
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin" />

</head>

<body>
    <!-- Skip link -->
    <a class="skip-link" href="#main">Skip to content</a>

    <div class="background">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

        <main id="main">
            <!-- Hero -->
            <section class="hero" aria-labelledby="hero-heading">
                <div class="hero-text">
                    <h1 id="hero-heading" class="hero-h1">
                        Frontend Development Services
                    </h1>
                    <p class="hero-p">
                        IT solutions that power your business growth.<br>
                        Professional web development that creates engaging, fast, and secure experiences<br>
                        for businesses across the United Kingdom.
                    </p>
                </div>

                <div class="hero-cta">
                    <a class="btn focus-ring" href="/get-a-quote/">Start Your Project</a>
                    <a class="btn secondary focus-ring" href="/about-us/">Learn More</a>
                </div>
            </section>

            <div class="content-container">
                <!-- Introduction -->
                <section class="content-section">
                    <div class="section-content">
                        <p>The digital world moves fast, and for businesses across the United Kingdom, staying ahead
                            means having a strong, reliable, and engaging online presence. Your website is often the
                            first point of contact with potential customers, and that first impression can make or break
                            trust. We understand how critical it is to not only stand out visually but also deliver
                            seamless performance, security, and functionality.</p>

                        <p>As a dedicated team of IT specialists, we help brands unlock their digital potential. Whether
                            you are a small business looking to establish your online identity or a large enterprise
                            aiming to scale your digital platforms, we design and develop solutions tailored to your
                            goals. Unlike agencies that take a one-size-fits-all approach, we immerse ourselves in your
                            industry, understand your audience, and craft strategies that actually work.</p>
                    </div>
                </section>

                <!-- Why Your Business Needs a Strong Digital Partner -->
                <section class="content-section">
                    <h2 class="section-title">Why Your Business Needs a Strong Digital Partner</h2>
                    <div class="section-content">
                        <p>In today's competitive market, simply having a website isn't enough. Customers expect
                            experiences that are smooth, engaging, and trustworthy. That's where we come in.</p>
                    </div>

                    <ul class="feature-list">
                        <li><strong>Performance that matters:</strong> A website should load fast, feel responsive, and
                            adapt to all devices.</li>
                        <li><strong>Security as a priority:</strong> Protecting customer data and your business
                            reputation is non-negotiable.</li>
                        <li><strong>Scalable solutions:</strong> Your digital infrastructure should grow as your
                            business expands.</li>
                        <li><strong>Design that converts:</strong> Visuals, layouts, and user journeys should all work
                            together to drive results.</li>
                    </ul>

                    <div class="highlight-box">
                        <h3>Your Long-Term Digital Partner</h3>
                        <p>By partnering with us, you don't just get developers — you get a long-term ally who is as
                            invested in your success as you are.</p>
                    </div>
                </section>

                <!-- Our Role as a Web Development Leader -->
                <section class="content-section" id="our-approach">
                    <h2 class="section-title">Our Role as a Web Development Leader</h2>
                    <div class="section-content">
                        <p>When businesses look for a reliable web development company in London, they're not just
                            seeking someone to write code. They're searching for a partner who understands the balance
                            of creativity, strategy, and technology. That's exactly what we bring to the table.</p>
                    </div>

                    <div class="process-grid">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <h3 class="step-title">Listen to Your Story</h3>
                            <p class="step-description">We start by understanding your business, goals, and vision to
                                create a foundation for success.</p>
                        </div>

                        <div class="process-step">
                            <div class="step-number">2</div>
                            <h3 class="step-title">Define Goals & Technology</h3>
                            <p class="step-description">We identify the right technology stack and define clear
                                objectives for your project.</p>
                        </div>

                        <div class="process-step">
                            <div class="step-number">3</div>
                            <h3 class="step-title">Build, Test & Optimize</h3>
                            <p class="step-description">We develop with precision, ensuring every component works
                                flawlessly together.</p>
                        </div>

                        <div class="process-step">
                            <div class="step-number">4</div>
                            <h3 class="step-title">Ongoing Support</h3>
                            <p class="step-description">We provide continuous support to keep your platform fresh and
                                performing optimally.</p>
                        </div>
                    </div>

                    <div class="section-content">
                        <p>From corporate websites and e-commerce platforms to custom applications, we deliver solutions
                            that are not only beautiful but also built for long-term sustainability.</p>
                    </div>
                </section>

                <!-- Building Beyond Expectations -->
                <section class="content-section">
                    <h2 class="section-title">Building Beyond Expectations</h2>
                    <div class="section-content">
                        <p>As a trusted website development company, we specialize in creating websites that do more
                            than just exist online. Every project we handle goes through a detailed process that ensures
                            quality:</p>
                    </div>

                    <ul class="feature-list">
                        <li><strong>Research & Planning:</strong> Understanding your market, audience, and competitors.
                        </li>
                        <li><strong>Design & UX:</strong> Crafting layouts that reflect your brand and engage users.
                        </li>
                        <li><strong>Development:</strong> Writing clean, scalable code that powers your platform.</li>
                        <li><strong>Testing:</strong> Making sure everything works perfectly before launch.</li>
                        <li><strong>Launch & Support:</strong> Taking your site live with confidence and offering
                            continuous improvements.</li>
                    </ul>

                    <div class="highlight-box">
                        <h3>Collaboration & Transparency</h3>
                        <p>Our strength lies in not just what we create but how we create it. We believe in
                            collaboration and transparency, ensuring you're part of the journey from concept to launch.
                        </p>
                    </div>
                </section>

                <!-- Call to Action -->
                <section class="content-section cta-section">
                    <h2 class="section-title">Let's Build Something Great Together</h2>
                    <p>The digital space offers endless opportunities, but success requires the right partner. Whether
                        you're a new business aiming to make your mark or an established organization ready to scale, we
                        have the expertise to help you achieve your goals.</p>

                    <p>From sleek websites and innovative apps to affordable solutions and cutting-edge designs, we
                        deliver results that matter. With us by your side, you'll not only keep up with the digital age
                        — you'll lead it.</p>

                    <p><strong>Ready to take the next step? Contact us today to discuss your project and discover how we
                            can help you build a digital presence that truly works.</strong></p>

                    <div class="hero-cta">
                        <a class="btn focus-ring" href="/contacts/">Start Your Project</a>
                        <a class="btn secondary focus-ring" href="/get-a-quote/">Get a Quote</a>
                    </div>
                </section>
            </div>
        </main>

        <!-- Footer -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    </div>

    <script src="/scripts/scripts.js?v=20260402-4" defer></script>

</body>

</html>
