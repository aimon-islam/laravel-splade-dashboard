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
    localStorage.theme = theme !== null ? theme : localStorage.getItem('theme') === 'dark' ? "light" : "dark";
    applyTheme();
    return;
}