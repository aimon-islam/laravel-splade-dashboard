// apply tailwind theme
export function applyTheme() {
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    return;
}

// change theme and apply theme
export function changeAndApplyTheme(theme = null) {
    // get the current theme from local storage
    const currentTheme = localStorage.getItem('theme');
    // if current theme is in light mode
    if (currentTheme === 'light') {
        localStorage.theme = 'dark';
    }
    // if current theme is in dark mode
    else if (currentTheme === 'dark') {
        localStorage.theme = 'light';
    }
    // otherwise inject device current theme 
    else {
        localStorage.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'light' : 'dark';
    }
    // apply the theme into the app
    return applyTheme();
}