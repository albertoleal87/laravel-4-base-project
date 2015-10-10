<?php

class SettingsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('settings')->truncate();

		$settings = array(
			array('key'=>'app.name','value'=>'MyApp','description'=>'Nombre de la aplicación'),
			array('key'=>'app.debug','value'=>'true','description'=>'Modo debug (debe ser "true" para que esté habilitado) '),
			array('key'=>'app.log_in_console','value'=>'true','description'=>'Muestra en consola lo que se imprime en el archivo de log (debe ser "true" para que esté habilitado)'),
			array('key'=>'database.log_query','value'=>'true','description'=>'Guarda en el log los querys que se ejecutan en base de datos (debe ser "true" para que esté habilitado)'),
			array('key'=>'app.locale','value'=>'es','description'=>'Lenguaje'),
		);

		// Uncomment the below to run the seeder
		DB::table('settings')->insert($settings);
	}

}
