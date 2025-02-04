<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->default('');
            $table->string('sku')->default('');
            $table->string('unidade_medida_id') -> index();
            $table->decimal('valor');
            $table->bigInteger('categoria_id');
            $table->timestamps();
            $table->softDeletes();
    }
);
    }

};