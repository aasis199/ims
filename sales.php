<?php

include 'header.php';
include 'sidebar.php';

?>
<div class="main p-1">


    <button class="btn m-3 float-right" id="open-modal">Create New</button>

    <div class="modal-fullscreen fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-pri justify-content-between d-flex p-2">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Sale</h1>
                </div>
                <hr>

                <div class="modal-body p-2">
                    <form action="php/add_sales.php" method="POST">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1 mx-3 ">
                                <div>
                                    <label class="col-form-label mx-20">Date:</label>
                                    <input type="date" name="date" class="form-control  p-10" id="date">
                                </div>
                                <div class="d-flex">
                                    <label class="col-form-label mx-20 p-10">Invoice No:</label>
                                    <?php
                                        require 'php/db_connect.php';

                                        $sql = "SELECT ino FROM sales ORDER BY ino DESC LIMIT 1";
                                        $result = $connect->query($sql);
                                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                            echo "<option required class='p-10' value=''>" . $row['ino'] + 1 . "</option>";
                                            
                                        }
                                    ?>    
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-1 mx-3 ">
                                <div>
                                    <label class="col-form-label mx-20">Customer:</label>
                                    <?php
                                        require 'php/db_connect.php';

                                        $sql = "SELECT id, name, phone, email, address from customer";
                                        $result = $connect->query($sql);
                                        echo '<select name="name" class="p-10"><option>SELECT</option>';

                                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                            echo "<option required class='p-10' value=" . $row['name'] . ">" . $row['name'] . " - " . $row['phone'] . "</option>";
                                        }
                                        echo '</select>';

                                    ?>
                                </div>
                                <div>
                                    <label class="col-form-label mx-20">Phone:</label>
                                    <input type="number" class="form-control  p-10" id="customer-phone">
                                </div>
                            </div>
                            <hr>
                            <table class="w-100 h-50 table">
                                <thead>
                                    <tr>
                                        <th>S/N.</th>
                                        <th>Item name</th>
                                        <th>Qty</th>
                                        <th>Rate</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                        <td contenteditable='true'></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>___% Discount</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Taxable Amount</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>13% VAT</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Grand Total</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="p-2 modal-footer float-left bg-white">
                            <button class="btn-close border mx-3" id="close_modal">Cancel</button>
                            <button type="submit" class="btn">Record</button>
                            <button type="button" class="btn mx-3">Record & Print</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <th>Date</th>
            <th>INo.</th>
            <th>Name</th>
            <th>Total</th>
            <th>Status</th>
    </table>
</div>