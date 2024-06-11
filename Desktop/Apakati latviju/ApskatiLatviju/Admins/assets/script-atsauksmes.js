//--------------------------------Atsauksmes-form------------------------------------------------

(function AtsauksmesForm() {
    var atBtn = document.querySelector('.atbtn');
    var atForm = document.querySelector('.atform');
    var overlay = document.getElementById('overlay');
    var atClose = document.getElementById('atclose');

    if (atBtn && atForm && overlay) {
        atBtn.addEventListener('click', function(event) {

            event.stopPropagation();
            atForm.classList.toggle('atformOpen');
            overlay.classList.toggle('overlayOpenat'); 

        });
         
        if (atClose) {
            atClose.addEventListener('click', function(event) {

                event.stopPropagation();
                atForm.classList.remove('atformOpen');
                overlay.classList.remove('overlayOpenat');

            });
        }
    }

})();