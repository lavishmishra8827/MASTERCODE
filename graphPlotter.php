<html>


<head>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>


<?php
  include ("connect.php");
  mysql_select_db("hr") or die ( 'Unable to select database.(login)' );
  $query = "select Candidate_Role, Status from candidatedetails";
  $result = mysql_query($query);

  
  while($row = mysql_fetch_array($result,MYSQL_NUM)) {
      //echo $row["Candidate_Role"]+", ";
//    echo "'".$row[0].",' ";
    $type[$row[0]] = 0;
  }
  $query = "select Candidate_Role, Status from candidatedetails";
  $result = mysql_query($query);
  while($row = mysql_fetch_array($result,MYSQL_NUM)) {
      //echo $row["Candidate_Role"]+", ";
    if($row[1] == "Selected") {
      $type[$row[0]]++;
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
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7
  }
};

var data = [trace1];

var layout = {
  title: 'Employee selection as per department',
  xaxis: {
    title: 'Designations',
    titlefont: {
      family: 'Courier New, monospace',
      size: 18,
      color: '#4286f4'
    },

    tickangle: -45
  },
  yaxis: {
    title: 'Number of Employees',
    titlefont: {
      family: 'Courier New, monospace',
      size: 18,
      color: '#4286f4'
    }
  },
  barmode: 'group'
};


Plotly.newPlot('myDiv', data, layout);
  </script>
</body>


</html>
