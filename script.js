// Get the select elements  
const kasualSelect = document.getElementById('kasual-options');  
const sportySelect = document.getElementById('sporty-options');  
const formalSelect = document.getElementById('formal-options');  
const bohemianSelect = document.getElementById('bohemian-options');  
  
// Get the image elements  
const kasualImage = document.getElementById('kasual').querySelector('img');  
const sportyImage = document.getElementById('sporty').querySelector('img');  
const formalImage = document.getElementById('formal').querySelector('img');  
const bohemianImage = document.getElementById('bohemian').querySelector('img');  
  
// Get the result element  
const styleResult = document.getElementById('style-result');  
  
// Add event listeners to the select elements  
kasualSelect.addEventListener('change', () => {  
  const selectedValue = kasualSelect.value;  
  kasualImage.src = `kasual-${selectedValue}.jpg`;  
  styleResult.textContent = `Gaya Kasual: ${selectedValue}`;  
});  
  
sportySelect.addEventListener('change', () => {  
  const selectedValue = sportySelect.value;  
  sportyImage.src = `sporty-${selectedValue}.jpg`;  
  styleResult.textContent = `Gaya Sporty: ${selectedValue}`;  
});  
  
formalSelect.addEventListener('change', () => {  
  const selectedValue = formalSelect.value;  
  formalImage.src = `formal-${selectedValue}.jpg`;  
  styleResult.textContent = `Gaya Formal: ${selectedValue}`;  
});  
  
bohemianSelect.addEventListener('change', () => {  
  const selectedValue = bohemianSelect.value;  
  bohemianImage.src = `bohemian-${selectedValue}.jpg`;  
  styleResult.textContent = `Gaya Bohemian: ${selectedValue}`;  
});
