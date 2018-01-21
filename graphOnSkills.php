<html>


<head>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
<?php
  include ("connect.php");
  mysql_select_db("hr") or die ( 'Unable to select database.(login)' );
  $query = "select Candidate_Skills, Status from candidatedetails";
  $result = mysql_query($query);

  
  while($row = mysql_fetch_array($result,MYSQL_NUM)) {
    $x = $row[0];
    $x = ( explode(",",$x) );
    foreach ($x as $key => $value) {
      # code...
      //echo "'".$key."', ";
      $type[$value] = 0;
      $not_selected[$value] = 0;
    }
    
  }
  $query = "select Candidate_Skills, Status from candidatedetails";
  $result = mysql_query($query);
  while($row = mysql_fetch_array($result,MYSQL_NUM)) {
    if($row[1] == "Selected") {
    $x = $row[0];
    $x = ( explode(",",$x) );
    foreach ($x as $key => $value) {
      # code...
      //echo "'".$key."', ";
      $type[$value]++;
    }
    }

    else {
    $x = $row[0];
    $x = ( explode(",",$x) );
    foreach ($x as $key => $value) {
      # code...
      //echo "'".$key."', ";
      $not_selected[$value]++;
    }
    }

  }
  ?>
  


  

  
  <div id="myDiv"></div>
  <script>
  var trace1 = {
  x: <?php
  echo "[ ";
  foreach ($type as $key => $value) {
    # code...
    echo "'".$key."', ";
    
  }
  echo " ] "; ?>, 
  y: <?php
        echo "[ ";
        foreach ($type as $key => $value) {
          # code...
          echo "'".$value."', ";
          
        }
        echo " ]";

      ?>,
  type: 'bar',
  name: 'Selected Candidates',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7
  }
};

var trace2 = {
  x: <?php
  echo "[ ";
  foreach ($not_selected as $key => $value) {
    # code...
    echo "'".$key."', ";
    
  }
  echo " ] "; ?>, 
  y: <?php
        echo "[ ";
        foreach ($not_selected as $key => $value) {
          # code...
          echo "'".$value."', ";
          
        }
        echo " ]";

      ?>,
  type: 'bar',
  name: 'Rejected Candidates',
  marker: {
    color: 'rgb(204,204,204)',
    opacity: 0.5
  }
};

var data = [trace1, trace2];

var layout = {
  title: 'Graph on Skills',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};


Plotly.newPlot('myDiv', data, layout);
  </script>
</body>


</html>
