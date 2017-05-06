/**
 * Created by isg6 on 5/6/2017.
 */
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
    formatSubmit: 'hh:mm:ss',
    hidden: true
  })
});

$(function() {
  $('#add_due_date').pickadate({
    formatSubmit: 'yyyy-mm-dd',
    hidden: true
  })
});

$(function() {
  $('#add_due_time').pickatime({
    formatSubmit: 'hh:mm:ss',
    hidden: true
  })
});