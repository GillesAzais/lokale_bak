<?php

class Loader
{
    private static $instance = null;
    private $_model_path = 'model/entities/';

    private $_controller_path = 'controller/controllers/';

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function getController($controllerName)
    {
        $controllerFile = $this->_getFile($controllerName, $this->_controller_path);

        require_once($controllerFile);

        return new $controllerName();
    }

    public function getModelMapper($modelName)
    {
        $modelName = ucfirst($modelName);
        $modelMapper = $modelName . 'Mapper';
        $modelFile = $this->_getFile($modelName, $this->_model_path);


        $modelMapperFile = $this->_getFile($modelMapper, $this->_model_path);

        require_once($modelFile);
        require_once($modelMapperFile);
        try {
            return new $modelMapper();
        } catch (Exception $e) {
            exit;
        }
    }

    private function _getFile($name, $path)
    {
        $file = $path . $this->_addExtension($name);

        if (file_exists($file)) {
            return $file;
        } else {
            error_log("File not found: $file");
            exit;
        }
    }

    private function _addExtension($filename)
    {
        return (substr($filename, -4) == '.php') ? $filename : $filename . '.php';
    }
} 