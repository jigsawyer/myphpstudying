<?php
 /**
 * Myproject
 *
 * @category  Myproject
 * @package   Myproject_Db
 * @author    Andrii Khovaiev <ankho@smile.fr>
 * @copyright 2014 Smile
 */
class dbConnection
{
    const host = "localhost";
    const user = "root";
    const db = "redoctober";


    public function connect()
    {
        $mysqli = mysqli_init();
        if (!$mysqli) {
            die('mysqli_init завершилась провалом');
        }

        if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
            die('Установка MYSQLI_INIT_COMMAND завершилась провалом');
        }

        if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
            die('Установка MYSQLI_OPT_CONNECT_TIMEOUT завершилась провалом');
        }

        if (!$mysqli->real_connect(dbConnection::host , dbConnection::user, '', dbConnection::db)) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }

        echo 'Выполнено... ' . $mysqli->host_info . "\n";
        return $mysqli;
    }

    public function closeConnect($connection)
    {
        mysqli_close($connection);
    }
}