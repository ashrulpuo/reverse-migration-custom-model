<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBorangATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borang_a', function(Blueprint $table)
		{
			$table->integer('borand_a_id', true);
			$table->guid('orang_awam_id');
			$table->smallInteger('jenis_permohonan');
			$table->string('nombor_rujukan', 150)->nullable();
			$table->string('nama', 250)->nullable();
			$table->date('t_lahir')->nullable();
			$table->string('bahagian_pilihan_raya', 150)->nullable();
			$table->string('nombor_borang', 25);
			$table->string('alamat_1', 150);
			$table->string('alamat_2', 150);
			$table->string('alamat_3', 150)->nullable();
			$table->string('poskod', 5);
			$table->guid('bandar_id');
			$table->guid('negeri_id');
			$table->guid('jantina_id');
			$table->guid('bangsa_id')->nullable();
			$table->guid('agama_id');
			$table->string('nama_saksi', 250);
			$table->string('mykad_saksi', 25);
			$table->string('alamat_saksi_1', 150);
			$table->string('alamat_saksi_2', 150);
			$table->string('alamat_saksi_3', 150)->nullable();
			$table->string('poskod_saksi', 5);
			$table->guid('bandar_id_saksi');
			$table->guid('negeri_id_saksi');
			$table->string('myidentity_nama_saksi', 250)->nullable();
			$table->string('myidentity_alamat_saksi_1', 150)->nullable();
			$table->string('myidentity_alamat_saksi_2', 150)->nullable();
			$table->string('myidentity_alamat_saksi_3', 150)->nullable();
			$table->string('myidentity_poskod_saksi', 5)->nullable();
			$table->guid('myidentity_bandar_id_saksi')->nullable();
			$table->guid('myidentity_negeri_id_saksi')->nullable();
			$table->string('myidentity_nama', 250)->nullable();
			$table->date('myidentity_t_lahir')->nullable();
			$table->string('myidentity_alamat_1', 150)->nullable();
			$table->string('myidentity_alamat_2', 150)->nullable();
			$table->string('myidentity_alamat_3', 150)->nullable();
			$table->string('myidentity_poskod', 5)->nullable();
			$table->string('myidentity_bandar', 5)->nullable();
			$table->string('myidentity_negeri', 5)->nullable();
			$table->string('myidentity_jantina', 15)->nullable();
			$table->string('myidentity_bangsa', 15)->nullable();
			$table->string('myidentity_agama', 15)->nullable();
			$table->string('dpi_nama', 250)->nullable();
			$table->date('dpi_t_lahir')->nullable();
			$table->string('dpi_alamat_1', 150)->nullable();
			$table->string('dpi_alamat_2', 150)->nullable();
			$table->string('dpi_alamat_3', 150)->nullable();
			$table->string('dpi_poskod', 5)->nullable();
			$table->string('dpi_bandar', 50)->nullable();
			$table->string('dpi_negeri', 50)->nullable();
			$table->string('dpi_jantina', 50)->nullable();
			$table->string('dpi_bangsa', 50)->nullable();
			$table->string('dpi_agama', 50)->nullable();
			$table->string('dpi_lokaliti', 100)->nullable();
			$table->string('dpi_negeri_lokaliti', 100)->nullable();
			$table->string('dpi_daerah', 100)->nullable();
			$table->string('dpi_dun', 100)->nullable();
			$table->string('dpi_parlimen', 100)->nullable();
			$table->string('rang_nama', 250)->nullable();
			$table->date('rang_t_lahir')->nullable();
			$table->string('rang_agama_1', 150)->nullable();
			$table->string('rang_agama_2', 150)->nullable();
			$table->string('rang_agama_3', 150)->nullable();
			$table->string('rang_poskod', 5)->nullable();
			$table->string('rang_bandar', 50)->nullable();
			$table->string('rang_negeri', 50)->nullable();
			$table->string('rang_jantina', 50)->nullable();
			$table->string('rang_bangsa', 50)->nullable();
			$table->string('rang_agama', 50)->nullable();
			$table->string('rang_lokaliti', 100)->nullable();
			$table->string('rang_negeri_lokaliti', 100)->nullable();
			$table->string('rang_daerah', 100)->nullable();
			$table->string('rang_dun', 100)->nullable();
			$table->string('rang_parlimen', 100)->nullable();
			$table->string('transaksi_nama', 250)->nullable();
			$table->date('transaksi_t_lahir')->nullable();
			$table->string('transaksi_agama_1', 150)->nullable();
			$table->string('transaksi_agama_2', 150)->nullable();
			$table->string('transaksi_agama_3', 150)->nullable();
			$table->string('transaksi_poskod', 5)->nullable();
			$table->string('transaksi_bandar', 50)->nullable();
			$table->string('transaksi_negeri', 50)->nullable();
			$table->string('transaksi_jantina', 50)->nullable();
			$table->string('transaksi_bangsa', 50)->nullable();
			$table->string('transaksi_agama', 50)->nullable();
			$table->string('transaksi_lokaliti', 100)->nullable();
			$table->string('transaksi_daerah', 100)->nullable();
			$table->string('transaksi_dun', 100)->nullable();
			$table->string('transaksi_parlimen', 100)->nullable();
			$table->smallInteger('status');
			$table->dateTime('t_akhir_semak');
			$table->bigInteger('kunci_oleh')->nullable();
			$table->dateTime('kunci_pada')->nullable();
			$table->bigInteger('kiv_oleh')->nullable();
			$table->dateTime('kiv_pada')->nullable();
			$table->guid('kiv_alasan')->nullable();
			$table->string('kiv_keterangan', 500)->nullable();
			$table->bigInteger('sahkan_oleh')->nullable();
			$table->dateTime('sahkan_pada')->nullable();
			$table->guid('tolak_alasan')->nullable();
			$table->smallInteger('salin_saksi_nama');
			$table->smallInteger('salin_saksi_agama');
			$table->smallInteger('salin_nama');
			$table->smallInteger('salin_t_lahir');
			$table->smallInteger('salin_alamat');
			$table->smallInteger('salin_jantina');
			$table->smallInteger('salin_bangsa');
			$table->smallInteger('salin_agama');
			$table->guid('daftar_oleh');
			$table->dateTime('daftar_pada');
			$table->guid('kemaskini_oleh')->nullable();
			$table->dateTime('kemaskini_pada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('borang_a');
	}

}
