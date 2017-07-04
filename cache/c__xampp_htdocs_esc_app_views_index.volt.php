<!DOCTYPE>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <title>Esc</title>
     
        <?= $this->tag->stylesheetLink('vendor/bootstrap/css/bootstrap.min.css') ?>
        <?= $this->tag->stylesheetLink('vendor/metisMenu/metisMenu.min.css') ?>
        <?= $this->tag->stylesheetLink('dist/css/sb-admin-2.css') ?>
        <?= $this->tag->stylesheetLink('vendor/morrisjs/morris.css') ?>
        <?= $this->tag->stylesheetLink('vendor/font-awesome/css/font-awesome.min.css') ?>
      
        

    </head>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>

        <?= $this->tag->javascriptInclude('vendor/jquery/jquery.min.js') ?> 
        <?= $this->tag->javascriptInclude('vendor/bootstrap/js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('vendor/metisMenu/metisMenu.min.js') ?>
       
       
        <?= $this->tag->javascriptInclude('vendor/raphael/raphael.min.js') ?>
        <?= $this->tag->javascriptInclude('vendor/morrisjs/morris.min.js') ?>
        <?= $this->tag->javascriptInclude('data/morris-data.js') ?>
         <?= $this->tag->javascriptInclude('dist/js/sb-admin-2.js') ?>
          <?= $this->tag->javascriptInclude('js/utils.js') ?>
    </body>
</html>
