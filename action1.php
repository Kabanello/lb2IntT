
<?
        $date = ($_POST['data1']);
        $sum = 0;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $rdate = strval(strtotime($date));
        $filter = [
            'dateEnd' => ['$lt' => $rdate],
            
        ];
        $options = [
            'projection' => ['cost' => 1],
        ];
        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $manager->executeQuery('dbforlab.rent', $query);

        foreach ($cursor as $document) {
            $arr = get_object_vars($document);
            $sum += $arr['cost'];
        }
        echo $sum;
?>
<script type="text/javascript" defer>localStorage.setItem("r1", '<?php echo $date;?>');</script>