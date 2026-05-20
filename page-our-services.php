<?php get_header(); ?>

<main class="services-page">

  <!-- HERO SECTION -->
  <section class="services-hero">
    <div class="container">
      <h1>Our Services</h1>
      <p>We build modern, fast, and scalable digital solutions that help businesses grow online.</p>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section class="services-section">
    <div class="container">

      <div class="section-header">
        <h2>What We Offer</h2>
        <p>Everything you need to build a strong digital presence</p>
      </div>

      <div class="services-grid">

        <div class="service-card">
          <div class="icon">🌐</div>
          <h3>Web Design</h3>
          <p>Modern, clean, and user-focused designs that convert visitors into customers.</p>
        </div>

        <div class="service-card">
          <div class="icon">⚙️</div>
          <h3>Web Development</h3>
          <p>Fast, secure, and scalable websites built with WordPress, React, or custom PHP.</p>
        </div>

        <div class="service-card">
          <div class="icon">📱</div>
          <h3>Mobile Apps</h3>
          <p>Cross-platform mobile apps with smooth performance and modern UI/UX.</p>
        </div>

        <div class="service-card">
          <div class="icon">🚀</div>
          <h3>SEO Optimization</h3>
          <p>Improve Google rankings and increase organic traffic to your business.</p>
        </div>

        <div class="service-card">
          <div class="icon">🎨</div>
          <h3>Branding</h3>
          <p>Unique brand identity design including logos, colors, and full visual systems.</p>
        </div>

        <div class="service-card">
          <div class="icon">☁️</div>
          <h3>Hosting & Support</h3>
          <p>Reliable hosting, security updates, backups, and 24/7 technical support.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  <section class="process">
    <div class="container">

      <div class="section-header">
        <h2>Our Process</h2>
        <p>Simple, fast, and transparent workflow</p>
      </div>

      <div class="process-grid">

        <div class="process-step">
          <span>1</span>
          <h3>Discovery</h3>
          <p>We understand your business goals and requirements.</p>
        </div>

        <div class="process-step">
          <span>2</span>
          <h3>Design</h3>
          <p>We create modern UI/UX designs tailored to your brand.</p>
        </div>

        <div class="process-step">
          <span>3</span>
          <h3>Development</h3>
          <p>We convert designs into fast and functional websites.</p>
        </div>

        <div class="process-step">
          <span>4</span>
          <h3>Launch</h3>
          <p>We deploy your project and ensure everything runs smoothly.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="services-cta">
    <div class="container">
      <h2>Ready to start your project?</h2>
      <p>Let’s build something amazing together.</p>
      <a href="<?php echo home_url('/contact-us/'); ?>" class="cta-btn">Get Started</a>
    </div>
  </section>


</main>

<?php get_footer(); ?>