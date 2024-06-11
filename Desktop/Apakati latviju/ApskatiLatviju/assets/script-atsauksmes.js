//--------------------------------Atsauksmes-form------------------------------------------------

(function AtsauksmesForm() {
    var atBtn = document.querySelector('.atbtn');
    var atForm = document.querySelector('.atform');
    var overlay = document.getElementById('overlay');

    if (atBtn && atForm && overlay) {
        atBtn.addEventListener('click', function(event) {
            event.stopPropagation();
            atForm.classList.toggle('atformOpen');
            overlay.classList.toggle('overlayOpenat'); 
        });

        var atClose = document.getElementById('atclose');
        if (atClose) {
            atClose.addEventListener('click', function(event) {
                event.stopPropagation();
                atForm.classList.remove('atformOpen');
                overlay.classList.remove('overlayOpenat');
            });
        }
    }
})();

//--------------------------------Foto-Zoom------------------------------------------------

document.addEventListener('DOMContentLoaded', () => {
    // Select all comment containers
    const comments = document.querySelectorAll('.atsauksems');

    comments.forEach(comment => {
        // Select all images within the current comment
        const images = comment.querySelectorAll('.comment-image');

        images.forEach(image => {
            image.addEventListener('click', () => {
                // Remove 'active' class from all images within the current comment

                // Add 'active' class to the clicked image
                image.classList.add('active');
            });
        });
    });
});