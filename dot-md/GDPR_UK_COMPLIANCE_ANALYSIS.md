# GDPR & UK Data Protection Compliance Analysis
## Terra Connect Ltd - Legal Documents Review

**Analysis Date:** April 2, 2026
**Documents Reviewed:**
- Privacy Policy (Last Updated: April 2025)
- Terms of Service (Effective Date: April 2025)
- Cookie Policy (Last Updated: April 2026)

---

## Executive Summary

**Overall Compliance Status: ⚠️ PARTIALLY COMPLIANT WITH CRITICAL GAPS**

The legal documents show good foundational understanding of GDPR and UK data protection requirements, but contain several **critical gaps** and areas requiring immediate remediation. The compliance level is approximately **65-70%**.

---

## 1. PRIVACY POLICY ANALYSIS

### ✅ Strengths

| Requirement | Status | Details |
|---|---|---|
| **Transparency** | ✅ Present | Clear identification of data controller (Terra Connect Ltd) |
| **Data Collection disclosure** | ✅ Present | Lists collected data types (contact, device, usage, forms) |
| **Purpose limitation** | ✅ Present | Specifies uses of data (service provision, communications, analytics) |
| **Data retention periods** | ✅ Present | Specifies retention: contact (12 months), analytics (26 months), marketing (until unsubscribe) |
| **User rights** | ✅ Present | Lists GDPR rights: access, correction, deletion, portability, consent withdrawal, ICO complaint |
| **Security measures** | ✅ Present | Mentions SSL/TLS, CSP headers, security reviews |
| **Cookies reference** | ✅ Present | Cross-references Cookie Policy |
| **Contact information** | ✅ Present | Provides email and website contact details |
| **Legal basis mention** | ✅ Partial | References GDPR & UK Data Protection Act 2018 |

### ❌ Critical Gaps & Issues

#### 1. **Missing Lawful Basis for Processing (GDPR Article 6)**
**Severity:** 🔴 CRITICAL
- The policy does NOT explicitly state the lawful basis for processing
- GDPR requires one of six bases: consent, contract, legal obligation, vital interests, public task, or legitimate interests
- **Gap:** No statement like "We process your data based on consent" or "legitimate interests"
- **Risk:** Processing without clear lawful basis is a GDPR violation

**Required Addition:**
```
"Legal Basis for Processing: We process your personal data on the following lawful bases:
- Consent: For marketing communications and analytics cookies
- Legitimate Interests: To improve our website and services
- Contract: To provide services you request from us
- Legal Obligation: To comply with applicable laws"
```

#### 2. **Missing Data Protection Officer (DPO) Contact**
**Severity:** 🔴 CRITICAL
- GDPR Articles 37-39 may require a DPO depending on company size/activity
- UK Data Protection Act 2018 has similar requirements
- **Current:** Only general contact email provided
- **Gap:** No DPO email or method to contact DPO specifically

**Note:** This requirement depends on:
- If your company processes large-scale personal data routinely
- If you process special categories of data
- If you engage in systematic monitoring of individuals

#### 3. **Missing Legitimate Interest Assessment (LIA)**
**Severity:** 🔴 CRITICAL
- If using "legitimate interests" as lawful basis, must document and disclose LIA
- Current policy mentions "improve website and user experience" but doesn't explain the balancing test
- **Gap:** No transparency on how company balanced interests vs. data subjects' rights

#### 4. **Incomplete Cookie Consent Documentation**
**Severity:** 🔴 CRITICAL
- States "cookie consent" is required but Privacy Policy doesn't fully align with Cookie Policy
- PECR (Privacy & Electronic Communications Regulations) requires **explicit prior consent** for non-essential cookies
- **Gap:** Doesn't clearly state which cookies require prior consent vs. which are exempt

#### 5. **Google Analytics - Potential Data Transfer Issue**
**Severity:** 🟡 HIGH
- Privacy Policy mentions "Google Analytics" but doesn't address:
  - EU-US data transfer mechanism (Standard Contractual Clauses after Schrems II ruling)
  - Whether anonymization is enabled
  - DPIA (Data Protection Impact Assessment) for transfer
- **Gap:** No mention of data transfers to third countries

**Required:**
```
"International Data Transfers: Personal data may be transferred to
Google Analytics servers in the USA. We have implemented Standard
Contractual Clauses and other appropriate safeguards as required by GDPR Article 46."
```

