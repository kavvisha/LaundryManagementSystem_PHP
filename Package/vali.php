<form action="" id="the-form">
    <p>
      E-mail
      <input name="..." data-validation="email" data-validation-help="Som help info...">
    </p>
    <p>
      URL
      <input name="..." data-validation="url">
    </p>
    <p>
      Only allows alphanumeric characters and hyphen and underscore
      <input name="..." data-validation="alphanumeric" data-validation-allowing="-_">
    </p>
    <p>
      Only lowercase letters a-z (regexp)
      <input name="..." data-validation="custom" data-validation-regexp="^([a-z]+)$">
    </p>
    <p>
      Minimum 5 chars
      <input name="..." data-validation="length" data-validation-length="min5">
    </p>
    <p>
      Maximum 5 chars
      <input name="..." data-validation="length" data-validation-length="max5">
    </p>
    <p>
      Between 3-5 chars
      <input name="..." data-validation="length" data-validation-length="3-5">
    </p>
    <p>
      What's your favorite color?
      <input name="..." data-suggestions="White, Green, Blue, Black, Brown">
    </p>
    <p>
      Validate e-mail but only if an answer is given
      <input name="..." data-validation="email" data-validation-optional="true">
    </p>
    <p>
      Restrict length
      <span id="max-length-element">100</span> chars left
      <textarea id="the-textarea" name="text"></textarea>
    </p>
    <p>
      <input type="submit">
    </p>
  </form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
</script>
...