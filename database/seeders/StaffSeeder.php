<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert(array(
            array(
                'fullName' => 'Bui Tran Cam Tu',
                'birthday' => '10/01/1992',
                'gender' => 'Nu',
                'address' => 'Da Nang',
                'phone' => '0903234232',
                'email' => 'camtu@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Tran Thi Anh Ngoc',
                'birthday' => '10/02/1997',
                'gender' => 'Nu',
                'address' => 'Da Nang',
                'phone' => '0909532422',
                'email' => 'tranngoc@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Nguyen Duc Nhieu',
                'birthday' => '01/09/1990',
                'gender' => 'Nam',
                'address' => 'Quang Nam',
                'phone' => '0932435221',
                'email' => 'ducnhieu@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Nguyen Huu Lam Nhan',
                'birthday' => '05/02/1992',
                'gender' => 'Nam',
                'address' => 'Da Nang',
                'phone' => '0998242244',
                'email' => 'nguyenhulamnhan@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Nguyen Thi Thanh',
                'birthday' => '10/08/1996',
                'gender' => 'Nu',
                'address' => 'Thua Thien Hue',
                'phone' => '0935543632',
                'email' => 'nguyenthithanh@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Phan Thanh Tam',
                'birthday' => '01/08/1990',
                'gender' => 'Nam',
                'address' => 'Da Nang',
                'phone' => '0903553522',
                'email' => 'phanthanhtam@gmail.com',
                'password' => '123456',
            ),
            array(
                'fullName' => 'Nguyen Huu Nguyen Anh',
                'birthday' => '03/07/1995',
                'gender' => 'Nu',
                'address' => 'Da Nang',
                'phone' => '0903435222',
                'email' => 'nguyenanh@gmail.com',
                'password' => '123456',
            ),array(
                'fullName' => 'Vo Hoang Minh',
                'birthday' => '04/10/1993',
                'gender' => 'Nam',
                'address' => 'Da Nang',
                'phone' => '0909435242',
                'email' => 'vohoangminh@gmail.com',
                'password' => '123456',
            ),array(
                'fullName' => 'Tran Cong Hoa',
                'birthday' => '04/07/1990',
                'gender' => 'Nam',
                'address' => 'Quang Binh',
                'phone' => '0904334242',
                'email' => 'conghoa@gmail.com',
                'password' => '123456',
            ),array(
                'fullName' => 'Vo Hong Nghia',
                'birthday' => '01/02/1994',
                'gender' => 'Nam',
                'address' => 'Da Nang',
                'phone' => '0909342523',
                'email' => 'hongnghia@gmail.com',
                'password' => '123456',
            ),
        ));
    }
}
