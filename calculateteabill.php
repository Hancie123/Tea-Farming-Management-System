<tfoot>
    <tr>
        <td align="right">Total</td>
        <td align="right">
            <?php
                if(!ISSET($_POST['sum'])){
            ?>
                <form method="POST" action="">
                    <button class="btn btn-success" name="sum">Calculate</button>
                </form>
            <?php
                }else{
                    $query = mysqli_query($conn, "SELECT SUM(Total_Amount) AS total FROM `tea_bill`") or die(mysqli_error());
                    $fetch = mysqli_fetch_array($query);
            ?>
                <label class="text-danger"><?php echo number_format($fetch['total'])?></label>
            <?php
                }
            ?>
        </td>
    </tr>
</tfoot>