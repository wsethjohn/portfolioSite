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


/*===================== Open web dev pop up in portfolio =====================*/

// JavaScript for the web dev pop-up
// Get necessary elements
const popup = document.getElementById('popup');
const openPopupIcons = document.querySelectorAll('.bx-code-alt');
const closePopupIcon = document.getElementById('close-popup');

// Function to open the pop-up
function openPopup() {
  popup.classList.add('active');
}

// Function to close the pop-up
function closePopup() {
  popup.classList.remove('active');
}

// Event listeners
openPopupIcons.forEach(icon => {
  icon.addEventListener('click', openPopup);
});

closePopupIcon.addEventListener('click', closePopup);


/*===================== Open digital marketing pop up in portfolio =====================*/

// JavaScript for the digital marketing pop-up

const dmPopup = document.getElementById('marketing-popup');
const openDmPopupIcons = document.querySelectorAll('.bx-line-chart');
const closeDmPopupIcon = document.getElementById('marketing-close');

// Function to open the pop-up
function openDmPopup() {
  dmPopup.classList.add('active');
}

// Function to close the pop-up
function closeDmPopup() {
  dmPopup.classList.remove('active');
}

// Event listeners
openDmPopupIcons.forEach(icon => {
  icon.addEventListener('click', openDmPopup);
});

closeDmPopupIcon.addEventListener('click', closeDmPopup);


/*===================== Open graphic design pop up in portfolio =====================*/

// JavaScript for the graphic design pop-up

const designPopup = document.getElementById('design-popup');
const openDesignPopupIcons = document.querySelectorAll('.bxs-brush');
const closeDesignPopupIcon = document.getElementById('design-close');

// Function to open the pop-up
function openDesignPopup() {
  designPopup.classList.add('active');
}

// Function to close the pop-up
function closeDesignPopup() {
  designPopup.classList.remove('active');
}

// Event listeners
openDesignPopupIcons.forEach(icon => {
  icon.addEventListener('click', openDesignPopup);
});

closeDesignPopupIcon.addEventListener('click', closeDesignPopup);


/*===================== Open Lead Generation pop up in portfolio =====================*/

// JavaScript for the Lead Generation pop-up

const leadPopup = document.getElementById('lead-popup');
const openLeadPopupIcons = document.querySelectorAll('.bxs-group');
const closeLeadPopupIcon = document.getElementById('lead-close');

// Function to open the pop-up
function openLeadPopup() {
    leadPopup.classList.add('active');
}

// Function to close the pop-up
function closeLeadPopup() {
    leadPopup.classList.remove('active');
}

// Event listeners
openLeadPopupIcons.forEach(icon => {
  icon.addEventListener('click', openLeadPopup);
});

closeLeadPopupIcon.addEventListener('click', closeLeadPopup);

/*===================== Open Live Events pop up in portfolio =====================*/

// JavaScript for the Live Events pop-up

const eventsPopup = document.getElementById('events-popup');
const openEventsPopupIcons = document.querySelectorAll('.bx-calendar-check');
const closeEventsPopupIcon = document.getElementById('events-close');

// Function to open the pop-up
function openEventsPopup() {
    eventsPopup.classList.add('active');
}

// Function to close the pop-up
function closeEventsPopup() {
    eventsPopup.classList.remove('active');
}

// Event listeners
openEventsPopupIcons.forEach(icon => {
  icon.addEventListener('click', openEventsPopup);
});

closeEventsPopupIcon.addEventListener('click', closeEventsPopup);