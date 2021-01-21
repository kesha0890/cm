<?php

namespace ChatManager\Commands;

/**
 * Класс для получения списка команд и пэйлоадов
 * Class CommandList
 * @package ChatManager\Commands
 */
final class CommandList
{
    /**
     * Массив с командами
     * [| - начинается с
     * | - похоже на
     * {} - содержит
     * |] - заканчивается на
     * @return array
     */
    public static function text(): array
    {
        return [

            [
                'text' => ['[|котика', '[|котиков', '[|кот'],
                'method' => ['cat']
            ],

            [
                'text' => ['кончить', 'кон4ить'],
                'method' => ['kon4']
            ],

            [
                'text' => ['[|варс', '[|варсы', '[|pr', '[|print'],
                'method' => ['vars']
            ],

            [
                'text' => ['вагина'],
                'method' => ['vagina']
            ],

            [
                'text' => ['блин', 'капец', 'блять', 'пиздец', 'ебать', '|елки иголки', 'екарный бабай', 'бляха муха'],
                'method' => ['blin']
            ],

            [
                'text' => ['[|кик', '[|kick', '[|выгнать', '[|кикнуть', '[|ремув', '[|убрать'],
                'method' => ['isChat', 'isAdmin', 'kick']
            ],

            [
                'text' => ['меню', 'настройки', 'gui', 'menu'],
                'method' => ['isChat', 'isAdmin', 'createGui']
            ],


            [
                'text' => ['[|скажи', '[|повтори', '[|say'],
                'method' => ['say']
            ],

        ];
    }

    /**
     * Массив с payload (нажатие на кнопку)
     * @return array
     */
    public static function payload(): array
    {
        //todo реализовать команды из массива
        return [

            'command' => [
                [
                    'key' => 'not_supported_button',
                    'method' => ['_not_supported_button']
                ]
            ],

            'settings' =>
                [
                    [
                        'key' => 'exit_msg',
                        'method' => ['_eventCheckAdmin', '_chatSwitcher']
                    ],

                    [
                        'key' => 'welcome_msg',
                        'method' => ['_eventCheckAdmin', '_chatSwitcher']
                    ],

                    [
                        'key' => 'rules',
                        'method' => ['_eventCheckAdmin', '_chatSwitcher']
                    ],

                    [
                        'key' => 'auto_kick',
                        'method' => ['_eventCheckAdmin', '_chatSwitcher']
                    ],

                ],

            'chat' =>
                [
                    [
                        'key' => 'registration',
                        'method' => ['_chatCreate']
                    ],

                ],

        ];

    }
}