<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\App;

class Apps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model          =   new App();

        $datas          =   [
            [
                'appkey'        =>  str::uuid()->getHex(),
                'domain'        =>  'http://192.168.0.106:8011',
                'sign'          =>  'APP_1',
                'name'          =>  '程序1',
                'desc'          =>  '',
                'logout_uri'    =>  'logout',
            ],
            [
                'appkey'        =>  str::uuid()->getHex(),
                'domain'        =>  'http://192.168.0.106:8012',
                'sign'          =>  'APP_2',
                'name'          =>  '程序2',
                'desc'          =>  '',
                'logout_uri'    =>  'logout',
            ],
            [
                'appkey'        =>  str::uuid()->getHex(),
                'domain'        =>  'http://192.168.0.106:8013',
                'sign'          =>  'APP_3',
                'name'          =>  '程序3',
                'desc'          =>  '',
                'logout_uri'    =>  'logout',
            ],
        ];

        foreach ($datas as $data){
            $model::create($data);
        }
    }
}
