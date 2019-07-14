<?php 
    require_once("config.php");

    class MysqlDatabase{

        private $connection;

        function __construct(){
            $this->open_connection();
        }

        public function open_connection(){
            $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
        }

        public function close_connection(){
            if(isset($this->connection)){
                mysqli_close($this->connection);
                unset($this->connection);
            }
        }

        public function confirm_query($result){
            if($result){
                return $result;
            }else{
                echo "query failed";
            }

        }

        public function query($sql){
            //echo $sql;
            $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
            $result = mysqli_query($this->connection,$sql);
            //echo $result;
            $this->confirm_query($result);
            return $result;


        }

        public function fetch_array($result_set){
            return mysqli_fetch_array($result_set);
        }
        
    }

    $database =  new MysqlDatabase();

?>