<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAccountToTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('transactions', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('account_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('account_id')->references('id')->on('accounts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('transactions', function (Blueprint $table) {

            # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('books_account_id_foreign');

            $table->dropColumn('account_id');
        });
    }
}
