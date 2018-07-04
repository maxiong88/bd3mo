<?php

$arr = array(
    'code' => 1,
    'msg' => '成功',
    'data' => array(
        array(
            'id' => 1000,
            'username' => '我是第一个哦',
            'avatar' => './static/img/valkyrie/val02@2x.png',
            'content' => 'N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，
            我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，
            想去哪里自己决定 And我的行程里一般没有景...',
            'time' => '1524985630308',
            'good' => 300,
            'bad' => 200,
            'comment' => array(
                array(
                    'id' => 10001,
                    'username' => '我才是第一个第一名',
                    'avatar' => './static/img/valkyrie/val02@2x.png',
                    'content' => 'N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，
                    我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，
                    想去哪里自己决定 And我的行程里一般没有景...',
                    'time' => '1524985630308',
                ),
                array(
                    'id' => 10002,
                    'username' => '我才是第一个第二名',
                    'avatar' => './static/img/valkyrie/val02@2x.png',
                    'content' => 'N次 泰国 自由行，再加 泰国 待了一年，所以 泰国 基本逛遍了～ 不管去哪，
                    我一般都会选择自由行，因为时间自由，不需要体验到此一游的游客体验，
                    想去哪里自己决定 And我的行程里一般没有景...',
                    'time' => '1524985630308',
                )
            )
        )
    )
);
echo json_encode($arr);
?>