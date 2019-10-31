const btns = document.querySelectorAll('.skills__project__a')
const close = document.querySelectorAll('.skills__project__modal--cancel')

btns.forEach(btn => btn.addEventListener('click', () => {
    const id = btn.dataset.id
    const modal = document.querySelector(`.skills__project__modal-container[data-id="${id}"]`)
    modal.style.display = "flex"
}))

close.forEach(btn => btn.addEventListener('click', () => {
    const id = btn.dataset.id
    const modal = document.querySelector(`.skills__project__modal-container[data-id="${id}"]`)
    modal.style.display = "none"
}))