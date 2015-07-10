<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>

<script type="text/javascript">

$(document).ready(function() {

   $("#display").click(function() {

     $.ajax({    //create an ajax request to load_page.php
       type: "GET",
       url: "fetch.php",
       dataType: "html",   //expect html to be returned
       success: function(response){
           $("#responsecontainer").html(response);
           //alert(response);
       }

   });
});
});

</script>

<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
  <tr>
      <td> <input type="button" id="display" value="Display All Data" /> </td>
  </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>
