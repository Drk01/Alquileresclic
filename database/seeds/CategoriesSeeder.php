<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Inmuebles']);
        Category::create(['name' => 'Animales']);
        Category::create(['name' => 'Transporte']);
        Category::create(['name' => 'Ropa']);
        Category::create(['name' => 'Maquinaria']);
        Category::create(['name' => 'Deportes']);
        Category::create(['name' => 'Eventos']);
        Category::create(['name' => 'Oficina']);
        Category::create(['name' => 'Publicidad']);
        Category::create(['name' => 'Otros']);

        //Inmuebles:
        Category::create(['name' => 'Apartamentos', 'parent_id' => 1]);
        Category::create(['name' => 'Parqueaderos', 'parent_id' => 1]);
        Category::create(['name' => 'Habitaciones', 'parent_id' => 1]);
        Category::create(['name' => 'Camping', 'parent_id' => 1]);
        Category::create(['name' => 'Cabañas', 'parent_id' => 1]);
        Category::create(['name' => 'Bodegas', 'parent_id' => 1]);
        Category::create(['name' => 'Salones', 'parent_id' => 1]);
        Category::create(['name' => 'Oficinas', 'parent_id' => 1]);
        Category::create(['name' => 'Locales', 'parent_id' => 1]);
        Category::create(['name' => 'Fincas', 'parent_id' => 1]);
        Category::create(['name' => 'Casas', 'parent_id' => 1]);
        Category::create(['name' => 'Lotes', 'parent_id' => 1]);
        Category::create(['name' => 'Otros', 'parent_id' => 1]);

        //Animales:
        Category::create(['name' => 'Guacales', 'parent_id' => 2]);
        Category::create(['name' => 'Caballos', 'parent_id' => 2]);
        Category::create(['name' => 'Granjas', 'parent_id' => 2]);
        Category::create(['name' => 'Perros', 'parent_id' => 2]);
        Category::create(['name' => 'Toros', 'parent_id' => 2]);
        Category::create(['name' => 'Otros', 'parent_id' => 2]);

        //Transporte:
        Category::create(['name' => 'Carros antiguos', 'parent_id' => 3]);
        Category::create(['name' => 'Helicopteros', 'parent_id' => 3]);
        Category::create(['name' => 'Cuatrimotos', 'parent_id' => 3]);
        Category::create(['name' => 'Yates Botes', 'parent_id' => 3]);
        Category::create(['name' => 'Limusinas', 'parent_id' => 3]);
        Category::create(['name' => 'Bicicletas', 'parent_id' => 3]);
        Category::create(['name' => 'Aviones', 'parent_id' => 3]);
        Category::create(['name' => 'Carros', 'parent_id' => 3]);
        Category::create(['name' => 'Motos', 'parent_id' => 3]);
        Category::create(['name' => 'Otros', 'parent_id' => 3]);

        //Ropa:
        Category::create(['name' => 'Uniformes', 'parent_id' => 4]);
        Category::create(['name' => 'Disfraces', 'parent_id' => 4]);
        Category::create(['name' => 'Smoking', 'parent_id' => 4]);
        Category::create(['name' => 'Vestidos', 'parent_id' => 4]);
        Category::create(['name' => 'Otros', 'parent_id' => 4]);

        //Maquinaria:
        Category::create(['name' => 'Retroexcavadoras', 'parent_id' => 5]);
        Category::create(['name' => 'Plantas Eléctricas', 'parent_id' => 5]);
        Category::create(['name' => 'Montacargas', 'parent_id' => 5]);
        Category::create(['name' => 'Excavadoras', 'parent_id' => 5]);
        Category::create(['name' => 'Aplanadoras', 'parent_id' => 5]);
        Category::create(['name' => 'Andamios', 'parent_id' => 5]);
        Category::create(['name' => 'Volquetas', 'parent_id' => 5]);
        Category::create(['name' => 'Taladros', 'parent_id' => 5]);
        Category::create(['name' => 'Martillos', 'parent_id' => 5]);
        Category::create(['name' => 'Gruas', 'parent_id' => 5]);
        Category::create(['name' => 'Otros', 'parent_id' => 5]);

        //Deportes:
        Category::create(['name' => 'Elementos Deportivos', 'parent_id' => 6]);
        Category::create(['name' => 'Canchas de Fútbol', 'parent_id' => 6]);
        Category::create(['name' => 'Mesa de Pingpong', 'parent_id' => 6]);
        Category::create(['name' => 'Canchas de tenis', 'parent_id' => 6]);
        Category::create(['name' => 'Canchas de Tejo', 'parent_id' => 6]);
        Category::create(['name' => 'Otras canchas', 'parent_id' => 6]);
        Category::create(['name' => 'Otros', 'parent_id' => 6]);

        //Eventos:
        Category::create(['name' => 'Mobiliario', 'parent_id' => 7]);
        Category::create(['name' => 'Inflables', 'parent_id' => 7]);
        Category::create(['name' => 'Tarimas', 'parent_id' => 7]);
        Category::create(['name' => 'Carpas', 'parent_id' => 7]);
        Category::create(['name' => 'Sonido', 'parent_id' => 7]);
        Category::create(['name' => 'Luces', 'parent_id' => 7]);
        Category::create(['name' => 'Sillas', 'parent_id' => 7]);
        Category::create(['name' => 'Otros', 'parent_id' => 7]);

        //Oficina:
        Category::create(['name' => 'Computadoras', 'parent_id' => 8]);
        Category::create(['name' => 'Walkie Talkies', 'parent_id' => 8]);
        Category::create(['name' => 'Video Beam', 'parent_id' => 8]);
        Category::create(['name' => 'Televisores', 'parent_id' => 8]);
        Category::create(['name' => 'Impresoras', 'parent_id' => 8]);
        Category::create(['name' => 'Servidores', 'parent_id' => 8]);
        Category::create(['name' => 'Escritorios', 'parent_id' => 8]);
        Category::create(['name' => 'Teléfonos', 'parent_id' => 8]);
        Category::create(['name' => 'Tableros', 'parent_id' => 8]);
        Category::create(['name' => 'Sillas', 'parent_id' => 8]);
        Category::create(['name' => 'Otros', 'parent_id' => 8]);

        //Publicidad:
        Category::create(['name' => 'Carro Valla', 'parent_id' => 9]);
        Category::create(['name' => 'Moto Valla', 'parent_id' => 9]);
        Category::create(['name' => 'Vallas', 'parent_id' => 9]);
        Category::create(['name' => 'Otros', 'parent_id' => 9]);

        //Otros:
        Category::create(['name' => 'Estudio de Grabación', 'parent_id' => 10]);
        Category::create(['name' => 'Equipo Médico', 'parent_id' => 10]);
        Category::create(['name' => 'Hidrolavadoras', 'parent_id' => 10]);
        Category::create(['name' => 'Lavadoras', 'parent_id' => 10]);
        Category::create(['name' => 'Otros', 'parent_id' => 10]);
    }
}
