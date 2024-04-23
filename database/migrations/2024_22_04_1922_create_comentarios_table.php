<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id("comentrio_id");
            $table->text("contenido");
            $table->timestamp("fecha_comentario");
            $table->bigInteger("publicacion_id")->notnullable()->unsigned();
            $table->foreign("publicacion_id")->references("publicacion_id")->on("publicaciones")->onDelete("cascade");
            $table->bigInteger("usuarios_id")->notnullable()->unsigned();
            $table->foreign("usuarios_id")->references("usuario_id")->on("usuarios")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
