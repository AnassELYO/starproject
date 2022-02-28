document.addEventListener('alpine:init', () => {
    
    Alpine.data('tabs', (defaultTab) => ({
        tab: defaultTab,
        toggleTab (e) {
            this.tab = e.target.getAttribute('href').replace('#', '')
        },
        isActive (tab) {
            return tab === this.tab
        }
    }))
})