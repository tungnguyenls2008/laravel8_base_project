<?php
function buildSqlInsertMultiple($table, $arrInput)
{
    if (!empty($arrInput)) {
        $arrSql = array();
        $arrField = isset($arrInput[0]) ? array_keys($arrInput[0]) : [];
        if (empty($arrField))
            return '';

        foreach ($arrInput as $k => $row) {
            $strVals = '';
            foreach ($row as $field => $valu) {
                $strVals .= "'" . trim($valu) . '\',';
            }
            if ($strVals != '')
                $strVals = rtrim($strVals, ',');
            if ($strVals != '')
                $arrSql[] = '(' . $strVals . ')';
        }

        $fields = implode(',', $arrField);
        if (!empty($arrSql)) {
            $query = 'INSERT INTO `' . $table . '` (' . $fields . ') VALUES ' . implode(',', $arrSql);
            return $query;
        }
    }
    return '';
}
