$(document).ready(function () {
    
    const signInBtn = $('#signInBtn');
    const name = $('#name');
    const password = $('#password');
    const baseURL = 'http://localhost/lionheart-web-system';
    const signUpForm = $('#signUpForm');

    function displayErrorMessage(errorMessage) {
        return `
            <div id="error_message" class="form_row error_container">
                ${errorMessage ?? 'Login Failed'}
            </div>`;
    }

    function clearErrorMessage(element) {
        setTimeout(() => {
            element.remove();
        }, 3000);
    }

    signInBtn.click(function (e) { 
        e.preventDefault();
        
        if(name.val().trim() === '' || password.val().trim() === '') {
            signUpForm.prepend(displayErrorMessage('Invalid Credentials'));
            clearErrorMessage($('#error_message'));
            return;
        }

        $.ajax({
            type: "POST",
            url: `${baseURL}/backend/api/login.php`,
            data: {
                name: name.val(),
                password: password.val()
            },
            success: function (response) {
                if((response && !response.is_valid) || (response && response.status !== 200)) {
                    signUpForm.prepend(displayErrorMessage(response.message));
                    clearErrorMessage($('#error_message'));
                    return;
                }

                // Redirect to Dashboard page
                window.location.href = `${baseURL}/frontend/pages/dashboard.php`;
            },error: function(err) {
                console.error(err);
            }
        });

    });

});