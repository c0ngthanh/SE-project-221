<?php
class BaseController{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    /*
    *Description: 
    * + path name: foldername.fileName
    * + lấy đường dẫn từ sau thư mục View   
    */
    protected function view($viewPath, array $data =[]){
        foreach($data as $key => $item)
        {
            $$key = $item;
        }
        return require_once (self::VIEW_FOLDER_NAME. '/' . str_replace('.','/',$viewPath) . '.php');
    }

    protected function loadModel($modelPath){
        return require_once (self::MODEL_FOLDER_NAME. '/' . $modelPath . '.php');
    }
}
?>