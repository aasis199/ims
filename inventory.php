<?php

include 'header.php';
include 'sidebar.php';

?>
<div class="main p-1">


    <button class="btn m-3 float-right" id="open-modal">Create New</button>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between d-flex p-2">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Inventory</h1>
                    <button class="btn-close" id="close_modal">X</button>
                </div>
                <hr>

                <div class="modal-body p-2">
                    <form action="php/add_products.php" method="POST">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="mb-1 ">
                                    <label for="recipient-name" class="col-form-label mx-20">Item name:</label>
                                    <input type="text" class="form-control p-10" name="name" id="inventory-name">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">Category:</label>
                                    <select name="category" class="p-10" id="item-category">
                                        <?php
                                        require 'php/get_category.php';
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="mb-1">
                                    <label class="col-form-label">New Qty:</label>
                                    <input type="number" name="qty" class="form-control  p-10" id="item-qty">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">SKU No:</label>
                                    <input type="text" name="sku_num" class="form-control  p-10" id="stock-sku">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">

                                <div class="mb-1">
                                    <label class="col-form-label">Price:</label>
                                    <input type="number" name="price" class="form-control  p-10" id="item-price">
                                </div>
                                <div class="mb-1">
                                    <label for="category-status" class="col-form-label">Active:</label>
                                    <input name="status" type="checkbox">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p-2 modal-footer float-left">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table>
        <?php
        require 'php/db_connect.php';

        $sql = "SELECT name, category, price, stock, sku,status from inventory";
        $result = $connect->query($sql);

        echo "<tr>
        <th>Name</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Price</th>
        <th>SKU</th>
        <th>status</th>
    </tr>";
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) { //Creates a loop to loop through results
            echo "<tr>
           <td> <a href='#'>" . ($row['name']) . "</a></td>
            <td>" . ($row['category']) . "</td>
            <td>" . ($row['stock']) . "</td>
            <td>" . ($row['price']) . "</td>
            <td>" . ($row['sku']) . "</td>
            <td>" . ($row['status']) . "</td>
        </tr>";
        }
        ?>
    </table>
</div>