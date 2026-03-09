from openai import OpenAI
from pydub import AudioSegment
import textwrap

# ✅ Paste your key here (replace with your real one)
client = OpenAI(api_key="your-openai-api-key-here")


# 📖 Prepared article text for better narration
# --- Section 1 ---
text1 = """
What is an AI Automation Agency?

An AI automation agency is a specialized company.  
It helps businesses implement artificial intelligence —  
to streamline operations, reduce costs, and improve marketing performance.  

They provide comprehensive services.  
These include AI chatbots, workflow automation, predictive analytics,  
and AI-driven marketing strategies tailored to unique business needs.
"""

# --- Section 2 ---
text2 = """
Unlock Business Potential with AI Automation

Today's business world moves fast.  
Staying ahead is key.  

An AI automation agency helps you win.  
They make work easier.  
They boost results.  

These agencies offer custom help for unique business needs.  
For example, they cover AI-driven SEO and creative ideas.  
This saves money and gets more done.  

AI agencies also lead innovation.  
They help businesses change and grow.  
Working with them unlocks new potential.  

Knowing their role is key to growth.  
They give insights into new technology and market trends.  
This knowledge gives businesses an edge.  

Yet, AI automation agencies are not only service providers.  
They are strategic partners in transformation.  
Their expertise changes operations and marketing strategies.  

First, explore how an AI agency can lift your business.  
Next, discover the benefits and services they provide —  
from productivity improvements to cost savings.  
Finally, take action now.  
Unlock your business potential.  
Stay aligned with the latest innovations.  

This focus on innovation is also reflected in the UK Government's 2021 National AI Strategy.  
It outlines a ten-year plan to position Britain as a global AI superpower.  
By leveraging universities and startups,  
the strategy transforms businesses, harnesses innovation,  
and applies AI to solve 21st-century challenges —  
while driving sustainable growth and prosperity across the nation.
"""

# --- Section 3 ---
text3 = """
What Do AI Automation Agencies Do?

Automation agencies use smart technology to make business work better.  
They focus on adding AI into different areas.  
This boosts how well things operate.  

They offer tailored support for business needs.  
Main services include AI marketing strategies, workflow improvements, and creative solutions.  

An artificial intelligence agency connects technology with business goals.  
They help companies transform smoothly — and grow with confidence.  

Core services include:  
AI implementation across departments.  
Marketing automation with precision targeting.  
Strategic consulting for digital transformation.  
And continuous support for optimization.  

But these agencies do more than technical work.  
They also give smart insights and ongoing guidance.  
This helps businesses stay ahead, while cutting risks.  

Knowing their role is critical for long-term growth.
"""

# --- Section 4 ---
text4 = """
Why Businesses Use AI Automation Agencies

An automation services company integrates AI into business systems.  
They simplify processes.  
They improve performance.  
They help businesses beat competitors.  

Unlike traditional agencies, AI agencies focus on:  
Technology and machine learning.  
Data-driven insights and predictive analytics.  
Personalization at scale.  

Traditional agencies use standard methods.  
AI agencies bring advanced skills and forward-thinking strategies.  
That difference puts businesses on the winning path.
"""

# --- Section 5 ---
text5 = """
Top Benefits of Working with AI Experts

Working with AI experts brings measurable improvements.  
Productivity increases.  
Costs are reduced.  
Decisions become smarter.  
And businesses gain access to cutting-edge technology.  

Primary benefits include:  
Up to 40 percent better productivity.  
Cost reductions of 20 to 50 percent.  
Access to advanced AI platforms.  
And improved decision-making with data insights.  

Partnerships with AI experts optimize resources.  
They provide ongoing support.  
They ensure growth and innovation.  
This secures the future of a business.
"""

# --- Section 6 ---
text6 = """
How AI Improves Work Speed and Productivity

AI technology specialists excel at boosting productivity.  
They automate repetitive tasks.  
This frees valuable resources and accelerates workflows.  

Improvements include:  
50 percent faster processing.  
90 percent fewer errors in data handling.  
And three times better resource optimization.  

These services use data-driven methods.  
They ensure businesses accomplish more with less.  
The productivity gains are clear and measurable.
"""

# --- Section 7 ---
text7 = """
Money-Saving Solutions with AI Automation

Investing in automation is smart — and cost-effective.  
AI reduces routine labor.  
It lowers errors.  
It cuts operational expenses.  

Savings include:  
40 percent lower labor costs.  
70 percent lower error costs.  
And 20 to 40 percent lower operational costs.  

Smart financial strategies ensure maximum return on investment.  
Over time, businesses see higher savings — and greater profits.
"""

# --- Section 8 ---
text8 = """
Access to the Latest AI Technology

AI automation agencies provide access to advanced tools.  
They use enterprise-grade platforms.  
Clients gain cutting-edge solutions without massive upfront investments.  

Agencies stay updated with the latest technology.  
They ensure clients always maintain a competitive edge.  

This forward-thinking approach powers constant growth.  
It strengthens market position.  
And it guarantees long-term success.
"""

# --- Section 9 ---
text9 = """
Core Services Offered by AI Automation Agencies

AI agencies deliver end-to-end services.  
These include chatbot development, marketing automation, workflow optimization,  
and custom AI integrations.  

Services are tailored to each business.  
They combine creativity with technology.  
They ensure smooth digital transformation.  

Trusted partners also provide support systems.  
They maintain efficiency long after implementation.  
Each service boosts productivity.  
Each service drives growth.
"""

