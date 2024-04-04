<?php

use App\Models\Announcement;
use App\Models\User;
use App\Models\Payment;
use App\Models\Membership;
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
        Schema::create('memberships_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
            ->constrained()
           ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignIdFor(Membership::class)
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignIdFor(Payment::class)
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignIdFor(Announcement::class)
            ->constrained()
           ->onUpdate('cascade')
             ->onDelete('cascade');
            $table->timestamp('expire_at');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships_users');
    }
};
