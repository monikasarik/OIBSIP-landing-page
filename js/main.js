const navMenu = document.getElementById("nav_menu");
const toggleMenuBtn = document.getElementById("toggle_btn");
const closeMenuBtn = document.getElementById("close_btn");

// SHOW 
toggleMenuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("show");
});

/* ACTIVE AND REMOVE MENU */
const menuLinks = document.querySelectorAll(".nav_menu_item_link");

function clickAction() {
  // ADDS ('active') class to the LINK
  menuLinks.forEach((link) => link.classList.remove("active"));
  this.classList.add("active");

  // AFTER CLICK REMOVE CLASS ('show') FROM 'navMenu'
  navMenu.classList.remove("show");
}

menuLinks.forEach((link) => link.addEventListener("click", clickAction));

gsap.from('.logo', {
  opacity: 0,
  y: '-100px',
  delay: 0.5,
  duration: 1
});

gsap.from('.toggle_btn', {
  opacity: 0,
  y: '-100px',
  delay: 1,
  duration: 0.5,
  stagger: 0.2
});

gsap.from('.hero_img', {
  opacity: 0,
  y: '100px',
  delay: 2.4,
  duration: 1.3
});

// TITLE 
gsap.from('.title', {
  opacity: 0,
  y: '100px',
  delay: 2.8,
  duration: 1.3
});

// main_title
gsap.from('.main_title > h3', {
  opacity: 0,
  y: '100px',
  delay: 3.2,
  duration: 1.4
});

// tagline
gsap.from('.tagline', {
  opacity: 0,
  y: '100px',
  delay: 3.5,
  duration: 1.4
});

gsap.from('.btn_wrapper', {
  opacity: 0,
  y: '100px',
  delay: 3.8,
  duration: 1.4
});
