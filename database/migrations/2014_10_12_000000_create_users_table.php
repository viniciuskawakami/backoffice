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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->comment('Common centralized User Table');
            $table->uuid('id')->nullable(false)->unique();
            $table->string('aka_name',100);
            $table->string('first_name',100);
            $table->string('middle_name',100);
            $table->string('social_name',256);
            $table->string('surname',100);
            $table->string('avatar',250);
            $table->date('date_of_birth',);
            $table->string('mobile',15)->nullable(false)->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table ->boolean('accept_SMS')->default(false);
            $table->boolean('isActive')->default(false);
            $table->boolean('isDeleted')->default(false);
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('password');
            $table->ipAddress('last_login_from')->nullable(true);
            $table->timestamp('las_login_at')->nullable(true);
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
        Schema::dropIfExists('users');
    }
};
