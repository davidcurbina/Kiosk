<?php
class Record{
  public static function CreateRecord($record){
    $record = json_decode($record);
    $emp_id = Database::escape_data($record->emp_id);
    $type = Database::escape_data($record->type);
    $action = Database::escape_data($record->action);
    $timestamp = Database::escape_data($record->timeStamp);
    $formatted = date('Y-m-d H:i:s', intval($timestamp) / 1000);
    
    if($exists = Database::select("Select * from employees where id =".$emp_id)){
      if($action  == "in"){
        if(Database::modify("Insert into records (emp_id,type,check_in) Values (".$emp_id.",'".$type."','".$formatted."');")){
            echo "Success";
        } else{
            echo "Error: Insert data failed";
        }
      }else {
        if(Database::modify("update records set check_out='".$timestamp."' where emp_id =".$emp_id." and check_out is null")){
            echo "Success";
        } else{
            echo "Error: Insert data failed";
        }
      }
        //echo "Insert into records (emp_id,type,check_in) Values (".$emp_id.",'".$type."','".$date."');";
    } else {
        echo "Employee not found";
    }
  }
}
?>