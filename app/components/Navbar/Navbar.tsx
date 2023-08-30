"use client"
import Link from 'next/link';
import Image from 'next/image'
import { ThemeSwitcher } from '../ThemeSwitcher/ThemeSwitcher';

const Navigation = () => {

  const toggleMobileMenu = () => {
    //TODO mobileMenu
    //toggleMobileMenu logic here
  };

  const reload = () => {
    window.location.reload();
  };

  const handleLangButtonClick = (selectedLang: string) => {
    localStorage.setItem('lang', selectedLang);
    reload();
  };

  return (
    <nav className="px-4 py-1 z-10 fixed w-full">
      <div className="flex items-center justify-between">
        <Link href="/">
          <Image className="h-16" src="/svg/fnbg-logo8.svg" alt="" id="logo" width={109} height={64} />
        </Link>
        <div className="hidden gap-2 md:flex items-center">
          <Link href="/test" className="px-5 py-3">TEST-LANG</Link>
          <Link href="/Lebenslauf-Fabian-Berger.pdf" className="px-5 py-3" target="_blank">Lebenslauf</Link>
          {/*TODO Lebenslauf neu machen */}
          <Link href="/projects" className="px-5 py-3">Projekte</Link>
          <a href="mailto:me@fnbg.de">me@fnbg.de</a>
          <Link href="https://www.linkedin.com/in/fabian-berger-nbg/" className="px-5 py-3" target="_blank">LinkedIn</Link>
          <Link href="/imprint" className="px-5 py-3">Impressum</Link>
        </div>
        <div className='flex items-center'>
          <div className='px-2'>
            <button onClick={() => handleLangButtonClick('de')}>DE</button>
            <button onClick={() => handleLangButtonClick('en')}>EN</button>
          </div>
          <ThemeSwitcher />
          <button data-mobile-menu className="inline px-2 py-3 md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" className="icon icon-tabler icon-tabler-menu-2" width="24" height="24"
              viewBox="0 0 24 24" strokeWidth="2" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <line x1="4" y1="6" x2="20" y2="6"></line>
              <line x1="4" y1="12" x2="20" y2="12"></line>
              <line x1="4" y1="18" x2="20" y2="18"></line>
            </svg>
          </button>
        </div>
      </div>
    </nav>
  );
};

export default Navigation;