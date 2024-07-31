$(document).ready(function () {
    
    const signInBtn = $('#signInBtn');
    const username = $('#username');
    const password = $('#password');

    signInBtn.click(function (e) { 
        e.preventDefault();
        
        if(username.val().trim() === '' || password.val().trim() === '') {
            return alert('DISPLAY LOGIN FAILED');
        }

        alert('LOGGING IN');

        // $.ajax({
        //     type: "method",
        //     url: "url",
        //     data: "data",
        //     dataType: "dataType",
        //     success: function (response) {
                
        //     }
        // });

    });

});