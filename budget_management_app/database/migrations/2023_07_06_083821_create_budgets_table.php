<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Period;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->boolean('direction');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Category::class, 'category_id');
            $table->boolean('periodic');
            $table->timestamp('start_date')->nullable();
            $table->foreignIdFor(Period::class, 'period_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
