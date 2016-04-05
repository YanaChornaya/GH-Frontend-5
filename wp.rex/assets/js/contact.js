jQuery(document).ready(function($) {
    $('#contact-send').click(function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var data = {
            'action': 'contactFormSend',
            'nonce': ajax_object.nonce,
            'name': name,
            'email': email,
            'message': message
        };
        jQuery.post(ajax_object.ajax_url, data, function(response) {
            alert(response);
            if (response == 'The message have been sent successfully. Thank you.') {
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
            }
        });
    });
});