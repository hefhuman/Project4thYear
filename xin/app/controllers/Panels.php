<?php 
class Panels extends Controller {

    public function __construct() {

    }

    public function add(){

        $data = [
            'title' => 'Add'
        ];

        $this->view('panel/add', $data)
    }
}
?>