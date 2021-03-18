<?php

// mục tiêu của File này là để sử lý database thực hiện các công việc như connect
class Database{

    // const HOST = 'sql200.epizy.com';

    // const USERNAME = 'epiz_28167160';

    // const PASSWORD = 'XqpanHfOst';

    // const DB_NAME = 'epiz_28167160_shop_electronic';

    const HOST = 'localhost';

    const USERNAME = 'root';

    const PASSWORD = '';

    const DB_NAME = 'electronic shop';
    

    public function connect(){
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);

        mysqli_set_charset($connect, "utf8");

		if (mysqli_connect_errno() === 0) {
            return $connect;
        }
        return false;
    }
}