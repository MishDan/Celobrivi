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

    const handleMediaLoad = () => {
        loadedCount++;
        updateProgress();
    };

    Array.from(mediaFiles).forEach((file) => {
        if (file.complete) {
            handleMediaLoad();
        } else {
            ['load', 'loadeddata', 'error'].forEach(eventType => {
                file.addEventListener(eventType, handleMediaLoad);
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



//--------------------------------adminboard------------------------------------------------
(function OpenAdminBoard() {
    var slideButton = document.querySelector('.slidebutton');
    var overlay = document.getElementById('overlay');
    var adminBoard = document.querySelector('.adminboard');
    var AdminCloseTag = document.getElementById('adminClose');
    
    if (slideButton && overlay && adminBoard) {
        slideButton.addEventListener('click', function(event) {
            event.stopPropagation();
            adminBoard.classList.toggle('adminboardOpen');
            overlay.classList.toggle('overlayOpenAd'); 
            slideButton.classList.toggle('slideopen');
        });

        overlay.addEventListener('click', function(event) {
            event.stopPropagation();
            if (overlay.classList.contains('overlayOpenAd')) {
                adminBoard.classList.remove('adminboardOpen');
                overlay.classList.remove('overlayOpenAd');
                slideButton.classList.remove('slideopen');
            }
        });

        if (AdminCloseTag) {
            AdminCloseTag.addEventListener('click', function(event) {
                event.stopPropagation();
                adminBoard.classList.remove('adminboardOpen');
                overlay.classList.remove('overlayOpenAd'); 
                slideButton.classList.remove('slideopen');
            });
        }
    }
})();


//--------------------------------Red-Cel------------------------------------------------

(function redCelojumusOpen() {

    var CelojumusEditOpen = document.querySelector('.celparvalde');
    var CelEditBtn = document.querySelector('.redcelojumus');
    var overlay = document.getElementById('overlay');
    var adminBoard = document.querySelector('.adminboard');
    var slideButton = document.querySelector('.slidebutton');

    CelEditBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        CelojumusEditOpen.classList.add('active');
        overlay.classList.add('overlayCelEditOpen')
        adminBoard.classList.remove('adminboardOpen');
        overlay.classList.remove('overlayOpenAd')
        slideButton.classList.remove('slideopen')

    });

})();


(function redCelojumiClose() {

    var CelojumusEditOpen = document.querySelector('.celparvalde');
    var CloseCelEditBtn = document.getElementById('redCelParClose');
    var overlay = document.getElementById('overlay');

    CloseCelEditBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        CelojumusEditOpen.classList.remove('active');
        overlay.classList.remove('overlayCelEditOpen')

    });

})();


(function MainNosakumu() {

    var functionBtn = document.querySelector('.redNos');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusEditOpenList = document.querySelectorAll('.editcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusEditOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();

(function MainAprakstu() {

    var functionBtn = document.querySelector('.redApr');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusEditOpenList = document.querySelectorAll('.editcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusEditOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();

(function MaiinaBildii() {

    var functionBtn = document.querySelector('.RedBil');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusEditOpenList = document.querySelectorAll('.editcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusEditOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();

(function MainaCenu() {

    var functionBtn = document.querySelector('.RedCenu');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusEditOpenList = document.querySelectorAll('.editcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusEditOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();

(function PievienoAkciju() {

    var functionBtn = document.querySelector('.PiecAck');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusEditOpenList = document.querySelectorAll('.editcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusEditOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();

(function DzestCelojumu() {

    var functionBtn = document.querySelector('.DesCel');
    var overlayList = document.querySelectorAll('.overlayCp');
    var celojumusdeletOpenList = document.querySelectorAll('.deletcel');

    functionBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        celojumusdeletOpenList.forEach(function(celojumusEditOpen) {
            celojumusEditOpen.classList.toggle('active');
        });

        overlayList.forEach(function(overlay) {
            overlay.classList.toggle('active');
        });

    });

})();


(function PievFormOpen() {

    var PievFormOpen = document.querySelector('.celPievienoForm');
    var PievCelFormBtn = document.querySelector('.PieCelFormOpen');
    var overlay = document.getElementById('overlay');

    PievCelFormBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        PievFormOpen.classList.add('active');
        overlay.classList.remove('overlayCelEditOpen')
        overlay.classList.add('overlayPievCelForm')

    });

})();


(function PievFormClose() {

    var PievFromClose = document.querySelector('.celPievienoForm');
    var PievFormCloseBtn = document.getElementById('PievFormClose');
    var overlay = document.getElementById('overlay');

    PievFormCloseBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        PievFromClose.classList.remove('active');
        overlay.classList.remove('overlayPievCelForm')
        overlay.classList.add('overlayCelEditOpen')
        
    });

})();



//--------------------------------Red-Atsauksmes------------------------------------------------


(function AtsaukmesEditOpen() {

    var AtsauksmesEditOpen = document.querySelector('.comentparvalde');
    var AtsaEditBtn = document.querySelector('.redcomments');
    var overlay = document.getElementById('overlay');
    var adminBoard = document.querySelector('.adminboard');
    var slideButton = document.querySelector('.slidebutton');

    AtsaEditBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        AtsauksmesEditOpen.classList.add('active');
        overlay.classList.remove('overlayOpenLPEdit')
        overlay.classList.add('overlayAtsaEditOpen')
        adminBoard.classList.remove('adminboardOpen');
        overlay.classList.remove('overlayOpenAd')
        slideButton.classList.remove('slideopen')

    });

})();


(function AtsaukmesEditClose() {

    var AtsauksmesEditClose = document.querySelector('.comentparvalde');
    var CloseAtsEditBtn = document.getElementById('AtsauksmeEditClose');
    var overlay = document.getElementById('overlay');

    CloseAtsEditBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        AtsauksmesEditClose.classList.remove('active');
        overlay.classList.remove('overlayAtsaEditOpen')

    });

})();


(function deletIzveleActive() {

    var ComIzvele = document.querySelectorAll('.deletcoment'); 
    var DelBtn = document.querySelector('.delAtsBtn');

    DelBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        ComIzvele.forEach(function(element) {
            element.classList.toggle('active');
        });
    });

})();


//--------------------------------Red-Moder------------------------------------------------

(function ModeratorTableOpen() {

    var OpenModerTable = document.querySelector('.moderatoredit');
    var ModerEditButton = document.querySelector('.redmoderatorus');
    var overlay = document.getElementById('overlay');
    var slideButton = document.querySelector('.slidebutton');
    var adminBoard = document.querySelector('.adminboard');

    ModerEditButton.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenModerTable.classList.add('active');
        overlay.classList.add('overlayOpenMt')
        adminBoard.classList.remove('adminboardOpen');
        slideButton.classList.remove('slideopen')
        overlay.classList.remove('overlayOpenAd')

    });

})();


(function ModeratorTableOpen() {

    var OpenModerTable = document.querySelector('.moderatoredit');
    var CloseModerTable = document.getElementById('moderTableClose');
    var overlay = document.getElementById('overlay');

    CloseModerTable.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenModerTable.classList.remove('active');
        overlay.classList.remove('overlayOpenMt')

    });

})();


