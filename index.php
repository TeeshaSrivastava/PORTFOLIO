<?php get_header(); ?>
<main>
  <section id="home" class="hero">
    <div class="hero-left">
      <h1>Hi,</h1>
      <h2>I’m <span>Teesha</span></h2>
      <h3>Web Developer</h3>
      <a href="#contact" class="btn">Contact</a>
      <div class="socials">
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-behance"></i></a>
      </div>
    </div>
    <div class="hero-right">
      <div class="image-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="Teesha">
      </div>
    </div>
  </section>
  <section id="about">
    <h2>About Me</h2>
    <p>I’m a passionate developer with interest in PHP, WordPress, and full-stack web development.</p>
  </section>
  <section id="skills">
    <h2 style="text-align:center;">Skills</h2>
    <ul class="skills-list">
      <li><i class="fas fa-code"></i> HTML, CSS, JavaScript</li>
      <li><i class="fas fa-database"></i> MySQL</li>
      <li><i class="fab fa-php"></i> PHP</li>
      <li><i class="fab fa-wordpress"></i> WordPress Theme & Plugin Development</li>
      <li><i class="fab fa-git-alt"></i> Git & GitHub</li>
    </ul>
  </section>
  <section id="projects">
    <h2 style="text-align:center;">Projects</h2>
    <ul style="text-align:center;">
      <li><strong>Blog CMS in PHP</strong><br/><a href="https://github.com/yourusername/blog-cms">View on GitHub</a></li>
      <li><strong>To-Do App</strong><br/><a href="https://github.com/yourusername/todo-app">View on GitHub</a></li>
    </ul>
  </section>
  <section id="contact">
    <h2>Contact</h2>
    <p>Email: your.email@example.com</p>
    <p>LinkedIn: <a href="https://linkedin.com/in/yourprofile">linkedin.com/in/yourprofile</a></p>
  </section>
</main>
<?php get_footer(); ?>
