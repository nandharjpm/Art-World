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
        // 'user_login_id',
        // 'session_id',
        // 'user_identifier',
        // 'request_uri',
        // 'timestamp',
        // 'client_ip',
        // 'client_user_agent',
        // 'referer_page',
        // 'created_at',
        // 'updated_at'
        Schema::create('template_user_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('user_login_id')
            $table->timestamps();
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
