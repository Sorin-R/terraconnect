<div class="footer-background">
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <img src="/images/img-svg/logo.svg" alt="Terra Connect logo" width="200" height="60" loading="lazy" />
                <p class="footer-tagline">AI Agency &amp; Digital Solutions in London</p>
                <div class="footer-contact-info">
                    <p><i class="fas fa-envelope" aria-hidden="true"></i> <a
                            href="mailto:hello@terraconnect.co.uk">hello@terraconnect.co.uk</a></p>
                    <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> London, United Kingdom</p>
                </div>
                <div class="footer-social">
                    <a href="https://www.facebook.com/TerraConnectLtd" aria-label="Facebook" rel="noopener noreferrer"
                        target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/sorin-rotaru-terraconnect/" aria-label="LinkedIn"
                        rel="noopener noreferrer" target="_blank"><i class="fab fa-linkedin-in"
                            aria-hidden="true"></i></a>
                    <a href="https://x.com/sorin03032839?s=11" aria-label="X" rel="noopener noreferrer"
                        target="_blank"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/terraconnect.co.uk/" aria-label="Instagram"
                        rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://t.me/terraconnect" aria-label="Telegram" rel="noopener noreferrer"
                        target="_blank"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Services</h4>
                <nav aria-label="Footer services">
                    <a href="/frontend-development/">Front-End Development</a>
                    <a href="/backend-development/">Back-End Development</a>
                    <a href="/mobile-applications/">Mobile Applications</a>
                    <a href="/ai-automation-agency/">AI &amp; Automation</a>
                    <a href="/ai-workflow-automation/">AI Workflow Automation</a>
                    <a href="/marketing-automation-services/">Marketing Automation Services</a>
                    <a href="/services/ai-consulting-strategy/">AI Consulting &amp; Strategy</a>
                </nav>
            </div>

            <div class="footer-column">
                <h4>Company</h4>
                <nav aria-label="Footer company">
                    <a href="/">Home</a>
                    <a href="/portfolio/">Portfolio</a>
                    <a href="/our-services/">Our Services</a>
                    <a href="/about-us/">About Us</a>
                    <a href="/contacts/">Contact</a>
                    <a href="/get-a-quote/">Get a Quote</a>
                </nav>
            </div>

            <div class="footer-column">
                <h4>Legal</h4>
                <nav aria-label="Footer legal">
                    <a href="/privacy-policy/">Privacy Policy</a>
                    <a href="/terms-of-service/">Terms of Service</a>
                    <a href="/cookie-policy/">Cookie Policy</a>
                    <a href="/accessibility-statement/">Accessibility Statement</a>
                    <a href="/data-processing-agreement/">Data Processing Agreement</a>
                    <a href="/cancellation-policy/">Cancellation Policy</a>
                    <a href="/service-level-agreement/">Service Level Agreement</a>
                </nav>
            </div>
        </div>

        <div class="footer-policy-links">
            <a href="/anti-spam-policy/">Anti-Spam Policy</a>
            <span class="footer-policy-separator">&bull;</span>
            <a href="/intellectual-property-policy/">IP Policy</a>
            <span class="footer-policy-separator">&bull;</span>
            <a href="/complaints-policy/">Complaints &amp; Disputes</a>
            <span class="footer-policy-separator">&bull;</span>
            <a href="/subprocessor-list/">Subprocessor List</a>
            <span class="footer-policy-separator">&bull;</span>
            <a href="/security-policy/">Security Policy</a>
        </div>
        <div class="copyright">
            <p>&#169; 2026 Terra Connect Ltd. All Rights Reserved.</p>
            <p>Terra Connect Ltd &bull; London &bull; Registered in England &amp; Wales</p>
        </div>
    </footer>
</div>

<button class="chatwoot-custom-launcher focus-ring" id="chatwootCustomLauncher" type="button"
    aria-label="Open live chat" disabled>
    <i class="fa-solid fa-comment-dots" aria-hidden="true"></i>
    <span class="sr-only">Talk to Human</span>
</button>

<script>
window.chatwootSettings = {
    position: 'right',
    launcherTitle: 'Talk to Human',
    hideMessageBubble: true,
};

(function(documentRef, tagName) {
    var baseUrl = 'https://app.chatwoot.com';
    var websiteToken = 'vwcDkik1GySLH9ue1GZStfXC';
    var launcher = documentRef.getElementById('chatwootCustomLauncher');

    if (!websiteToken || websiteToken === 'YOUR_CHATWOOT_WEBSITE_TOKEN') {
        console.warn('Chatwoot website token is not configured.');
        if (launcher) {
            launcher.hidden = true;
        }
        return;
    }

    if (launcher) {
        launcher.addEventListener('click', function() {
            if (window.$chatwoot && typeof window.$chatwoot.toggle === 'function') {
                window.$chatwoot.toggle('open');
            }
        });

        window.addEventListener('chatwoot:ready', function() {
            launcher.disabled = false;
        });
    }

    var script = documentRef.createElement(tagName);
    var firstScript = documentRef.getElementsByTagName(tagName)[0];

    script.src = baseUrl + '/packs/js/sdk.js';
    script.defer = true;
    script.async = true;
    firstScript.parentNode.insertBefore(script, firstScript);

    script.onload = function() {
        window.chatwootSDK.run({
            websiteToken: websiteToken,
            baseUrl: baseUrl,
        });
    };
})(document, 'script');
</script>
