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
  $('#due_date').pickadate({
    formatSubmit : 'yyyy-mm-dd',
    hiddenName : true
  });
});

$(function() {
  $('#due_time').pickatime({
    formatSubmit: 'hh-mm-ss',
    hidden: true
  })
});