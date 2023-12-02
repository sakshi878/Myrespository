<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
  
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic', 
                'slug' => 'basic', 
                'stripe_plan' => 'price_1OI3dtSBez8o8KCTaEAxiBNn', 
                'price' => 50, 
                'description' => 'Basic'
            ],
            [
                'name' => 'Pro', 
                'slug' => 'pro', 
                'stripe_plan' => 'price_1OI3eMSBez8o8KCTLLvQCEwe', 
                'price' => 100, 
                'description' => 'Pro'
            ],
            [
                'name' => 'Premium', 
                'slug' => 'premium', 
                'stripe_plan' => 'price_1OI3eoSBez8o8KCT2I537Uqc', 
                'price' => 200, 
                'description' => 'Premium'
            ]
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}