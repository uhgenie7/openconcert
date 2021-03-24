const headerNav = document.querySelector(".header__nav");
const faBars = document.querySelector(".fa-bars");
const faTimes = document.querySelector(".fa-times");


// navi bar click event
faBars.addEventListener("click", (e) => {
  e.stopPropagation();
  faTimes.style.display="block";
  faBars.style.display="none";
  headerNav.classList.add("show");
});

faTimes.addEventListener("click", () => {
  faBars.style.display="block";
  faTimes.style.display="none";
  headerNav.classList.remove("show");
});