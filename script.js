const card_wrapper = document.getElementById('card_wrapper');
const hambureg = document.getElementById('hamburger');
const nav = document.getElementById('telonezet');
var x = true;

var count = card_wrapper.childElementCount;


if(count >= 4)
{
    card_wrapper.style.overflowX = 'scroll'
    card_wrapper.style.justifyContent = 'flex-start'
}
else
{
    card_wrapper.style.overflowX = 'hidden';
    card_wrapper.style.justifyContent = 'center';
}

hambureg.addEventListener('click', ()=>{

    if(x==false)
    {
        nav.style.transform = 'translateX(0%)';
        x=true;
    }
    else
    {
        nav.style.transform = 'translateX(-100%)';
        x=false;
    }
    
})


function applyIntersectionObserver(sectionId) {

    const section = document.getElementById(sectionId);
    const h1Element = section.querySelector('h1');
    const pElement = section.querySelector('p');
  
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.5
    };
  
    const intersectionCallback = (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
            h1Element.style.transform = 'translateX(0)';
            pElement.style.transform = 'translateX(0)'; 
            h1Element.style.opacity = '1';
            pElement.style.opacity = '1';
            }
      });
    };
  
    const intersectionObserver = new IntersectionObserver(intersectionCallback, observerOptions);
  
    intersectionObserver.observe(h1Element);
    intersectionObserver.observe(pElement);
  }
  
applyIntersectionObserver('szolgaltatasaink');
applyIntersectionObserver('munkaink');
applyIntersectionObserver('rolunk');
applyIntersectionObserver('kapcsolat');
