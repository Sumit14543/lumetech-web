/**
 * Lumetech Navigation Module
 */

export function initNav() {
  const header = document.querySelector('.lum-header');
  const toggleBtns = document.querySelectorAll('.lum-nav-toggle');
  const navDrawer = document.querySelector('.lum-nav-drawer');
  const drawerOverlay = document.querySelector('.lum-drawer-overlay');
  const megamenuTriggers = document.querySelectorAll('.lum-nav-item--has-megamenu > .lum-nav-link');

  // 1. Sticky & Hero Transparent Header Scroll Handler
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 30) {
        header.classList.add('lum-header--scrolled');
        if (header.classList.contains('lum-header--transparent')) {
          header.classList.remove('lum-header--transparent');
          header.dataset.wasTransparent = 'true';
        }
      } else {
        header.classList.remove('lum-header--scrolled');
        if (header.dataset.wasTransparent === 'true') {
          header.classList.add('lum-header--transparent');
        }
      }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // Initial check
  }

  // 2. Offcanvas Mobile Menu Drawer Toggle Handler
  const openDrawer = () => {
    if (navDrawer && drawerOverlay) {
      navDrawer.classList.add('is-active');
      drawerOverlay.classList.add('is-active');
      document.body.style.overflow = 'hidden';
      toggleBtns.forEach(btn => btn.setAttribute('aria-expanded', 'true'));
      navDrawer.querySelector('button, a')?.focus();
    }
  };

  const closeDrawer = () => {
    if (navDrawer && drawerOverlay) {
      navDrawer.classList.remove('is-active');
      drawerOverlay.classList.remove('is-active');
      document.body.style.overflow = '';
      toggleBtns.forEach(btn => btn.setAttribute('aria-expanded', 'false'));
    }
  };

  toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const isOpen = navDrawer?.classList.contains('is-active');
      if (isOpen) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  });

  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', closeDrawer);
  }

  const drawerLinks = document.querySelectorAll('.lum-nav-drawer a');
  drawerLinks.forEach(link => {
    link.addEventListener('click', closeDrawer);
  });

  const closeAllMegamenus = () => {
    document.querySelectorAll('.lum-megamenu.is-active').forEach(mm => {
      mm.classList.remove('is-active');
    });
    megamenuTriggers.forEach(t => {
      t.setAttribute('aria-expanded', 'false');
    });
  };

  // 3. Accessibility & Keyboard Navigation (Esc Key handler)
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeDrawer();
      closeAllMegamenus();
    }
  });

  // Close megamenus on click outside header
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.lum-header')) {
      closeAllMegamenus();
    }
  });

  // 4. Megamenu Hover & Click Handling with Grace Period Timer
  const megamenuItems = document.querySelectorAll('.lum-nav-item--has-megamenu');

  megamenuItems.forEach(item => {
    const trigger = item.querySelector('.lum-nav-link');
    const megamenu = item.querySelector('.lum-megamenu');
    if (!trigger || !megamenu) return;

    let timeoutId = null;

    const showMenu = () => {
      if (timeoutId) {
        clearTimeout(timeoutId);
        timeoutId = null;
      }
      // Close all other megamenus
      megamenuItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.querySelector('.lum-megamenu')?.classList.remove('is-active');
          otherItem.querySelector('.lum-nav-link')?.setAttribute('aria-expanded', 'false');
        }
      });
      trigger.setAttribute('aria-expanded', 'true');
      megamenu.classList.add('is-active');
    };

    const hideMenu = () => {
      if (timeoutId) clearTimeout(timeoutId);
      timeoutId = setTimeout(() => {
        megamenu.classList.remove('is-active');
        trigger.setAttribute('aria-expanded', 'false');
      }, 250); // 250ms grace period for smooth cursor movement across gaps
    };

    item.addEventListener('mouseenter', showMenu);
    trigger.addEventListener('mouseenter', showMenu);
    trigger.addEventListener('focus', showMenu);
    megamenu.addEventListener('mouseenter', showMenu);

    item.addEventListener('mouseleave', hideMenu);
    megamenu.addEventListener('mouseleave', hideMenu);

    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';

      if (isExpanded) {
        if (timeoutId) clearTimeout(timeoutId);
        megamenu.classList.remove('is-active');
        trigger.setAttribute('aria-expanded', 'false');
      } else {
        showMenu();
      }
    });
  });
}
