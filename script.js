//Top Navbar
const topNavbar = document.querySelector('.top-navbar');
window.onscroll = function() {
  if (window.pageYOffset > topNavbar.offsetHeight) {
    topNavbar.style.opacity = '0.8';
    topNavbar.addEventListener('mouseenter', function() {
      topNavbar.style.opacity = '1';
      topNavbar.style.transitionDuration = "0.4s";
    });
    topNavbar.addEventListener('mouseleave', function() {
      topNavbar.style.opacity = '0.8';
    });
  } else {
    topNavbar.addEventListener('mouseleave', function() {
      topNavbar.style.opacity = '1';
    });
    topNavbar.style.opacity = '1';
  }
};

// Videos
const videoContainers = document.querySelectorAll('.video');
for (let i=0; i<videoContainers.length; i++) {
  const videoThumbnail = videoContainers[i].querySelector('.video-thumbnail');
  const playButton = videoContainers[i].querySelector('.play-button');
  const reviewBanner = videoContainers[i].querySelector('.review-banner');
  const youtubeVideo = videoContainers[i].querySelector('.youtube-video');

  [videoThumbnail, playButton, reviewBanner].forEach(function(item) {
    item.addEventListener('click', function() {
      youtubeVideo.src += '?autoplay=1';
      videoThumbnail.style.display = 'none';
      playButton.style.display = 'none';
      reviewBanner.style.display = 'none';
      youtubeVideo.style.display = 'block';
      videoContainers[i].style.filter = "brightness(100%)";
    })
  });
}

// Navbar Toggler
const toggleButton = document.querySelector('.navbar-toggler');
toggleButton.addEventListener('click', function () {
  toggleButton.classList.toggle('navbar-dark');
  toggleButton.classList.toggle('toggle-button-active');
});

// Slider
const items = document.querySelectorAll('.carousel-item');
for (let i=0; i<items.length; i++) {
  const imageUrl = items[i].querySelector('img').src;
  items[i].style.backgroundImage = `linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 1)),  url("${imageUrl}")`;
}