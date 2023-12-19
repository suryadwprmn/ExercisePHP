<html>
    <head>
    </head>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "latihandbphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Database not found");
}

// Perform a query
$hasil = mysqli_query($conn, "SELECT * FROM user");

if (!$hasil) {
    die("Query failed");
}

// Get the number of columns
$jumlah_kolom = mysqli_num_fields($hasil);
echo "Number of columns: $jumlah_kolom<br>";


$jumlah_baris = mysqli_num_rows($hasil);
echo "Number of rows: $jumlah_baris<br>";

$sql = "INSERT INTO user (id_pengguna, user, password)
VALUES ('19060042', 'Aldhi Bagas Pratama', 'aldhi123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>


<?php
    // Pastikan $conn adalah objek koneksi yang sudah dibuat sebelumnya
    $sql1 = "SELECT id_pengguna, user, password FROM user WHERE user = 'Surya'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["id_pengguna"] . " " . $row["user"] . " " . $row["password"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>


    </body>
</html>
