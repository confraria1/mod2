<?php

/**
 * Databse
 *
 * @author Tiago Saviane
 */
class Database {

    /**
     * Host do DB.
     * 
     * @var type 
     */
    private static $host = 'localhost';

    /**
     * Usuário para conexão com o DB.
     * 
     * @var type 
     */
    private static $user = 'root';

    /**
     * Senha do usuário para conexão com o DB.
     * 
     * @var type 
     */
    private static $pass = '';

    /**
     * Nome do DB.
     * 
     * @var type 
     */
    private static $dbName = 'mod';

    /**
     * Método para iniciar a conexão com o DB.
     * 
     * @return \PDO
     */
    private static function connect() {

        try {
            $pdo = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName . ';charset=UTF8', self::$user, self::$pass);
            $pdo->exec("set names utf8");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('DB Error: ' . $e->getMessage());
        }
        return $pdo;
    }

    /**
     * Retornará uma array associativo (apenas uma linha).
     * 
     * @param type $sql
     * @return type
     */
    public static function fetchRow($sql) {

        $pdo = self::connect();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Retornará um array associativo multidimensional (varias linhas).
     * 
     * @param type $sql
     * @return type
     */
    public static function fetchArray($sql) {
        $pdo = self::connect();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Método para atualizar registro no DB.
     * 
     * @param type $sql
     * @return type
     */
    public static function update($sql) {
        $pdo = self::connect();
        $result = $pdo->prepare($sql);
        return $result->execute();
    }

    /**
     * Método para excluir um registro no DB.
     * 
     * @param type $sql
     * @return type
     */
    public static function delete($sql) {
        $pdo = self::connect();
        $result = $pdo->prepare($sql);
        return $result->execute();
    }

}
