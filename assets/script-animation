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

            // Добавляем задержку в 3 секунды перед добавлением класса 'hiden'
            setTimeout(() => {
                preloader.classList.add('hiden');
            }, 2000);
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


window.onload = function() {
    setTimeout(function() {
        document.querySelector('header').classList.add('fade-down');
    }, 500);
};


var header = document.querySelector('header');

window.addEventListener('scroll', function() {
    if (window.scrollY > 0 && !header.classList.contains('hovered')) {
        header.style.top = '-4.5rem';
    } else {
        header.style.top = '0';
    }
});

header.addEventListener('mouseenter', function() {
    header.classList.add('hovered');
    header.style.top = '0';
});

header.addEventListener('mouseleave', function() {
    header.classList.remove('hovered');
    if (window.scrollY > 0) {
        header.style.top = '-4.5rem';
    }
});

//--------------------------------Train-animation------------------------------------------------






//--------------------------------Filter-animation------------------------------------------------


document.addEventListener('DOMContentLoaded', function() {
    const elem = document.querySelector('.filtracija');
    const windowHeight = window.innerHeight;

    function checkPosition() {
        const positionFromTop = elem.getBoundingClientRect().top;

        if (positionFromTop - windowHeight <= 0) {
            elem.classList.add('fade-rigth');
        }
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); 
});


//--------------------------------Scroolvariant-animation------------------------------------------------


const scrollvariants = document.querySelector('.scrollvariants');
const celojumiflex = document.querySelector('.celojumuflex');

scrollvariants.addEventListener('click', function() {
  if (scrollvariants.style.flexDirection === 'row') {
    scrollvariants.style.flexDirection = 'column';
    celojumiflex.style.flexDirection = 'none';
  } else {
    scrollvariants.style.flexDirection = 'row';
    celojumiflex.style.flexDirection = 'row';
  }
});


//--------------------------------Jaunumi-animation------------------------------------------------

document.querySelector('button[name="filtazizvele"]').addEventListener('click', function() {

    document.querySelector('.filt-alf-menu').classList.toggle('active');

});




document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.piedavajumubox');
    const windowHeight = window.innerHeight;

    function checkPosition() {
        for (let i = 0; i < elements.length; i++) {
            const element = elements[i];
            const positionFromTop = element.getBoundingClientRect().top;

            if (positionFromTop - windowHeight <= -200) {
                element.classList.add('fade-up');
            }
        }
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition();
});







//--------------------------------Card-animation------------------------------------------------


/*
window.addEventListener('scroll', function() {
    var sakums = document.getElementById('sakums');
    var idsakums = document.getElementById('sakums');
    var card = document.getElementById('card');
    var sakumsPosition = sakums.getBoundingClientRect().bottom;
    var idsakumsPosition = idsakums.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
    
    if (idsakumsPosition < windowHeight && sakumsPosition < 0) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });



  window.addEventListener('scroll', function() {
    var circle = document.querySelector('.circlehead');
    var scrollPosition = window.scrollY;

   
   var sakumsPosition = document.getElementById('sveicens').offsetTop;

   
   var celojumiPosition = document.getElementById('celojumi').offsetTop;

  
   var faqPosition = document.getElementById('faq').offsetTop;

   
   var socialPosition = document.getElementById('social').offsetTop;

   
   if (scrollPosition >= sakumsPosition && scrollPosition <= celojumiPosition) {
       
       var newPosition = 12 + ((scrollPosition - sakumsPosition) / (celojumiPosition - sakumsPosition)) * 10;
       circle.style.top = newPosition + 'rem';
   } else if (scrollPosition > celojumiPosition && scrollPosition <= faqPosition) {
       
       var newPosition = 22 + ((scrollPosition - celojumiPosition) / (faqPosition - celojumiPosition)) * 10;
       circle.style.top = newPosition + 'rem';
   } else if (scrollPosition > faqPosition && scrollPosition <= socialPosition) {
       
       var newPosition = 32 + ((scrollPosition - faqPosition) / (socialPosition - faqPosition)) * 10;
       circle.style.top = newPosition + 'rem';
   } else if (scrollPosition > celojumiPosition && scrollPosition <= faqPosition) {

        var newPosition = 42 + ((scrollPosition - faqPosition) / (socialPosition - faqPosition)) * 10;
        circle.style.top = newPosition + 'rem';
   }
});


//--------------------------------Jaunumi-animation------------------------------------------------

/*
document.addEventListener('DOMContentLoaded', function() {
    const windthanimac = document.querySelector('.jaunumipiedavajumi');
    let windowHeight = window.innerHeight;

    function checkPosition() {
        const positionFromTop = windthanimac.getBoundingClientRect().top;

        if (positionFromTop - windowHeight + 150 <= 0) {
            windthanimac.style.width = '100%';
        }
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); 
});*/

