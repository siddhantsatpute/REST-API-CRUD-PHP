<?php

class Model
{
    //DB stuffs
    private $conn;
    private $table='student_details';
    
    //students properties
    public $sr_no;
    public $roll_no;
    public $name;
    public $standard;
    public $dob;
    public $school;
    public $board;
    public $address;

    //Constructor with database
    public function __construct($db)
    {
        $this->conn=$db;
    }

    //get student details - Read
    public function read()
    {
        //create query
        $query='SELECT * FROM ' . $this->table;
        
        //prepare statement
        $statement=$this->conn->prepare($query);

        //execute query
        $statement->execute();

        return $statement;
    }

    //Read Single - get the details of a student
    public function read_single()
    {
        //create query
        $query='SELECT * FROM ' . $this->table . ' WHERE roll_no=?';

        //prepare statement
        $statement=$this->conn->prepare($query);

        //Bind roll_no
        $statement->bindParam(1, $this->roll_no);

        //execute query
        $statement->execute();

        $row=$statement->fetch(PDO::FETCH_ASSOC);

        //set properties
        $this->sr_no=$row['sr_no'];
        $this->roll_no=$row['roll_no'];
        $this->name=$row['name'];
        $this->standard=$row['standard'];
        $this->dob=$row['dob'];
        $this->school=$row['school'];
        $this->board=$row['board'];
        $this->address=$row['address'];
    }

    //Create
    public function create()
    {
        //create query
        $query='INSERT INTO ' . $this->table . ' SET 
        roll_no=:roll_no,
        name=:name,
        standard=:standard,
        dob=:dob,
        school=:school,
        board=:board,
        address=:address';

        //prepare create statement
        $statement=$this->conn->prepare($query);

        //clean data
        $this->roll_no=htmlspecialchars(strip_tags($this->roll_no));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->standard=htmlspecialchars(strip_tags($this->standard));
        $this->dob=htmlspecialchars(strip_tags($this->dob));
        $this->school=htmlspecialchars(strip_tags($this->school));
        $this->board=htmlspecialchars(strip_tags($this->board));
        $this->address=htmlspecialchars(strip_tags($this->address));

        //bind data
        $statement->bindParam(':roll_no', $this->roll_no);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':standard', $this->standard);
        $statement->bindParam(':dob', $this->dob);
        $statement->bindParam(':school', $this->school);
        $statement->bindParam(':board', $this->board);
        $statement->bindParam(':address', $this->address);

        //execute query
        if($statement->execute())
        {
            return true;
        }
        else
        {
            printf("Error: %s.\n", $statement->error);
            return false;
        }

    }

    //update 
    public function update()
    {
        //create update query
        $query='UPDATE ' . $this->table . ' SET 
        roll_no=:roll_no,
        name=:name,
        standard=:standard,
        dob=:dob,
        school=:school,
        board=:board,
        address=:address
        WHERE roll_no=:roll_no';

        //prepare statement
        $statement=$this->conn->prepare($query);

        //clean data
        $this->roll_no=htmlspecialchars(strip_tags($this->roll_no));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->standard=htmlspecialchars(strip_tags($this->standard));
        $this->dob=htmlspecialchars(strip_tags($this->dob));
        $this->school=htmlspecialchars(strip_tags($this->school));
        $this->board=htmlspecialchars(strip_tags($this->board));
        $this->address=htmlspecialchars(strip_tags($this->address));

        //bind data
        $statement->bindParam(':roll_no', $this->roll_no);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':standard', $this->standard);
        $statement->bindParam(':dob', $this->dob);
        $statement->bindParam(':school', $this->school);
        $statement->bindParam(':board', $this->board);
        $statement->bindParam(':address', $this->address);

        //execute query
        if($statement->execute())
        {
            return true;
        }
        else
        {
            printf("Error: %s.\n", $statement->error);
            return false;
        }

    }

    //Delete 
    public function delete()
    {
        //create delete query
        $query='DELETE FROM ' .$this->table . ' WHERE roll_no=:roll_no';

        //prepare statement
        $statement=$this->conn->prepare($query);

        //clean data
        $this->roll_no=htmlspecialchars(strip_tags($this->roll_no));

        //bind roll_no
        $statement->bindParam(':roll_no', $this->roll_no);

        //execute query
        if($statement->execute())
        {
            return true;
        }
        else
        {
            printf("Error: %s.\n", $statement->error);
            return false;
        }
    }
}

?>