#### 6. **Missing Information for Article 13/14 Transparency**
**Severity:** 🟡 HIGH

Missing from Privacy Policy:
- ❌ Data Protection Officer contact (if applicable)
- ❌ Legitimate Interest Assessment details
- ❌ Automated decision-making/profiling disclosure
- ❌ Contractual obligations regarding data provision
- ❌ Sources of data (if not directly collected)
- ❌ Complaint rights with supervisory authority details
- ❌ How to request data access

#### 7. **Vague Data Sharing Statements**
**Severity:** 🟡 MEDIUM
- States "service providers" but doesn't name them specifically
- No mention of Data Processing Agreements (DPAs) with processors
- **Issue:** Users can't assess risk of data sharing

**Required:**
```
"Processors: Google Analytics (analytics), Cloudflare (hosting),
[Email provider] (communications). We maintain Data Processing Agreements
with all processors as required by GDPR Article 28."
```

#### 8. **No Automated Decision-Making Disclosure**
**Severity:** 🟡 MEDIUM
- Doesn't state if automated decision-making or profiling occurs
- GDPR Article 22 requires disclosure of such processing
- Users have right to human review if this occurs

#### 9. **Data Retention Period Ambiguity**
**Severity:** 🟡 MEDIUM
- "Marketing data: until you unsubscribe" - what if person never unsubscribes?
- Should have maximum retention period regardless
- **Issue:** No clear end-date for retention

#### 10. **Missing Deletion/Rectification Procedures**
**Severity:** 🟡 MEDIUM
- States users have right to deletion and correction
- Doesn't explain HOW to exercise these rights
- No timeframe for response (GDPR requires 30 days, extendable to 90)

---

## 2. COOKIE POLICY ANALYSIS

### ✅ Strengths

| Aspect | Status | Details |
|---|---|---|
| **Cookie Types** | ✅ Good | Lists essential and analytics cookies |
| **Cookie Duration** | ✅ Good | Provides specific durations (1 year, 2 years) |
| **Management Instructions** | ✅ Good | Explains how to control cookies by browser |
| **Analytics Disclosure** | ✅ Good | Names Google Analytics as provider |
| **Cookie Table** | ✅ Good | Clear table format with Cookie name, purpose, duration |
| **Consent Banner Mention** | ✅ Good | References banner asking for permission |

### ❌ Critical Gaps & Issues

#### 1. **PECR Non-Compliance - Prior Consent Not Documented**
**Severity:** 🔴 CRITICAL
- **PECR & ePrivacy Directive:** Non-essential cookies require **explicit prior consent** BEFORE loading
- **Current Issue:** Policy says banner shows on first visit, but doesn't confirm cookies are blocked until consent
- **Gap:** Doesn't state that non-essential cookies are BLOCKED by default

**Required:**
```
"Cookie Consent: All non-essential cookies and analytics are BLOCKED
by default until you explicitly accept them via our cookie consent banner.
Only essential cookies (tc_cookie_consent) are set initially."
```

#### 2. **No Granular Consent Options**
**Severity:** 🟡 HIGH
- PECR recommends separate consent for different cookie categories
- Current implementation appears to be "all-or-nothing"
- **Issue:** Users might want analytics but not other tracking

