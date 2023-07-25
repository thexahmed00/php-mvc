<!-- views/todolist.php -->

<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        <?php foreach ($viewModel as $item): ?>
            <li>
                <strong><?php echo $item['title']; ?>:</strong>
                <?php echo $item['description']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Form to add a new Todo item -->
    <form action="index.php?action=add" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Add Todo</button>
    </form>
</body>
</html>
