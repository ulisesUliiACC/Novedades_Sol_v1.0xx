<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('id_venta');
            $table->integer('cantidad_venta');
            $table->double('subtotal');
            $table->double('total');

            
            $table->foreignId('id_categoria')
            ->nullable()
            ->constraint('categorias')
            ->cascadeOnUpdate()
            ->nullOnDelete();

             
            $table->foreignId('id_clientes')
            ->nullable()
            ->constraint('clientes')
            ->cascadeOnUpdate()
            ->nullOnDelete();

             
            $table->foreignId('id_productos')
            ->nullable()
            ->constraint('productos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
