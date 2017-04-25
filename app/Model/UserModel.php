<?php

namespace Model;

use \W\Model\UsersModel;

class UserModel extends UsersModel
{
	//on herite de tout ce qu il ya dans W

   public function isValidToken($token) {
    $query = $this->dbh->prepare('SELECT id FROM users WHERE token_forget = :token AND NOW() < date_forget');
    $query->bindValue(':token', $token, \PDO::PARAM_STR);
    $query->execute();
    return $query->fetchColumn();
}

function changeUserPassword($id, $password) {

    $query = $this->dbh->prepare('UPDATE users SET password = :password, token_forget = NULL, date_forget = NULL WHERE id = :id'); // On met à jour le mot de passe de l'utilisateur et on supprime le token
    $query->bindValue(':id', $id);
    $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
    return $query->execute();
}

function changeTokenLogin($user_id) {

    $token_login = sha1(md5(sha1($user_id) . sha1(time()) . md5('1a4g51rz74hz21rz4h') . md5(uniqid()))); // Génére un token du style 3a4f74a7f5a7f4v7g4ae5g41ae2gea87gv
    $db->query('UPDATE users SET token_login = "'.$token_login.'" WHERE id = ' . $user_id);
    return $token_login;
}

function checkUserByEmail($user_email) {

    $query = $this->dbh->prepare('SELECT id FROM user WHERE email = :email');
    $query->bindValue(':email', $user_email, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchColumn();
}

function checkUser($login, $password) {

    $query = $this->dbh->prepare('SELECT COUNT(*) as count, id, login, email, password, role, registered_at FROM user WHERE login = :login');
    $query->bindValue(':login', $login, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(); // Je stocke le résultat de ma requête dans $user
    if ($user['count']) {
        // Vérification du mot de passe
        if (password_verify($password, $user['password'])) { // Je compare le mot de passe en clair avec le mot de passe hashé
            return $user;
        } else {
            return 'Le mot de passe n\'est pas correct';
        }
    } else {
        return 'L\'utilisateur n\'existe pas';
    }
}

function userExists($email, $login) {
    global $db;
    // On fait une requête pour vérifier si l'utilisateur existe ou pas
    $query = $this->dbh->prepare('SELECT COUNT(*) FROM user WHERE email = :email OR login = :login');
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':login', $login, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchColumn(); // Return 0, 1 ou 2, fetchColumn retourne la valeur de la première colonne
}

function registerUser($login, $email, $password) {
    global $db;
    $query = $this->dbh->prepare("INSERT INTO user (login, email, password, role, registered_at) VALUES (:login, :email, :password, 'customer', NOW())");
    $query->bindValue(':login', $login);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
    if ($query->execute()) {
        return $db->lastInsertId();
    }
}
}
