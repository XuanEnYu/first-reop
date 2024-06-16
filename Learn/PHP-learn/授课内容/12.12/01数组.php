<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 数组：可以存放一组任意类型的数据
            // 1.使用赋值方式定义数组。语法：$数组名[键]=值
            // 索引数组，数组下标从0开始
            $arr[0]='李柏毅';
            $arr[1]=123;
            $arr[2]=3.14159;
            $arr[3]=true;
            $arr[4]=null;
            // 输出数组，使用print_r()或var_dump()。var_dump()的输出会更加详细
            print_r($arr);
            echo '<br>';
            var_dump($arr);
            echo '<br>';
            // 关联数组。键为字符串
            $arr2['id']=1;
            $arr2['name']='罗茂烽';
            $arr2['age']=16;
            $arr2['sex']='男';
            print_r($arr2);
            echo '<br>';
            // 2.使用array()函数定义数组。语法：$数组名=array(键1=>值1,键2=>值2,...)
            // 索引数组。可以省略键，直接写值
            $arr3=array(123,'hello','你好呀',43.35,true);
            print_r($arr3);
            echo '<br>';
            // 关联数组。键不可以省略
            $arr4=array('id'=>2,'name'=>'陈樾','age'=>16,'sex'=>'男');
            print_r($arr4);
            echo '<br>';
            // 3.数组的使用。获取数组元素：$数组名[键]或$数组名{键}
            // 获取第一个数组元素
            echo $arr3[0];
            echo '<br>';
            echo $arr4['name'];
            echo '<br>';
            // 获取索引数组的最后一个元素。索引值为数组长度-1
            echo $arr3{count($arr3)-1};
            echo '<br>';
            // 4.获取数组元素个数，即数组长度。语法：count(数组名);
            echo count($arr3);
            echo '<br>';
            // 5.添加或修改数组元素。语法；$数组名[键]=新的值
            // 如果该键本身就存在，则表示修改数组元素
            $arr4['sex']='女';
            print_r($arr4);
            echo '<br>';
            // 如果该键本身不存在，则表示添加数组元素
            $arr4['height']='176cm';
            $arr4['girl']='婷婷';
            print_r($arr4);
            echo '<br>';
            // 6.删除数组。语法：unset($数组名[键]) 或 unset($数组名)
            unset($arr4['girl']);
            print_r($arr4);
            echo '<br>';
            unset($arr4); //此处已把$arr4数组删除
            // print_r($arr4); //已经没有$arr4数组，所以会报错
            echo '<br>';
            // 7.数组遍历
            // 无键名遍历。语法：foreach($数组名 as 变量){循环体}
            foreach($arr3 as $v){
                echo $v;
                echo '<br>';
            }
            // 键值对遍历。语法：foreach($数组名 as 变量1=>变量2){循环体}。变量1为键，变量2为值
            foreach($arr3 as $k=>$v){
                echo $k;
                echo '=>';
                echo $v;
                echo '<br>';
            }
        ?>
    </body>
</html>