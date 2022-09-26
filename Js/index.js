const hamburger = document.querySelector(".hamburger");  
 const nav_list = document.querySelector(".nav_list");  
 hamburger.addEventListener('click', () => { 
    hamburger.classList.toggle("change")
  nav_list.classList.toggle("nav-change")
 });
