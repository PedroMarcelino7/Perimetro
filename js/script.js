function changeClass(id) {
    const forms = document.querySelectorAll('.form')
    const element = document.querySelector(`#${id}`)

    forms.forEach(form => {
        if (form.id !== id) {
            form.classList.remove('d-flex')
            form.classList.add('d-none')
        }
    })

    if (element.classList.contains('d-flex')) {
        element.classList.remove('d-flex')
        element.classList.add('d-none')
    } else if (element.classList.contains('d-none')) {
        element.classList.remove('d-none')
        element.classList.add('d-flex')
    } else {
        element.classList.add('d-flex')
    }
}
