<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
    <title>Security Policy — Terra Connect Ltd</title>
    <meta name="description" content="Security Policy for Terra Connect Ltd. How we protect your data, our security standards, and how we respond to data breaches under UK GDPR." />
    <link rel="canonical" href="https://terraconnect.co.uk/security-policy/" />
    <link rel="alternate" hreflang="en-gb" href="https://terraconnect.co.uk/security-policy/" />
    <link rel="alternate" hreflang="x-default" href="https://terraconnect.co.uk/security-policy/" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://terraconnect.co.uk/security-policy/" />
    <meta property="og:title" content="Security Policy — Terra Connect Ltd" />
    <meta property="og:description" content="Security Policy and Data Breach Response for Terra Connect Ltd." />
    <meta property="og:site_name" content="Terra Connect Ltd" />
    <meta property="og:locale" content="en_GB" />
    <meta name="twitter:card" content="summary" />
    <meta name="theme-color" content="#06B6D4" />
    <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png" />
    <link rel="manifest" href="/icon/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" media="print" onload="this.media='all'" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/fontawesome-kit.php'; ?>
<link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/styles/mobile-index.css?v=20260402-5" media="(max-width: 1024px)" />
    <link rel="stylesheet" href="/styles/pages/security-policy.css" />

    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' https://www.googletagmanager.com https://app.chatwoot.com https://kit.fontawesome.com 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://ka-f.fontawesome.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://ka-f.fontawesome.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com https://app.chatwoot.com wss://app.chatwoot.com https://stats.g.doubleclick.net https://ka-f.fontawesome.com; frame-src https://app.chatwoot.com;" />
    <meta http-equiv="X-Content-Type-Options" content="nosniff" />
    <meta http-equiv="X-Frame-Options" content="DENY" />
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin" /></head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <main id="main">
        <div class="content-section inline-style-1">
            <h1 class="inline-style-2">Security Policy</h1>
            <p class="inline-style-3"><strong>Last Updated:</strong> April 2026</p>

            <h2 class="inline-style-4">1. Our Security Commitment</h2>
            <p>Terra Connect Ltd takes the security of personal data and client systems seriously. We implement technical and organisational measures proportionate to the risks involved in our processing activities, in compliance with <strong>UK GDPR Article 32</strong> and the <strong>Data Protection Act 2018</strong>.</p>
            <p class="inline-style-5">Security is not a one-time activity &mdash; we continuously review and improve our security posture to keep pace with evolving threats.</p>

            <h2 class="inline-style-4">2. Technical Security Measures</h2>
            <div class="security-grid">
                <div class="security-card">
                    <h3>Encryption in Transit</h3>
                    <p>All data transmitted between your browser and our website is encrypted using <strong>TLS 1.2 or higher</strong>. We enforce HTTPS across all pages with HSTS headers.</p>
                </div>
                <div class="security-card">
                    <h3>Content Security Policy</h3>
                    <p>Strict CSP headers prevent cross-site scripting (XSS) attacks by controlling which scripts, styles, and resources can load on our pages.</p>
                </div>
                <div class="security-card">
                    <h3>Clickjacking Protection</h3>
                    <p><code>X-Frame-Options: DENY</code> prevents our pages from being embedded in frames, protecting against clickjacking attacks.</p>
                </div>
                <div class="security-card">
                    <h3>IP Anonymisation</h3>
                    <p>Google Analytics is configured with <code>anonymize_ip: true</code>, ensuring IP addresses are truncated before storage.</p>
                </div>
                <div class="security-card">
                    <h3>Access Control</h3>
                    <p>Role-based access controls ensure only authorised personnel can access systems and data. Access is reviewed regularly and revoked on departure.</p>
                </div>
                <div class="security-card">
                    <h3>Referrer Policy</h3>
                    <p><code>Referrer-Policy: strict-origin-when-cross-origin</code> limits the information shared in referrer headers when navigating to external sites.</p>
                </div>
                <div class="security-card">
                    <h3>Dependency Management</h3>
                    <p>We regularly audit and update third-party libraries and dependencies to patch known vulnerabilities.</p>
                </div>
                <div class="security-card">
                    <h3>Backups</h3>
                    <p>Regular backups of client data and system configurations are maintained to enable recovery in the event of data loss or system failure.</p>
                </div>
            </div>

            <h2 class="inline-style-4">3. Organisational Security Measures</h2>
            <ul>
                <li><strong>Confidentiality agreements:</strong> All staff, contractors, and sub-processors are bound by confidentiality obligations</li>
                <li><strong>Security awareness:</strong> Team members are trained on data protection and information security best practices</li>
                <li><strong>Principle of least privilege:</strong> Access to personal data is limited to those who need it to perform their role</li>
                <li><strong>Security reviews:</strong> We conduct periodic security assessments of our systems and processes</li>
                <li><strong>Vendor assessment:</strong> All third-party processors are assessed for security compliance before engagement</li>
                <li><strong>Documented procedures:</strong> We maintain written security procedures including incident response plans</li>
            </ul>

            <h2 class="inline-style-4">4. Data Breach Response</h2>
            <p>We have a documented incident response procedure. In the event of a suspected or confirmed personal data breach:</p>

            <h3 class="inline-style-6">Detection &amp; Containment (Hours 0&ndash;4)</h3>
            <ul>
                <li>The incident is identified and logged with a timestamp</li>
                <li>Immediate containment measures are taken (e.g. isolating affected systems, revoking compromised credentials)</li>
                <li>Our data protection contact is notified immediately</li>
            </ul>

            <h3 class="inline-style-6">Assessment (Hours 4&ndash;24)</h3>
            <ul>
                <li>The scope and nature of the breach is assessed</li>
                <li>Personal data categories and number of individuals affected is determined</li>
                <li>Likelihood of risk to individuals is evaluated</li>
            </ul>

            <h3 class="inline-style-6">Notification (Within 72 Hours)</h3>
            <ul>
                <li>If the breach is likely to result in a risk to individuals&rsquo; rights and freedoms, we notify the <strong>ICO within 72 hours</strong> of becoming aware (UK GDPR Article 33)</li>
                <li>If the breach is likely to result in a <strong>high risk</strong> to individuals, we notify affected individuals without undue delay (UK GDPR Article 34)</li>
                <li>If we are acting as a processor, we notify the controller without undue delay (within 24 hours where possible)</li>
            </ul>

            <h3 class="inline-style-6">Recovery &amp; Review (Post-incident)</h3>
            <ul>
                <li>Full recovery of affected systems and data</li>
                <li>Root cause analysis to understand how the breach occurred</li>
                <li>Implementation of measures to prevent recurrence</li>
                <li>Documentation of the breach, its effects, and actions taken (UK GDPR Article 33(5))</li>
            </ul>

            <h2 class="inline-style-4">5. Responsible Disclosure</h2>
            <p>If you discover a security vulnerability in our website or systems, we ask that you report it to us responsibly. Please:</p>
            <ul>
                <li>Contact us immediately at <a href="mailto:privacy@terraconnect.co.uk" class="inline-style-7">privacy@terraconnect.co.uk</a> with the subject &ldquo;Security Vulnerability&rdquo;</li>
                <li>Provide a detailed description of the vulnerability and how to reproduce it</li>
                <li>Do not exploit the vulnerability or access data beyond what is necessary to demonstrate the issue</li>
                <li>Do not publicly disclose the vulnerability until we have had reasonable time to investigate and remediate it</li>
            </ul>
            <p class="inline-style-5">We will acknowledge your report within <strong>2 business days</strong> and work to resolve confirmed vulnerabilities promptly. We do not currently operate a bug bounty programme.</p>

            <h2 class="inline-style-4">6. Limitations</h2>
            <p>While we implement industry-standard security measures, no system is completely secure. We cannot guarantee absolute security of data transmitted over the internet. We encourage you to use secure passwords, keep your devices updated, and be cautious about phishing attempts.</p>

            <h2 class="inline-style-4">7. Contact</h2>
            <p>For security concerns, vulnerability reports, or questions about this policy:</p>
            <p class="inline-style-5">
                <strong>Security / Data Protection:</strong> <a href="mailto:privacy@terraconnect.co.uk" class="inline-style-7">privacy@terraconnect.co.uk</a><br />
                <strong>General:</strong> <a href="mailto:hello@terraconnect.co.uk" class="inline-style-7">hello@terraconnect.co.uk</a><br />
                <strong>Company:</strong> Terra Connect Ltd (Company No. 12492304)<br />
                <strong>Address:</strong> 57 Tonbridge Drive, Basildon, SS15 6ND, United Kingdom
            </p>
            <p class="inline-style-8">To report a breach directly to the regulator: <a href="https://ico.org.uk/for-organisations/report-a-breach/" rel="noopener noreferrer" target="_blank" class="inline-style-7">ico.org.uk/for-organisations/report-a-breach</a></p>
        </div>
    </main>

    <!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    </div>

    <script src="/scripts/scripts.js?v=20260402-4" defer></script>
</body>
</html>
