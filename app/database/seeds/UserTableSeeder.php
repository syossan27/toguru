<?php
 
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'users' )->delete();

        User::create( array(
            'username' => 'testing_user',
						'password' => '$2y$10$Rm8kYoakDXUDA9mx0sHF4ehN/z.fW7IKR5MA7zJH2N60YhHQBnoNW',
						'mail_address' => 'hoge@hoge.com',
						'hash' => 'dba9c7085d16c57cd1269d88016d9b67',
						'valid' => 1
        ) );
    }
 
}
