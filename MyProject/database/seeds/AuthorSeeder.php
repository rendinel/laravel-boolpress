<?php


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new WW\Faker\Provider\Picture($faker));

        $author = new Author();
        $author->name = 'John';
        $author->surname = 'Pippo';
        $author->email = 'pippo@example.com';
        $author->save();


        $authorDetail = new AuthorDetail();
        $authorDetail->bio = 'Lorem Ipsum';
        $authorDetail->website = 'http://example.com';
        $authorDetail->pic = $faker->pictureUrl(250, 250);

        $author->detail()->save($authorDetail);

    }
}
