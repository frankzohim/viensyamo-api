<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Town;
use App\Models\Quarter;
use App\Models\AnnouncementCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(Town::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

             $table->foreignIdFor(Quarter::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->foreignIdFor(AnnouncementCategory::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->boolean('status')->default(1);
            $table->boolean('isSubscribe')->default(0);
            $table->boolean('gender');
            $table->integer('age');
            $table->string('whatsapp');
            $table->string('slug');
            $table->string('title');
            $table->integer('subscribe_id')->default(0);
            $table->longText('description');
            $table->string('accepted')->default('Hommes');
            $table->string('location')->default('Reçoit ou se déplace');
            $table->string('video_path')->nullable()->default(null);
            $table->timestamp('expire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
