// Dark mode
const getStyleMode = () => localStorage.getItem('styleMode')
const styleToggle = document.querySelector('.header-mode-switcher')


const enableDarkMode = () => {
    document.body.classList.add('dark-mode-woo-game-shop')
    localStorage.setItem('styleMode', 'dark')
}

const disableDarkMode = () => {
    document.body.classList.remove('dark-mode-woo-game-shop')
    localStorage.setItem('styleMode', null)
}

if (styleToggle) {
    styleToggle.addEventListener('click', () => {
        const styleMode = getStyleMode()
        console.log(styleMode)
        styleMode === 'dark' ? disableDarkMode() : enableDarkMode()
    })
}
if (getStyleMode() === 'dark') enableDarkMode()