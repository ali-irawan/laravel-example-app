<!doctype html>
<html>
  <head>
    <title>@yield("title")</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        
        @yield("before-title")
        
        <h2>@yield("title")</h2>

        <div class="row">
          <div class="col-md-8">
            
            @yield("content")

          </div>
          <div class="col-md-4">
            
            @yield("right-panel")

          </div>
        </div>
      </div>
  </body>
</html>