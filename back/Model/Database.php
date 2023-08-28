<?php
require_once __DIR__ . '/../vendor/autoload.php';
class Database
{
    protected $connection = null;
    protected $DB_HOST = DB_HOST;
    protected $DB_DATABASE_NAME = DB_DATABASE_NAME;
    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_DATABASE_NAME;",DB_USERNAME, DB_PASSWORD);

        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage());
        }
    }
    public function select($query = "" , $params = [])
    {
        try {
            $stmt = $this->executeStatement( $query , $params );
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            return $exception->getMessage();
        }
    }
    private function executeStatement($query = "" , $params = [])
    {
        try {
            $stmt = $this->connection->prepare( $query );
            if($stmt === false) {
                throw New PDOException("Unable to do prepared statement: " . $query);
            }
            if( $params ) {
                dump($params);
                $stmt->bindParam($params[0], $params[1]);
            }
            $stmt->execute();
            return $stmt;
        } catch(PDOException $exception) {
            throw New PDOException( $exception->getMessage() );
        }
    }
}