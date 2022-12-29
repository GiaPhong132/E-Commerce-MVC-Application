<?php
class BaseController
{
    protected $folder;

    function render($file, $data = array())
    {
        $view_file = 'views/admin/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('/xampp/htdocs/Source_code/views/admin/basic_layouts.php');
        } else {
            header('Location: index.php?page=admin&controller=layouts&action=error');
        }
    }
}
