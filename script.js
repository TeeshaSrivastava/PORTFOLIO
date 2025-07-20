// Smooth Scroll for Anchor Links
// === Typewriter Effect ===
window.onload = function () {
  // === Typewriter Effect (multiple titles) ===
  const typeText = document.querySelector(".typewriter");
  const words = ["Web Developer", "PHP Enthusiast", "Student"];
  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  function type() {
    if (!typeText) return;

    const currentWord = words[wordIndex];
    const displayedText = isDeleting
      ? currentWord.substring(0, charIndex--)
      : currentWord.substring(0, charIndex++);

    typeText.textContent = displayedText;

    let typingSpeed = isDeleting ? 100 : 150;

    if (!isDeleting && charIndex === currentWord.length) {
      isDeleting = true;
      typingSpeed = 1500; // pause before erasing
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
      typingSpeed = 500; // pause before typing next word
    }

    setTimeout(type, typingSpeed);
  }

  type();

  // === Back to Top Button ===
  const topBtn = document.getElementById("topBtn");

  window.onscroll = function () {
    if (topBtn) {
      topBtn.style.display = window.scrollY > 300 ? "block" : "none";
    }

    // === Scroll Reveal ===
    const sections = document.querySelectorAll("section");
    sections.forEach(sec => {
      const top = window.scrollY;
      const offset = sec.offsetTop - 400;
      const height = sec.offsetHeight;

      if (top > offset && top < offset + height) {
        sec.style.opacity = 1;
        sec.style.transform = "translateY(0)";
      }
    });
  };

  if (topBtn) {
    topBtn.onclick = function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    };
  }

  // === Smooth Scroll Navigation ===
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
        });
      }
    });
  });
};
