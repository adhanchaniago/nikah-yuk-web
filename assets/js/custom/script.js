(function($) {
	$.sanitize = function(input) {
        return input.replace(/<(|\/|[^>\/bi]|\/[^>bi]|[^\/>][^>]+|\/[^>][^>]+)>/g, '');
	};
})(jQuery);

$(document).ready(function() {
	// $('#sanitize').click(function() {
	// 	var $input = $('#input').val();
	// 	$('#output').text($.sanitize($input));
    // });
    $('#modalKonfirmasiHapusMenu').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        $(this).find('#nama-menu-modal').html($.sanitize($(e.relatedTarget).data('name')));
    });
    $('#modalKonfirmasiHapusAksesMenu').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        $(this).find('#nama-menu-modal').html($.sanitize($(e.relatedTarget).data('name')));
    });
    $('#modalKonfirmasiHapusGaleri').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    $('#modalKonfirmasiHapusProduk').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    $('.alert-message').alert().delay(3000).slideUp('slow');

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
});

