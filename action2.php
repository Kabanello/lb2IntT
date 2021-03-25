<?
    $name2 = ($_POST['seller2']);
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $filter = [
        'Race' => ['$lt' => intval($name2)],
        
    ];
    $options = [
        'projection' => ['autoName' => 1],
    ];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery('dbforlab.auto', $query);

    foreach ($cursor as $document) {
        $arr = get_object_vars($document);
        echo $arr['autoName'],"</br>";
    };

?>
<script type="text/javascript" defer>localStorage.setItem("r2", '<?php echo $name2;?>');</script>