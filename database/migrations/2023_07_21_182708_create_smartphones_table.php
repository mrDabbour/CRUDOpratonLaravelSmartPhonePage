<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Descriptor\Descriptor;

// المسار: database/migrations/2023_07_01_create_smartphones_table.php

// المسار: database/migrations/2023_07_01_create_smartphones_table.php

class CreateSmartphonesTable extends Migration
{
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->float('price');
            $table->integer('quantity'); // تم تغيير اسم العمود إلى quantity
            $table->text('description');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smartphones');
    }
}

