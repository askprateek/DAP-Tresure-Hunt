<html>
<head>
  <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

  <h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text replaced</div>

  <script>
             $(document).ready(function(){
             var response = '';
             $.ajax({ type: "GET",
                      url: "fetch.php",   
                      async: false,
                      success : function(text)
                      {
                          response = text;
                      }
             });

             alert(response);
             });
             </script>

    </script>
  </body>
  </html>
