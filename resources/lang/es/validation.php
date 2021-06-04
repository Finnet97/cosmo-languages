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

    'accepted' => 'El :attribute tiene que ser aceptado.',
    'active_url' => 'El :attribute no es un URL válido.',
    'after' => 'El :attribute tiene que ser una fecha después de :date.',
    'after_or_equal' => 'El :attribute tiene que ser una fecha de antes o después de :date.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones o guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute tiene que ser un array.',
    'before' => 'El :attribute tiene que ser una fecha después de :date.',
    'before_or_equal' => 'El :attribute tiene que ser de antes o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute tiene que estar entre :min y :max.',
        'file' => 'El :attribute tiene que estar entre :min y :max kilobytes.',
        'string' => 'El :attribute tiene que estar entre :min y :max caracteres.',
        'array' => 'El :attribute tiene que tener entre :min y :max items.',
    ],
    'boolean' => 'El :attribute tiene que ser verdadero o falso.',
    'confirmed' => 'El :attribute confirmación no corresponde.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no concuerda con el formato :format.',
    'different' => 'El :attribute y :other tienen que ser diferentes.',
    'digits' => 'El :attribute tiene que tener:digits digitós.',
    'digits_between' => 'El :attribute tiene que tener entre :min y :max digitós.',
    'dimensions' => 'El :attribute tine dimensiones de imagen inválidas.',
    'distinct' => 'El :attribute campo tiene valores duplicados.',
    'email' => 'El :attribute tiene que ser una dirección de e-mail válida.',
    'ends_with' => 'El :attribute debe terminar con uno de estos valores: :values.',
    'exists' => 'El seleccionado:attribute es inválido.',
    'file' => 'El :attribute tiene que ser una archivo.',
    'filled' => 'El :attribute campo debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser más grande que :value.',
        'file' => 'El :attribute debe ser más de :value kilobytes.',
        'string' => 'El :attribute debe tener más de :value caracteres.',
        'array' => 'El :attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser igual o más grande que :value.',
        'file' => 'El :attribute debe ser igual o más grande que :value kilobytes.',
        'string' => 'El :attribute debe ser igual o más grande que :value caracteres.',
        'array' => 'El :attribute debe tener :value items o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El archivo seleccionado :attribute es inválido.',
    'in_array' => 'El :attribute campo no existe en :other.',
    'integer' => 'El :attribute debe ser un integrer.',
    'ip' => 'El :attribute debe ser un dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser un string de JSON válido.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor a :value.',
        'file' => 'El :attribute debe ser menos que :value kilobytes.',
        'string' => 'El :attribute debe ser manos que :value caracteres.',
        'array' => 'El :attribute debe tener menos que :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser igual o menor a :value.',
        'file' => 'El :attribute debe ser igual o menor a :value kilobytes.',
        'string' => 'El :attribute debe ser igual o menor a :value caracteres.',
        'array' => 'El :attribute no debe tener más de :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no debe ser más grande que :max.',
        'file' => 'El :attribute no debe ser más grande que :max kilobytes.',
        'string' => 'El :attribute no debe ser más grande que :max characters.',
        'array' => 'El :attribute no deberia tener más de :max items.',
    ],
    'mimes' => 'El :attribute debe ser un archivo del tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo del tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser de al menos :min.',
        'file' => 'El :attribute debe ser de al menos :min kilobytes.',
        'string' => 'El :attribute debe ser de al menos :min characters.',
        'array' => 'El :attribute debe ser de al menos :min items.',
    ],
    'not_in' => 'El archivo seleccionado :attribute es inválido.',
    'not_regex' => 'El :attribute formato es inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'El password es incorrecto.',
    'present' => 'El :attribute campo debe estar presente.',
    'regex' => 'El :attribute formato es inválido.',
    'required' => 'El :attribute campo es requerido.',
    'required_if' => 'El :attribute campo es requerido cuando :other es :value.',
    'required_unless' => 'El :attribute campo es requerido a no ser que :other este en :values.',
    'required_with' => 'El :attribute campo es requerido cuando :values este presente.',
    'required_with_all' => 'El :attribute campo es requerido cuando :values esten presentes.',
    'required_without' => 'El :attribute campo es requerido cuando :values no este presente.',
    'required_without_all' => 'El :attribute campo es requerido cuando ninguno de los :values estén presentes.',
    'same' => 'El :attribute y :oElr deben ser iguales.',
    'size' => [
        'numeric' => 'El :attribute debe de ser de :size.',
        'file' => 'El :attribute debe de ser de :size kilobytes.',
        'string' => 'El :attribute debe de ser de :size caracteres.',
        'array' => 'El :attribute debe de ser de :size items.',
    ],
    'starts_with' => 'El :attribute debe empezar con uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser un string.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => 'El :attribute ya fue tomada.',
    'uploaded' => 'El :attribute fallo al subirse.',
    'url' => 'El :attribute formato es inválido.',
    'uuid' => 'El :attribute debe ser una UUID válida.',

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
