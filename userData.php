<?php
    require('./database.php');
    require('./read.php')
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 40vh; /* Full viewport height to center vertically */
            font-family: Arial, sans-serif;
        }
         /* Style the table */
         .read-main {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        .read-main th, .read-main td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .read-main th {
            background-color: #f2f2f2;
            color: #333;
        }
                /* Style the action buttons */
                .read-main .actions {
            display: flex;
            gap: 5px; /* Space between buttons */
        }

        .read-main .actions form {
            margin: 0; /* Remove default form margin */
        }

        .read-main .actions input[type="submit"] {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .read-main .actions input[type="submit"][name="edit"] {
            background-color: #ffcc00;
            color: black;
        }

        .read-main .actions input[type="submit"][name="edit"]:hover {
            background-color: #e6b800;
        }

        .read-main .actions input[type="submit"][name="delete"] {
            background-color: #ff3333;
            color: white;
        }

        .read-main .actions input[type="submit"][name="delete"]:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <a href="create.php">Register</a>
<table class="read-main">
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
            <tr>
                <td><?php echo $results['id'] ?></td>
                <td><?php echo $results['username'] ?></td>
                <td><?php echo $results['password'] ?></td>
                <td class="actions">
                    <form action="/crud-dev/update.php" method="post">  
                        <input type="submit" name="edit" value="EDIT">
                        <input type="hidden" name="editId" value="<?php echo $results['id'] ?>">
                        <input type="hidden" name="editUsername" value="<?php echo $results['username'] ?>">
                        <input type="hidden" name="editPassword" value="<?php echo $results['password'] ?>">
                    </form>
                    <form action="/crud-dev/delete.php" method="post">  
                        <input type="submit" name="delete" value="DELETE">
                        <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>
