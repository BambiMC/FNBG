if (window.CSS && CSS.supports("color", "var(--bg-main)")) {
  var toggleColorMode = function toggleColorMode(e) {
    if (document.documentElement.getAttribute("color-mode") != "light") {
      document.documentElement.setAttribute("color-mode", "light");
      localStorage.setItem("color-mode", "light");
    } else {
      document.documentElement.setAttribute("color-mode", "dark");
      localStorage.setItem("color-mode", "dark");
    }
  };

  var toggleColorButtons = document.querySelectorAll(".switch-theme-btn"); // Set up event listeners

  toggleColorButtons.forEach(function (btn) {
    btn.addEventListener("click", toggleColorMode);
  });
} else {
  //feature not supported
  var btnContainer = document.querySelector(".color-mode__header");
  btnContainer.style.display = "none";
}
