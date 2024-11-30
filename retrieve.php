
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<div class="navbar">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Retrieve.html">Retrieve</a></li>
        <li><a href="delete.html">Delete</a></li>
    </ul>
</div>

<body>
    <br>

    <form method="POST" class="retrieve" action="retrieve.php">
        <H1>RETRIEVE DATA</H1>
        <button type="submit" class="ret">Retrieve</button>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'conn.php';
    require 'filech.php';
    $sql = "SELECT id, username, firstname, lastname, email, gender, extnum, phno FROM $tbname";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border>
                <tr>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Extension Number</th>
                    <th>Phone Number</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['firstname'] . "</td>
                    <td>" . $row['lastname'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['gender'] . "</td>
                    <td>" . $row['extnum'] . "</td>
                    <td>" . $row['phno'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    $result->free();
}
?>

    </form>
</body>

</html>