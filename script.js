// Theme toggle with persistence and data-theme support
(() => {
  const root = document.documentElement;
  const themeToggle = document.getElementById("themeToggle");
  if (!themeToggle) return;

  const applyTheme = (mode) => {
    if (mode === "dark") {
      root.setAttribute("data-theme", "dark");
      root.classList.add("dark-mode");
      themeToggle.textContent = "☀️";
      localStorage.setItem("theme", "dark");
    } else {
      root.setAttribute("data-theme", "light");
      root.classList.remove("dark-mode");
      themeToggle.textContent = "🌙";
      localStorage.setItem("theme", "light");
    }
  };

  const saved = localStorage.getItem("theme");
  const defaultMode = saved
    ? saved
    : (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
  applyTheme(defaultMode);

  themeToggle.addEventListener("click", () => {
    const current = root.getAttribute("data-theme") === "dark" ? "dark" : "light";
    applyTheme(current === "dark" ? "light" : "dark");
  });
})();

// Mobile nav toggle
(() => {
  const menuToggle = document.getElementById("menuToggle");
  const nav = document.getElementById("primary-nav");
  if (!menuToggle || !nav) return;

  const setExpanded = (expanded) => menuToggle.setAttribute("aria-expanded", expanded ? "true" : "false");

  menuToggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("open");
    setExpanded(isOpen);
  });

  // Close menu on link click (better UX)
  nav.querySelectorAll("a").forEach((a) =>
    a.addEventListener("click", () => {
      nav.classList.remove("open");
      setExpanded(false);
    })
  );

  // Reset menu on resize to desktop
  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      nav.classList.remove("open");
      setExpanded(false);
    }
  });
})();
