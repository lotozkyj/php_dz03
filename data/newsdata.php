<?php

function getNewsData(){
    $answer = [
        'title'=> 'Новости',
        'hello'=>'Добро пожаловать на страницу с Новостями',
        'textOnPage' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat, quis tempore, vero voluptatem. Alias, aperiam commodi dicta doloremque eligendi enim eos et facere hic impedit ipsum itaque libero, minima molestiae odio possimus praesentium quod quos sequi ut veniam voluptatibus voluptatum. Adipisci architecto, assumenda consequuntur debitis dicta distinctio, in itaque laudantium nam nobis non perspiciatis praesentium sint sit sunt veniam, voluptates. Aliquam assumenda autem facilis fugit, nisi non odio perspiciatis provident quam quas, reprehenderit repudiandae, sint sunt unde voluptas. Adipisci, laboriosam.',
        'news' => [
            [
                'id'=>1,
                'name'=>'Новость 1',
                'short_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat'
            ],
            [
                'id'=>2,
                'name'=>'Новость 2',
                'short_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat'
            ],
            [
                'id'=>3,
                'name'=>'Новость 3',
                'short_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat'
            ],
            [
                'id'=>4,
                'name'=>'Новость 4',
                'short_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat'
            ],
            [
                'id'=>5,
                'name'=>'Новость 5',
                'short_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur aut autem debitis deserunt dolore dolores ea exercitationem expedita impedit ipsum nam officiis quaerat'
            ]
        ]
    ];
    return $answer;

}