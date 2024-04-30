<?php

/**
 * user.
 * 
 * @param string E-mail e-mail.
 * @param string password, corse de préférence.
 * @param PDO db Connexion à la BDD.
 * @return boolean Succès ou échec. 
 * 
 */
function getUser(string $login, string $pwd, PDO $db): array
{
    // - Prépare la requête
    $query = 'SELECT user.id, user.email, user.password, user.idRole';
    $query .= ' FROM user';
    $statement = $db->prepare($query);
    $statement->bindParam(':login', $login);
    $statement->bindParam(':pwd', $pwd);
  

    // - Exécute la requête
    $successOrFailure = $statement->execute();
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $user;
}
