function openNav() { 
    document.getElementById("mobile__menu").style.width = "100%";
}
function closeNav() { 
    document.getElementById("mobile__menu").style.width = "0";
}

const btns = document.querySelectorAll('.skills__project__a')
const closebtns = document.querySelectorAll('.skills__project__modal--cancel')

btns.forEach(btn => btn.addEventListener('click', function() {open(btn)}))
closebtns.forEach(btn => btn.addEventListener('click', function() {cancel(btn)}))

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

const nav = document.querySelector('nav')
      header = document.querySelector('header')
      navObserver = new IntersectionObserver(entries => entries.forEach(entry => (!entry.isIntersecting) ? nav.classList.add('nav--scrolled') : nav.classList.remove('nav--scrolled')),{rootMargin: "-80% 0px 0px 0px"})

navObserver.observe(header)