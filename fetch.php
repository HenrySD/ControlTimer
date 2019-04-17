<?php
require("database.php");

$column = array('cod_Empr', 'nom_Empr', 'fec_Cons', 'dir_Empr', 'tel_Empr');

$query = "SELECT * FROM tab_empr ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE cod_Empr LIKE "%'.$_POST['search']['value'].'%" 
 OR nom_Empr LIKE "%'.$_POST['search']['value'].'%" 
 OR fec_Cons LIKE "%'.$_POST['search']['value'].'%" 
 OR dir_Empr LIKE "%'.$_POST['search']['value'].'%" 
 OR tel_Empr LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY cod_Empr DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['cod_Empr'];
 $sub_array[] = $row['nom_Empr'];
 $sub_array[] = $row['fec_Cons'];
 $sub_array[] = $row['dir_Empr'];
 $sub_array[] = $row['tel_Empr'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tab_empr";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>