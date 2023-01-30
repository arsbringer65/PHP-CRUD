<?php
?>

<div class="todos">
    <table>

        <thead>
            <tr>
                <th>Unfinished Todos</th>
                <th></th>

            </tr>
        </thead>

        <?php
        require_once './models/todos.model.php';


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
        ?>
            <td>
                <form action="./models/update_todos.model.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <input type="submit" value="Done" name="done">
            </form>
            </td>
            </tr>
        <?php
        }
        ?>
</div>