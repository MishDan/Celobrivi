(function() {
    // Проверяем, что текущий URL страницы содержит "Celojumi.php"
    if (window.location.href.indexOf("Celojumi.php") > -1) {
        // Все ваши скрипты здесь
        //--------------------------------Filter-animation------------------------------------------------
        (function FilterAnimation() {
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
        })();

        //--------------------------------Scroolvariant-animation------------------------------------------------

        (function ScroolvariantAnimation() {
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
        })();

        //--------------------------------Filter-A-Z-animation------------------------------------------------
        (function FilterAZAnimation() {
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
        })();

        //--------------------------------Filter-Menu------------------------------------------------
        (function FilterMenu() {
            document.querySelector('.filter-spec').addEventListener('click', function(event) {
                event.stopPropagation();
                document.querySelector('.filtracija-select').classList.toggle('filtracija-selectOpen');
            });

            document.querySelector('.close_filter').addEventListener('click', function(event) {
                event.stopPropagation();
                document.querySelector('.filtracija-select').classList.remove('filtracija-selectOpen');
            });
        })();

        //--------------------------------Celojumi-form------------------------------------------------
        (function CelojumiForm() {
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

                var formCloseElements = document.querySelectorAll('.CelFormClose');
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
    }
})();
