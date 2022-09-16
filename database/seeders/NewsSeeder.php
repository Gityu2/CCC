<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                // America
                'country_id' => 11,
                'category_id' => 1,
                'source_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author1',
                'url' => 'aaa.com',
                'image' => 'argentina.jpg',
                'published_at' => '2022-08-01 00:00:00',
            ],
            [
                'country_id' => 32,
                'category_id' => 2,
                'source_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author2',
                'url' => 'bbb.com',
                'image' => 'brazil.jpg',
                'published_at' => '2022-08-02 00:00:00',
            ],
            [   'country_id' => 40,
                'category_id' => 3,
                'source_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author3',
                'url' => 'ccc.com',
                'image' => 'canada.jpg',
                'published_at' => '2022-08-03 00:00:00',
            ],
            [   'country_id' => 57,
                'category_id' => 4,
                'source_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author4',
                'url' => 'ddd.com',
                'image' => 'cuba.jpg',
                'published_at' => '2022-08-04 00:00:00',
            ],
            [   'country_id' => 236,
                'category_id' => 5,
                'source_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author5',
                'url' => 'eee.com',
                'image' => 'america.jpg',
                'published_at' => '2022-08-05 00:00:00',
            ],

            // Asia
            [   'country_id' => 46,
                'category_id' => 6,
                'source_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author6',
                'url' => 'fff.com',
                'image' => 'china.jpg',
                'published_at' => '2022-08-06 00:00:00',
            ],
            [   'country_id' => 103,
                'category_id' => 1,
                'source_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author7',
                'url' => 'ggg.com',
                'image' => 'india.jpg',
                'published_at' => '2022-08-07 00:00:00',
            ],
            [   'country_id' => 112,
                'category_id' => 2,
                'source_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'japan.jpg',
                'published_at' => '2022-08-08 00:00:00',
            ],
            [   'country_id' => 175,
                'category_id' => 2,
                'source_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'philippines.jpg',
                'published_at' => '2022-08-09 00:00:00',
            ],
            [   'country_id' => 109,
                'category_id' => 2,
                'source_id' => 2,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'israel.jpg',
                'published_at' => '2022-08-10 00:00:00',
            ],

            // Europe
            [   'country_id' => 76,
                'category_id' => 2,
                'source_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'france.jpg',
                'published_at' => '2022-08-11 00:00:00',
            ],
            [   'country_id' => 166,
                'category_id' => 2,
                'source_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'norway.jpg',
                'published_at' => '2022-08-12 00:00:00',
            ],
            [   'country_id' => 183,
                'category_id' => 2,
                'source_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'russia.jpg',
                'published_at' => '2022-08-13 00:00:00',
            ],
            [   'country_id' => 209,
                'category_id' => 2,
                'source_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'spain.jpg',
                'published_at' => '2022-08-14 00:00:00',
            ],
            [   'country_id' => 235,
                'category_id' => 2,
                'source_id' => 3,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'uk.jpg',
                'published_at' => '2022-08-15 00:00:00',
            ],

            // Africa
            [   'country_id' => 66,
                'category_id' => 2,
                'source_id' => 4,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'egypt.jpg',
                'published_at' => '2022-08-16 00:00:00',
            ],
            [   'country_id' => 116,
                'category_id' => 2,
                'source_id' => 4,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'kenya.jpg',
                'published_at' => '2022-08-17 00:00:00',
            ],
            [   'country_id' => 206,
                'category_id' => 2,
                'source_id' => 4,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'southafrica.jpg',
                'published_at' => '2022-08-18 00:00:00',
            ],
            [   'country_id' => 205,
                'category_id' => 2,
                'source_id' => 4,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => '',
                'published_at' => '2022-08-19 00:00:00',
            ],
            [   'country_id' => 211,
                'category_id' => 2,
                'source_id' => 4,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => '',
                'published_at' => '2022-08-20 00:00:00',
            ],

            // Oceania
            [   'country_id' => 14,
                'category_id' => 2,
                'source_id' => 5,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'australia.jpg',
                'published_at' => '2022-08-21 00:00:00',
            ],
            [   'country_id' => 159,
                'category_id' => 2,
                'source_id' => 5,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => '',
                'published_at' => '2022-08-22 00:00:00',
            ],
            [   'country_id' => 14,
                'category_id' => 2,
                'source_id' => 5,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'australia.jpg',
                'published_at' => '2022-08-23 00:00:00',
            ],
            [   'country_id' => 159,
                'category_id' => 2,
                'source_id' => 5,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => '',
                'published_at' => '2022-08-24 00:00:00',
            ],
            [   'country_id' => 14,
                'category_id' => 2,
                'source_id' => 5,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit magnam totam debitis tempora magni omnis nulla ipsam, provident nesciunt.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sapiente impedit explicabo eaque est vitae quaerat quidem dignissimos voluptatum inventore accusamus illum aliquid architecto, culpa blanditiis voluptatibus ratione aut quisquam neque corporis, totam tempora. Nisi modi dicta autem perspiciatis quis non quasi consequatur incidunt ipsam omnis quisquam, magni voluptates aperiam libero quas sint nemo eum culpa earum nobis. Harum totam amet sit eius veniam corrupti consectetur provident, ut animi aut enim consequuntur non accusamus deserunt excepturi quos officia blanditiis explicabo facere nostrum voluptates. Dolore architecto quibusdam quam animi officiis hic dicta voluptas at, pariatur nobis voluptate, nihil est eos eius.',
                'author' => 'author8',
                'url' => 'hhh.com',
                'image' => 'australia.jpg',
                'published_at' => '2022-08-25 00:00:00',
            ],
        ]);
    }
}
