<?php include_once "../../layouts/partials/header.php"; ?>

<?php
$listProduct = [
    [
        "productName" => "Apple MacBook Pro 17",
        "color" => "Silver",
        "category" => "Laptop",
        "price" => "$2999"
    ],
    [
        "productName" => "  Microsoft Surface Pro",
        "color" => "White",
        "category" => "Laptop PC",
        "price" => "$1999"
    ],
    [
        "productName" => "Apple MacBook Pro 17",
        "color" => "Silver",
        "category" => "Accessories",
        "price" => "$99"
    ]
]


?>

<div class="container flex h-full mx-auto mt-4">
    <!-- Content -->
    <main class="w-full px-4 py-4 overflow-auto bg-white">
        <h2 class="mb-4 text-lg font-semibold">User Management</h2>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <!-- <th scope="col" class="px-6 py-3">
                            Action
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listProduct as $product) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <?php foreach ($product as $key => $value) : ?>
                        <?php if ($key == "productName") : ?>
                        <th class="px-6 py-4"><?= $value ?></th>
                        <?php endif ?>
                        <?php if ($key !== "productName") : ?>
                        <td class="px-6 py-4"><?= $value ?></td>
                        <?php endif ?>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                    <?php

                    foreach ($listProduct as $product) {
                        echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
                        echo "<th class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" . $product["productName"] . "</th>";
                        echo "<td class='px-6 py-4'>" . $product["color"] . "</td>";
                        echo "<td class='px-6 py-4'>" . $product["category"] . "</td>";
                        echo "<td class='px-6 py-4'>" . $product["price"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                                class="px-5 py-2.5 font-medium text-red-600 dark:text-blue-500 hover:underline">delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                                class="px-5 py-2.5 font-medium text-red-600 dark:text-blue-500 hover:underline">delete</a>
                        </td>

                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                                class="px-5 py-2.5 font-medium text-red-600 dark:text-blue-500 hover:underline">delete</a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </main>
</div>




<?php include_once "../../layouts/partials/footer.php"; ?>