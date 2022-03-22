<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string( "name" );
            $table->string( "type" );
            $table->integer( "price" );
            //$table->timestamps();
        });
    
    DB::table("perfumes")->insert(
    [
    [
        "name"=> "Adidas",
        "type"=>"dezodor",
        "price" => 1000,
    ],
    [
        "name"=> "Axe",
        "type"=>"dezodor",
        "price" => 900,
    ],
    [
        "name"=> "Oldspice",
        "type"=>"izadásgátló",
        "price" => 1200,
    ],
    [
        "name"=> "Aramis",
        "type"=>"parfüm",
        "price" => 1500,
    ],
    [
        "name"=> "Biotherm",
        "type"=>"dezodor",
        "price" => 1400
    ]
    ]);
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfumes');
    }
}
