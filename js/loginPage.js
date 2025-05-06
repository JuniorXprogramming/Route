window.onload = setPage

function setPage() {
    const elemActiveNav = document.getElementById("nav-3")
    const elemFadeLogin = document.getElementById("fade-login")
    elemActiveNav.classList.add("nav-active")
    elemFadeLogin.style.opacity = 1
}
