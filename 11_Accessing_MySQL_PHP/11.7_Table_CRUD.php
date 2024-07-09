<?php
echo "<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}
</style>";
require_once '11.1_Logging.php';

try { 
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e){
    throw new PDOException($e -> getMessage(), (int)$e->getCode());
}

if (isset($_POST['delete']) && isset($_POST['isbn'])) {
    $isbn = get_post($pdo, 'isbn');
    $query = "DELETE FROM classics WHERE isbn=$isbn";
    $result = $pdo->query($query);
    }
    if (isset($_POST['author']) &&
    isset($_POST['title']) &&
    isset($_POST['category']) && 
    isset($_POST['year']) &&
    isset($_POST['isbn'])) {
    $author = get_post($pdo, 'author'); 
    $title = get_post($pdo, 'title');
    $category = get_post($pdo, 'category');
    $year = get_post($pdo, 'year');
    $isbn = get_post($pdo, 'isbn');
    $query = "INSERT INTO classics VALUES" .
    "($author, $title, $category, $year, $isbn)";
    $result = $pdo->query($query);
    }
    

    echo <<<_END
    <form action="11.7_Table_CRUD.php" method="post"><pre>
    Author: <input type = "text" name = "author">
    Title: <input type = "text" name = "title">
    Category: <input type = "text" name = "category">
    Year: <input type = "text" name = "year">
    ISBN: <input type = "text" name = "isbn">
    <input type = "submit" value = "Add Record">
    </pre></form>

    _END;

    echo "<table>";
    echo "<tr>
    <th>Author</th>
    <th>Title</th>
    <th>Category</th>
    <th>Year</th>
    <th>ISBN</th>
    <th>Action</th>
    </tr>";

    $query = "SELECT * FROM classics";
    $result = $pdo -> query($query);

    while ($row = $result -> fetch()) {
    $r0 = htmlspecialchars($row['author']);
    $r1 = htmlspecialchars($row['title']);
    $r2 = htmlspecialchars($row['category']);
    $r3 = htmlspecialchars($row['year']);
    $r4 = htmlspecialchars($row['isbn']);

    echo "<tr>";
    echo "<td>$r0</td>";
    echo "<td>$r1</td>";
    echo "<td>$r2</td>";
    echo "<td>$r3</td>";
    echo "<td>$r4</td>";
    echo "<td>";
    echo "<form action='11.7_Table_CRUD.php' method='post'>
                <input type='hidden' name='delete' value='yes'>
                <input type='hidden' name='isbn' value='$r4'>
                <input type='submit' value='Delete Record'>
            </form>
            <form action='11.7_Table_CRUD.php' method='post'>
                <input type='hidden' name='update' value='yes'>
                <input type='hidden' name='isbn' value='$r4'>
                <input type='submit' value='Update Record'>
            </form>
          </td>";
    echo "</tr>";

}


// Add a conditional statement to check if the update button is clicked

if (isset($_POST['update']) && isset($_POST['isbn'])) {
    $isbn = get_post($pdo, 'isbn');
    $query = "SELECT * FROM classics WHERE isbn=$isbn";
    $result = $pdo->query($query);
    $row = $result->fetch();


    // Display the form with the retrieved data

    echo "<form action='11.7_Table_CRUD.php' method='post'><pre>
    Author <input type='text' name='author' value='$row[author]'>
    Title <input type='text' name='title' value='$row[title]'>
    Category <input type='text' name='category' value='$row[category]'>
    Year <input type='text' name='year' value='$row[year]'>
    ISBN <input type='text' name='isbn' value='$row[isbn]'>
    <input type='hidden' name='update' value='yes'>
    <input type='submit' value='Update Record'>
    </pre></form>";

}



function get_post($pdo, $var){
    return $pdo->quote($_POST[$var]);
}
echo "</table>";