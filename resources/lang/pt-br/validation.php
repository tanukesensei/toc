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

    'accepted'             => 'O atributo: deve ser aceito.',
    'active_url'           => 'O atributo: não é uma URL válida.',
    'after'                => 'O atributo: deve ser uma data após: data.',
    'after_or_equal'       => 'O atributo: deve ser uma data após ou igual a: date.',
    'alpha'                => 'O atributo: deve conter apenas letras.',
    'alpha_dash'           => 'O atributo: deve conter apenas letras, números e traços.',
    'alpha_num'            => 'O atributo: deve conter apenas letras e números.',
    'array'                => 'O atributo: deve ser um array (vetor).',
    'before'               => 'O atributo: deve ser uma data anterior a: data.',
    'before_or_equal'      => 'O atributo deve ser uma data anterior ou igual a: data.',
    'between'              => [
        'numeric' => 'O atributo: deve estar entre: min e: max.',
        'file'    => 'O arquivo: deve estar entre: min e: max kilobytes.',
        'string'  => 'O atributo: deve estar entre: min e: caracteres max.',
        'array'   => 'O atributo: deve ter entre: min e: itens máximos.',
    ],
    'boolean'              => 'O campo atributo: deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de atributo: não corresponde.',
    'date'                 => 'O atributo: não é uma data válida.',
    'date_format'          => 'O atributo: não corresponde ao formato: formato.',
    'different'            => 'O atributo: e outros: devem ser diferentes.',
    'digits'               => 'O atributo: deve ser: dígitos dígitos.',
    'digits_between'       => 'O atributo: deve estar entre: min e: dígitos máximos.',
    'dimensions'           => 'O atributo: tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo atributo: tem um valor duplicado.',
    'email'                => 'O atributo: deve ser um endereço de e-mail válido.',
    'exists'               => 'O atributo selecionado é inválido.',
    'file'                 => 'O atributo: deve ser um arquivo.',
    'filled'               => 'O campo atributo: é obrigatório.',
    'image'                => 'O arquivo deve ser uma imagem.',
    'in'                   => 'O item selecionado é inválido.',
    'in_array'             => 'O campo atributo: não existe em: other.',
    'integer'              => 'O atributo: deve ser um inteiro.',
    'ip'                   => 'O IP deve ser um endereço IP válido.',
    'json'                 => 'O atributo: deve ser uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O atributo: não pode ser maior que: max.',
        'file'    => 'O arquivo não pode ser maior que: max kilobytes.',
        'string'  => 'O atributo: não pode ser maior que: caracteres máx.',
        'array'   => 'O atributo: pode não ter mais do que: itens max.',
    ],
    'mimes'                => 'O atributo: deve ser um arquivo de tipo: valor.',
    'mimetypes'            => 'O atributo: deve ser um arquivo de tipo: :valor.',
    'min'                  => [
        'numeric' => 'O atributo: deve ser no mínimo: min.',
        'file'    => 'O arquivo deve ter no mínimo: min kilobytes.',
        'string'  => 'O atributo: deve ter pelo menos: min caracteres.',
        'array'   => 'O atributo: deve ter pelo menos: itens min.',
    ],
    'not_in'               => 'O atributo selecionado: é inválido.',
    'numeric'              => 'O atributo deve ser um numero.',
    'present'              => 'O campo atributo: deve estar presente.',
    'regex'                => 'O formato de atributo: é inválido.',
    'required'             => 'O campo atributo: é obrigatório.',
    'required_if'          => 'O campo atributo: é necessário se: "outro" é: valor.',
    'required_unless'      => 'O campo atributo: é obrigatório a não ser que: "outro" esteja em: valor.',
    'required_with'        => 'O campo atributo: é necessário quando: "valores" estiverem presentes.',
    'required_with_all'    => 'O campo atributo: é necessário quando: "valores" estiverem presentes.',
    'required_without'     => 'O campo atributo: é necessário quando: "valores" não estiverem presentes.',
    'required_without_all' => 'O campo atributo: é necessário quando nenhum dos valores estiver presente.',
    'same'                 => 'O atributo: e "outro" devem corresponder.',
    'size'                 => [
        'numeric' => 'O atributo: deve ter: tamanho.',
        'file'    => 'O atributo: deve ter: tamanho kilobytes.',
        'string'  => 'O atributo: deve ter: caracteres de tamanho.',
        'array'   => 'O atributo: deve conter: itens de tamanho.',
    ],
    'string'               => 'O atributo: deve ser uma string.',
    'timezone'             => 'O atributo: deve ser uma zona válida.',
    'unique'               => 'O atributo: já existe.',
    'uploaded'             => 'O item falhou durante o upload.',
    'url'                  => 'O formato de atributo: é inválido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
