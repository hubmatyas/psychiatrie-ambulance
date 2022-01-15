function showDiv(idInfo) {
  var sel = document.getElementById('daysInAWeek').getElementsByTagName('section');
  for (var i=0; i<sel.length; i++) {
    sel[i].style.display = 'none';
  }
  document.getElementById('day'+idInfo).style.display = 'block';
}

console.log('this works');


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

window.onload = () => {

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

    // Google maps Init
   
    window.initMap = () => {
      // Map options
      var options = {
        zoom:10,
        center:{lat:49.8179884,lng:13.3920277},
		  mapId: '54220ee84d2e31ca'
      }

      var map = new google.maps.Map(document.getElementById('map'), options);


      var markers = [
        {
          coords:{lat:49.7536835,lng:13.3769782},
              content:'<div class="map-box"><strong>Plzeň, Rondel</strong><p>Lochotínská 18, 301 00 Plzeň 1</p><a href="https://maps.app.goo.gl/4smHyMevYYRwYaJz6" target="_blank" rel="noopener noreferrer">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.7307896,lng:13.3986162},
          content:'<div class="map-box"><strong>Plzeň, Slovany</strong><p>Lochotínská 18, 301 00 Plzeň 1</p><a href="https://maps.app.goo.gl/Xz6sKGrThr1rYTSz6" target="_blank" rel="noopener noreferrer">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.8179884,lng:13.3920277},
          content:'<div class="map-box"><strong>Třemošná</strong><p>Zálužská 138, 330 11 Třemošná</p><a href="https://maps.app.goo.gl/Jy81TVscVZkNeqLe7" target="_blank" rel="noopener noreferrer">Zobrazit v mapách google</a></div>'
        },
        {
          coords:{lat:49.9346361,lng:13.3992181},
          content:'<div class="map-box"><strong>Plasy</strong><p>Potoční 546, 331 01 Plasy</p><a href="https://maps.app.goo.gl/tLwxfB6GFkDKMbKY9" target="_blank" rel="noopener noreferrer">Zobrazit v mapách google</a></div>',
        }
      ];


      for(var i = 0;i < markers.length;i++){
        addMarker(markers[i]);
      }

      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          icon: "https://psychiatrie-ambulance.cz/wp-content/uploads/2021/03/icon-map.png",
        });

        if(props.iconImage){
          marker.setIcon(props.iconImage);
        }

        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
		
window.addEventListener('load', function() {
   initMap();
});
