<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model {

    public  function  getDataResource($request, $flgEncode = true) {
        $fields = $this->fillable;
        $data = array();
        if(!empty($fields)) {
            foreach($fields as $field) {
                if($request::exists($field)) {
                    $data[$field] = ($flgEncode) ? urldecode($request::get($field)) : $request::get($field);
                }
            }
        }
        return $data;
    }

    public function getDataArray($aryData = array(), $flgEncode = true) {
        $fields = $this->fillable;
        if(empty($fields) && empty($aryData)) {
            return array();
        }
        $data = array();
        if(is_array($fields)) {
            foreach($fields as $field) {
                if(isset($aryData->$field)) {
                    $data[$field] = ($flgEncode) ? urldecode($aryData->$field) : $aryData->$field;
                }
            }
        }
        return $data;
    }

    function checkFieldInTable($dataInput = [])
    {
        $dataDB = array();
        if (empty($dataInput) && empty($this->fillable))
            return $dataDB;

        if (!empty($this->fillable)) {
            foreach ($this->fillable as $field) {
                if(isset($dataInput[$field])) {
                    $dataDB[$field] = $dataInput[$field];
                }
            }
        }

        return $dataDB;
    }

    public function getFieldsSearch($dataSearch = array()){
        $fields = array();
        if(isset($dataSearch['field_get'])){
            if(is_array($dataSearch['field_get'])){
                $fields = $dataSearch['field_get'];
            }else{
                $fields = (trim($dataSearch['field_get']) != '') ? explode(',', trim($dataSearch['field_get'])) : array();
            }
        }
        return $fields;
    }

    public function getTotalCount($objQuery){
        return $objQuery->get([$this->primaryKey])->count();
    }





    public function getStatisticData($condition){
        $group_by = trim($condition['group_by']);
        $_query = [];
        $_query[] = $group_by;
        $_query[] = 'COUNT('.$group_by.') AS total';
        if (!empty($condition['statistic'])):
            foreach ($condition['statistic'] as $function => $fields):
                foreach ($fields as $field => $alias):
                    $_query[] = $function.'('.$field.') AS '.$alias;
                endforeach;
            endforeach;
        endif;

        $_query = self::selectRaw(implode(',', $_query))->groupBy($group_by);

        if (!empty($condition['condition'])):
            foreach ($condition['condition'] as $field => $value):
                $_query->where($field, $value);
            endforeach;
        endif;

        return $_query->get()->keyBy($group_by)->toArray();
    }


    public function insertMultiple($dataInput){
        $fieldInput = [];
        foreach ($dataInput as $k =>$data_va){
            $fieldInput[] = $this->checkFieldInTable($data_va);
        }

        if(empty($fieldInput))
            return true;

        $str_sql = buildSqlInsertMultiple($this->table, $fieldInput);
        if(trim($str_sql) != ''){
            if(DB::statement($str_sql)){
                return true;
            }else{
                return false;
            }
        }
        return false;
    }

}
