let lastScrollTop = 0;
const navbar = document.getElementById("navbar");
const navbarHeight = navbar.offsetHeight;
const viewportHeight = window.innerHeight;

window.addEventListener("scroll", function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop && currentScroll > navbarHeight) {
    // Scorri verso il basso e lo scroll ha superato l'altezza della navbar e della viewport
    navbar.classList.add("hidden");
    navbar.style.backgroundColor = "transparent"; // Rimuovi il background color quando nav bar è nascosta
  } else {
    // Scorri verso l'alto o lo scroll è inferiore all'altezza della navbar e della viewport
    navbar.classList.remove("hidden");
    if (currentScroll < viewportHeight) {
      navbar.style.backgroundColor = "transparent"; // Rimuovi il background color quando nav bar è visibile nella parte superiore della viewport
    } else {
      navbar.style.backgroundColor = "rgba(249, 244, 237)";
      navbar.style.height = "80px";
      navbar.classList.add('shadow-sm'); // Aggiungi il background color quando nav bar è visibile nella parte inferiore della viewport
    }
  }
  if (currentScroll === 0) {
    navbar.style.backgroundColor = "transparent";
    navbar.classList.remove('shadow-sm');
    navbar.style.height = "150px";

  }
  lastScrollTop = currentScroll;
});
    // evento login
// let login_btn=document.querySelector('#login_btn')
// let login_form=document.querySelector('#login_form')
// let check=false

// login_btn.addEventListener('click', ()=>{

//     if (check==false){
//         login_form.classList.remove('d-none')
//         login_form.classList.add('appear')
//         login_btn.innerHTML='maybe later <'
//         check=true
//     }else{
//         login_form.classList.add('d-none')
//         login_btn.innerHTML='> Log in'
//         check=false
//     }
// })

// document.addEventListener('DOMContentLoaded', () => {
//     let login_btn = document.querySelector('#login_btn');
//     let login_form = document.querySelector('#login_form');
//     let check = false;

//     if (login_btn) {
//         login_btn.addEventListener('click', () => {
//             if (check === false) {
//                 login_form.classList.remove('d-none');
//                 login_form.classList.add('appear');
//                 login_btn.innerHTML = 'maybe later <';
//                 check = true;
//             } else {
//                 login_form.classList.add('d-none');
//                 login_btn.innerHTML = '> Log in';
//                 check = false;
//             }
//         });
//     } else {
//         console.error('Element with ID login_btn not found.');
//     }

// evento freccia articolo
let div_arrow=document.querySelector('.div-arrow')

function scrollFunction() {
    let element = document.getElementById("contenuto");
    element.scrollIntoView({ behavior: 'smooth'});
  }
  
  div_arrow.addEventListener('click',()=>{
    scrollFunction()
})




// evento navbar
// let lastScrollTop = 0;
// const navbarHeight = document.getElementById("navbar").offsetHeight;
// const viewportHeight = window.innerHeight;

// window.addEventListener("scroll", function() {
//   let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  
//   if (currentScroll > lastScrollTop && currentScroll > navbarHeight) {
//     // Scorri verso il basso e lo scroll ha superato l'altezza della navbar e della viewport
//     document.getElementById("navbar").classList.add("hidden");
//   } else {
//     // Scorri verso l'alto o lo scroll è inferiore all'altezza della navbar e della viewport
//     document.getElementById("navbar").classList.remove("hidden");
//   }

//   lastScrollTop = currentScroll;
// });






