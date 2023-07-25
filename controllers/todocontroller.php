<?php

class TodoController extends BaseController{
   
    private $db;
    public function __construct($action, $urlValues, $db) {
        parent::__construct($action, $urlValues);
        $this->db = $db;
    }
    public function index() {
        // Fetch all Todo items from the model and pass them to the view
        require("models/todomodel.php");
        $todoModel = new TodoModel($this->$db);
        $todoItems = $todoModel->getAllTodoItems();
        $this->view->output($todoItems);
    }

    public function add() {
        // Handle adding a new Todo item based on user input
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];

            $todoModel = new TodoModel($this->$db);
            $todoModel->addTodoItem($title, $description);
        }

        // Redirect back to the Todo list after adding
        header('Location: index.php');
    }

    // Implement methods for updating and deleting Todo items, if required.

} 


?>