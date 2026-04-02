# Claude Code: Terra Connect Website Fixes - STARTUP PROMPT

## 📋 QUICK START INSTRUCTIONS

**Copy and paste this entire section into Claude Code (terminal) to begin:**

---

## START PROMPT FOR CLAUDE CODE

```
I need to fix all issues on my Terra Connect website (https://terraconnect.co.uk/). 
I have a comprehensive guide at WEBSITE_FIX_GUIDE.md with all the details.

Here's a summary of what needs to be fixed:

## CRITICAL ISSUES (FIX FIRST):
1. Remove duplicate development process content (steps repeated 2-3 times)
2. Add alt text to all images for accessibility and SEO
3. Fix carousel functionality (navigation arrows not working)
4. Add security headers (CSP, X-Frame-Options, HSTS)

## HIGH PRIORITY:
5. Add meta description and Open Graph tags
6. Add JSON-LD structured data (Organization, LocalBusiness, Service schemas)
7. Fix HTML heading hierarchy (one H1, proper H2-H3 nesting)
8. Add testimonials and case studies section

## MEDIUM PRIORITY:
9. Optimize performance (minify CSS/JS, gzip compression, caching)
10. Add Google Analytics 4 and conversion tracking
11. Expand footer with contact info and social media
12. Add privacy policy, terms of service, cookie policy pages
13. Enhance service descriptions with specific tech stacks and results

## WHAT I HAVE:
- Website URL: https://terraconnect.co.uk/
- Full audit report with detailed recommendations
- Detailed fix guide: WEBSITE_FIX_GUIDE.md
- Code examples and templates for every fix

## WHAT I NEED:
1. A step-by-step plan to fix all these issues
2. Updated HTML files with all fixes implemented
3. CSS/JS files for styling and functionality
4. New pages (privacy policy, terms, cookie policy)
5. Testing recommendations

## START WITH:
- Review the WEBSITE_FIX_GUIDE.md file
- Create a detailed implementation plan for Phase 1 (critical issues)
- Show me the specific HTML changes needed for each critical issue
- Then move to Phase 2 and Phase 3

Let's start with Phase 1: Critical Issues. Walk me through each fix step by step.
```

---

## HOW TO USE THIS

### Option 1: Terminal/Claude Code (Recommended)

1. **Open Claude Code** (Claude.ai terminal mode or Claude Code app)
2. **Copy the prompt above** (the entire "START PROMPT FOR CLAUDE CODE" section)
3. **Paste it** into the Claude Code chat
4. **Press Enter** to start
5. Claude will:
   - Ask clarifying questions if needed
   - Create a detailed plan
   - Show you specific code changes
   - Generate updated files
   - Walk through Phase 1, then Phase 2, then Phase 3

### Option 2: Detailed Conversation Flow

If you want to guide Claude Code through specific fixes, follow this conversation pattern:

**Message 1 (Initial Request):**
```
I need help fixing my website: https://terraconnect.co.uk/

Here are the critical issues:
1. Duplicate development process content
2. Missing alt text on images
3. Broken carousel
4. Missing security headers

I have a detailed guide: WEBSITE_FIX_GUIDE.md

Start with Phase 1 (critical issues only). Create the updated HTML for the homepage with all Phase 1 fixes implemented.
```

**Message 2 (For Phase 2):**
```
Great! Now let's do Phase 2: High Priority fixes.

Update the HTML to include:
1. Meta tags and Open Graph tags
2. JSON-LD structured data
3. Fixed heading hierarchy
4. New testimonials section with 5 template slots

Show me the code and explain what goes in the <head> and body sections.
```

**Message 3 (For Phase 3):**
```
Now Phase 3: Medium Priority fixes.

1. Create a new privacy-policy.html page
2. Create a terms-of-service.html page
3. Create an enhanced footer with contact info
4. Enhance the service descriptions with specific tech stacks

Use the templates from WEBSITE_FIX_GUIDE.md.
```

### Option 3: Complete Website Overhaul

If you want Claude Code to fix everything at once:

```
Complete website overhaul for https://terraconnect.co.uk/

Fix all 13 issues from the audit (both critical, high priority, and medium priority).

Provide:
1. Updated index.html with all fixes
2. New CSS file with styling optimizations
3. New JavaScript file with carousel fixes
4. New pages: privacy-policy.html, terms-of-service.html, cookie-policy.html
5. Updated footer.html
6. Updated services.html with enhanced descriptions
7. New testimonials.html section
8. Implementation checklist
9. Testing recommendations

Use the WEBSITE_FIX_GUIDE.md for all details and code examples.
```

---

## WHAT TO EXPECT FROM CLAUDE CODE

### Phase 1 Output (Critical Issues)
- Updated HTML with no duplicate content
- All `<img>` tags with alt text
- Fixed carousel with indicators
- `.htaccess` or `nginx.conf` with security headers
- Explanation of each change
- Testing steps

### Phase 2 Output (High Priority)
- Meta tags and Open Graph markup
- JSON-LD schemas
- Fixed heading hierarchy
- Testimonials section (with 5 template slots for real testimonials)
- Case studies section (with 3 template slots)
- Implementation notes

