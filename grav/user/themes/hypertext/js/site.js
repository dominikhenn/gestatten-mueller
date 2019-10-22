var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function generateMailToLink() {
  window.location.href = 'mailto:booking' + '@' + 'mueller-rockt.de';
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
