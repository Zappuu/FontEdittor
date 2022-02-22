<!DOCTYPE html>
<html>
<head>
	<title>Typo | Test-drive your text</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="styles.css" rel="stylesheet">
</head>

<script>
    $(document).ready( () => {
        $('#text').on('keyup', event => {
            $('.preview').html($(event.currentTarget).val());
        })

        $('#font').on('change', event => {
          let fontChange = $(event.currentTarget).val();
            $('.preview').css('font-family', fontChange);
        })

        $('#weight').on('change', event => {
          let weightChange = $(event.currentTarget).val();
          $('.preview').css('font-weight', weightChange)
        })

        $('#size').on('keyup', event => {
          let sizeChange = $(event.currentTarget).val() + 'px';
          $('.preview').css('font-size', sizeChange);
        })
    })
</script>


<body>
  <div class = "outer-container">
  <header>
    <h1>TYP</h1>
    <h2>Test-drive your text</h2>
  </header>
  <div class="formHolder">
    <form method="POST">
      <div class="third">
        Font Family <br>
        <select name="font" id="font">
          <option value="helvetica" id="helvetica">Helvetica</option>
          <option value="times" id="times">Times</option>
          <option value="impact" id="impact">Impact</option>
          <option value="courier" id="courier">Courier</option>
          <option value="verdana" id="verdana">Verdana</option>
          <option value="papyrus" id="papyrus">Papyrus</option>
          <option value="Century Gothic" id="Century Gothic">Gothic</option>
          
        </select>
      </div>
      <div class="third">
        Font Size  
        <br>
        <input type="text" placeholder="12" id="size">
      </div>
      <div class="third">
        Font Weight <br>
        <select name="weight" id="weight">
         <option value="normal">Normal</option>
         <option value="bold">Bold</option>
         <option value="bolder">Bolder</option>
         <option value="lighter">lighter</option>
       </select>
      </div>
    </form>
  </div>
  <div class="preview">Sample Font</div>
  <textarea name="text" placeholder="Type something here and see what happens..." id="text" cols="30" rows="10"></textarea>
  </div>
</body>
<script src="main.js"></script>
</html>