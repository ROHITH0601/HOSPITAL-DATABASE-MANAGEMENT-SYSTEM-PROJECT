<!DOCTYPE html>
<html>
  <head>
    <title>Hospital Details</title>
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
    <h1>Hospital Details</h1>
    <table id="Hospital-table">
      <tr>
        <th>Hosp_id</th>
        <th>H_Address</th>
        <th>H_Name</th>
        <th>H_City</th>
      </tr>
      <?php
        // Connect to database
        $conn = mysqli_connect("localhost", "root", "", "hospital database management system");

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Query database for Hospital Details
        $sql = "SELECT * FROM Hospital";
        $result = mysqli_query($conn, $sql);

        // Output patient details as table rows
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["Hosp_id"] . "</td>";
          echo "<td>" . $row["H_Address"] . "</td>";
          echo "<td>" . $row["H_Name"] . "</td>";
          echo "<td>" . $row["H_City"] . "</td>";
          echo "</tr>";
        }

        // Close database connection
        mysqli_close($conn);
      ?>
    </table>
    
    <script>
      // Add JavaScript code here
      const patientTable = document.getElementById("Hospital-table");
      
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