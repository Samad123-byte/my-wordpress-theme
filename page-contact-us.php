<?php get_header(); ?>



  <!-- Hero Banner -->
  <div class="contact-hero">
    <div class="label" style="justify-content:center">Get In Touch</div>
    <h1 class="section-title">Let's Build Something<br><em style="color:var(--accent);font-style:italic">Great Together</em></h1>
    <p class="section-sub">Have a project in mind? We'd love to hear about it. Drop us a message and we'll get back to you within 24 hours.</p>
  </div>

  <!-- Contact Body -->
  <div class="contact-body">

    <!-- Left: Info -->
    <div>
      <div class="label">Reach Us</div>
      <h2 class="section-title" style="font-size:1.8rem">We're Always<br>Happy to Help</h2>
      <p class="section-sub" style="margin-bottom:32px">Whether it's a big project or a quick question — we're here for you.</p>
      <div class="contact-info-list">
        <div class="ci-row">
          <div class="ci-icon">📧</div>
          <div>
            <h4>Email Us</h4>
            <p>hello@mybrand.com</p>
          </div>
        </div>
        <div class="ci-row">
          <div class="ci-icon">📞</div>
          <div>
            <h4>Call Us</h4>
            <p>+1 (555) 000-1234</p>
          </div>
        </div>
        <div class="ci-row">
          <div class="ci-icon">📍</div>
          <div>
            <h4>Our Office</h4>
            <p>123 Design Street, Creative City, NY 10001</p>
          </div>
        </div>
        <div class="ci-row">
          <div class="ci-icon">⏰</div>
          <div>
            <h4>Working Hours</h4>
            <p>Mon – Fri, 9:00 AM – 6:00 PM</p>
          </div>
        </div>
      </div>
      <div class="map-placeholder">
        <div class="map-icon">🗺️</div>
        <span>123 Design Street, Creative City</span>
      </div>
    </div>

    <!-- Right: Form -->
    <div class="contact-form-wrap">
      <div class="cf-title">Send a Message</div>
      <div class="cf-sub">Fill in the form and we'll be in touch soon.</div>
      <div class="form-row">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" placeholder="John"/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" placeholder="Doe"/>
        </div>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="john@example.com"/>
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" placeholder="+1 (555) 000-0000"/>
      </div>
      <div class="form-group">
        <label>Service Needed</label>
        <select>
          <option value="">Select a service...</option>
          <option>Web Design</option>
          <option>Development</option>
          <option>Mobile Apps</option>
          <option>SEO &amp; Growth</option>
          <option>Branding</option>
          <option>Hosting &amp; Support</option>
        </select>
      </div>
      <div class="form-group">
        <label>Your Message</label>
        <textarea placeholder="Tell us about your project, goals, timeline..."></textarea>
      </div>
      <button class="btn-submit" id="submitBtn" onclick="handleSubmit()">Send Message ✈️</button>
    </div>
  </div>

  <!-- FAQ -->
  <div class="faq-section">
    <div style="text-align:center">
      <div class="label" style="justify-content:center">FAQ</div>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-sub" style="margin:0 auto">Quick answers to the questions we hear most often.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">How long does a website project take? <span class="faq-arrow">▾</span></div>
        <div class="faq-a">Most projects take between 2–6 weeks depending on scope. We'll give you a clear timeline after the initial consultation.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">Do you work with WordPress? <span class="faq-arrow">▾</span></div>
        <div class="faq-a">Absolutely! WordPress is one of our specialties. We build fully custom themes and plugins tailored exactly to your needs.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">What information do you need to start? <span class="faq-arrow">▾</span></div>
        <div class="faq-a">A brief overview of your business, goals, and any examples you love. We handle the rest — from strategy to launch.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">Do you offer ongoing support after launch? <span class="faq-arrow">▾</span></div>
        <div class="faq-a">Yes! We offer monthly maintenance plans covering updates, backups, security monitoring, and priority support.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">What are your payment terms? <span class="faq-arrow">▾</span></div>
        <div class="faq-a">We typically work with 50% upfront and 50% on completion. Flexible payment plans are available for larger projects.</div>
      </div>
    </div>
  </div>

<?php get_footer() ?>


