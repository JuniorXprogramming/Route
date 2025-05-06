window.onload = setPage

function setPage() {
    const elemSlide = document.querySelector(".slide-minibus")
    const elemActiveNav = document.getElementById("nav-1")
    elemSlide.style.width = "45%"
    elemActiveNav.classList.add("nav-active")
}
