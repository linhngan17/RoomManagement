<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 7/4/2018
 * Time: 2:42 PM
 */

require PATH_SYSTEM . '/core/Model.php';

class Admin extends Model {
    public $pk = 'id_user';
    public $tblName = 'users';
    public $tblName2 = 'register';
    public $tblName3 = 'room';

    public function getAdmin() {
        $users = $this->selectCondition();

        return $users;
    }


}

?>