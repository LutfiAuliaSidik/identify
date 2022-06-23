// navigations active
const containerNav = document.querySelectorAll('.container-nav ul li');
const url = window.location.pathname;

if ( url == "/identify/home/") {
  containerNav[0].classList.add('active');
} else {
  containerNav[0].classList.add('no-active');
} if ( url == "/identify/home/image") {
  containerNav[1].classList.add('active');
} else {
  containerNav[1].classList.add('no-active');
} if ( url == "/identify/home/files") {
  containerNav[2].classList.add('active');
} else {
  containerNav[2].classList.add('no-active');
} if ( url == "/identify/home/static") {
  containerNav[3].classList.add('active');
} else {
  containerNav[3].classList.add('no-active');
}
// navbars 
const containerHeader = document.querySelector('.container-header');
const slideShow = document.querySelector('.container-aside');

containerHeader.addEventListener('click', function(e){
  if ( e.target.className == "fa-solid fa-bars") {
    slideShow.classList.toggle('slideshow');
  } 
});
// info 
const listIdentify = document.querySelectorAll('.list-identify');
const containerInfo = document.querySelectorAll('.container-info');
const valueP = document.querySelectorAll('.text-identify p:nth-child(3)');
const infoSpan = document.querySelectorAll('.info span');
const infoP = document.querySelectorAll('.info p');

for (let i = 0; i < listIdentify.length; i++) {
  listIdentify[i].addEventListener('click', function(e){
    if ( e.target.className == "fa-solid fa-circle-info") {
      containerInfo[i].classList.toggle('info-active');
      infoSpan[i].style.setProperty('--info-value', valueP[i].outerText);
      infoSpan[i].style.setProperty('--animation-value', '5s statics 1 alternate forwards');
      let counter = 0;
      let x = valueP[i].outerText.split('%')[0];
      setInterval(() => {
        if ( counter == x ) {
          clearInterval();
        } else {
          counter+=1;
          infoP[i].textContent = counter + '%';
        }
      }, 50);
    }
  });
}
// page detail 
if (url == "/identify/home/detail/") {
  document.querySelector('.container-nav').style.display = "none";
  containerHeader.style.height = "53px";
  slideShow.style.top = "53px";
  document.querySelector('.aside ul li:nth-child(4) a').href = "http://localhost:8000/identify/home";
}
// container-zoom 
const detailCardAddress = document.querySelector('.detail-card-address');
const containerZoom = document.querySelector('.container-zoom');
const zoomImg = document.querySelector('.image-zoom img');
if (containerZoom) {
  detailCardAddress.addEventListener('click', function(e) {
    if ( e.target.className == "img") {
      containerZoom.classList.toggle('active-zoom');
      zoomImg.src = e.target.src;
    }
  })
}
// image gallery 
const imageGallery = document.querySelector('.image-gallery');
const imageChild = document.querySelector('.image-child img');

if ( imageGallery ) {
  imageGallery.addEventListener('click', function(e){
    if (e.target.className == "img-g") {
      imageChild.src = e.target.src;
      imageChild.classList.add('fadein');
      setTimeout(() => {
        imageChild.classList.remove('fadein');
      }, 500);
    }
  });
}
// container-image 
const containerImage = document.querySelector('.container-image');
const imageDetail = document.querySelector('.image-detail');
const imageDetailmg = document.querySelector('.image-detail img');

if ( containerImage ) {
  containerImage.addEventListener('click', function(e) {
    if ( e.target.className == "c-image") {
      imageDetail.classList.add('image-detail-active');
      imageDetailmg.src = e.target.src;
    } else if ( e.target.className == "fa-solid fa-circle-xmark" ) {
      imageDetail.classList.remove('image-detail-active');
    }
  });
}