**Recommended:**
- Essential (auto-enabled, can't decline)
- Analytics (optional)
- Marketing (optional)
- Preferences (optional)

#### 3. **Missing Cookie Table Details for Essential Cookies**
**Severity:** 🟡 MEDIUM
- Lists only one essential cookie: `tc_cookie_consent`
- But mentions form submissions and functionality - what about session cookies?
- **Gap:** Incomplete list of essential cookies actually being set

#### 4. **Google Analytics Compliance Issues**
**Severity:** 🟡 HIGH
- Policy doesn't mention:
  - ❌ IP anonymization enabled
  - ❌ Data retention settings in GA
  - ❌ Google's data usage
  - ❌ DPIA for GA
  - ❌ Data transfer safeguards (SCCs)

#### 5. **No Withdrawal of Consent Mechanism Detailed**
**Severity:** 🟡 MEDIUM
- States "You can change your preferences at any time by clearing cookies"
- **Issue:** This is not user-friendly; should provide on-page mechanism
- GDPR requires withdrawing consent to be "as easy as giving it"

#### 6. **Missing Third-Party Cookie Disclosure**
**Severity:** 🟡 MEDIUM
- Doesn't mention if Google sets their own cookies
- Google Analytics sets cookies on Google's domain
- Should disclose: "Google sets cookies to recognize returning visitors"

#### 7. **No Consent Record Retention**
**Severity:** 🟡 MEDIUM
- Doesn't state how long consent records are kept
- GDPR requires demonstrating valid consent
- Consent records should be kept as evidence

---

## 3. TERMS OF SERVICE ANALYSIS

### ✅ Strengths

| Aspect | Status | Details |
|---|---|---|
| **Clear Agreement** | ✅ Good | Section 1 clearly states acceptance of terms |
| **License Terms** | ✅ Good | Defines permitted use of website materials |
| **IP Protection** | ✅ Good | Section 8 addresses intellectual property |
| **Governing Law** | ✅ Good | Section 10 specifies England & Wales law |
| **Liability Limitation** | ✅ Good | Section 5 clarifies liability boundaries |
| **Contact Info** | ✅ Good | Provides contact details |

### ⚠️ Data Protection Gaps

#### 1. **Insufficient Data Protection References**
**Severity:** 🟡 HIGH
- Terms mention "services" but don't clarify data handling for service contracts
- If Terra Connect provides custom services, needs separate Service Agreement with data terms
- **Gap:** No reference to processor agreement (if acting as processor)

#### 2. **No Data Breach Notification Clause**
**Severity:** 🟡 MEDIUM
- Doesn't state what happens if customer data is breached
- GDPR requires notification within 72 hours
- Terms should clarify this process

#### 3. **Contradicts Privacy Policy Scope**
**Severity:** 🟡 MEDIUM
- Privacy Policy focuses on website visitors
- Terms of Service focus on website users
- **Gap:** Doesn't clearly address data handling for SERVICE CLIENTS
- If providing dev/automation services, need separate data processing terms

#### 4. **No Service-Level Agreement Data Handling**
**Severity:** 🟡 MEDIUM
- Mentions "services" (web dev, mobile, AI) but no service-specific data terms
- For professional services, should include:
  - Client data confidentiality
  - Data security standards
  - Subprocessor information
  - Data deletion post-contract

---

## 4. CROSS-DOCUMENT CONSISTENCY ISSUES

### ❌ Inconsistencies Found

| Issue | Details | Impact |
|---|---|---|
| **Effective Dates** | Privacy (April 2025), Cookie (April 2026) - mismatch | Should be aligned |
| **Contact Email** | Listed in all documents but no DPO designation | Unclear who handles data requests |
| **Data Retention** | Privacy states 12 months, but Cookie Policy shows GA retains 26 months | Conflicting information |
| **Lawful Basis** | Not stated in Privacy; Cookie consent alone insufficient for analytics | Non-compliant approach |
| **Service Data** | Privacy addresses visitors; ToS addresses clients - unclear which applies to services | Ambiguous scope |

---

## 5. UK-SPECIFIC REQUIREMENTS

### UK Data Protection Act 2018 Compliance

#### ✅ Met:
- References to UK data protection laws (Privacy Policy, Section 6)
- Mention of ICO (Information Commissioner's Office)
- England & Wales jurisdiction (Terms of Service, Section 10)

#### ❌ Gaps:
- No specific reference to **PECR (Privacy & Electronic Communications Regulations)** - UK version for cookies/email
- No mention of **UK Data Protection Impact Assessment (DPIA)** requirements
- No reference to **UK Code of Practice for Privacy**
- Missing explicit reference to **UK GDPR** (post-Brexit version)

### Critical UK-Specific Issue: PECR Compliance

**PECR (Privacy and Electronic Communications Regulations 2003) - UK Version:**

Current state: ❌ **LIKELY NON-COMPLIANT**

Issues:
1. Marketing emails may violate soft opt-in requirements
2. Non-essential cookies lack explicit prior consent mechanism
3. No clear evidence of consent mechanism that meets PECR standards
4. No SMS/phone marketing disclosure

**Required addition to Privacy Policy:**
```
"PECR Compliance: For direct marketing emails, we rely on
soft opt-in provisions where you have engaged with our services.
You can unsubscribe at any time using the link in our emails.
We never send marketing via SMS or phone without prior express consent."
```

---

## 6. IMPLEMENTATION COMPLIANCE AUDIT

### What Documentation Exists?

❓ **Unknown from policy text:**
- Do you have Data Processing Agreements with Google Analytics?
- Do you have Records of Processing Activities (ROPA)?
- Is there a DPIA for Google Analytics?
- Do you have a legitimate interest assessment?
- How many people work on data processing?
- Do you have a privacy impact assessment process?

### What's Missing in Practice (Likely)

🔴 **Critical missing items:**
1. **Records of Processing Activities (ROPA)** - GDPR Article 30 requires documentation of:
   - What data you process
   - Why you process it
   - Who has access
   - How long you keep it
   - Security measures

2. **Data Processing Agreements (DPA)** - GDPR Article 28 requires written contracts with:
   - Google Analytics
   - Email provider (if using Mailchimp, SendGrid, etc.)
   - Hosting provider (appears to be Cloudflare)

3. **Data Protection Impact Assessment (DPIA)** - GDPR Article 35 required for:
   - Analytics processing
   - Google Analytics data transfers to USA

4. **International Data Transfer Documentation**
   - Standard Contractual Clauses with Google
   - Post-Schrems II compliance measures

5. **Consent Mechanism Documentation**
   - How consent is captured
   - How consent is stored
   - How consent is withdrawn
   - Proof of consent

---

## 7. COMPLIANCE SCORECARD

### Privacy Policy: 6.5/10
- ✅ Covers basics
- ❌ Missing lawful basis
- ❌ Missing DPO info
- ❌ Missing data transfer safeguards
- ❌ Vague processor information

### Cookie Policy: 5.5/10
- ✅ Good cookie disclosure
- ❌ Doesn't confirm non-essential cookies blocked by default
- ❌ Missing granular consent
- ❌ Missing analytics data transfer info
- ❌ Missing easy withdrawal mechanism

### Terms of Service: 6/10
- ✅ Good legal structure
- ❌ Missing data protection clauses
- ❌ No processor terms for service clients
- ❌ Missing breach notification
- ❌ Unclear client data handling

### **Overall Implementation: 3/10**
- Documents exist but operational practices likely incomplete
- Missing critical supporting documentation (ROPA, DPAs, DPIA)
- No evidence of consent management system
- Likely compliance violations in practice

---

## 8. RISK ASSESSMENT

### 🔴 CRITICAL RISKS (Immediate Action Required)

1. **Data Processing Without Clear Lawful Basis**
   - **Risk:** ICO enforcement action
   - **Penalty:** Up to €20M or 4% revenue (GDPR) + UK equivalent
   - **Fix Timeline:** 1-2 weeks

2. **Non-Essential Cookies Without Valid Consent**
   - **Risk:** PECR violation, ICO enforcement
   - **Penalty:** Up to £20,000 per violation
   - **Fix Timeline:** 1-2 weeks (technical + legal)

3. **Missing Data Processing Agreements**
   - **Risk:** Joint liability with processors
   - **Penalty:** €10M or 2% revenue
   - **Fix Timeline:** 2-4 weeks

4. **No Google Analytics Data Transfer Safeguards**
   - **Risk:** Schrems II violation (high court precedent)
   - **Penalty:** Order to stop processing + fines
   - **Fix Timeline:** 2-4 weeks

### 🟡 HIGH RISKS (Action Required Within 4 Weeks)

5. **Missing DPIA for Analytics**
   - **Risk:** Processing without required assessment
   - **Penalty:** Up to €10M or 2% revenue
   - **Fix Timeline:** 2-3 weeks

6. **No Consent Records**
   - **Risk:** Can't prove valid consent in dispute
   - **Penalty:** Presumption of invalidity
   - **Fix Timeline:** Immediate + 1 week implementation

7. **Vague Data Sharing Information**
   - **Risk:** Lack of transparency
   - **Penalty:** Up to €10M or 2% revenue
   - **Fix Timeline:** 1 week

---

## 9. REMEDIATION ROADMAP

### **Phase 1: URGENT (Do This Week)**

#### 1.1 Update Privacy Policy
Add to Section 3 (How We Use Your Information):

```markdown
**Lawful Basis for Processing:**

We rely on the following lawful bases under GDPR Article 6:

- **Consent** (Article 6(1)(a)): For marketing emails and analytics cookies
  You can withdraw consent at any time via the preferences link in our emails
  or by emailing hello@terraconnect.co.uk

- **Legitimate Interests** (Article 6(1)(f)): To improve our website,
  prevent fraud, and understand how visitors use our website. We have conducted
  a Legitimate Interest Assessment and determined that your privacy rights do
  not override our interests.

- **Contract** (Article 6(1)(b)): Where you've engaged our services,
  we process data necessary to fulfill your request

- **Legal Obligation** (Article 6(1)(c)): To comply with tax and
  accounting requirements
```

#### 1.2 Add Data Protection Officer Section (if company meets criteria)

```markdown
**Data Protection Officer (if applicable):**

If you are processing personal data at scale or have systematic monitoring,
you may require a DPO. Current contact for data protection matters:
Email: hello@terraconnect.co.uk

For large-scale processing engagements, we appoint a DPO separately.
```

#### 1.3 Fix Cookie Policy to confirm blocking

Replace Section "Cookie Consent" with:

```markdown
**Cookie Consent:**

When you first visit our website, all NON-ESSENTIAL cookies are automatically
BLOCKED. Only our essential cookie (tc_cookie_consent) is set to remember
your preferences.

Before ANY analytics, marketing, or preference cookies are loaded,
you must explicitly accept them via our cookie consent banner.

You can withdraw consent at any time by:
1. Clicking the cookie preferences link in our website footer
2. Clearing your browser cookies and revisiting our site
3. Emailing hello@terraconnect.co.uk

Withdrawing consent is as easy as providing it - no friction required.
```

#### 1.4 Add Google Analytics Data Transfer Info

Add to Privacy Policy, Section 4 (Data Sharing):

```markdown
**International Data Transfers:**

Google Analytics is located in the USA. We have ensured appropriate
safeguards are in place for data transfers including:

- Standard Contractual Clauses (SCCs) per GDPR Article 46
- Supplementary technical measures (TLS encryption in transit)
- Google's Data Processing Amendment (DPA)

For questions about these safeguards, contact hello@terraconnect.co.uk
```

---

### **Phase 2: HIGH PRIORITY (This Month)**

#### 2.1 Create Data Processing Agreements
Required with:
- **Google Analytics** - have them provide their Data Processing Amendment
- **Email Provider** (if used) - request their standard DPA
- **Hosting Provider** (Cloudflare) - request their standard DPA

Ensure all DPAs include:
- ✅ Data security obligations
- ✅ Sub-processor authorization
- ✅ Data subject rights assistance
- ✅ Data deletion/return on termination

#### 2.2 Conduct DPIA for Google Analytics
Document:
- What data is transferred
- Why it's necessary
- Risks involved
- Mitigating measures
- Legal basis

Use ICO's DPIA template: https://ico.org.uk/for-organisations/

#### 2.3 Create Records of Processing Activities (ROPA)
Document for each processing activity:
- Data processor
- Data categories
- Special categories (if any)
- Retention periods
- Recipients
- Security measures

#### 2.4 Create Legitimate Interest Assessment (if using this basis)
For website analytics processing:
- Purpose of processing
- Necessity assessment
- Balancing test (your interests vs. privacy rights)
- Conclusion

#### 2.5 Implement Proper Consent Management
Ensure your consent system:
- ✅ Gets explicit consent BEFORE loading non-essential cookies
- ✅ Stores consent records with timestamp
- ✅ Allows granular choices (analytics separate from preferences)
- ✅ Provides easy withdrawal
- ✅ Keeps records for audit purposes

---

### **Phase 3: MEDIUM PRIORITY (Within 2 Months)**

#### 3.1 Create Comprehensive Data Privacy Notice
For service engagement clients (not just website visitors):
- If providing dev services, create a Service Data Addendum
- Define your role (processor vs. controller)
- Specify data protection obligations
- Include confidentiality terms
- Define breach procedures

#### 3.2 Update Terms of Service
Add new section: "Data Protection for Service Clients"

```markdown
**Data Protection for Service Clients:**

When you engage Terra Connect for services, any client data you provide
is processed according to:
- GDPR and UK Data Protection Act 2018
- Our separate Data Processing Agreement (see attached)
- This Privacy Policy

We act as a Data Processor for your data. We maintain Data Processing
Agreements with our subprocessors and security standards including:
- End-to-end encryption
- Access controls
- Regular security assessments
- Data deletion post-project completion (or per agreement)

For service-specific data terms, contact: hello@terraconnect.co.uk
```

#### 3.3 Create Privacy Policy for Service Clients
Separate from website privacy policy:
- What client data we collect
- Why we collect it
- How long we keep it
- Who has access
- Security measures
- Client rights and obligations

#### 3.4 Document Breach Response Procedure
Ensure you can:
- ✅ Detect breaches quickly
- ✅ Assess impact
- ✅ Notify ICO within 72 hours (if high risk)
- ✅ Notify affected individuals
- ✅ Keep records
- ✅ Learn from incident

---

### **Phase 4: ONGOING (Maintain Compliance)**

- ✅ Annual DPIA review for analytics
- ✅ Annual consent verification
- ✅ Quarterly DPA reviews
- ✅ Annual privacy training for staff
- ✅ Monitor legal changes in GDPR/PECR
- ✅ Maintain Records of Processing Activities
- ✅ Annual compliance audit

---

## 10. LEGAL REFERENCE FRAMEWORK

### GDPR Articles Referenced (EU - Post-Brexit remains similar in UK)
- **Article 5:** Principles (lawfulness, fairness, transparency)
- **Article 6:** Lawful basis for processing
- **Article 13-14:** Transparency requirements
- **Article 22:** Automated decision-making
- **Article 28:** Data Processing Agreements
- **Article 30:** Records of Processing Activities (ROPA)
- **Article 32:** Data security
- **Article 35:** Data Protection Impact Assessment
- **Article 37-39:** Data Protection Officer (if required)
- **Article 46:** International transfers (SCCs)

### UK-Specific
- **UK Data Protection Act 2018** (Chapter 1-4 requirements)
- **Privacy and Electronic Communications Regulations 2003 (PECR)**
- **UK Information Commissioner's Office Guidance**
- **Schrems II Ruling** (EU Court - data transfers to USA)

### Industry Standards
- **ISO 27001:** Information Security Management
- **ISO 27701:** Privacy Information Management
- **ICO Data Protection Impact Assessment guidance**
- **Standard Contractual Clauses for international transfers**

---

## 11. CONCLUSION & RECOMMENDATIONS

### Current Status: ⚠️ NON-COMPLIANT (with serious gaps)

**Summary:**
Your documents demonstrate understanding of GDPR and UK requirements but fall short of full compliance. The critical issues are:

1. ❌ No explicit lawful basis stated
2. ❌ No evidence of valid cookie consent mechanism
3. ❌ Missing data processing agreements
4. ❌ Missing data transfer safeguards for analytics
5. ❌ Missing supporting compliance documentation

### Immediate Action Priority

**WEEK 1:** Update Privacy Policy + Cookie Policy (legal)
**WEEK 2:** Create DPAs with all processors (contractual)
**WEEK 3:** Conduct DPIA for analytics (documentation)
**WEEK 4:** Create ROPA and Legitimate Interest Assessment (documentation)

### Expected Compliance Timeline

- **With urgent fixes:** 80-85% compliant in 4 weeks
- **With all recommendations:** 95%+ compliant in 8-12 weeks
- **Ongoing:** Requires quarterly review and annual updates

### Recommended Next Steps

1. **Engage a Data Protection Consultant**
   - Review actual implementation (not just documents)
   - Assess if DPO is required
   - Create custom DPIA

2. **Update Website Consent Banner**
   - Ensure non-essential cookies blocked by default
   - Provide granular choices
   - Store consent with timestamps
   - Allow easy withdrawal

3. **Create Master Agreement Template**
   - For all service clients
   - Define data processor role
   - Attach Data Processing Agreement

4. **Schedule Compliance Audit**
   - Quarterly privacy compliance check
   - Annual DPA renewal
   - Annual DPIA review

---

## APPENDIX A: Missing Clauses (Template Language)

### Privacy Policy - Lawful Basis Section
```
Under GDPR Articles 6 and the UK Data Protection Act 2018,
we process personal data based on:

1. Your Consent - for marketing and analytics
2. Legitimate Interests - to improve services
3. Contract - to deliver services you request
4. Legal Obligation - to comply with law

Details: [Full text]
```

### Privacy Policy - International Transfers
```
Where personal data is transferred outside the UK/EU
(e.g., to Google Analytics in the USA), we implement
Standard Contractual Clauses and supplementary safeguards
per the Schrems II ruling.

[Details of SCCs and supplementary measures]
```

### Cookie Policy - Consent Blocking
```
Non-essential cookies are BLOCKED by default.

Only after you click "Accept Analytics" will we load:
- _ga (Google Analytics unique user ID)
- _ga_* (Google Analytics session tracking)

You can change this choice at any time.
```

---

**Report Prepared:** April 2, 2026
**Next Review Date:** July 2, 2026 (quarterly)
**Compliance Officer:** [Assign responsibility]

