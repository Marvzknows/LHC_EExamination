$(document).ready(function () {

    const signOutBtn = $('#signOut');
    const baseURL = 'http://localhost/lionheart-web-system';

    signOutBtn.click(function() {
        window.location.href = `${baseURL}/frontend/index.php`;
    })

});