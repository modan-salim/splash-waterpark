// var gallery = document.querySelector('#gallery');
// var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
// var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
// var resizeAll = function () {
//     var altura = getVal(gallery, 'grid-auto-rows');
//     var gap = getVal(gallery, 'grid-row-gap');
//     gallery.querySelectorAll('.gallery-item').forEach(function (item) {
//         var el = item;
//         el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
//     });
// };
// gallery.querySelectorAll('img').forEach(function (item) {
//     item.classList.add('byebye');
//     if (item.complete) {
//         console.log(item.src);
//     }
//     else {
//         item.addEventListener('load', function () {
//             var altura = getVal(gallery, 'grid-auto-rows');
//             var gap = getVal(gallery, 'grid-row-gap');
//             var gitem = item.parentElement.parentElement;
//             gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
//             item.classList.remove('byebye');
//         });
//     }
// });
// window.addEventListener('resize', resizeAll);
// gallery.querySelectorAll('.gallery-item').forEach(function (item) {
//     item.addEventListener('click', function () {        
//         item.classList.toggle('full');        
//     });
// });
let valueDisplays = document.querySelectorAll(".number");
let interval = 5000;
valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute
        ("data-val"));
    
      let duration = Math.floor(interval / endValue) ;
      let counter = setInterval(function(){
        startValue +=1;
        valueDisplay.textContent = startValue;
        if(startValue == endValue){
          clearInterval(counter);
        }
        },duration );
      
      });