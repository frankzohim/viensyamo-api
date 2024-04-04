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

    'accepted' => 'Le champ :attribute  doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other is :value.',
    'active_url' => 'Le champ :attribute doit être une URL valide.',
    'after' => 'Le champ :attribute doit être une date après :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles à un octet.',
    'before' => 'Le champ :attribute doit être une date antérieure :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit avoir entre :min et :max items.',
        'file' => 'Le champ :attribute doit être compris entre :min et :max kilo-octets.',
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'string' => 'Le champ :attribute doit être compris entre :min et :max characters.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'can' => 'Le champ :attribute contient une valeur non autorisée.',
    'confirmed' => 'Le champ :attribute la confirmation du champ ne correspond pas.',
    'current_password' => 'Le champ mot de passe est incorrect.',
    'date' => 'Le champ :attribute doit être une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute doit correspondre au format :format.',
    'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le champ :attribute et :other doivent être différent.',
    'digits' => 'Le champ :attribute doit être :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit être compris entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions d\'image non valides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par l’un des éléments suivants: :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par l’un des éléments suivants: :values.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants: :values.',
    'enum' => 'Le choix :attribute est invalide.',
    'exists' => 'Le choix :attribute est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit avoir plus de :value articles.',
        'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit être supérieur à :value characters.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit avoir :value articles ou plus.',
        'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être supérieur ou égal à :value characters.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ selected :attribute est invalide.',
    'in_array' => 'Le champ :attribute doit exister dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le champ :attribute doit être en minuscule.',
    'lt' => [
        'array' => 'Le champ :attribute doit avoir moins de :value articles.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit être inférieur à :value characters.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute ne doit pas contenir plus de :value articles.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être inférieur ou égal à :value characters.',
    ],
    'mac_address' => 'Le champ :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'Le champ :attribute field must not have more than :max items.',
        'file' => 'Le champ :attribute field must not be greater than :max kilo-octets.',
        'numeric' => 'Le champ :attribute field must not be greater than :max.',
        'string' => 'Le champ :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => 'Le champ :attribute field must not have more than :max digits.',
    'mimes' => 'Le champ :attribute field must be a file of type: :values.',
    'mimetypes' => 'Le champ :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'Le champ :attribute field must have at least :min items.',
        'file' => 'Le champ :attribute field must be at least :min kilo-octets.',
        'numeric' => 'Le champ :attribute field must be at least :min.',
        'string' => 'Le champ :attribute field must be at least :min characters.',
    ],
    'min_digits' => 'Le champ :attribute field must have at least :min digits.',
    'missing' => 'Le champ :attribute field must be missing.',
    'missing_if' => 'Le champ :attribute field must be missing when :other is :value.',
    'missing_unless' => 'Le champ :attribute field must be missing unless :other is :value.',
    'missing_with' => 'Le champ :attribute field must be missing when :values is present.',
    'missing_with_all' => 'Le champ :attribute field must be missing when :values are present.',
    'multiple_of' => 'Le champ :attribute field must be a multiple of :value.',
    'not_in' => 'Le selected :attribute is invalid.',
    'not_regex' => 'Le champ :attribute field format is invalid.',
    'numeric' => 'Le champ :attribute field must be a number.',
    'password' => [
        'letters' => 'Le champ :attribute field must contain at least one letter.',
        'mixed' => 'Le champ :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'Le champ :attribute field must contain at least one number.',
        'symbols' => 'Le champ :attribute field must contain at least one symbol.',
        'uncompromised' => 'Le given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'Le champ :attribute field must be present.',
    'prohibited' => 'Le champ :attribute field is prohibited.',
    'prohibited_if' => 'Le champ :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Le champ :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'Le champ :attribute field prohibits :other from being present.',
    'regex' => 'Le champ :attribute field format is invalid.',
    'required' => 'Le champ :attribute field is required.',
    'required_array_keys' => 'Le champ :attribute field must contain entries for: :values.',
    'required_if' => 'Le champ :attribute field is required when :other is :value.',
    'required_if_accepted' => 'Le champ :attribute field is required when :other is accepted.',
    'required_unless' => 'Le champ :attribute field is required unless :other is in :values.',
    'required_with' => 'Le champ :attribute field is required when :values is present.',
    'required_with_all' => 'Le champ :attribute field is required when :values are present.',
    'required_without' => 'Le champ :attribute field is required when :values is not present.',
    'required_without_all' => 'Le champ :attribute field is required when none of :values are present.',
    'same' => 'Le champ :attribute field must match :other.',
    'size' => [
        'array' => 'Le champ :attribute field must contain :size items.',
        'file' => 'Le champ :attribute field must be :size kilo-octets.',
        'numeric' => 'Le champ :attribute field must be :size.',
        'string' => 'Le champ :attribute field must be :size characters.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'Le champ :attribute doit être une chaîne.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute failed to upload.',
    'uppercase' => 'Le champ :attribute field must be uppercase.',
    'url' => 'Le champ :attribute field must be a valid URL.',
    'ulid' => 'Le champ :attribute field must be a valid ULID.',
    'uuid' => 'Le champ :attribute field must be a valid UUID.',

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

    'attributes' => [
        'username' => 'Nom d\'utilisateur',
    ],

];
