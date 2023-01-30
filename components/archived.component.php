<?php
?>

<div class="archived">
    <table>

        <thead>
            <tr>
                <th>Finished Todos</th>
                <th></th>

            </tr>
        </thead>

        <?php
        require_once './models/archived.model.php';


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
        ?>
            <td>
                <form action="./models/delete_archived.model.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <input type="submit" value="Delete" name="delete">
                </form>

            </td>
            </tr>
        <?php
        }
        ?>
</div>