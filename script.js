/*===================== toggle icon navbar =====================*/
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

/*===================== scroll sections active link =====================*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });

    /*===================== sticky navbar =====================*/
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    /*===================== Remove toggle icon and navbar when click navbar link (scroll) =====================*/
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};

/*===================== scroll reveal =====================*/
ScrollReveal({ 
    reset: true, 
    distance: '80px',
    duration: 2000,
    delay: 200,
}); 

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });


/*===================== typed js =====================*/
const typed = new Typed('.multiple-text', {
    strings: ['Digital Marketer', 'Cinematographer', 'Web Developer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});

/*===================== Open Cinema Reel pop up in portfolio =====================*/

// JavaScript for the video pop-up
const videoPopupLinks = document.querySelectorAll('.video-popup');
const videoModal = document.getElementById('video-modal');
const videoPlayerContainer = document.getElementById('video-player');

videoPopupLinks.forEach((link) => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    const videoId = link.dataset.video;
    openVideoModal(videoId);
  });
});

function openVideoModal(videoId) {
  const youtubeUrl = `https://www.youtube.com/embed/${videoId}?rel=0&autoplay=1`;
  const iframe = document.createElement('iframe');
  iframe.setAttribute('src', youtubeUrl);
  iframe.setAttribute('width', '100%');
  iframe.setAttribute('height', '100%');
  iframe.setAttribute('frameborder', '0');
  iframe.setAttribute('allowfullscreen', 'true');
  
  videoPlayerContainer.innerHTML = '';
  videoPlayerContainer.appendChild(iframe);

  videoModal.style.display = 'block';
}

function closeVideoModal() {
  videoPlayerContainer.innerHTML = '';
  videoModal.style.display = 'none';
}

const closeBtn = document.querySelector('.close');
closeBtn.addEventListener('click', closeVideoModal);

// Close the video modal when the user clicks outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === videoModal) {
    closeVideoModal();
  }
});