function showDiv(idInfo) {
  var sel = document.getElementById('daysInAWeek').getElementsByTagName('section');
  for (var i=0; i<sel.length; i++) {
    sel[i].style.display = 'none';
  }
  document.getElementById('day'+idInfo).style.display = 'block';
}

function openNav() {
  document.getElementById("menu").classList.add("active");
  document.getElementById("menuToggle").classList.add("show");
}

function closeNav() {
  document.getElementById("menu").classList.remove("active");
  document.getElementById("menuToggle").classList.remove("show");
}


// Cookie consent

const cookieStorage = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}

const storageType = cookieStorage;
const consentPropertyName = 'gdpr_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);


var nav = document.querySelector('.main-navigation');
var content = document.querySelector('.content');

window.onload = () => {

    if (content != null) {
      let navHeight = nav.offsetHeight;
      content.style.marginTop = navHeight + "px";
    }

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    }
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
        setTimeout(() => {
            consentPopup.classList.remove('hidden');
        }, 2000);
    }

    // Google Analytics Init
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-W3LY67WLWZ');



}; // end window onload
