<!DOCTYPE html>
<html>
  <head>
    <title>Prescription Details</title>
    <style>
      /* Style the table headers */
      th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        padding: 8px;
        text-align: left;
      }

      /* Style the table rows */
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      tr:hover {
        background-color: #ddd;
      }

      /* Style the table data cells */
      td {
        border-bottom: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <h1>Prescription Details</h1>
    <table id="Prescription-table">
      <tr>
        <th>Medicine_Name</th>
        <th>Dosage</th>
        <th>P_id</th>
        <th>Category</th>
      </tr>
      <?php
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "hospital database management system");

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Query database for Prescription Details
        $sql = "SELECT * FROM Prescription";
        $result = mysqli_query($conn, $sql);

        // Output patient details as table rows
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["Medicine_Name"] . "</td>";
          echo "<td>" . $row["Dosage"] . "</td>";
          echo "<td>" . $row["P_id"] . "</td>";
          echo "<td>" . $row["Category"] . "</td>";
          echo "</tr>";
        }

        // Close database connection
        mysqli_close($conn);
      ?>
    </table>
    
    <script>
      // Add JavaScript code here
      const patientTable = document.getElementById("Prescription-table");
      
      // Add event listener to table rows
      patientTable.addEventListener("click", function(event) {
        if (event.target.nodeName === "TD") {
          // Get selected patient name from first column of row
          const patientName = event.target.parentNode.children[0].textContent;
          alert("Selected patient: " + patientName);
        }
      });
    </script>
  </body>
</html>