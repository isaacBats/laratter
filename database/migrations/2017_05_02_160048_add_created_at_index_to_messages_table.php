<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            // Si queremos hacer un indice compuesto
            // $table->index(['created_at', 'updated_at']);
            // Si queremos ponerle nombre aa nuestro indice
            // $table->index('column_name', 'index_name');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            
            // para el nombre del index creado se forma de la ssiguiente manera
            // tablename_columnname_index
            $table->dropIndex('messages_created_at_index');
        });
    }
}
