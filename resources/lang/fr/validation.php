<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute peut etre accepte.',
    'active_url' => 'The :attribute n\'est pas un URL valide.',
    'after' => 'The :attribute peut etre une date apres :date.',
    'after_or_equal' => 'The :attribute peut etre une date apres ou egal a :date.',
    'alpha' => 'The :attribute peut contenir seulement des lettres.',
    'alpha_dash' => 'The :attribute peut contenir seulement des lettres, des nombres, dashes et underscores.',
    'alpha_num' => 'The :attribute peut seulement contenir des lettres et des nombres.',
    'array' => 'The :attribute peut etre un tableau.',
    'before' => 'The :attribute peut etre une date avant :date.',
    'before_or_equal' => 'The :attribute peut etre une date avant ou egal a :date.',
    'between' => [
        'numeric' => 'The :attribute peut etre entre :min et :max.',
        'file' => 'The :attribute peut etre entre :min et :max kilobytes.',
        'string' => 'The :attribute peut etre entre :min et :max caracteres.',
        'array' => 'The :attribute doit avoir entre :min et :max elements.',
    ],
    'boolean' => 'The :attribute les champs peuvent etre vraix ou faux.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute n\'est pas une date validee.',
    'date_equals' => 'The :attribute peut etre une date egale a :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute et :other peut etre different.',
    'digits' => 'The :attribute peut etre :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute peut etre une adresse email validee.',
    'ends_with' => 'The :attribute peut etre en fin avec un a suivre: :values',
    'exists' => 'The selected :attribute est valide.',
    'file' => 'The :attribute peut etre un fichier.',
    'filled' => 'The :attribute les champs peuvent avoir une valeur.',
    'gt' => [
        'numeric' => 'The :attribute peut etre plus grand que :value.',
        'file' => 'The :attribute peut etre plus grand que :value kilobytes.',
        'string' => 'The :attribute peut etre plus grand que:value caracteres.',
        'array' => 'The :attribute peut avoir plus :value elements.',
    ],
    'gte' => [
        'numeric' => 'The :attribute peut etre plus grand que ou egal :value.',
        'file' => 'The :attribute peut etre plus grand que ou egal :value kilobytes.',
        'string' => 'The :attribute peut etre plus grand que ou egal :value caracteres.',
        'array' => 'The :attribute peut avoir :value des elements ou plus.',
    ],
    'image' => 'The :attribute peut etre une image.',
    'in' => 'The selected :attribute est valide.',
    'in_array' => 'The :attribute le champs n\'existe pas :other.',
    'integer' => 'The :attribute peut etre un chiffre.',
    'ip' => 'The :attribute peut etre une adresse ip validee.',
    'ipv4' => 'The :attribute peut etre une adresse ip version 4 validee.',
    'ipv6' => 'The :attribute peut etre une adresse ip version 6 validee.',
    'json' => 'The :attribute peut etre une chaine JSON validee.',
    'lt' => [
        'numeric' => 'The :attribute peut etre moins que :value.',
        'file' => 'The :attribute peut etre moins que :value kilobytes.',
        'string' => 'The :attribute peut etre moins que :value caracteres.',
        'array' => 'The :attribute peut avoir moins que :value d\'elements.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute ne doit pas etre plus grand que :max.',
        'file' => 'The :attribute ne doit pas etre plus grand que :max kilobytes.',
        'string' => 'The :attribute ne doit pas etre plus grand que :max characters.',
        'array' => 'The :attribute ne doit pas avoir plus que :max d\'elements.',
    ],
    'mimes' => 'The :attribute peut etre un fichier de genre: :values.',
    'mimetypes' => 'The :attribute etre un fichier de genre: :values.',
    'min' => [
        'numeric' => 'The :attribute peut etre au moins :min.',
        'file' => 'The :attribute peut etre au moins :min kilobytes.',
        'string' => 'The :attribute peut etre au moins :min characters.',
        'array' => 'The :attribute peut etre au moins :min items.',
    ],
    'not_in' => 'The selected :attribute est valide.',
    'not_regex' => 'The :attribute le format est valide.',
    'numeric' => 'The :attribute doit etre un nombre.',
    'password' => 'le mot de passe est incorrecte.',
    'present' => 'The :attribute le champs doit etre present.',
    'regex' => 'The :attribute le format est invalide.',
    'required' => 'The :attribute le champs est recommande.',
    'required_if' => 'The :attribute le champs est recommande lorsque :other est :value.',
    'required_unless' => 'The :attribute le champs est recommande au moins :other est a l\'interieur :values.',
    'required_with' => 'The :attribute le champs est recommande lorsque :values is present.',
    'required_with_all' => 'The :attribute le champs est recommande lorsque :values sont presents.',
    'required_without' => 'The :attribute le champs est recommande lorsque :values n\'est pas present.',
    'required_without_all' => 'The :attribute le champs est recocommande lorsque rien n\'est pas :values sont presents.',
    'same' => 'The :attribute et :other must match.',
    'size' => [
        'numeric' => 'The :attribute peut etre :size.',
        'file' => 'The :attribute peut etre :size kilobytes.',
        'string' => 'The :attribute peut etre :size caracteres.',
        'array' => 'The :attribute peut contenir :size des elements.',
    ],
    'starts_with' => 'The :attribute doit commence avec l\'un suivant: :values',
    'string' => 'The :attribute peut etre une chaine de caracteres.',
    'timezone' => 'The :attribute peut etre une zone valide.',
    'unique' => 'The :attribute a ete deja pris.',
    'uploaded' => 'The :attribute telechargement echoue.',
    'url' => 'The :attribute le format est invalide.',
    'uuid' => 'The :attribute doit etre un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
