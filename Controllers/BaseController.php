<?php
class BaseController{
    const VIEW_FOLDER_NAME = 'Views';
    /*
    *Description: 
    * + path name: foldername.fileName
    * + lấy đường dẫn từ sau thư mục View   
    */
    protected function view($viewPath){
        $viewPath = self::VIEW_FOLDER_NAME. '/' . str_replace('.','/',$viewPath) . '.php';
        return require_once ($viewPath);
    }
}
?>