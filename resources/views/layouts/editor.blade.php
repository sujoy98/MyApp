 <!--  ckeditor  -->
<textarea  class="form-control" id="summary-ckeditor" name="summary-ckeditor" $post=summary-ckeditor></textarea>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
