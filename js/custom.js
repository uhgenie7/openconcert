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

// wrap height에 따른 footer 조건문
const wrap = document.querySelector(".wrap");
const footer = document.querySelector(".footer");
const wrapInfo = wrap.getBoundingClientRect();
const wrapHeight = wrapInfo.height
console.log(wrapInfo.height);

if (wrapHeight > 768) {
  footer.style.position = "relative";
} else {
  footer.style.position = "fixed";
  footer.style.bottom = 0;
}