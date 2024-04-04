<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_type')->nullable();
            $table->string('price')->nullable();
            $table->foreignIdFor(User::class)
            ->constrained()
           ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('transaction_id')->nullable();
            $table->integer('membership_id')->nullable();
            $table->integer('announcement_id')->nullable();
            $table->string('transaction_ref')->nullable();
            $table->string('payment_of')->nullable();
            $table->string("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
