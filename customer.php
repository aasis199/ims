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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Customer</h1>
                    <button class="btn-close" id="close_modal">X</button>
                </div>
                <hr>

                <div class="modal-body p-2">
                    <form action="http://localhost/ims/php/add_customer.php/" method="POST">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <div>
                                    <label for="recipient-name" class="col-form-label mx-20">Customer name:</label>
                                    <input required type="text" class="form-control p-10" name="name"
                                        id="customer-name">
                                </div>
                                <div>
                                    <label for="message-text" class="col-form-label mx-20">Phone:</label>
                                    <input required type="number" class="form-control  p-10" name="phone"
                                        id="customer-phone">
                                </div>
                            </div>
                            <div class="d-flex justify-content-around mb-1">
                                <div class="mx-3">
                                    <label for="customer-email" class="col-form-label mx-20">Email:</label>
                                    <input required type="text" id="customer-email" name="email" class="mt-3 p-10">
                                </div>
                                <div>
                                    <label for="customer-address" class="col-form-label mx-20">Address:</label>
                                    <input required type="text" id="customer-address" name="address" class="mt-3 p-10">
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

        $sql = "SELECT date, name, phone, email, address from customer";
        $result = $connect->query($sql);

        echo " <tr>
        <th>Date Created</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        </tr>";
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) { //Creates a loop to loop through results
            echo "<tr>
            <td>" . ($row['date']) . "</td>
            <td>" . ($row['name']) . "</td>
            <td>" . ($row['phone']) . "</td>
            <td>" . ($row['email']) . "</td>
            <td>" . ($row['address']) . "</td>

        </tr>";
        }
        ?>
    </table>
</div>