<?php

function mainContent(){
    $answer = [
        'title'=> 'Контакты',
        'hello'=>'Наши контакты',
        'textOnPage' => 'Можете оставить Ваш вопрос в форме ниже:',
        'contacts'=>[
            'email'=> 'email@gmail.com',
            'phone'=> '112233445566',
            'site' => 'google.com',
            'site2' => 'fb.com'
        ]
    ];
    return $answer;
}