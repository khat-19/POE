const arrival = document.querySelector('.arriv');
const departure = document.querySelector('.depart');
const travelcountry = document.querySelector('.travcont');

arrival.addEventListener('click', (e) => {
    travelcountry.input.innerHTML = 'Travelling from';
})