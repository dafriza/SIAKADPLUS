<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_default()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/default');

        $response->assertStatus(200);
    }
    public function test_dataTable()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/dataTable');

        $response->assertStatus(200);
    }
    public function test_dataCourse()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/dataCourse');

        $response->assertStatus(200);
    }
    public function test_dataAdmin()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/dataAdmin');

        $response->assertStatus(200);
    }
    public function test_dataChartPie()
    {
        $response = $this->get('/admin/dataChartPie');
        // $response->ddHeaders();

        // $response->ddSession();

        // $response->dd();
        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
        // $response->assertJson(array response, $strict = false);
        $response->assertStatus(200)->assertJson([], $strict = false);
    }
    public function test_dataChartBar()
    {
        $response = $this->get('/admin/dataChartBar');
        // $response->ddHeaders();

        // $response->ddSession();

        // $response->dd();
        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
        // $response->assertJson(array response, $strict = false);
        $response->assertStatus(200)->assertJson([], $strict = false);
    }
    public function test_getCourse()
    {
        $response = $this->get('/admin/getCourse');
        // $response->ddHeaders();

        // $response->ddSession();

        // $response->dd();
        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
        // $response->assertJson(array response, $strict = false);
        $response->assertStatus(200)->assertJson([], $strict = false);
    }
    public function test_getDomisili()
    {
        $response = $this->get('/admin/getDomisili');
        // $response->ddHeaders();

        // $response->ddSession();

        // $response->dd();
        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
        // $response->assertJson(array response, $strict = false);
        $response->assertStatus(200)->assertJson([], $strict = false);
    }
    public function test_editForm()
    {
        // $data = \App\Models\mahasiswa::find(1);
        // echo $data;
        $response = $this->withSession(['admin' => false])->get('/admin/editForm');

        $response->assertStatus(200);
    }
    public function test_updateForm()
    {
        $response = $this->post('/admin/updateForm');
        $response->assertStatus(200);
    }
    // create test_delForm with session admin
    public function test_delForm()
    {
        $response = $this->get('/admin/delForm');

        $response->assertStatus(200);
    }
    // create test_createForm with session admin
    public function test_createForm()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/createForm');

        $response->assertStatus(200);
    }
    // create test_insertForm method post
    public function test_insertForm()
    {
        $response = $this->post('/admin/insertForm');
        $response->assertStatus(200);
    }
}