### Phase 3 Output (Medium Priority)
- Privacy Policy page (HTML)
- Terms of Service page (HTML)
- Cookie Policy page (HTML)
- Expanded footer with contact info and social links
- Enhanced service descriptions
- CSS for styling
- JavaScript for interactions
- Complete implementation checklist

---

## KEY INFORMATION FOR CLAUDE CODE

### Website Details
- **URL:** https://terraconnect.co.uk/
- **Type:** AI Agency / IT Company
- **Services:** Web Development, Mobile Apps, Backend Systems, AI/Chatbots
- **Location:** London, England
- **Target Clients:** Startups and businesses

### Hosting Environment
- Likely Apache or Nginx (to be confirmed)
- Current tech stack: HTML5, CSS3, JavaScript, Bootstrap, React, Node.js
- Check your hosting control panel (cPanel, Plesk) for server details

### Contact Information (To Be Added)
- Email: hello@terraconnect.co.uk (example - update with actual)
- Phone: +44 (0) 20 [YOUR PHONE] (add your phone number)
- Address: 123 Tech Street, London, EC1A 1BB (update with actual address)
- Social Media Profiles: (add your actual profiles)

---

## BEFORE YOU START

✅ **Backup Your Website**
```bash
# If you have access to server, run:
cp -r public_html public_html_backup

# Or download via FTP/SFTP
```

✅ **Identify Your Hosting Type**
- Check your hosting control panel
- Is it Apache (usually with cPanel) or Nginx?
- This matters for implementing security headers

✅ **Collect Client Information**
- Reach out to 5-10 clients for testimonial quotes
- Get permission to use their names/companies
- Take screenshots of successful projects for case studies

✅ **Update Company Information**
- Actual phone number
- Actual email address
- Actual physical address (if operating from London)
- Social media profile URLs (Facebook, LinkedIn, Twitter, GitHub)

---

## CONVERSATION STARTERS FOR CLAUDE CODE

Pick one based on what you want to do:

### If you want a complete fix at once:
```
Fix all issues on https://terraconnect.co.uk/ using the guide. 
Provide updated files for everything.
```

### If you want to do it phase by phase:
```
I'm fixing my website phase by phase. Start with Phase 1 critical issues.
Review WEBSITE_FIX_GUIDE.md and create updated HTML.
```

### If you want specific guidance:
```
Show me exactly how to implement the carousel fix. Include:
- HTML changes
- JavaScript (if needed)
- Testing steps
- Accessibility requirements
```

### If you want migration help:
```
I need to migrate these changes to my live site. Show me:
- Staging environment setup
- Testing checklist before deploying
- Rollback plan if something breaks
- Monitoring after deployment
```

---

## ESTIMATED TIMELINE

**Using Claude Code:**

| Phase | Complexity | Time | Effort |
|-------|-----------|------|--------|
| Phase 1 (Critical) | High | 2-3 hours | Straightforward HTML fixes |
| Phase 2 (High Priority) | Medium | 3-4 hours | More content + schemas |
| Phase 3 (Medium Priority) | Low-Medium | 2-3 hours | Pages + enhancements |
| **Testing & Deployment** | Medium | 2-3 hours | QA + uploading to server |
| **Total** | - | **9-13 hours** | Can do in 2-3 days |

---

## FILE LOCATIONS

After Claude Code generates the files:

```
/outputs/
├── index.html (updated with all fixes)
├── privacy-policy.html
├── terms-of-service.html
├── cookie-policy.html
├── styles.css (optimized + new styles)
├── script.js (carousel fixes + analytics)
├── .htaccess (security headers - for Apache)
├── nginx.conf (security headers - for Nginx)
├── IMPLEMENTATION_PLAN.md
├── TESTING_CHECKLIST.md
└── DEPLOYMENT_GUIDE.md
```

---

## SUPPORT RESOURCES

If Claude Code doesn't have answers:

- **HTML/CSS Issues:** MDN Web Docs (https://developer.mozilla.org/)
- **SEO/Schema:** schema.org (https://schema.org/)
- **Security:** OWASP (https://owasp.org/)
- **Performance:** Web.dev (https://web.dev/)
- **Accessibility:** WCAG 2.1 (https://www.w3.org/WAI/WCAG21/quickref/)

---

## CHECKLIST BEFORE CONTACTING SUPPORT

- [ ] I've backed up my original website files
- [ ] I know my hosting type (Apache/Nginx)
- [ ] I have company contact information ready
- [ ] I've collected 5+ client testimonials
- [ ] I have actual project case study details
- [ ] I know my social media profiles
- [ ] I understand the 3 phases of fixes
- [ ] I've read through WEBSITE_FIX_GUIDE.md

---

## NEXT STEPS

1. **Copy the START PROMPT above**
2. **Paste it into Claude Code**
3. **Let Claude Code create your plan**
4. **Follow the implementation steps**
5. **Test everything thoroughly**
6. **Deploy to your live site**
7. **Monitor with Google Analytics**
8. **Track improvements over 4-6 weeks**

---

**Document Version:** 1.0  
**Created:** April 2026  
**For:** Terra Connect Website Fixes  
**Website:** https://terraconnect.co.uk/

Good luck! 🚀
