const modal = document.getElementById("modal__container");
const buttonOpen = document.getElementById("formulario");
const buttonClose = document.getElementById("modal__close");
//listener click in button
buttonOpen.addEventListener("submit",(event)=>{
  event.preventDefault();
  modal.classList.add("show");
})
buttonClose.addEventListener("click",()=>{
  modal.classList.remove("show");
  document.getElementById("formulario").submit();
  buttonOpen.reset();
})