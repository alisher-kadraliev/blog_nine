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
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id')->nullable()->after('category_id');

            $table->index('tag_id', 'post_tag_idx');
            $table->foreign('tag_id', 'post_tag_fk')->on('tags')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {

                $table->dropForeign('post_tag_fk');
                $table->dropIndex('post_tag_idx');
                $table->dropColumn('tag_id');
        });
    }
};
