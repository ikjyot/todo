/*Created by isg6 on 5/6/2017.*/
console.log("Working");
$(function() {
  $('#reg_birthdate').pickadate({
    formatSubmit : 'yyyy-mm-dd',
    hiddenName : true
  });
});
$(function() {
  $('#edit_due_date').pickadate({
    formatSubmit : 'yyyy-mm-dd',
    hiddenName : true
  });
});

$(function() {
  $('#edit_due_time').pickatime({
    format: 'HH:i',
    formatSubmit: 'HH:i',
    hiddenName: true
  })
});

$(function() {
  $('#add_due_date').pickadate({
    formatSubmit: 'yyyy-mm-dd',
    hiddenName: true
  })
});

$(function() {
  $('#add_due_time').pickatime({
    format: 'HH:i',
    formatSubmit: 'HH:i',
    hiddenName: true
  })
});

$(document).ready(function() {
  $("form#login_center_form").submit(function() {
    var formDetails = $('#login_center_form');
    $.ajax({
      type: "POST",
      url: 'index.php',
      data: formDetails.serialize(),
      success: function (data) {
        if(data.length < 100){
          $('#validate_login_check').empty().html(data);
        } else {
          window.location.replace('http://web.njit.edu/~isg6/todo/index.php');
        }
      },
      error: function(jqXHR, text, error){
        $('#validate_login_check').html(error);
      }
    });
    return false;
  });
});

