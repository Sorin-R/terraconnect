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
    <title>Privacy Policy — Terra Connect Ltd</title>
    <meta name="description"
        content="Privacy Policy for Terra Connect Ltd. Learn how we collect, use, and protect your personal data in compliance with UK GDPR, the Data Protection Act 2018, and PECR." />

    <!-- Canonical / Hreflang -->
    <link rel="canonical" href="https://www.terraconnect.co.uk/privacy-policy/" />
    <link rel="alternate" hreflang="en-gb" href="https://www.terraconnect.co.uk/privacy-policy/" />
    <link rel="alternate" hreflang="x-default" href="https://www.terraconnect.co.uk/privacy-policy/" />

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.terraconnect.co.uk/privacy-policy/" />
    <meta property="og:title" content="Privacy Policy — Terra Connect Ltd" />
    <meta property="og:description"
        content="Privacy Policy for Terra Connect Ltd. Learn how we collect, use, and protect your personal data." />
    <meta property="og:site_name" content="Terra Connect Ltd" />
    <meta property="og:locale" content="en_GB" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Privacy Policy — Terra Connect Ltd" />

    <!-- App / Theme -->
    <meta name="theme-color" content="#06B6D4" />

    <!-- Favicons / Manifest -->
    <link rel="shortcut icon" href="/icon/favicon-v2.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png" />
    <link rel="manifest" href="/icon/site.webmanifest" />

    <!-- Fonts / Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
        media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        media="print" onload="this.media='all'" />

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/styles/mobile-index.css?v=20260402-5" media="(max-width: 1024px)" />

    <!-- Security -->
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self';
        script-src 'self' https://www.googletagmanager.com 'unsafe-inline';
        style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com;
        font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com;
        img-src 'self' data: https:;
        connect-src 'self' https://www.google-analytics.com https://stats.g.doubleclick.net;
        ">
    <meta http-equiv="X-Content-Type-Options" content="nosniff" />
    <meta http-equiv="X-Frame-Options" content="DENY" />
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin" />

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            overflow-x: hidden !important;
            font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background-color: rgb(2, 10, 34);
            color: #fff;
            background-image: url('/images/img-webp/jeremiah.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .visually-hidden {
            position: absolute !important; width: 1px; height: 1px; padding: 0;
            margin: -1px; overflow: hidden; clip: rect(0,0,1px,1px); white-space: nowrap; border: 0;
        }
        .skip-link { position: absolute; left: -9999px; top: -9999px; }
        .skip-link:focus {
            left: 16px; top: 16px; z-index: 4000; background: #fff; color: #000;
            padding: 8px 12px; border-radius: 8px;
        }
        .focus-ring:focus-visible { outline: 3px solid #4657ed; outline-offset: 3px; }
        header {
            position: fixed; top: 10px; left: 10px; right: 10px; margin: 0; padding: 12px 5%;
            display: flex; justify-content: space-between; align-items: center; z-index: 1000;
            background-color: transparent;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, border-radius 0.3s ease;
            border-radius: 20px;
        }
        header.scrolled { background-color: rgb(2, 10, 34); box-shadow: #4657ed 0 0 5px 2px; }
        #navMenu { display: flex; align-items: center; justify-content: center; }
        #navMenu ul { display: flex; list-style: none; gap: 10px; }
        #navMenu ul li a {
            color: #fff; font-weight: 500; font-size: 16px; padding: 3px 20px;
            position: relative; display: inline-block;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        #navMenu ul li a::after, #navMenu ul li a::before {
            content: ''; position: absolute; width: 0; height: 3px; left: 0;
            background-color: #ffffff; transition: width 0.3s ease-in-out;
        }
        #navMenu ul li a::after { bottom: -6px; }
        #navMenu ul li a::before { top: -6px; }
        #navMenu ul li a:hover::after, #navMenu ul li a:hover::before { width: 100%; }
        .menu-icon {
            display: none; font-size: 32px; line-height: 1; cursor: pointer; z-index: 1111;
            background: transparent; border: 0; color: #fff;
        }
        .logo-header { width: 250px; height: auto; z-index: 100; }
        main {
            min-height: 100vh;
            background: rgba(5, 5, 23, 0.8);
            padding-top: 120px;
            padding-bottom: 40px;
            display: flow-root;
        }
        @media (max-width: 1024px) {
            .logo-header { width: 180px; height: auto; }
            .menu-icon { display: flex; }
            #navMenu {
                display: none; position: fixed; inset: 0; width: 100%; height: 100dvh;
                background-color: rgb(2, 10, 34); text-align: center; padding: 80px 0 20px; z-index: 1000;
            }
            #navMenu.active { display: block; }
            #navMenu ul { flex-direction: column; gap: 10px; }
            #navMenu ul li a { font-size: 18px; padding: 15px 24px; display: block; }
            #navMenu ul li a::before, #navMenu ul li a::after { content: none !important; }
        }
    </style>
