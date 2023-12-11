const open = document.querySelector(".rv-btn");
const card = document.querySelector(".card-wrapper") ;
const close = document.querySelector(".card-wrapper .card .review-card .close");
const cardrev = document.querySelector(".card-wrapper .card .review-card")
open.addEventListener("click", () =>{ card.classList.add("action");
cardrev.classList.remove("remove")
})
close.addEventListener("click" , () =>
   cardrev.classList.add("remove")
)
close.addEventListener("click", () =>{
    setTimeout(function() {
    card.classList.remove("action");
}, 500)
})

