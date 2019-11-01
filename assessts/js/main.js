const btns = document.querySelectorAll('.skills__project__a')
const closebtns = document.querySelectorAll('.skills__project__modal--cancel')

btns.forEach(btn => btn.addEventListener('click', function() {open(btn)}))

closebtns.forEach(btn => btn.addEventListener('click', function() {cancel(btn)}))

//nav = document.querySelector('nav'),
//observerOptions = {rootmMargin: "-80% 0px 0px 0px"}

function open(btn) {
    const id = btn.dataset.id
    const modal = document.querySelector(`.skills__project__modal-container[data-id="${id}"]`)
    modal.style.display = "flex"
}

function cancel(closebtn) {
    const id = closebtn.dataset.id
    const modal = document.querySelector(`.skills__project__modal-container[data-id="${id}"]`)
    modal.style.display = "none"
}