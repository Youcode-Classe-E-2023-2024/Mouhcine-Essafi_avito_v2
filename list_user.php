<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Admin</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body class="bg-gray-500 text-white">

    <!-- Navbar -->
    <?php include("navbar.php"); ?>

    <!-- Content -->
    <div class="content flex flex-col items-center justify-center">
        <h2 class="text-2xl font-semibold mb-4">Liste des users</h2>

        <div class="overflow-x-auto w-full flex items-center justify-center">
            <table class="w-4/5 bg-white shadow-md rounded-md overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-white bg-gray-800">ID</th>
                        <th class="py-2 px-4 border-b text-white bg-gray-800">Full-Name</th>
                        <th class="py-2 px-4 border-b text-white bg-gray-800">Phone</th>
                        <th class="py-2 px-4 border-b text-white bg-gray-800">Role</th>
                        <th class="py-2 px-4 border-b text-white bg-gray-800">Email</th>
                        <th class="py-2 border-b text-white bg-gray-800"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connection.php");

                    $selectSql = "SELECT * FROM $table_users WHERE id != 0 ";
                    $result = $conn->query($selectSql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='hover:bg-gray-100 transition-all'>";
                            echo "<td class='py-2 px-4 border-b text-gray-700'>" . $row["id"] . "</td>";
                            echo "<td class='py-2 px-4 border-b text-gray-700'>" . $row["fullname"] . "</td>";
                            echo "<td class='py-2 px-4 border-b text-gray-700'>" . $row["phone"] . "</td>";
                            echo "<td class='py-2 px-4 border-b text-gray-700'>" . $row["role"] . "</td>";
                            echo "<td class='py-2 px-4 border-b text-gray-700'>" . $row["email"] . "</td>";
                            echo "<td class='py-2  border-b space-x-2'>";
                            echo "<button class='bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded transition-all'>Éditer</button>";
                            echo "<button class='bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded transition-all'>Supprimer</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Aucun utilisateur trouvé</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
