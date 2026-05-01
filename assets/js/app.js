import "../css/main.css";

console.log("Vite FathurDEV is running...");

document.addEventListener("DOMContentLoaded", () => {
  // Reveal animation (tidak diubah)
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.remove(
            "opacity-0",
            "translate-y-[30px]",
            "scale-[0.98]",
          );
          entry.target.classList.add(
            "opacity-100",
            "translate-y-0",
            "scale-100",
          );
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px",
    },
  );
  document.querySelectorAll(".js-reveal").forEach((el) => {
    observer.observe(el);
  });

  // Mobile Menu Logic sesuai navbar.php
  const mobileMenu = document.getElementById("mobile-menu");
  const menuButton = document.querySelector("button.md\\:hidden");
  const mobileLinks = document.querySelectorAll(".mobile-link");
  let isMenuOpen = false;

  function toggleMenu() {
    isMenuOpen = !isMenuOpen;
    if (isMenuOpen) {
      mobileMenu.classList.remove("opacity-0", "pointer-events-none");
      mobileMenu.classList.add("opacity-100", "pointer-events-auto");
      document.body.style.overflow = "hidden";
      // Animate hamburger to X
      document.querySelectorAll(".custom-navbar-btn").forEach((el, idx) => {
        if (idx === 0) {
          el.style.transform = "translateY(3px) rotate(45deg)";
        } else {
          el.style.transform = "translateY(-3px) rotate(-45deg)";
        }
      });
    } else {
      mobileMenu.classList.remove("opacity-100", "pointer-events-auto");
      mobileMenu.classList.add("opacity-0", "pointer-events-none");
      document.body.style.overflow = "";
      // Animate X to hamburger
      document.querySelectorAll(".custom-navbar-btn").forEach((el) => {
        el.style.transform = "";
      });
    }
  }

  if (menuButton) {
    menuButton.addEventListener("click", toggleMenu);
  }

  mobileLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (isMenuOpen) toggleMenu();
    });
  });
});
