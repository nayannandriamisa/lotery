 // Récupérer l'élément conteneur
 const numberContainer = document.getElementById('numberContainer');
 const message = document.getElementById('message');

 // Créer les chiffres de 1 à 50
 for (let i = 1; i <= 50; i++) {
     const numberDiv = document.createElement('div');
     numberDiv.textContent = i;
     numberDiv.classList.add('number');
     numberContainer.appendChild(numberDiv);

     // Ajouter un événement de clic à chaque chiffre
     numberDiv.addEventListener('click', () => toggleSelect(numberDiv));
 }

 let selectedNumbers = [];

 function toggleSelect(element) {
     const number = parseInt(element.textContent);

     // Si le chiffre est déjà sélectionné, le désélectionner
     if (selectedNumbers.includes(number)) {
         selectedNumbers = selectedNumbers.filter(n => n !== number);
         element.classList.remove('selected');
     } 
     // Sinon, sélectionner le chiffre s'il y a moins de 5 chiffres sélectionnés
     else if (selectedNumbers.length < 5) {
         selectedNumbers.push(number);
         element.classList.add('selected');
     } 
     // Afficher un message si 5 chiffres sont déjà sélectionnés
     if (selectedNumbers.length === 5) {
         message.textContent = "Vous avez sélectionné 5 chiffres.";
     } else {
         message.textContent = "";
     }
 }