# --- Section 10 ---
text10 = """
AI Agents and Chatbot Solutions

AI agents and chatbots are key services.  
They transform customer service.  
They keep people engaged around the clock.  

Benefits include:  
Instant responses in less than one second.  
Unlimited scale — handling thousands of conversations.  
And 98 percent resolution of routine queries.  

Results include:  
Up to 50 percent reduction in service costs.  
Customer satisfaction up by 40 to 50 percent.  
Average response times cut from minutes to seconds.  

AI chatbots continue to learn and improve.  
They ensure smooth integration into business systems.
"""

# --- Section 11 ---
text11 = """
AI-Powered Marketing Strategies

AI makes marketing smarter.  
It uses predictive analytics to forecast behavior.  
It provides deep insights into customer preferences.  
And it optimizes campaigns in real time.  

The result is higher ROI.  
Campaigns are timely, relevant, and data-driven.  
This ensures stronger engagement and better outcomes.
"""

# --- Section 12 ---
text12 = """
AI Automation Consultation Services

Agencies provide expert consulting.  
They guide businesses through transformation.  

The process includes:  
Assessing current systems.  
Developing a customized strategy.  
Supporting implementation.  
And ensuring continuous optimization.  

This guarantees a smooth and effective transition into AI.
"""

# --- Section 13 ---
text13 = """
Custom AI Solutions and Integrations

Every business has unique challenges.  
Agencies design solutions tailored to those needs.  

Custom AI provides:  
A perfect fit for requirements.  
Seamless integration with existing systems.  
And scalable architecture for future growth.  

Tailored solutions ensure flexibility.  
They align technology with business goals.  
They prepare companies for long-term success.
"""

# --- Section 14 ---
text14 = """
AI Digital Marketing Services

AI reshapes digital marketing.  
It enhances brand visibility and online performance.  

Services include:  
Programmatic advertising with three times better ROI.  
Personalized content for each user segment.  
And advanced analytics for deep engagement insights.  

Results include:  
Up to 190 percent better targeting.  
Up to 50 percent lower acquisition costs.  
And double the conversion rates.  

AI-powered strategies drive efficiency.  
They improve interaction.  
They ensure powerful digital presence.
"""

# --- Section 15 ---
text15 = """
How to Choose the Best AI Automation Agency in the UK

Choosing the right partner requires careful evaluation.  

Consider:  
Industry experience.  
Client success stories.  
Technical expertise.  
And post-implementation support.  

Essential factors include:  
Strong reputation and reviews.  
Flexibility to adapt solutions.  
Customization for your exact needs.  

Look for agencies with proven results in your sector.  
Check references.  
Request demos.  
Evaluate support offerings.  

Selecting wisely ensures long-term transformation and growth.
"""

# --- Section 16 ---
text16 = """
Real-World AI Automation Applications

AI delivers measurable impact across industries.  

Examples include:  
Retail gaining 20 percent efficiency with inventory optimization.  
Financial services cutting fraud by 70 percent using AI detection.  
Healthcare reducing patient data processing time by 50 percent.  

Case studies reveal average returns on investment of 300 percent within the first year.  
Most businesses see results within three to six months.  

AI adoption proves effective across customer service, supply chains,  
marketing personalization, and more.
"""

# --- Section 17 ---
text17 = """
The Future of AI Automation and Digital Transformation

The future of AI automation is transformative.  
Advances in machine learning, natural language processing,  
and predictive analytics deliver unprecedented efficiency.  

Emerging capabilities include:  
Real-time data processing.  
Hyper-personalization.  
And autonomous operations.  

Trends for 2025 include:  
Advanced machine learning.  
Integration of AI with smart devices.  
And explainable AI systems that clarify decisions.  

AI adoption is expected to reach 90 percent of businesses by 2027.  
Investments grow 40 percent year over year.  
New job roles are emerging in AI management and optimization.
"""

# --- Section 18 ---
text18 = """
AI's Transformative Role in Digital Marketing

Digital marketing is evolving fast.  
AI gives marketers predictive trend analysis.  
It automates segmentation of audiences.  
And it optimizes campaigns in real time.  

These innovations make campaigns more effective.  
They increase precision.  
And they expand the role of AI in marketing success.
"""

# --- Section 19 ---
text19 = """
Conclusion: Accelerate Your Business Growth with AI Automation

AI automation offers transformative potential.  
It delivers 40 percent efficiency improvements.  
And up to 60 percent cost reductions.  

By partnering with experienced agencies,  
businesses streamline operations.  
They enhance customer experience.  
And they gain competitive advantage.  

AI automation is no longer optional.  
It is essential.  

Early adopters see the greatest returns.  
And the time to act — is now.
"""


# --- Put all your prepared text sections here ---
texts = [
    text1, text2, text3, text4, text5, text6, text7, text8, text9, text10,
    text11, text12, text13, text14, text15, text16, text17, text18, text19
]


# Step 1: Generate MP3 parts
for i, section in enumerate(texts, start=1):
    print(f"🔊 Generating part {i}...")
    response = client.audio.speech.create(
        model="gpt-4o-mini-tts",
        voice="alloy",
        input=section
    )
    filename = f"part{i}.mp3"
    with open(filename, "wb") as f:
        f.write(response.read())
    print(f"✅ Saved {filename}")

# Step 2: Merge all parts
print("🎧 Merging all parts into article.mp3...")
final = AudioSegment.empty()
for i in range(1, len(texts)+1):
    final += AudioSegment.from_file(f"part{i}.mp3")

final.export("article.mp3", format="mp3")
print("🚀 Done! Full audio saved as article.mp3")