<?php
class DB {
    private $hostname = "mysql2.ph-hos.osemka.pl";
    private $username = "1472510409_f";
    private $password = "password123";
    private $dbname = "1323583_bazatestowa666";
    public $table = "product";
    public $sitename = 'http://softbumdk.aq.pl'; // without / at the end

    public function getConnection(){
        $db = null;
        try {
            $db = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Error during connection: ".$e->getMessage();
        }
        return $db;
    }
}
$db = new DB();

