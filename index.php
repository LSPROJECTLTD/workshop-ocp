<?php
echo "<h1>Openshift Workshop v2.0</h1> ";
echo $_SERVER['SERVER_ADDR'];
echo "<br><hr>";
echo "<h2>Cidades cadastradas no Banco de Dados:</h2>";
$conn = new mysqli("mysql:3308", "redhat", "redhat123", "workshop");
if ($conn->connect_error) {
    echo "Erro na conexão";
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM cidade");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
