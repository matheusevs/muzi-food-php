<?php 

class Controller {

    public function __construct()
    {
    }

    function prepareInsertQuery($data) {
        $fields = [];
        $values = [];
    
        foreach ($data as $key => $value) {
            if ($key === 'password') {
                $value = "sha1('" . addslashes($value) . "')";
            } else {
                $value = "'" . addslashes($value) . "'";
            }
    
            $fields[] = $key;
            $values[] = $value;
        }
    
        $fieldsString = implode(', ', $fields);
        $valuesString = implode(', ', $values);
    
        return [$fieldsString, $valuesString];
    }

}