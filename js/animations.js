let controlAnimation = 0;
const benef__card = document.querySelectorAll(".benef__card, .modules__card, .opinion__card");
let numberCard = benef__card.length;
function animation(i){
  benef__card[i].animate([
    {
      transform:'translateY(0)'
    },
    {
      transform:'translateY(200px)'
    }
  ],{
    duration:500,
    delay:0,
    direction:'reverse',
    easing:'linear',
    iterations:1,
    fill:'forwards',
  });
}
const options = {
  //root,
  rootMargin:'0px 0px 0px 0px',
  threshold:0,
}
function activeAnimation(entries, observer){
  if (controlAnimation < numberCard){
    controlAnimation +=1;
    for (let count=0; count< numberCard; count++){
      animation(count);
    }
}
}
const observer = new IntersectionObserver(activeAnimation, options);
for (var i=0; i<numberCard; i++){
  observer.observe(benef__card[i]);
}

