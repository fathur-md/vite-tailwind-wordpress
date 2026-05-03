document.addEventListener("DOMContentLoaded", () => {
  // Mobile Menu Logic
  const menuBtn = document.querySelector(".menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  if (!menuBtn || !mobileMenu) return;

  const setAria = (open) => {
    menuBtn.setAttribute("aria-expanded", String(open));
    mobileMenu.setAttribute("aria-hidden", String(!open));
  };

  const openMenu = () => {
    mobileMenu.classList.add("active");
    menuBtn.classList.add("active");
    document.body.classList.add("overflow-hidden");
    setAria(true);
  };

  const closeMenu = () => {
    mobileMenu.classList.remove("active");
    menuBtn.classList.remove("active");
    document.body.classList.remove("overflow-hidden");
    setAria(false);
    menuBtn.focus();
  };

  const isOpen = () => mobileMenu.classList.contains("active");

  menuBtn.addEventListener("click", () => {
    isOpen() ? closeMenu() : openMenu();
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && isOpen()) closeMenu();
  });

  mobileMenu.addEventListener("click", (e) => {
    const link = e.target.closest("a");
    if (!link) return;
    closeMenu();
  });

  setAria(false);
});
