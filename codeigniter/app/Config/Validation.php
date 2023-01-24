<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];


    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $loginvalidieren = [
        'email'=> 'required|valid_email',
        'passwort' => 'required',
        'checkbox' => 'required'
    ];

    public $loginvalidieren_errors = [
        'email'=>[
            'valid_email' => 'Bitte geben Sie eine gültige E-Mail Adresse an.',
            'required'=> 'Bitte geben Sie ihre E-Mail Adresse ein'
        ],
        'passwort'=>[
            'required'=>'Bitte geben Sie ihr Passwort ein.'
        ],
        'checkbox'=>[
            'required'=> 'Um diese Anwendung zu nutzen, müssen Sie unsere AGBs akzeptieren.'
        ]
    ];

}
