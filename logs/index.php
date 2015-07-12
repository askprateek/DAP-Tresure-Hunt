<html>
<head>
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body class="lime">
  <nav style="margin-bottom:10px;">
    <div class="nav-wrapper black">
      <a href="#" class="brand-logo center">DAP Treasure Hunt</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../admin">Admin Home</a></li>
        <li><a class= "active" href=".">Logs</a></li>
        <li><a href="../leaderboard">Leaderboard</a></li>
        <li><a href="../logout.php">logout</a></li>
      </ul>
    </div>
  </nav>


  <div class="container">
    <table>
      <thead>
        <tr>
          <th data-field="id">Question Number</th>
          <th data-field="name">Username</th>
          <th data-field="answer">Answer</th>
        </tr>
      </thead>
      <tbody id = "output">

      </tbody>
    </table>


  </div>

  <script>
  $(document).ready(function(){
    var response = '';
    $.ajax({ type: "POST",
    url: "fetch.php",
    async: false,
    datatype: "json",
    success : function(data)
    {
      var obj =JSON.parse(data);
      var l = obj.length;
      for ( var i=0; i<l ; i+=1)
      {
        $("#output").append("<tr><td>"+ obj[i].qid + "</td><td>" +obj[i].name + "</td><td>" +obj[i].answer +"</td></tr>");
      }


    }
  });

});

</script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../js/materialize.min.js"> </script>
</body>
</html>
