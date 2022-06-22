const btnOpen = document.querySelector('.btn-open'),
    formRegistration = document.querySelector('.form-register'),
    sizeFormRegistration = formRegistration.scrollHeight,
    containerForms = document.querySelector('.form'),
    sizeContainerForm = containerForms.clientHeight,
    shadow = document.querySelector('.shadow');



const openForm = () => {

    formRegistration.classList.toggle('open-form');
    if (formRegistration.classList.contains('open-form')) {
        containerForms.style.cssText = `height: ${sizeFormRegistration}px; transition: .3s ease;`
    } else {
        containerForms.style.cssText = `height: ${sizeContainerForm}px; transition: .3s ease;`
    }
}


btnOpen.addEventListener('click', openForm);
