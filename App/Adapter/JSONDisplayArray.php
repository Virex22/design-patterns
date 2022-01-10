<?php

declare(strict_types=1);

namespace App\Adapter;

include_once(__DIR__ . "\\..\\..\\autoload.php");
class JSONDisplayArray
{

    private $_array;
    private $_JSONstring;

    public function setData(array $DataTodisplay)
    {
        $this->_array = $DataTodisplay;
    }

    public function prepare()
    {
        $this->_JSONstring = json_encode($this->_array);
    }

    public function show()
    {
        echo $this->_JSONstring;
    }
}
