<?php
class Model
{
    public $db = "";
    public function __construct()
    {

        $this->db = new mysqli("localhost", "root", "", "ketul_mvc");
        if ($this->db) {
            echo "Database connected";
        }
    }
    public function join_two($table1, $table2, $condition)
    {
        $join = "SELECT * from `$table1` INNER JOIN `$table2` ON $condition ";
        $ex   = $this->db->query($join);
        //$fe = mysqli_fetch_object($ex);
        while ($res = mysqli_fetch_object($ex)) {
            $r[] = $res;
        }
        return $r;
    }

    public function join_three($table1, $table2,$table3, $condition,$condition2)
    {
        $join = "SELECT * from `$table1` INNER JOIN `$table2` ON $condition INNER JOIN `$table3` ON $condition2";
        $ex   = $this->db->query($join);
        //$fe = mysqli_fetch_object($ex);
        while ($res = mysqli_fetch_object($ex)) {
            $r[] = $res;
        }
        return $r;
    }

      public function join_three_where($table1, $table2,$table3, $condition,$condition2,$where)
    {
        $wcondition = "";
        foreach ($where as $key => $value) {
            $wcondition = $wcondition . "`$key` = '$value' and";
        }
        //echo $condition;
        $wcondition = rtrim($wcondition, 'and');

        $join = "SELECT * from `$table1` INNER JOIN `$table2` ON $condition INNER JOIN `$table3` ON $condition2 WHERE  $wcondition";

        $ex   = $this->db->query($join);
        //$fe = mysqli_fetch_object($ex);
        while ($res = mysqli_fetch_object($ex)) {
            $r[] = $res;
        }
        return $r;
    }





    
    public function insert($table, array $data)
    {
        //$data = json_decode($json_data, true);
        //print_r($data); exit();
        $k    = array_keys($data);
        $keys = implode("`,`", $k);
        $v    = array_values($data);
        //print_r($v);
        $val  = implode("','", $v);
        //print_r($val);
        $sql  = "INSERT INTO `$table` (`$keys`) values ('$val')";
        $ex   = $this->db->query($sql);
        return $ex;
    }
    public function select_all($table)
    {
        $sql = "select * from `$table`";
        $ex  = $this->db->query($sql);
        //$r = mysqli_fetch_object($ex);
        //print_r($r); die();
        while ($res = mysqli_fetch_object($ex)) {
            $r[] = $res;
        }
        //print_r($r);
        return $r;
    }
    public function select_where($table, $where)
    {
        $condition = "";
        foreach ($where as $key => $value) {
            $condition = $condition . "`$key` = '$value' and";
        }
        //echo $condition;
        $condition = rtrim($condition, 'and');
        //why we are using rtim show the students
        // echo $condition;
        $sql       = "SELECT * FROM $table WHERE $condition";
        // echo $sql; exit();
        $execute   = $this->db->query($sql);

        
        while ($res = mysqli_fetch_object($execute)) {
            
            $r[] = $res;
        }
        //print_r($r); exit();
        return $r;
    }
    public function delete($table, $where)
    {
        //print_r ($where);
        //print_r  ("DELETE FROM `$table` WHERE `$where`"); 
        $condition = "";
        foreach ($where as $key => $value) {
            $condition = $condition . "`$key` = '$value'";
        }
        //echo $condition;
        $sql = "DELETE FROM $table WHERE $condition";
        $sql;
        $execute = $this->db->query($sql);
        return $execute;
    }
    public function update_record($table, $data, $where)
    {
        $where_id = "";
        foreach ($where as $key => $value) {
            $where_id = $where_id . "`$key` = '$value' AND";
        }
                $where_id = rtrim($where_id, 'AND');
        $condition = "";
        foreach ($data as $key => $value) {
            $condition = $condition . "`$key` = '$value' ,";
        }
        $condition = rtrim($condition, ',');
        $update    = "UPDATE `$table` SET $condition WHERE $where_id";
        //echo  $update; die(); 
        $ex        = $this->db->query($update);
        return $ex;
    }
}
?>