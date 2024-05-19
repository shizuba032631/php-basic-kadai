<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = array(15, 4, 18, 23, 10);

        function checkArgument($array, $ascending = true) {
            if ($ascending) {
                echo '昇順でソートします。' . '<br>';
                sort($array);
                foreach($array as $value) {
                echo $value . '<br>';
                } 
                echo '降順でソートします。' . '<br>';
                arsort($array);
                foreach($array as $value) {
                echo $value . '<br>';
                } 
            } else {
                echo '降順でソートします。';
                arsort($array);
                foreach($array as $value) {
                echo $value . '<br>';
                } 
            }
        }
        checkArgument($nums, true);

        ?>   
    </p>
</body>

</html>
