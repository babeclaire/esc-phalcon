<!DOCTYPE>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
         <title>Esc</title>
     
        {{ stylesheet_link('vendor/bootstrap/css/bootstrap.min.css') }}
        {{ stylesheet_link('vendor/metisMenu/metisMenu.min.css') }}
        {{ stylesheet_link('dist/css/sb-admin-2.css') }}
        {{ stylesheet_link('vendor/morrisjs/morris.css') }}
        {{ stylesheet_link('vendor/font-awesome/css/font-awesome.min.css') }}
      
        

    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>

        {{ javascript_include('vendor/jquery/jquery.min.js') }} 
        {{ javascript_include('vendor/bootstrap/js/bootstrap.min.js') }}
        {{ javascript_include('vendor/metisMenu/metisMenu.min.js') }}
       
       
        {{ javascript_include('vendor/raphael/raphael.min.js') }}
        {{ javascript_include('vendor/morrisjs/morris.min.js') }}
        {{ javascript_include('data/morris-data.js') }}
         {{ javascript_include('dist/js/sb-admin-2.js') }}
          {{ javascript_include('js/utils.js') }}
    </body>
</html>
