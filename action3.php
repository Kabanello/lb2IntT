<?php
    $date3 = ($_POST['data3']);
    $rdate = strval(strtotime($date3));
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $filter = [
        'dateEnd' => ['$lte' => $rdate],
        
    ];
    $options = [
        'projection' => ['autoName' => 1],
    ];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery('dbforlab.rent', $query);

    foreach ($cursor as $document) {
        $arr = get_object_vars($document);
        echo $arr['autoName'],"</br>";
    };
?>
<script type="text/javascript" defer>localStorage.setItem("r3", '<?php echo $date3;?>');</script>