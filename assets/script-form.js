document.querySelector('.atbtn').addEventListener('click', function() { 
    document.querySelector('.atform').classList.toggle('atformOpen'); 
    document.getElementById('overlay').classList.toggle('overlayOpenat');  
});


//--------------------------------Login-form------------------------------------------------


document.querySelector('.slidebutton').addEventListener('click', function() {
    document.querySelector('.login-form').classList.toggle('loginOpen');
    document.getElementById('overlay').classList.toggle('overlayOpenlog'); 
    document.querySelector('.slidebutton').classList.toggle('slideopen');
});

document.querySelector('#overlay').addEventListener('click', function() {
    if (this.classList.contains('overlayOpenlog')) {
        document.querySelector('.login-form').classList.remove('loginOpen');
        this.classList.remove('overlayOpenlog');
        document.querySelector('.slidebutton').classList.remove('slideopen');
    }
});


document.getElementById('logclose').addEventListener('click', function() {
    document.querySelector('.login-form').classList.remove('loginOpen');
    document.getElementById('overlay').classList.remove('overlayOpenlog');
    document.querySelector('.slidebutton').classList.remove('slideopen');

});
//--------------------------------Atsauksmes-form------------------------------------------------


document.querySelector('.atbtn').addEventListener('click', function() {
    document.querySelector('.atform').classList.toggle('atformOpen');
    document.getElementById('overlay').classList.toggle('overlayOpenat'); 
});


document.getElementById('atclose').addEventListener('click', function() {
    document.querySelector('.atform').classList.remove('atformOpen');
    document.getElementById('overlay').classList.remove('overlayOpenat');
});
