<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->comment('Most common positions Table');
            $table->bigIncrements('id');
            $table->string('acronym')->nullable(true);
            $table->string('name')->nullable(false);
            $table->string('slug')->nullable(true);
            $table->text('description')->nullable(false);
            $table->boolean('isActive')->default(false);
            $table->dateTime('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->softDeletes('deleted_at')->nullable(true)->default((\DB::raw('NULL')));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
};
