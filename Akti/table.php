<?php include('headertable.php'); ?>

<body background-color="#E6E6FA">
  <div class="container0" style="margin:30px;" id="container0">
    <table class="table table-bordered" id="tableid" style="border-color:black;" data-order='[[ 10, "asc" ]]'>
      <thead>
        <tr id="trtr">
          <th>Ad</th>
          <th>TƏVƏLLÜD</th>
          <th>SERİYA</th>
          <th>FİN</th>
          <th>CİNS</th>
          <th>TƏHSİL</th>
          <th>İXTİSAS</th>
          <th>FAKULTƏ</th>
          <th>MAİL</th>
          <th>NÖMRƏ</th>
          <th>QEYDİYYAT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          echo "<body style='background-color:#E6E6FA'>";
          $sql = "select * from Yeni";
          $result = $conn->query($sql);
          if ($conn->connect_error) {
            die('Connection Failed : ' . $conn->connect_error);
          } else {
            while ($row = $result->fetch_assoc()) {
              $to    .= $row['Email'] . ';';
              echo "<td>" . $row["Ad"] . "</td>";
              echo "<td>" . $row["Yas"] . "</td>";
              echo "<td>" . $row["Serya"] . "</td>";
              echo "<td>" . $row["Fin"] . "</td>";
              echo "<td>" . $row["Cins"] . "</td>";
              echo "<td>" . $row["Tehsil"] . "</td>";
              echo "<td>" . $row["Ixtisas"] . "</td>";
              echo "<td>" . $row["Fakulte"] . "</td>";
              echo "<th><a>" . $row["Email"] . "</a></td>";
              echo "<td>" . $row["Nomre"] . "</td>";
              echo "<td>" . $row["Zaman"] . "</td></tr>";
            }

            $conn->close();
            // header("Location: complate.html");
            die();
          }
          ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script> -->
    <!-- <script type="text/javascript">
      $(document).ready(function() {
    $('#tableid').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script> -->
  </div>
</body>

</html>