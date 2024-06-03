<?php

use App\Models\CMS\Category;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->uuid()->nullable();

            $table->string('title');
            $table->string('slug');
           
            $table->mediumText('excerpt')->nullable();
            $table->longText('content')->nullable();

            $table->json('options')->nullable();

            $table->foreignIdFor(Category::class)->index()->nullable()->constrained()->nullOnDelete();

            $table->foreignIdFor(User::class)->index()->nullable()->constrained()->nullOnDelete();//Author

            $table->boolean('active')->default(false);
            $table->dateTime('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
