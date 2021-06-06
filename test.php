<?php

   echo '六月的小孩';
   $arr =array(
       'name'=>'六月的小孩',
       'age'=>18,
       'sex'=>'男孩'
   );
   foreach ($arr as $key => $value) {
       echo $value['name'].'今年'.$value['age'].'是个'.$value['sex'];
   }


   echo '我是你爹';
   return;