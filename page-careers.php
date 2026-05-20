<?php get_header(); ?>

<main class="careers-page">

  <!-- HERO -->
  <section class="careers-hero">
    <div class="container">
      <span class="careers-label">Join Our Team</span>

      <h1>
        Build The Future With
        <span>MyBrand</span>
      </h1>

      <p>
        We're a creative digital studio looking for passionate designers,
        developers, and innovators who want to create meaningful digital experiences.
      </p>

      <a href="#open-positions" class="career-btn">
        View Open Positions
      </a>
    </div>
  </section>

  <!-- WHY JOIN -->
  <section class="why-join">
    <div class="container">

      <div class="section-heading">
        <span>Why Work With Us</span>
        <h2>More Than Just A Job</h2>
        <p>
          We believe great work happens when talented people feel supported,
          inspired, and empowered.
        </p>
      </div>

      <div class="benefits-grid">

        <div class="benefit-card">
          <div class="benefit-icon">💻</div>
          <h3>Remote Friendly</h3>
          <p>Work from anywhere with flexible schedules and modern collaboration tools.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon">📈</div>
          <h3>Career Growth</h3>
          <p>Continuous learning opportunities, mentorship, and career development support.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon">🎨</div>
          <h3>Creative Culture</h3>
          <p>Collaborate with talented designers and developers on exciting projects.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon">🌴</div>
          <h3>Paid Time Off</h3>
          <p>Healthy work-life balance with vacations and flexible leave policies.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- JOB OPENINGS -->
  <section class="job-section" id="open-positions">

    <div class="container">

      <div class="section-heading">
        <span>Open Positions</span>
        <h2>Current Opportunities</h2>
      </div>

      <div class="job-list">

        <div class="job-card">
          <div>
            <h3>Frontend Developer</h3>
            <p>React • WordPress • UI Development</p>
          </div>

          <div class="job-meta">
            <span>Full Time</span>
            <span>Remote</span>
          </div>
        </div>

        <div class="job-card">
          <div>
            <h3>UI/UX Designer</h3>
            <p>Figma • Prototyping • User Experience</p>
          </div>

          <div class="job-meta">
            <span>Full Time</span>
            <span>Hybrid</span>
          </div>
        </div>

        <div class="job-card">
          <div>
            <h3>WordPress Developer</h3>
            <p>Custom Themes • Plugins • Performance</p>
          </div>

          <div class="job-meta">
            <span>Contract</span>
            <span>Remote</span>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- CTA -->
  <section class="career-cta">

    <div class="container">

      <h2>Don't See The Right Role?</h2>

      <p>
        We're always looking for talented people.
        Send your portfolio and let's connect.
      </p>

      <a href="<?php echo home_url('/contact-us/'); ?>" class="career-btn white-btn">
        Contact Us
      </a>

    </div>

  </section>

</main>

<?php get_footer(); ?>