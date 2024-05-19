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

        function sort_2way($array, $order = true) {
            if ($order) {
                echo '昇順でソートします。' . '<br>';
                sort($array);
            } else {
                echo '降順でソートします。' . '<br>';
                arsort($array);
                } 
            // 並び替え後の配列を表示
            foreach($array as $value) {
                echo $value . '<br>';
            }
        }
        sort_2way($nums, true ) . '<br>';
        sort_2way($nums, false);
        
        ?>   
    </p>
</body>

</html>