(function ModerFormOpen() {

    var OpenModAddForm = document.querySelector('.moderaddform');
    var ModAddForBtn = document.querySelector('.openmModerAddForm');
    var overlay = document.getElementById('overlay');

    ModAddForBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenModAddForm.classList.add('active');
        overlay.classList.remove('overlayOpenMt')
        overlay.classList.add('openmModerAddForm')


    });

})();


(function ModerFormClose() {

    var OpenModAddForm = document.querySelector('.moderaddform');
    var ModerAdddFormClose = document.getElementById('moderAddfromClose');
    var overlay = document.getElementById('overlay');

    ModerAdddFormClose.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenModAddForm.classList.remove('active');
        overlay.classList.remove('openmModerAddForm')
        overlay.classList.add('overlayOpenMt')

    });

})();


(function LietParIzvelOpen() {

    var LietPasOpen = document.querySelector('.lietvards-pasvord');
    var OpenLietPasBtns = document.querySelectorAll('.openLietParEdit'); 
    var overlay = document.getElementById('overlay');

    OpenLietPasBtns.forEach(function(btn) { 
        btn.addEventListener('click', function(event) {
            event.stopPropagation();

            LietPasOpen.classList.add('active');
            overlay.classList.remove('overlayOpenMt');
            overlay.classList.add('overlayOpenLPEdit');
        });
    });

})();


(function LietParIzvelClose() {

    var LietPasOpen = document.querySelector('.lietvards-pasvord');
    var CloseLietPasBtn = document.getElementById('liet-passClose');
    var overlay = document.getElementById('overlay');

    CloseLietPasBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        LietPasOpen.classList.remove('active');
        overlay.classList.remove('overlayOpenLPEdit')
        overlay.classList.add('overlayOpenMt')

    });

})();


