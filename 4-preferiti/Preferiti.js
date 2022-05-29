function onPrefJson(json) {
  const prefs = document.querySelector('#book-list');
  console.log(json);
  let results = json.totalItems;

  for(let result of json) {
    const copertina = result.img;
    const author = result.autore;
    const title = result.titolo;

    console.log(result);

    const oggetto=document.createElement('div');
    oggetto.classList.add('box-book');

    const autore=document.createElement('h2');
    autore.classList.add('autore');
    autore.textContent=author;
    
    const titolo=document.createElement('h1');
    titolo.classList.add('titolo');
    titolo.textContent=title;

    const img = document.createElement('img');
    img.src=copertina;

    id = document.createElement('p');
    id.textContent = result.id;
      
    const preferito = document.createElement('a');
    preferito.setAttribute('id', 'preferito');
    preferito.innerText= "Rimuovi dai preferiti";
    preferito.addEventListener('click',removePreferito);

    oggetto.appendChild(img);
    oggetto.appendChild(titolo);
    oggetto.appendChild(autore);
    oggetto.appendChild(id);
    oggetto.appendChild(preferito);
    prefs.appendChild(oggetto);
      
  }

}

function removePrefJson(json){
  if(json.esito == true){
    const result = document.querySelector('#book-list');
    result.innerHTML = '';
    caricaPreferiti();
  }
}

function onResponse(response){
  return response.json();
}

function caricaPreferiti(){
  fetch("../carica_preferiti.php").then(onResponse).then(onPrefJson);
}

function removePreferito(event){
  const button = event.currentTarget;

  const formData = new FormData();
  formData.append('id', button.parentNode.querySelector('p').textContent);

  fetch("../remove_preferiti.php", {method: 'post', body: formData}).then(onResponse).then(removePrefJson);
}

caricaPreferiti();
