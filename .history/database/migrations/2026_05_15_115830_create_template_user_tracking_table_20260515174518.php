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
        Schema::create('template_user_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('user_login_id')->nullable();
            $table->string('session_id')->nullable();
            $table->string('user_ideuser_requested_urlntifier')->nullable();
            $table->string('request_uri')->nullable();
            $table->string('client_ip')->nullable();
            $table->string('client_user_agent')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_user_tracking');
    }
};
