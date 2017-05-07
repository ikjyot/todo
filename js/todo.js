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



