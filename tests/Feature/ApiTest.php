<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_endpoint_not_found(){
        $response = $this->json('GET', '/api/dasdwasdawsda/UdawdsSD');
        $response->assertStatus(404);
    }

    public function test_exchange_rates(){
        $response = $this->json('GET', '/api/exchange-rates');
        $response->assertStatus(200);
    }

    public function test_exchange_rate_currency(){
        $response = $this->json('GET', '/api/exchange-rate/USD');
        $response->assertStatus(200);
    }

    public function test_exchange_rate_currency_not_found(){
        $response = $this->json('GET', '/api/exchange-rate/UdawdsSD');
        $response->assertStatus(404);
    }

    public function test_company_alerts(){
        $response = $this->json('GET', '/api/company-alerts');
        $response->assertStatus(200);
    }

    public function test_company_alerts_search_query_found(){
        $response = $this->json('GET', '/api/company-alerts/sdn');
        $response->assertStatus(200);
    }

    public function test_company_alerts_search_query_not_found(){
        $response = $this->json('GET', '/api/company-alerts/irsyad');
        $response->assertStatus(200);
    }

    public function test_base_rates(){
        $response = $this->json('GET', '/api/base-rate');
        $response->assertStatus(200);
    }

    public function test_base_rates_bank_code_found(){
        $response = $this->json('GET', '/api/base-rate/AIBBMYKL');
        $response->assertStatus(200);
    }

    public function test_base_rates_bank_code_not_found(){
        $response = $this->json('GET', '/api/base-rate/irsyad');
        $response->assertStatus(404);
    }
}
