<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $companies = factory(Company::class, 150)->make()->toArray();
        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
