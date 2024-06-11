//--------------------------------Jaunumi-animation------------------------------------------------
(function JaunumiAnimation() {
    if (window.location.href.indexOf("Jaunumi.php") > -1) {
        document.addEventListener('DOMContentLoaded', function() {
            const windthanimac = document.querySelector('.jaunumipiedavajumi');

            let windowHeight = window.innerHeight;

            function checkPosition() {
                const positionFromTop = windthanimac.getBoundingClientRect().top;
                const windowWidth = window.innerWidth;

                if (positionFromTop - windowHeight + 150 <= 0) {
                    if (windowWidth <= 600) {
                        windthanimac.style.width = '90%';
                    } else {
                        windthanimac.style.width = '100%';
                    }
                }
            }

            window.addEventListener('scroll', checkPosition);
            window.addEventListener('resize', checkPosition); // добавляем слушатель изменения размера окна
            checkPosition(); 
        });
    }
})();

//--------------------------------Celojumi-form------------------------------------------------
(function JaunumiForm() {
    var celojumiboxiElements = document.querySelectorAll('.celojumiboxi');
    var celFormElements = document.querySelectorAll('.celojumi_Form');
    var overlay = document.getElementById('overlay');

    if (celFormElements && overlay) {
        celojumiboxiElements.forEach(function(element, index) {
            element.addEventListener('click', function(event) {
                event.stopPropagation();
                // Удаляем класс active у всех форм перед добавлением
                celFormElements.forEach(function(formElement) {
                    formElement.classList.remove('celojumi_FormOpen');
                });
                // Добавляем класс active к соответствующему элементу формы
                celFormElements[index].classList.add('celojumi_FormOpen');
                overlay.classList.add('overlayOpenat');
            });
        });

        var formCloseElements = document.querySelectorAll('.JauFormClose');
        formCloseElements.forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.stopPropagation();
                // Удаляем класс active у всех форм при закрытии любой формы
                celFormElements.forEach(function(formElement) {
                    formElement.classList.remove('celojumi_FormOpen');
                });
                overlay.classList.remove('overlayOpenat');
            });
        });
    }
})();