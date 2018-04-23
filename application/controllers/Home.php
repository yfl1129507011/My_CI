<?php
/**
 * Created by PhpStorm.
 * User: hylanda69874
 * Date: 2018/4/23
 * Time: 15:17
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    private $allowMethod = array(
        'add','del','update','search'
    );

    public function index(){
        $this->load->model('user_model');
        $this->user_model->insert_entry();
    }

    public function _remap($method){
        if(in_array($method, $this->allowMethod)){
            $method = 'home_'.$method;
            if(method_exists($this,$method)) {
                return $this->$method();
            }
            show_404();
        }else{
            $this->index();
        }
    }

    private function home_add(){
        $this->load->database();
        var_dump($this->db);
        echo 'add';
    }

    private function home_del(){
        echo 'del';
    }

    private function home_update(){
        echo 'update';
    }

    private function home_search(){
        echo 'search';
    }
}