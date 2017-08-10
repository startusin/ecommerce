(function($) {
    var checkoutForm = $('#checkout-form');

    function checkoutSubmit() {
        if ($(checkoutForm).length && $(checkoutForm).data('autosubmit')){
            $.ajax({
                type: $(checkoutForm).attr('method'),
                url: $(checkoutForm).attr('action'),
                data: $(checkoutForm).serialize(),
                success: function(data){
                    $('button', checkoutForm).html('Redirecting... Please click here if nothing happened.');
                    window.location = data.redirect;
                }
            });
        }
    }

    $(document).ready(function(){
        checkoutSubmit();
    });

    $('button', checkoutForm).click(function(e){
        checkoutSubmit();
        e.preventDefault();
    });
})(jQuery);
