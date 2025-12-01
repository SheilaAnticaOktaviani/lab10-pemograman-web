<?php
// config/database.php - class library untuk koneksi database

class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    public function __construct() {
        $this->host     = 'localhost';
        $this->user     = 'root';
        $this->password = '';
        $this->db_name  = 'db_mahasiswa'; // ganti sesuai nama DB kamu

        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function insert($table, $data) {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $columns[] = $key;
                $values[]  = "'{$val}'";
            }
            $columns = implode(',', $columns);
            $values  = implode(',', $values);
        }
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        $query = $this->conn->query($sql);
        return $query ? true : false;
    }
}
