<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha después o igual a :date.',
    'alpha'                => 'El :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El :attribute sólo puede contener letras, números, y guiónes bajos.',
    'alpha_num'            => 'El :attribute sólo puede contener letras y números.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute debe ser una fecha antes de :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha antes o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caractéres.',
        'array'   => 'El :attribute debe estar entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadedo o falso.',
    'confirmed'            => 'La confirmación del :attribute no concuerda.',
    'date'                 => 'El :attribute no es una fecha válida.',
    'date_format'          => 'El :attribute does not match the format :format.',
    'different'            => 'El :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe tener :digits digitos.',
    'digits_between'       => 'El :attribute debe estar entre :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene unas dimensiones de imagen inválidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una dirección email válida.',
    'exists'               => 'El atributo :attribute seleccionado es inválido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El :attribute debe ser más grande que :value.',
        'file'    => 'El :attribute debe ser más grande que :value kilobytes.',
        'string'  => 'El :attribute debe ser más grande que :value caractéres.',
        'array'   => 'El :attribute debe tener más de :value items.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute debe ser más grande que or equal :value.',
        'file'    => 'El :attribute debe ser más grande que or equal :value kilobytes.',
        'string'  => 'El :attribute debe ser más grande que or equal :value caractéres.',
        'array'   => 'El :attribute must have :value items or more.',
    ],
    'image'                => 'El :attribute debe ser un image.',
    'in'                   => 'El selected :attribute is invalid.',
    'in_array'             => 'El :attribute field does not exist in :other.',
    'integer'              => 'El :attribute debe ser un integer.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'numeric' => 'El :attribute debe ser menor a :value.',
        'file'    => 'El :attribute debe ser menor a :value kilobytes.',
        'string'  => 'El :attribute debe ser menor a :value caractéres.',
        'array'   => 'El :attribute debe tener menor de :value items.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute debe ser menor que, o igual a :value.',
        'file'    => 'El :attribute debe ser menor que, o igual a :value kilobytes.',
        'string'  => 'El :attribute debe ser menor que, o igual a :value caractéres.',
        'array'   => 'El :attribute no debe tener más de :value items.',
    ],
    'max'                  => [
        'numeric' => 'El :attribute no puede ser más grande que :max.',
        'file'    => 'El :attribute no puede ser más grande que :max kilobytes.',
        'string'  => 'El :attribute no puede ser más grande que :max caractéres.',
        'array'   => 'El :attribute no puede tener mas de :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe tener al menos :min.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min caractéres.',
        'array'   => 'El :attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato de :attribute es inválido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato de :attribute es inválido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other esté en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values está presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values esté presente.',
    'same'                 => 'El :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute debe tener :size.',
        'file'    => 'El :attribute debe tener :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caractéres.',
        'array'   => 'El :attribute debe contener :size items.',
    ],
    'string'               => 'El :attribute debe ser una cadena de texto.',
    'timezone'             => 'El :attribute debe ser una zona de tiempo.',
    'unique'               => 'El :attribute ya ha sido tomado.',
    'uploaded'             => 'Ha fallado la carga de :attribute.',
    'url'                  => 'El formato de :attribute es inválido.',

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
    | El following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
