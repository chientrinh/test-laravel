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
        Schema::create('matches', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('competition_id');
            $table->string('home_team_id');
            $table->string('away_team_id');
            $table->unsignedTinyInteger('status_id');
            $table->unsignedBigInteger('match_time');
            $table->json('home_scores');
            $table->json('away_scores');

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
            $table->foreign('home_team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('away_team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign(['competition_id']);
            $table->dropForeign(['home_team_id']);
            $table->dropForeign(['away_team_id']);
        });
        Schema::dropIfExists('matches');
    }
};
