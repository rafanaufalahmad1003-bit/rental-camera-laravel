<?php
namespace Database\Seeders;
use App\Models\Category;
use App\Models\Equipment;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {
 public function run(): void {
  foreach(['Kamera','Lensa','Aksesori'] as $name) Category::firstOrCreate(['name'=>$name],['description'=>'Peralatan rental '.$name]);
  $camera=Category::where('name','Kamera')->firstOrFail();
  foreach([['Canon EOS 90D','Canon','CAN-90D',150000,500000,'CN90D-001'],['Sony A6400','Sony','SNY-A6400',175000,500000,'SNA6400-001']] as [$model,$brand,$sku,$rate,$deposit,$serial]){
   $e=Equipment::firstOrCreate(['sku'=>$sku],['category_id'=>$camera->id,'brand'=>$brand,'model'=>$model,'daily_rate'=>$rate,'deposit_amount'=>$deposit,'description'=>'Unit kamera siap disewakan.']);
   $e->units()->firstOrCreate(['serial_number'=>$serial],['status'=>'available','condition_note'=>'Kondisi baik']);
  }
 }
}
