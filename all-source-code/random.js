const number = document.getElementById('number');
const generateBtn = document.getElementById('generateBtn');

const randomNumbergenerate = () => {
    const randomNumber = Math.floor(Math.random() * 10 + 1);
    number.textContent = randomNumber;

    if (randomNumber = 1) location.replace('/aster1.html')
    if (randomNumber = 2) location.replace('/chamomile1.html')
    if (randomNumber = 3) location.replace('/daffodils1.html')
    if (randomNumber = 4) location.replace('/dancing1.html')
    if (randomNumber = 5) location.replace('/forget1.html')
    if (randomNumber = 6) location.replace('/lavender1.html')
    if (randomNumber = 7) location.replace('/lisi1.html')
    if (randomNumber = 8) location.replace('/peony1.html')
    if (randomNumber = 9) location.replace('/sakura1.html')
    if (randomNumber = 10) location.replace('/snow1.html')
};

generateBtn.addEventListener('click', randomNumbergenerate);



