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

    'accepted' => ':attribute ini harus diterima.',
    'active_url' => ':attribute ini bukan URL yang valid.',
    'after' => ':attribute ini harus tanggal sesudahnya :date.',
    'after_or_equal' => ':attribute ini harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute ini hanya boleh mengandung huruf.',
    'alpha_dash' => ':attribute ini hanya boleh mengandung huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ':attribute ini hanya boleh mengandung huruf dan angka.',
    'array' => ':attribute ini harus berupa array.',
    'before' => ':attribute ini harus tanggal sebelumnya :date.',
    'before_or_equal' => ':attribute ini harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute ini harus diantara :min dan :max.',
        'file' => ':attribute ini harus diantara :min dan :max kilobyte.',
        'string' => ':attribute ini harus diantara :min dan :max karakter.',
        'array' => ':attribute ini harus ada di antara :min dan :max item.',
    ],
    'boolean' => ':attribute ini harus berupa true atau false.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'date' => ':attribute ini bukan tanggal yang valid.',
    'date_equals' => ':attribute ini harus sama dengan tanggal :date.',
    'date_format' => ':attribute ini tidak cocok dengan format :format.',
    'different' => ':attribute ini dan :other harus berbeda.',
    'digits' => ':attribute ini harus :digits digit.',
    'digits_between' => ':attribute ini harus diantara :min dan :max digit.',
    'dimensions' => ':attribute ini memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute memiliki nilai duplikat.',
    'email' => ':attribute ini harus alamat e-mail yang valid.',
    'ends_with' => ':attribute ini harus diakhiri dengan salah satu dari: :values',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute ini harus berupa file.',
    'filled' => ':attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute ini must be greater than :value.',
        'file' => ':attribute ini must be greater than :value kilobytes.',
        'string' => ':attribute ini must be greater than :value characters.',
        'array' => ':attribute ini must have more than :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute ini must be greater than or equal :value.',
        'file' => ':attribute ini must be greater than or equal :value kilobytes.',
        'string' => ':attribute ini must be greater than or equal :value characters.',
        'array' => ':attribute ini must have :value items or more.',
    ],
    'image' => ':attribute ini must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => ':attribute ini field does not exist in :other.',
    'integer' => ':attribute ini must be an integer.',
    'ip' => ':attribute ini must be a valid IP address.',
    'ipv4' => ':attribute ini must be a valid IPv4 address.',
    'ipv6' => ':attribute ini must be a valid IPv6 address.',
    'json' => ':attribute ini must be a valid JSON string.',
    'lt' => [
        'numeric' => ':attribute ini must be less than :value.',
        'file' => ':attribute ini must be less than :value kilobytes.',
        'string' => ':attribute ini must be less than :value characters.',
        'array' => ':attribute ini must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute ini must be less than or equal :value.',
        'file' => ':attribute ini must be less than or equal :value kilobytes.',
        'string' => ':attribute ini must be less than or equal :value characters.',
        'array' => ':attribute ini must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute ini may not be greater than :max.',
        'file' => ':attribute ini may not be greater than :max kilobytes.',
        'string' => ':attribute ini may not be greater than :max characters.',
        'array' => ':attribute ini may not have more than :max items.',
    ],
    'mimes' => ':attribute ini must be a file of type: :values.',
    'mimetypes' => ':attribute ini must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute ini must be at least :min.',
        'file' => ':attribute ini must be at least :min kilobytes.',
        'string' => ':attribute ini must be at least :min characters.',
        'array' => ':attribute ini must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => ':attribute ini format is invalid.',
    'numeric' => ':attribute ini must be a number.',
    'present' => ':attribute ini field must be present.',
    'regex' => ':attribute ini format is invalid.',
    'required' => ':attribute ini field is required.',
    'required_if' => ':attribute ini field is required when :other is :value.',
    'required_unless' => ':attribute ini field is required unless :other is in :values.',
    'required_with' => ':attribute ini field is required when :values is present.',
    'required_with_all' => ':attribute ini field is required when :values are present.',
    'required_without' => ':attribute ini field is required when :values is not present.',
    'required_without_all' => ':attribute ini field is required when none of :values are present.',
    'same' => ':attribute ini and :other must match.',
    'size' => [
        'numeric' => ':attribute ini must be :size.',
        'file' => ':attribute ini must be :size kilobytes.',
        'string' => ':attribute ini must be :size characters.',
        'array' => ':attribute ini must contain :size items.',
    ],
    'starts_with' => ':attribute ini must start with one of the following: :values',
    'string' => ':attribute ini must be a string.',
    'timezone' => ':attribute ini must be a valid zone.',
    'unique' => ':attribute ini has already been taken.',
    'uploaded' => ':attribute ini failed to upload.',
    'url' => ':attribute ini format is invalid.',
    'uuid' => ':attribute ini must be a valid UUID.',

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
