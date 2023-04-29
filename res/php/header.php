<nav class="px-4 py-1 z-10 fixed w-full">
  <div class="flex items-center justify-between">
    <a href="<?php __DIR__ ?>./index.php">
      <img class="h-16" src="/res/svg/fnbg-logo7.svg" alt="" id="logo">
    </a>
    <div class="hidden gap-2 md:flex">
      <a href="projects.php" class="px-5 py-3 text-purple">Projekte</a>
      <a href="mailto:me@fnbg.de" class="px-5 py-3 text-purple">me@fnbg.de</a>
      <a href="https://www.linkedin.com/in/fabian-berger-nbg/" class="px-5 py-3 text-purple">LinkedIn</a>
      <a href="https://dev.fnbg.de/" class="px-5 py-3 text-purple">Dev-Branch</a>  
    </div>
    <div>
      <button class="btn switch-theme-btn">
        <svg class="light" width="24" height="24" viewBox="0 0 24 24" id="moon" alt="Dark Mode Toggle" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 11.807C10.7418 10.5483 9.88488 8.94484 9.53762 7.1993C9.19037 5.45375 9.36832 3.64444 10.049 2C8.10826 2.38205 6.3256 3.33431 4.92899 4.735C1.02399 8.64 1.02399 14.972 4.92899 18.877C8.83499 22.783 15.166 22.782 19.072 18.877C20.4723 17.4805 21.4245 15.6983 21.807 13.758C20.1625 14.4385 18.3533 14.6164 16.6077 14.2692C14.8622 13.9219 13.2588 13.0651 12 11.807V11.807Z" />
        </svg>

        <svg class="dark" width="24" height="24" viewBox="0 0 24 24" id="sun" alt="Light Mode Toggle" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.995 12C6.995 14.761 9.241 17.007 12.002 17.007C14.763 17.007 17.009 14.761 17.009 12C17.009 9.239 14.763 6.993 12.002 6.993C9.241 6.993 6.995 9.239 6.995 12ZM11 19H13V22H11V19ZM11 2H13V5H11V2ZM2 11H5V13H2V11ZM19 11H22V13H19V11Z" />
          <path d="M5.63702 19.778L4.22302 18.364L6.34402 16.243L7.75802 17.657L5.63702 19.778Z" />
          <path d="M16.242 6.34405L18.364 4.22205L19.778 5.63605L17.656 7.75805L16.242 6.34405Z" />
          <path d="M6.34402 7.75902L4.22302 5.63702L5.63802 4.22302L7.75802 6.34502L6.34402 7.75902Z" />
          <path d="M19.778 18.3639L18.364 19.7779L16.242 17.6559L17.656 16.2419L19.778 18.3639Z" />
        </svg>

      </button>

      <button data-mobile-menu class="inline px-2 py-3 md:hidden" onclick="toggleMobileMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <line x1="4" y1="6" x2="20" y2="6"></line>
          <line x1="4" y1="12" x2="20" y2="12"></line>
          <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg>
      </button>
    </div>

  </div>

  <!-- mobile menu -->
  <div class="order-last hidden md:hidden" id="mobile-menu">
    <div class="flex flex-row">
      <a href="./projects.php" class="block px-3 py-2 rounded-md">Projekte</a>
      <a href="mailto:me@fnbg.de" class="block px-3 py-2 rounded-md">me@fnbg.de</a>
      <a href="https://www.linkedin.com/in/fabian-berger-nbg/" class="block px-3 py-2 rounded-md">LinkedIn</a>
      <a href="https://dev.fnbg.de/" class="block px-3 py-2 rounded-md">Dev-Branch</a>      
    </div>
  </div>
</nav>