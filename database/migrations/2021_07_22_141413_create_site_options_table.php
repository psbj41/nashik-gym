<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSiteOptionsTable extends Migration
{
    private $copyrightText = "One More Rep</a> © 2021. All Rights Reserved.";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_options', function (Blueprint $table) {
            $table->id();
            $table->string('option_name')->default("");
            $table->longText('option_value')->nullable();
            $table->timestamps();
        });

        DB::table('site_options')->insert(
            [
                $this->buildOption("site_name", "One More Rep"),
                $this->buildOption("site_logo", null),
                $this->buildOption("site_description", null),
                $this->buildOption("copyright_text", $this->copyrightText),
                $this->buildOption("site_phone", "1234567890"),
                $this->buildOption("site_email", "admin@admin.com"),
                $this->buildOption("site_social_links", null),
                $this->buildOption("site_address", null),
                $this->buildOption("site_td", null),
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_options');
    }

    /**
     * @param string $option_name
     * @param $option_value
     * @return array
     */
    private function buildOption(string $option_name, $option_value):array{
        return [
            "option_name" => $option_name,
            "option_value" => $option_value
        ];
    }
}
