/**
 * Lumetech Main JavaScript Entrypoint - Production Build
 */

import { initNav } from './modules/nav.js';
import { initForms } from './modules/forms.js';
import { initAnimations } from './modules/animations.js';

document.addEventListener('DOMContentLoaded', () => {
  initNav();
  initForms();
  initAnimations();
});
