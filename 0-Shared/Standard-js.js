const icon_Facebook = document.querySelector('.fa-facebook');    
const icon_Instagram = document.querySelector('.fa-instagram');
const icon_Youtube = document.querySelector('.fa-youtube');    
const icon_Twitter = document.querySelector('.fa-twitter');      

icon_Facebook.addEventListener('click', clickOnFacebook);                 
icon_Instagram.addEventListener('click', clickOnInstagram);  
icon_Youtube.addEventListener('click', clickOnYoutube);                 
icon_Twitter.addEventListener('click', clickOnTwitter);

function clickOnFacebook(event) {
  window.open("https://it-it.facebook.com/groups/523172937735959/",'width=600,height=500,left=0,top=0').creator;
  event.preventDefault();
}

function clickOnInstagram(event) {
  window.open("https://www.instagram.com/ilpassaparoladeilibri/",'width=600,height=500,left=0,top=0').creator;
  event.preventDefault();
}

function clickOnYoutube(event) {
  window.open("https://www.youtube.com/channel/UCVIFYM2KzpTu_40p9lIZ_UQ",'width=600,height=500,left=0,top=0').creator;
  event.preventDefault();
}

function clickOnTwitter(event) {
  window.open("https://twitter.com/_un_libro_",'width=600,height=500,left=0,top=0').creator;
  event.preventDefault();
}
