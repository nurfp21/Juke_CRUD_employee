<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    private $api = 'http://localhost:8080/index.php/api/employee';

    public function index() {
        $json = file_get_contents($this->api);
        $data['employees'] = json_decode($json, true);
        $this->load->view('employee/index', $data);
    }

    public function create() {
        $this->load->view('employee/create');
    }

    public function store() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position'),
            'salary' => $this->input->post('salary')
            
        ];

        $this->send('POST', $this->api, $data);
        redirect('employee');
    }

    public function edit($id) {
        $json = file_get_contents($this->api.'/'.$id);
        $data['employee'] = json_decode($json, true);
        $this->load->view('employee/edit', $data);
    }

    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position'),
            'salary' => $this->input->post('salary')
        ];

        $this->send('PUT', $this->api.'/'.$id, $data);
        redirect('employee');
    }

    public function delete($id) {
        $this->send('DELETE', $this->api.'/'.$id);
        redirect('employee');
    }

    private function send($method, $url, $data = null) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
}
?>