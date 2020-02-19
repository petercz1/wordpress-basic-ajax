console.log('ready or not...');
jQuery(document).ready(function ($) {

  console.log('document ready...');
  $('#WP-ajax-button').click(function () {
    console.log('clicked');
    var id = $('#WP-ajax-option-id').val();
    $.ajax({
        method: "POST",
        url: ajaxurl,
        data: {
          'action': 'WP_ajax_db_handler',
          'id': id
        }
      })
      .done(function (data) {
        console.log('Successful AJAX Call!');
        data = JSON.parse(data);
        console.log(data);
        $('#WP-ajax-table').append('<tr><td>' + data.option_id + '</td><td>' + data
          .option_name + '</td><td>' + data.option_value + '</td><td>' + data
          .autoload + '</td></tr>');
      })
      .fail(function (data) {
        console.log('Failed AJAX Call :');
        console.log(data);
      });
  });
});
