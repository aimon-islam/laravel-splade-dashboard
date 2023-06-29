import axios from 'axios';
import { applyTheme } from './global-helpers';

// API related configurations 
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// tailwind theming
window.addEventListener("load", () => applyTheme());