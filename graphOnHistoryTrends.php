<html>
<head>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
 
  <div id="myDiv"></div>
  <script>
  <?php
$file = fopen("MajorSkillRequirement.csv","r");

$time = [];
$key_val = "";

$base = "[ ";
$i = 0;

while(! feof($file) && $i <= 21)
  {
  $x = (fgetcsv($file));
  if($i == 0 && !is_null($x)) {
    $k=0;
    foreach ($x as $key => $value) {
      # code...
      if ($k==0)
        $base = $base;
      else if ($k == 1) 
        $base = $base."'".$value."',";
      else if ($k > 1)
        $base = "".$base.", '".$value."'";

      $k++;
    }  
    $base = $base." ]";
    //echo $base;
  } else {
    $val = "[ ";
    $k=0;
    foreach ($x as $key => $value) {
      # code...
      if($k == 0) 
        $key_val = $value;
      else if ($k == 1) 
        $val = "".$val."".$value."";
      else if($k > 1)
        $val = "".$val.", ".$value;      
      $k++;
    }
    $val = $val." ]";
    //echo $base,$key_val,$val;
  ?>
  var trace<?php echo $i ?> = {
  x: <?php echo $base ?>, 
  y: <?php echo $val ?>,
  mode: 'lines+markers',
  name: '<?php echo $key_val ?>'
  };

<?php
  }
  $i++;
}
fclose($file);
?>


var data = [<?php for($j=1; $j<$i; $j++) echo "trace".$j.","; ?>];

var layout = {
  title: 'Graph on History Trends',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};


Plotly.newPlot('myDiv', data, layout);
  </script>
</body>


</html>
