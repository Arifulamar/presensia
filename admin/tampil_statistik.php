<?php include ('koneksi.php'); ?>

<!-- menghitung data di tanggal tertentu -->
<?php 


$selectedDate = $_POST ['tanggal_yang_dicari'];

$sqldatacivitas = "SELECT COUNT(*) FROM data_civitas";
$querydatacivitas = mysqli_query($kon, $sqldatacivitas);
if (!$querydatacivitas){
  die("Query error:" . mysqli_error($kon));
}

$rowcivitas = mysqli_fetch_array($querydatacivitas);
$countcivitas = $rowcivitas[0];

$sql = "SELECT COUNT(*) FROM kehadiran WHERE DATE(waktu_kehadiran) = '$selectedDate'";
$query = mysqli_query($kon, $sql);
if (!$query) {
    die("Query error: " . mysqli_error($kon));
}

$row = mysqli_fetch_array($query);
$count = $row[0];

$sqlsakit = "SELECT COUNT(*) FROM ketidakhadiran WHERE DATE(waktu) = '$selectedDate' AND alasan = 'sakit'";
$querysakit = mysqli_query($kon, $sqlsakit);

if(!$querysakit) {
    die("Query error: " . mysqli_error($kon));
}
$rowsakit = mysqli_fetch_array($querysakit);
$countsakit = $rowsakit [0];

$sqlijin = "SELECT COUNT(*) FROM ketidakhadiran WHERE DATE(waktu) = '$selectedDate' AND alasan = 'ijin'";
$queryijin = mysqli_query($kon, $sqlijin);

if(!$queryijin) {
    die("Query error: " . mysqli_error($kon));
}
$rowijin = mysqli_fetch_array($queryijin);
$countijin = $rowijin [0];



$counttanpaket = $countcivitas - ($count + $countijin + $countijin );


mysqli_close($kon);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | ChartJS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
  
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Hadir',
          'Ijin',
          'Sakit',
          'Tanpa Keterangan',
          
      ],
      datasets: [
        {
          data: [ "<?php echo $count;  ?>" , "<?php echo $countijin; ?>" , "<?php echo $countsakit; ?>" , "<?php echo $counttanpaket; ?>" ],
          backgroundColor : ['#00a65a', '#00c0ef', '#f39c12', '#f56954'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
})
</script>
</body>
</html>
