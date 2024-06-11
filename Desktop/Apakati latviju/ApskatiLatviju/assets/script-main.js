document.addEventListener('DOMContentLoaded', () => {

    const mediaFiles = document.querySelectorAll('img, video');
    let loadedCount = 0;
    const percents = document.getElementById('percents');
    const preloader = document.getElementById('preloader');
    const circle = document.querySelector('.preloader__loader');
    const logo = document.querySelector('.preloader__logo');

    const updateProgress = () => {
        const percentComplete = ((loadedCount * 100) / mediaFiles.length).toFixed(1);
        percents.innerHTML = percentComplete;

        if (loadedCount === mediaFiles.length) {
            circle.classList.add('preloader--hide');
            logo.classList.add('preloader--hide');
            preloader.classList.add('preloader--animation');
            percents.innerHTML = '100';


            setTimeout(() => {
                preloader.classList.add('hiden');
            }, 1000);
        }
    };

    Array.from(mediaFiles).forEach((file) => {
        if (file.complete) {
            loadedCount++;
            updateProgress();
        } else {
            file.addEventListener('load', () => {
                loadedCount++;
                updateProgress();
            });
            file.addEventListener('loadeddata', () => {
                loadedCount++;
                updateProgress();
            });
            file.addEventListener('error', () => {
                loadedCount++;
                updateProgress();
            });
        }
    });
});


//--------------------------------Navmenu-animation------------------------------------------------

(function NavmenuAnimation() {
    window.onload = function() {
        setTimeout(function() {
            document.querySelector('header').classList.add('fade-down');
        }, 500);
    };

    var header = document.querySelector('header');

    function updateHeaderPosition() {
        if (window.innerWidth > 985) {
            if (window.scrollY > 0 && !header.classList.contains('hovered')) {
                header.style.top = '-4.5rem';
            } else {
                header.style.top = '0';
            }
        } else {
            header.style.top = '0';
        }
    }

    window.addEventListener('scroll', updateHeaderPosition);
    window.addEventListener('resize', updateHeaderPosition);

    header.addEventListener('mouseenter', function() {
        header.classList.add('hovered');
        header.style.top = '0';
    });

    header.addEventListener('mouseleave', function() {
        header.classList.remove('hovered');
        if (window.innerWidth > 985 && window.scrollY > 0) {
            header.style.top = '-4.5rem';
        }
    });

    updateHeaderPosition();
})();


(function mediaMenuOpen() {

    var MediaMenu = document.querySelector('.media-nav-open');
    var MediaMenuBtn = document.querySelector('.mediaMenuOpen');

    MediaMenuBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        MediaMenu.classList.toggle('active');

    });

})();


//--------------------------------Login-form------------------------------------------------

(function initLoginForm() {
    var slideButton = document.querySelector('.slidebutton');
    var overlay = document.getElementById('overlay');
    var loginForm = document.querySelector('.login-form');
    
    if (slideButton && overlay && loginForm) {
        slideButton.addEventListener('click', function(event) {
            event.stopPropagation();
            loginForm.classList.toggle('loginOpen');
            overlay.classList.toggle('overlayOpenlog'); 
            slideButton.classList.toggle('slideopen');
        });

        overlay.addEventListener('click', function(event) {
            event.stopPropagation();
            if (overlay.classList.contains('overlayOpenlog')) {
                loginForm.classList.remove('loginOpen');
                overlay.classList.remove('overlayOpenlog');
                slideButton.classList.remove('slideopen');
            }
        });

        var loginCloseTag = document.getElementById('logclose');
        if (loginCloseTag) {
            loginCloseTag.addEventListener('click', function(event) {
                event.stopPropagation();
                loginForm.classList.remove('loginOpen');
                overlay.classList.remove('overlayOpenlog'); 
                slideButton.classList.remove('slideopen');
            });
        }
    }
})();

