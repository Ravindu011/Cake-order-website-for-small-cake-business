<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Convert HTML To Image</title>
  
  </head>

  <body onload = "autoClick();">

    
    <a id="download">Download</a>

    <script type="text/javascript">
      function autoClick(){
        $("#download").click();
      }

      $(document).ready(function(){
        var element = $("#ss");

        $("#download").on('click', function(){

          html2canvas(element, {
            onrendered: function(canvas) {
              var imageData = canvas.toDataURL("image/jpg");
              var newData = imageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
              $("#download").attr("download", "image.jpg").attr("href", newData);

              
            }
          });

        });
      });
    </script>
  </body>
</html>