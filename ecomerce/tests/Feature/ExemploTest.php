<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BancoDeDadosTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste básico de exemplo para verificar a inserção de dados no banco de dados.
     *
     * @return void
     */
    public function testInsercaoDeDados()
    {
        // Insere um registro no banco de dados
        DB::table('cupom')->insert([
            'nome' => 'Valor1',
        ]);

        // Verifica se o registro foi inserido corretamente
        $this->assertDatabaseHas('cupom', [
            'nome' => 'Valor1',
        ]);
    }

    public function testInsercaoDeDados2()
    {
        // Insere um registro no banco de dados
        DB::table('produto')->insert([
            'nome' => 'Valor1',
            'descricao' => 'Valor2',
            'valor' => 'Valor3',
        ]);

        // Verifica se o registro foi inserido corretamente
        $this->assertDatabaseHas('cupom', [
            'nome' => 'Valor1',
            'descricao' => 'Valor2',
            'valor' => 'Valor3',
        ]);
    }


    use RefreshDatabase;

    /**
     * Teste para adicionar um produto ao carrinho de compras.
     *
     * @return void
     */
    public function testAdicionarProdutoAoCarrinho()
    {
        $response = $this->post('/carrinho/adicionar-item', [
            'produto' => 1,
            'quantidade' => 2,
        ]);

        $response->assertStatus(200);
    }
}
