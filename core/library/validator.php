<?php
// Файл хранит информаию о валидации форм
// Создаем правило


// 1. Проверяем на заполненость поля
    
    function required($data){
    	return empty($data);
    } 

    function email($data){
    	return false;
    }

    function password(){
    	return false;
    }

    function login(){
        return false;
    }

    function validateForm($dataWithRules, $data){
    	$formErrors = [];
    	$fields = array_keys($dataWithRules);
    	
    	foreach($fields as $fieldName){
    		$fieldData = $data[$fieldName];
    		$rules = $dataWithRules[$fieldName];
    		foreach($rules as $ruleName) {
    			if(!$ruleName($fieldData)){
    				$formErrors[$fieldName][] = $ruleName;
    			}
    		}
    	}

    	return $formErrors;
    }

// Проверяем валидацию
    
      