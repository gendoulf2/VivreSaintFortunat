<?php
include("../config/config.php");

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['idevenement'])) {
        $idEvenement = intval($_GET['idevenement']);
        $sql = "SELECT id_evenement, titre, description, date_evenement, lieu 
                FROM Evenement 
                WHERE id_evenement = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $idEvenement, PDO::PARAM_INT);
        $stmt->execute();

        $evenement = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($evenement ?: ["error" => "Évènement non trouvé."]);
    } else {
        echo json_encode(["error" => "ID de l'évènement manquant."]);
    }
} catch (PDOException $e) {
    echo json_encode(["error" => "Erreur : " . $e->getMessage()]);
}
?>


