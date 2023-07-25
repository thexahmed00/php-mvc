<?php

class TodoModel extends BaseModel
{
    public $db;

    public function __construct($db) {
        parent::__construct();
        $this->db = $db;
    }

    public function addTodoItem($title, $description) {
        // Implement code to add a new Todo item to the database or data storage.
        $sql="INSERT INTO todo (title, description) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $title, $description);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllTodoItems() {
       // Implement code to fetch all Todo items from the database or data storage.
        $sql="SELECT * FROM todo";
        $result = $this->db->query($sql);
        $todoItems = array();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $todoItems[] = $row;
            }
        }
        return $todoItems;
    }

    public function updateTodoItem($id, $title, $description) {
        // Implement code to update a Todo item in the database or data storage.
    }

    public function deleteTodoItem($id) {
        // Implement code to delete a Todo item from the database or data storage.
    }
}

?>
