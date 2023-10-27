<?php 
    class Questions{
        private $conn;
        public function __construct(){
            $this->conn = mysqli_connect("localhost", "root", "", "webcuoiki") or die("Cannot connected database!");
        }

        public function getConn(){
            return $this->conn;
        }

        public function addDataToDatabase($sql){
            mysqli_query($this->conn, $sql);
        }
        public function getAllQuestions(){

            $sql = "SELECT * FROM tbl_cau_hoi";

            $result = mysqli_query($this->conn, $sql);

            if (!$result) {
                die("Query failed: " . mysqli_error($this->conn));
            }
    
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            
    
            return $data;
        }
        public function getRandomQuestions(){

            $sql = "SELECT * FROM tbl_cau_hoi ORDER BY RAND() LIMIT 10";

            $result = mysqli_query($this->conn, $sql);

            if (!$result) {
                die("Query failed: " . mysqli_error($this->conn));
            }
    
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            
    
            return $data;
        }

        public function getDataFromDatabase($sql){

            $result = mysqli_query($this->conn, $sql);

            if (!$result) {
                die("Query failed: " . mysqli_error($this->conn));
            }
    
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            
    
            return $data;
        }
        
    }
?>


