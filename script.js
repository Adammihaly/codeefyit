const card_wrapper = document.getElementById('card_wrapper');
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
