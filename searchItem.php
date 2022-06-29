<?php
include 'config.php';

function showList($itemCriteria, $result)
{
    $output = '<ul class="list-unstyled drop">';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<li style="padding:12px">'.$row[$itemCriteria].'</li>';
        }
    }
    else
    {
        $output .='<li>Item not found</li>';
    }
    $output .='</ul>';
    echo $output;
}

if(isset($_POST["query"]) && isset($_POST["criteria"]))
{
    $output = '';
    $criteria = $_POST["criteria"];
    if($criteria == "Item Name")
    {
        $itemCriteria = "item";
        $query = "select * from up where item LIKE '%".$_POST["query"]."%'";
        $result = mysqli_query($conn, $query);
        showList($itemCriteria, $result);
    }
    else if($criteria == "On Charge of")
    {
        $itemCriteria = "onCharge";
        $query = "select * from up where onCharge LIKE '%".$_POST["query"]."%'";
        $result = mysqli_query($conn, $query);
        showList($itemCriteria, $result);
    }
    else if($criteria == "Category")
    {
        $itemCriteria = "category";
        $query = "select * from up where category LIKE '%".$_POST["query"]."%'";
        $result = mysqli_query($conn, $query);
        showList($itemCriteria, $result);
    }
    else if($criteria == "Loc")
    {
        $itemCriteria = "currentLoc";
        $query = "select * from up where currentLoc LIKE '%".$_POST["query"]."%'";
        $result = mysqli_query($conn, $query);
        showList($itemCriteria, $result);
    }
    else if($criteria == "Condemnation Bd")
    {
        $itemCriteria = "condemnationBd";
        $query = "select * from up where condemnationBd LIKE '%".$_POST["query"]."%'";
        $result = mysqli_query($conn, $query);
        showList($itemCriteria, $result);
    }
}

if(isset($_POST["query"]))
{
    $output = '';
    $itemCriteria = "item";
    $query = "select * from up where item LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($conn, $query);
    showList($itemCriteria, $result);
    
}
?>