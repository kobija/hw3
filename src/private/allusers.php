<style>
    .fixed_headers {
        width: @table_width;
        table-layout: fixed;
        border-collapse: collapse;

    th { text-decoration: underline; }
    th, td {
        padding: 5px;
        text-align: left;
    }

    td:nth-child(1), th:nth-child(1) { min-width: @column_one_width; }
    td:nth-child(2), th:nth-child(2) { min-width: @column_two_width; }
    td:nth-child(3), th:nth-child(3) { width: @column_three_width; }

    thead {
        background-color: @header_background_color;
        color: @header_text_color;
    tr {
        display: block;
        position: relative;
    }
    }
    tbody {
        display: block;
        overflow: auto;
        width: 100%;
        height: @table_body_height;
    tr:nth-child(even) {
        background-color: @alternate_row_background_color;
    }
    }
    }

    .old_ie_wrapper {
        height: @table_body_height;
        width: @table_width;
        overflow-x: hidden;
        overflow-y: auto;
    tbody { height: auto; }
    }

</style>



<table class="fixed_headers">
    <thead>
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Type</th>
        <th>Account created on</th>
        <th>Last login</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $con =  mysqli_connect("cssrvlab01.utep.edu", "kjvaldez", "Sasuke99!", "kjvaldez_db");
    $count = 0;
    $query = mysqli_query($con,"SELECT * FROM person");
    foreach($query as $row){
        $count++;
        ?>
        <tr>
            <td>   <?php echo $row["user_name"]; ?></td>
            <td>   <?php echo $row["first_name"]; ?></td>
            <td>   <?php echo $row["last_name"]; ?></td>
            <td>   <?php echo $row["user_type"]; ?></td>
            <td>   <?php echo $row["last_login"]; ?></td>
            <td>   <?php echo $row["account_creation"]; ?></td>
        </tr>
        <?php
        if($count == 6) { // three items in a row
            echo '</tr><tr>';
            $count = 0;
        }
    } ?>
    </tbody>
</table>