</head>

<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <main id="main">
        <div class="content-section" style="max-width: 900px; margin: 0 auto 40px; padding: 60px 40px;">
            <h1 style="font-size: 2.5rem; text-align: center; margin-bottom: 10px; position: static; transform: none; opacity: 1;">Privacy Policy</h1>
            <p style="text-align: center; color: #888; margin-bottom: 40px;"><strong>Last Updated:</strong> April 2026</p>

            <!-- 1. Data Controller -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">1. Data Controller</h2>
            <p>Terra Connect Ltd (&ldquo;we&rdquo;, &ldquo;us&rdquo;, &ldquo;our&rdquo;) is the data controller responsible for the personal data collected through our website <a href="https://www.terraconnect.co.uk" style="color: #06b6d4;">terraconnect.co.uk</a> and our related services.</p>
            <p style="margin-top: 10px;">
                <strong>Registered Name:</strong> Terra Connect Ltd<br />
                <strong>Registered In:</strong> England &amp; Wales<br />
                <strong>Registered Office:</strong> 57 Tonbridge Drive, Basildon, SS15 6ND, United Kingdom<br />
                <strong>Company No.:</strong> 12492304 (Registered in England &amp; Wales)<br />
                <strong>Data Protection Contact:</strong> <a href="mailto:privacy@terraconnect.co.uk" style="color: #06b6d4;">privacy@terraconnect.co.uk</a>
            </p>
            <p style="margin-top: 10px;">This policy is issued under the <strong>UK General Data Protection Regulation (UK GDPR)</strong>, the <strong>Data Protection Act 2018</strong>, and the <strong>Privacy and Electronic Communications Regulations 2003 (PECR)</strong>. Where we refer to &ldquo;GDPR&rdquo; in this policy, we mean the UK GDPR as retained in domestic law.</p>

            <!-- 2. Information We Collect -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">2. Information We Collect</h2>
            <p>We collect the following categories of personal data:</p>

            <h3 style="color: #6b7cf0; margin: 20px 0 10px; font-size: 1.1rem;">a) Information You Provide Directly</h3>
            <ul>
                <li><strong>Contact details</strong> &ndash; name, email address, phone number, company name (when you submit a contact or quote request form)</li>
                <li><strong>Project information</strong> &ndash; details about your requirements that you voluntarily share with us</li>
                <li><strong>Communications</strong> &ndash; the content of emails, messages, or enquiries you send us</li>
            </ul>

            <h3 style="color: #6b7cf0; margin: 20px 0 10px; font-size: 1.1rem;">b) Information Collected Automatically</h3>
            <ul>
                <li><strong>Device data</strong> &ndash; IP address (anonymised), browser type and version, operating system, screen resolution</li>
                <li><strong>Usage data</strong> &ndash; pages visited, time spent on pages, referring URLs, click paths (collected only with your consent via Google Analytics)</li>
                <li><strong>Cookie data</strong> &ndash; see our <a href="/cookie-policy/" style="color: #06b6d4;">Cookie Policy</a> for full details</li>
            </ul>

            <h3 style="color: #6b7cf0; margin: 20px 0 10px; font-size: 1.1rem;">c) Information We Do Not Collect</h3>
            <p>We do not knowingly collect special category data (e.g. health, ethnicity, political opinions, biometric data), nor do we collect personal data from children under 16.</p>

            <!-- 3. Lawful Basis for Processing -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">3. Lawful Basis for Processing</h2>
            <p>Under UK GDPR Article 6, we rely on the following lawful bases:</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead>
                    <tr>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Processing Activity</th>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Lawful Basis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Responding to your contact-form enquiries</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Consent</strong> (Article 6(1)(a)) &ndash; you actively submit the form</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Delivering services you have contracted</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Contract</strong> (Article 6(1)(b)) &ndash; necessary to fulfil our agreement</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Sending marketing communications</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Consent</strong> (Article 6(1)(a)) &ndash; only with your explicit opt-in</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Analytics cookies (Google Analytics)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Consent</strong> (Article 6(1)(a)) &ndash; via our cookie consent banner; analytics are blocked until you accept</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Improving our website and services</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Legitimate Interests</strong> (Article 6(1)(f)) &ndash; we have a legitimate interest in understanding how our website is used; we have assessed that this does not override your rights</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Complying with legal or regulatory obligations</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Legal Obligation</strong> (Article 6(1)(c)) &ndash; e.g. tax, accounting, or law-enforcement requests</td>
                    </tr>
                </tbody>
            </table>
            <p>Where we rely on <strong>legitimate interests</strong>, we have carried out a Legitimate Interest Assessment (LIA) and concluded that our processing is proportionate and does not override your fundamental rights. You may request a copy of this assessment by contacting us.</p>

            <!-- 4. How We Use Your Information -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">4. How We Use Your Information</h2>
            <ul>
                <li>To respond to your enquiries and provide quotations</li>
                <li>To deliver, manage, and improve the services you have requested</li>
                <li>To send marketing communications (only with your prior consent; you may withdraw consent at any time)</li>
                <li>To analyse aggregated, anonymised website usage via Google Analytics (only after you consent to analytics cookies)</li>
                <li>To maintain the security and integrity of our website</li>
                <li>To comply with applicable laws and regulations</li>
            </ul>

            <!-- 5. Data Sharing & Processors -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">5. Data Sharing &amp; Processors</h2>
            <p><strong>We do not sell, rent, or trade your personal data.</strong></p>
            <p style="margin-top: 10px;">We may share data with the following categories of third-party processors, each of whom operates under a Data Processing Agreement (DPA) compliant with UK GDPR Article 28:</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead>
                    <tr>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Processor</th>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Purpose</th>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Google LLC (Google Analytics)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Website analytics (consent-gated)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">USA (see Section 7)</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Website hosting provider</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Hosting &amp; content delivery</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">UK / EEA</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Email service provider</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Transactional &amp; marketing emails</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">UK / EEA</td>
                    </tr>
                </tbody>
            </table>
            <p>We may also disclose data when required by law, court order, or to protect the rights, property, or safety of Terra Connect Ltd, our clients, or others.</p>

            <!-- 6. Data Retention -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">6. Data Retention</h2>
            <p>We keep your personal data only for as long as necessary for the purposes set out in this policy:</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead>
                    <tr>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Data Category</th>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Retention Period</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Contact-form enquiries</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">12 months from submission, then securely deleted</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Client project data</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Duration of the contract plus 6 years (legal/tax obligation)</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Analytics data (Google Analytics)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">14 months (configured in our GA property)</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Marketing subscriber data</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Until you unsubscribe, or 24 months of inactivity, whichever is sooner</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Cookie consent record</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">12 months (then re-prompted)</td>
                    </tr>
                </tbody>
            </table>
            <p>When the retention period expires, data is securely deleted or irreversibly anonymised.</p>

            <!-- 7. International Data Transfers -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">7. International Data Transfers</h2>
            <p>Some of our processors are based outside the UK. Where personal data is transferred to a country that does not benefit from a UK adequacy decision, we ensure appropriate safeguards are in place:</p>
            <ul>
                <li><strong>Google Analytics (USA)</strong> &ndash; protected by the UK International Data Transfer Agreement (IDTA) / Addendum to Standard Contractual Clauses, Google&rsquo;s Data Processing Amendment, and supplementary technical measures including IP anonymisation, encryption in transit, and disabling of ad-personalisation signals.</li>
            </ul>
            <p style="margin-top: 10px;">You may request a copy of the relevant safeguards by emailing <a href="mailto:privacy@terraconnect.co.uk" style="color: #06b6d4;">privacy@terraconnect.co.uk</a>.</p>

            <!-- 8. Your Rights -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">8. Your Rights Under UK GDPR</h2>
            <p>Under the UK GDPR and the Data Protection Act 2018, you have the following rights. You can exercise any of them free of charge by emailing <a href="mailto:privacy@terraconnect.co.uk" style="color: #06b6d4;">privacy@terraconnect.co.uk</a>. We will respond within <strong>one calendar month</strong> (extendable by two further months for complex requests, with notice).</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <thead>
                    <tr>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">Right</th>
                        <th style="padding: 12px 15px; text-align: left; border-bottom: 1px solid rgba(70, 87, 237, 0.3); background: rgba(70, 87, 237, 0.15); color: #fff; font-weight: 600;">What It Means</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Access</strong> (Article 15)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Request a copy of the personal data we hold about you</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Rectification</strong> (Article 16)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Ask us to correct inaccurate or incomplete data</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Erasure</strong> (Article 17)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Ask us to delete your data (&ldquo;right to be forgotten&rdquo;) where there is no compelling reason for continued processing</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Restriction</strong> (Article 18)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Ask us to limit how we use your data while a concern is investigated</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Portability</strong> (Article 20)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Receive your data in a structured, commonly used, machine-readable format</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Objection</strong> (Article 21)</td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Object to processing based on legitimate interests or direct marketing at any time</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;"><strong>Withdraw Consent</strong></td>
                        <td style="padding: 12px 15px; border-bottom: 1px solid rgba(70, 87, 237, 0.15); color: #e0e0e0;">Withdraw any previously given consent at any time, without affecting the lawfulness of processing before withdrawal</td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-top: 10px;">If you are dissatisfied with how we handle your data, you have the right to lodge a complaint with the <strong>Information Commissioner&rsquo;s Office (ICO)</strong>:</p>
            <p style="margin-top: 5px;">
                Website: <a href="https://ico.org.uk/" style="color: #06b6d4;" rel="noopener noreferrer" target="_blank">ico.org.uk</a><br />
                Helpline: 0303 123 1113<br />
                Address: Wycliffe House, Water Lane, Wilmslow, Cheshire, SK9 5AF
            </p>

            <!-- 9. Automated Decision-Making -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">9. Automated Decision-Making &amp; Profiling</h2>
            <p>We do not use your personal data for automated decision-making or profiling that produces legal or similarly significant effects on you (UK GDPR Article 22).</p>

            <!-- 10. Security -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">10. Data Security</h2>
            <p>We implement appropriate technical and organisational measures to protect your personal data (UK GDPR Article 32), including:</p>
            <ul>
                <li>SSL/TLS encryption for all data in transit</li>
                <li>Content Security Policy (CSP) headers to prevent cross-site scripting</li>
                <li>IP anonymisation in Google Analytics (<code>anonymize_ip: true</code>)</li>
                <li>Ad-personalisation signals disabled in analytics</li>
                <li>Regular security reviews and software updates</li>
                <li>Access controls limiting data access to authorised personnel only</li>
            </ul>
            <p style="margin-top: 10px;">No method of transmission or storage is 100&percnt; secure. If you believe your data has been compromised, please contact us immediately.</p>

            <!-- 11. Data Breach Notification -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">11. Data Breach Notification</h2>
            <p>In the event of a personal data breach that poses a risk to your rights and freedoms, we will:</p>
            <ul>
                <li>Notify the <strong>ICO within 72 hours</strong> of becoming aware of the breach (UK GDPR Article 33)</li>
                <li>Notify affected individuals <strong>without undue delay</strong> where the breach is likely to result in a high risk to their rights and freedoms (UK GDPR Article 34)</li>
                <li>Document all breaches, their effects, and the remedial actions taken</li>
            </ul>

            <!-- 12. Cookies -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">12. Cookies</h2>
            <p>We use cookies on this website. Non-essential cookies (analytics) are <strong>blocked by default</strong> and only activated after you give explicit consent via our cookie banner. For full details, including cookie names, purposes, durations, and how to manage your preferences, please see our <a href="/cookie-policy/" style="color: #06b6d4;">Cookie Policy</a>.</p>

            <!-- 13. Children's Privacy -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">13. Children&rsquo;s Privacy</h2>
            <p>Our website and services are not directed at individuals under 16 years of age. We do not knowingly collect personal data from children. If you believe we have collected such data, please contact us and we will delete it promptly.</p>

            <!-- 14. Changes to This Policy -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">14. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. When we make material changes, we will update the &ldquo;Last Updated&rdquo; date at the top of this page. We encourage you to review this page periodically. Continued use of our website after changes are posted constitutes acceptance of the updated policy.</p>

            <!-- 15. Contact Us -->
            <h2 style="text-align: left; font-size: 1.4rem; margin-bottom: 15px; opacity: 1; transform: none;">15. Contact Us</h2>
            <p>If you have questions about this Privacy Policy, wish to exercise your data rights, or want to raise a concern about how we handle your data, please contact us:</p>
            <p style="margin-top: 10px;">
                <strong>Data Protection Contact:</strong> <a href="mailto:privacy@terraconnect.co.uk" style="color: #06b6d4;">privacy@terraconnect.co.uk</a><br />
                <strong>General Enquiries:</strong> <a href="mailto:hello@terraconnect.co.uk" style="color: #06b6d4;">hello@terraconnect.co.uk</a><br />
                <strong>Website:</strong> <a href="/contacts/" style="color: #06b6d4;">terraconnect.co.uk/contacts</a><br />
                <strong>Company:</strong> Terra Connect Ltd (Company No. 12492304)<br />
                <strong>Address:</strong> 57 Tonbridge Drive, Basildon, SS15 6ND, United Kingdom
            </p>
        </div>
    </main>

    <!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    </div>

    <script src="/scripts/scripts.js?v=20260402-3" defer></script>
</body>

</html>
