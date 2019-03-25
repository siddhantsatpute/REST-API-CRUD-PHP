<?php

class Connect
{
    //give your host name or host IP here in our case with XAMPP it is localhost/IP is 127.0.0.1
    private $host='localhost';
    private $db_name='college_students'; //give your database name here.
    private $username='root';    //give your username here. In our case root is the username.
    private $password='';       //give your host password here.
    private $conn;              //declare the connection object for connecting to the database.

    //DB connect function
    public function connect()
    {
        $this->conn=null;

        try
        {
            //give the credentials for the database to connection object $conn.
            $this->conn=new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username,
            $this->password);

            //set the attributes for connection object
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch (PDOException $e)
        {
            echo 'Connection Error : ' . $e->getMessage();
        }

        return $this->conn;
    }
}

?>