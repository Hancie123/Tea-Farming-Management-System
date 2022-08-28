<?php
include('connection.php');
 
$column = array(
    'TeaBill_ID',
    'date',
    'Name',
    'Total_KG',
    'Basic_Wage',
    'OT'
);
 
$query = "SELECT * FROM tea_bill";
 
if (isset($_POST['search']['value'])) {
    $query .= '
 WHERE TeaBill_ID LIKE "%' . $_POST['search']['value'] . '%" 
 OR date LIKE "%' . $_POST['search']['value'] . '%" 
 OR Name LIKE "%' . $_POST['search']['value'] . '%" 
 OR Total_KG LIKE "%' . $_POST['search']['value'] . '%" 
 OR Basic_Wage LIKE "%' . $_POST['search']['value'] . '%" 
 OR OT LIKE "%' . $_POST['search']['value'] . '%" 
 ';
}
 
if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY TeaBill_ID DESC ';
}
 
$query1 = '';
 
if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
 
$statement = $connect->prepare($query);
 
$statement->execute();
 
$number_filter_row = $statement->rowCount();
 
$statement = $connect->prepare($query . $query1);
 
$statement->execute();
 
$result = $statement->fetchAll();
 
$data = array();
 
foreach ($result as $row) {
    $sub_array   = array();
    $sub_array[] = $row['TeaBill_ID'];
    $sub_array[] = $row['date'];
    $sub_array[] = $row['Name'];
    $sub_array[] = $row['Total_KG'];
    $sub_array[] = $row['Basic_Wage'];
    $sub_array[] = $row['OT'];
    $data[]      = $sub_array;
}
 
function count_all_data($connect)
{
    $query     = "SELECT * FROM tea_bill";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}
 
$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data' => $data
);
 
echo json_encode($output);
 
?>