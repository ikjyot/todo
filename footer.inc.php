</div>
</main>

<footer class="page-footer red">
  <h6 class=" center white-text" style="position: relative; bottom: 10px" >© 2017 Ikjyot Singh Gujral (isg6)</h6>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="node_modules/pickadate/lib/compressed/picker.js"></script>
<script src="node_modules/pickadate/lib/compressed/picker.date.js"></script>
<script src="node_modules/pickadate/lib/compressed/picker.time.js"></script>
<script src="js/todo.js"></script>
<script>
  $(function() {
    $('#reg_birthdate').pickadate({
      formatSubmit : 'yyyy-mm-dd',
      hiddenName : true
    });
  });
</script>

</body>
</html>