(function LietvardsEditOpen() {

    var LietOpen = document.querySelector('.lietvardsedit');
    var OpenLietBtn = document.querySelector('.lietEditOpenBtn');
    var overlay = document.getElementById('overlay');
    var LietPasOpen = document.querySelector('.lietvards-pasvord');

    OpenLietBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        LietOpen.classList.add('active');
        overlay.classList.remove('overlayOpenLPEdit')
        overlay.classList.add('overlayOpenLietEdit')
        LietPasOpen.classList.remove('active')

    });

})();


(function LietvardsEditClose() {

    var LietOpen = document.querySelector('.lietvardsedit');
    var CloseLietBtn = document.getElementById('liet-Close');
    var overlay = document.getElementById('overlay');

    CloseLietBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        LietOpen.classList.remove('active');
        overlay.classList.remove('overlayOpenLietEdit')
        overlay.classList.add('overlayOpenMt')

    });

})();


(function PassEditOpen() {

    var passOpen = document.querySelector('.passedit');
    var OpenPassBtn = document.querySelector('.passEditOpenBtn');
    var overlay = document.getElementById('overlay');
    var LietPasOpen = document.querySelector('.lietvards-pasvord');

    OpenPassBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        passOpen.classList.add('active');
        overlay.classList.remove('overlayOpenLPEdit')
        overlay.classList.add('overlayOpenPassEdit')
        LietPasOpen.classList.remove('active')

    });

})();


(function PassEditClose() {

    var passOpen = document.querySelector('.passedit');
    var ClosePassBtn = document.getElementById('pass-Close');
    var overlay = document.getElementById('overlay');

    ClosePassBtn.addEventListener('click', function(event) {
        event.stopPropagation();

        passOpen.classList.remove('active');
        overlay.classList.remove('overlayOpenPassEdit')
        overlay.classList.add('overlayOpenMt')

    });

})();

//--------------------------------Red-Piet------------------------------------------------

(function PieteikumuTableOpen() {

    var OpenPietTable = document.querySelector('.Pieteikumuparvalde');
    var PietEditButton = document.querySelector('.redpieteikumus');
    var overlay = document.getElementById('overlay');
    var slideButton = document.querySelector('.slidebutton');
    var adminBoard = document.querySelector('.adminboard');

    PietEditButton.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenPietTable.classList.add('active');
        overlay.classList.add('overlayOpenPt')
        adminBoard.classList.remove('adminboardOpen');
        slideButton.classList.remove('slideopen')
        overlay.classList.remove('overlayOpenAd')

    });

})();


(function PietTableClose() {

    var OpenPietTable = document.querySelector('.Pieteikumuparvalde');
    var ClosePietTable = document.getElementById('PieteikumuTableClose');
    var overlay = document.getElementById('overlay');

    ClosePietTable.addEventListener('click', function(event) {
        event.stopPropagation();

        OpenPietTable.classList.remove('active');
        overlay.classList.remove('overlayOpenPt')

    });

})();

(function PieteikumuParskate() {

    
    var editButtons = document.querySelectorAll('.EditPieteikumus');
    var pieteikumuParskate = document.querySelectorAll('.Pieteikumu_parskate');
    var overlay = document.getElementById('overlay');
    var Pieikumutable = document.querySelector('.Pieteikumuparvalde');

    if (editButtons.length && pieteikumuParskate.length) {
        editButtons.forEach(function(button, index) {
            button.addEventListener('click', function(event) {
                event.stopPropagation();
                
                pieteikumuParskate.forEach(function(parskateElement) {
                    parskateElement.classList.remove('active');
                });
                
                pieteikumuParskate[index].classList.add('active');
                overlay.classList.remove('overlayOpenPt')
                Pieikumutable.classList.remove('active');
                overlay.classList.add('overlayOpenPpar')

            });
        });

        var formCloseElements = document.querySelectorAll('.cilvekInfoClose');
        formCloseElements.forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.stopPropagation();
                // Удаляем класс active у всех форм при закрытии любой формы
                pieteikumuParskate.forEach(function(formElement) {
                    formElement.classList.remove('active');
                });
                overlay.classList.remove('overlayOpenPpar');
            });
        });
        
    }
})();


