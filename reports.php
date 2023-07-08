<?php

include 'header.php';
include 'sidebar.php';

?>

<div class="main p-1">
    <div>
        <table>
            <tr>
                <th>Date</th>
                <th>SKU No.</th>
                <th>Qty Sold</th>
                <th>Qty Issued</th>
                <th>Remaining Stock</th>
        </table>
    </div>
    <div>
    <button class="btn m-3 float-right" id="open-modal">Print Stock Level Report</button>

    </div>

<!-- //Inventory Stock Report -->
    <div>
        <table>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>SKU No.</th>
                <th>Qty</th>
                <th>Total</th>
        </table>
    </div>
    <div>
    <button class="btn m-3 float-right" id="open-modal">Print Sales Report</button>

    </div>
</div>