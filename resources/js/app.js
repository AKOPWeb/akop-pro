import.meta.glob([
    '../img/**',
    '../fonts/**',
]);

window.classToggle = (elementIds, classes) => {
    if (typeof elementIds !== 'object' || typeof classes !== 'object') return false;
    elementIds.forEach(elementId => {
        let element = document.getElementById(elementId);
        if (classes.length >= 1){
            classes.forEach(classToToggle => {
                element.classList.toggle(classToToggle)
            })
        }
    });
}

window.buttonLoadingState = (elementId,classToAdd) => {
    let button = document.getElementById(elementId)
    if (button === null) return false
    button.querySelector('span').innerText = 'Carregando'
    button.disabled = true
    button.classList.add(classToAdd)
};

