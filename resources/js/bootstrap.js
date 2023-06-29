import axios from 'axios';

// API related configurations 
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// tailwind theming
window.applyTheme = (change = false) => {

    if (change !== false) {
        localStorage.theme = localStorage.getItem('theme') === 'dark' ? 'light' : 'dark';
    }

    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
}

window.addEventListener("load", () => window.applyTheme());
