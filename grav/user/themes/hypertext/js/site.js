var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function generateMailToLink(pre, post) {
  window.location.href = 'mailto:' + pre + '@' + post;
}

function scrollHeader() {
  // Has scrolled class on header
  if (window.scrollY > 65) {
    document.getElementById('header').classList.add('scrolled');
  } else {
    document.getElementById('header').classList.remove('scrolled');
  }
}

function toggleMobileMenu() {
  document.getElementsByClassName('sidebar')[0].classList.toggle('sidebar--active');
}

function closeMobileMenu() {
  document.getElementsByClassName('sidebar')[0].classList.remove('sidebar--active');
}

function scrollToTop() {
  window.scroll({top: 0, left: 0, behavior: 'smooth'});
  return false;
}

function scrollToElement(elementId) {
  var element = document.getElementById(elementId);

  if (!element) {
    window.location.href = '/#' + elementId;
  } else {
    closeMobileMenu();
    window.scroll({top: (element.offsetTop - 60), left: 0, behavior: 'smooth'});
  }
}

function playAudioTrack(key) {
  document.getElementById('snippet-track-container-' + key).style.display = 'block';
  document.getElementById('snippet-track-' + key).play();
}

function closeOverlay() {
  document.body.removeChild(document.getElementsByClassName('overlay--open')[0]);
}

function showSongText(url) {
  var template = document.getElementById('overlay-template');
  var overlay = template.cloneNode(true);
  overlay.id = '';
  overlay.classList.add('overlay--open');

  var link = document.createElement('a');
  link.href = url;
  link.target = '_blank';
  link.innerHTML = 'View PDF';

  var content = document.createElement('object');
  content.type = 'application/pdf';
  content.data = url;
  content.append(link);

  overlay.getElementsByClassName('overlay-content__wrapper')[0].append(content);

  document.body.appendChild(overlay);
}

function playYoutubeVideo(container, id) {
  container.onclick = null;
  container.getElementsByClassName('youtube-video__play')[0].style.display = 'none';

  var iframe = document.createElement('iframe');
  iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';

  var sourceContainer = container.getElementsByClassName('youtube-video__source')[0];
  sourceContainer.innerHTML = '';
  sourceContainer.append(iframe);
}

function ready(fn) {
  if (document.readyState !== 'loading'){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(function () {
  scrollHeader();

  // Scroll Events
  if (!isTouch) {
    document.onscroll = function () {
      scrollHeader();
    };
  }

  document.ontouchmove = function () {
    scrollHeader();
  };
});
