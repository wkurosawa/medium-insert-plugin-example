<!doctype html>
<html class="" lang="">

  <head>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <!-- MediumEditor -->
    <link rel="stylesheet" href="bower_components/medium-editor/dist/css/medium-editor.min.css">
    <link rel="stylesheet" href="bower_components/medium-editor/dist/css/themes/default.css" id="medium-editor-theme">
    <script src="/bower_components/medium-editor/dist/js/medium-editor.js"></script>


    <!-- MediumEditor Insert Plugin -->
    <!-- CSS -->
    <!-- Font Awesome for awesome icons. You can redefine icons used in a plugin configuration -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- The plugin itself -->
    <link rel="stylesheet" href="bower_components/medium-editor-insert-plugin/dist/css/medium-editor-insert-plugin.min.css">

    <!-- JS -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/medium-editor/dist/js/medium-editor.js"></script>
    <script src="bower_components/handlebars/handlebars.runtime.min.js"></script>
    <script src="bower_components/jquery-sortable/source/js/jquery-sortable-min.js"></script>
    <!-- Unfortunately, jQuery File Upload Plugin has a few more dependencies itself -->
    <script src="bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <!-- The plugin itself -->
    <script src="bower_components/medium-editor-insert-plugin/dist/js/medium-editor-insert-plugin.min.js"></script>

  </head>

  <body>
    <div class="container">
      <h1>Medium Editor w/ Medium Editor Insert Plugin</h1>

      <div class="form-data">
        <h2>Form Data</h2>
        <?php
          $editor =  "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $editor = clean_input($_POST["editor"]);

            echo $editor;
            echo "<br>";
          }

          function clean_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
          }
        ?>

      </div>

      <div class="form-inputs">
        <h2>Form Inputs</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <textarea class="editable" name="editor"></textarea>
          <input type="submit" name="submit" value="Submit" />
        </form>

      </div>

    </div>

    <script>

      $(function () {
        var editor = new MediumEditor('.editable');
        $('.editable').mediumInsert({
          editor: editor
        });
      });

    </script>

  </body>
</html>