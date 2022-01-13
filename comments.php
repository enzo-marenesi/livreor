<?php

function setComment($conn){
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['id_utilisateur'];
        $date = $_POST['date']; 
        $commentaire = $_POST['commentaire'];

        $sql = "INSERT INTO commentaires (id_utilisateur, date, commentaire) VALUES ('$uid','$date','$commentaire')";
        $result = $conn->query($sql);
    }

}

function getComments($conn){
    $sql = "SELECT * FROM commentaires";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='commentbox'>";
            echo $row['id_utilisateur']."<br>";
            echo $row['date']."<br>";
            echo $row['commentaire'];
        echo "</div>";
    }

}


