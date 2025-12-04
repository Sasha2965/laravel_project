<?php

use App\Enums\ServiceTypeEnum as ServiceTypeEnum;
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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title', length: 150);
            $table->text(column: 'description')->nullable();
            $table->integer(column: 'price');
            $table->unsignedTinyInteger('type')->default(ServiceTypeEnum::Test->value);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
