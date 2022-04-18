// delete confirmation - can be used for any delete
function yaSure() {
    // use the js confirm() function: OK = true, Cancel = false
    return confirm('Are you sure you want to delete this?');
}

// password compare for registration
function comparePasswords() {
    var pw1 = document.getElementById('password').value;
    var pw2 = document.getElementById('confirm').value;
    // reference span tag on register page used for showing errors (which we'll add)
    var pwMsg = document.getElementById('pwMsg');

    if (pw1 != pw2) {
        pwMsg.innerText = 'Passwords do not match';
        pwMsg.className = 'text-danger';
        return false; // cancel any form submission if Register button clicked
    }
    else {
        pwMsg.innerText = '';
        pwMsg.className = '';
        return true;
    }
}
// looping gallery
function galleryArray() {
    var gallery = document.getElementById("output");
    for (i = 0; i < imgArray.length; i++) {
        gallery.appendChild(imgArray[i]);
    }
};
var imgArray = new Array();
imgArray[0] = new Image();
imgArray[0].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-activision-tennis.jpg';

imgArray[1] = new Image();
imgArray[1].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-dark-souls.jpg';

imgArray[2] = new Image();
imgArray[2].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-last-of-us.jpg';

imgArray[3] = new Image();
imgArray[3].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-madden-21.jpg';

imgArray[4] = new Image();
imgArray[4].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-nhl-2k11.jpg';

imgArray[5] = new Image();
imgArray[5].src = 'img/game-uploads/ptr2bnkodujtj5ht4uanobp5pm-wow.jpg';