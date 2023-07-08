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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Category</h1>
                    <button class="btn-close" id="close_modal">X</button>
                </div>
                <hr>

                <div class="modal-body p-2">
                    <form action="php/add_category.php" method="POST">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <div>
                                    <label for="category-name" class="col-form-label mx-20">Category name:</label>
                                    <input required type="text" name="name" class="form-control  p-10" id="category-name">
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label for="category-status" class="col-form-label mx-20">Active:</label>
                                    <input type="checkbox">
                                </div>
                                <div class="mx-3">
                                    <label for="category-tag" class="col-form-label mx-20">Tags:</label>
                                    <input type="text" name="tags" class="mt-3 p-10">
                                </div>
                            </div>
                            <hr>
                            <div class="p-2 modal-footer float-left">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <table>
    <?php
        require 'php/db_connect.php';

        $sql = "SELECT id, name, status, tags from category";
        $result = $connect->query($sql);
        
        echo " <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tag</th>
        </tr>";
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) { //Creates a loop to loop through results
            
            echo "<tr>
            <td>" . ($row['id']) . "</td>
            <td>" . ($row['name']) . "</td>
            <td>" . ($row['tags']) . "</td>
        </tr>";
        }
        ?>
    </table>
</div>