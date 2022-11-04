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

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

//    'custom' => [
//        'attribute-name' => [
//            'rule-name' => 'custom-message',
//        ],
//    ],
    'custom' => [
        'firstname' => [
            'required' => 'Ime ne sme biti prazno',
            'min'=>'Ime mora imati najmanje 2 slova bez brojeva',
            'max'=>'Ime može imati najviše 20 slova bez brojeva',
            'regex'=>'Ime mora imati najmanje 2 slova bez brojeva'
        ],
        'lastname' => [
            'required' => 'Prezime ne sme biti prazno',
            'min'=>'Prezime mora imati najmanje 2 slova',
            'max'=>'Prezime može imati najviše 20 slova bez brojeva',
            'regex'=>'Prezime mora imati najmanje 2 slova bez brojeva'
        ],
        'message' => [
            'required' => 'Poruka ne sme biti prazna',
            'regex'=>'Neispravan format poruke',
            'max'=>'Poruka mora imati najviše 255 karaktera',
        ],
        'email' => [
            'required' => 'E-mail ne sme biti prazan',
            'email' => 'E-mail mora biti u formatu: korisnik@adresa.com',
            'unique' => 'Korisnik sa unetim e-mailom već postoji'
        ],
        'phone' => [
            'regex'=>'Broj mora početi sa 0 i ne sme sadržati slova',
        ],
        'username' => [
            'required'=>'Korisničko ime je obavezno',
            'min'=>'Korisničko ime mora imati najmanje 5 karaktera',
            'max'=>'Korisničko ime može imati najviše 30 karaktera',
            'unique' => 'Korisnik sa unetim korisničkim imenom već postoji'
        ],
        'password' => [
            'required'=>'Lozinka je obavezna',
            'min'=>'Lozinka mora imati najmanje 8 karaktera',
            'max'=>'Lozinka može imati najviše 20 karaktera',
            'confirmed'=>'Lozinke se ne poklapaju, popunite lozinke',
        ],
        'password_confirmation' => [
            'required'=>'Obavezno polje',
            'min'=>'Lozinka mora imati najmanje 8 slova'
        ],
        'comment' => [
            'required' => 'Komentar ne sme biti prazan',
            'regex'=>'Neispravan format komentara',
            'max'=>'Komentar mora imati najviše 255 karaktera',
        ],
        'title' => [
            'required' => 'Naslov ne sme biti prazan',
            'min'=>'Naslov mora imati najmanje 5 karaktera',
            'max'=>'Naslov može imati najviše 50 karaktera',
        ],
        'main_photo' => [
            'required' => 'Slika je obavezna',
            'image' => 'Fajl mora biti slika - jpeg,png,jpg,gif',
            'mimes' => 'Dozvoljeni formati su: jpeg,png,jpg,gif',
            'max'=>'Dozvoljena veličina slike je 2mb ili 2048kb',
        ],
        'subtitle' => [
            'required' => 'Podnaslov ne sme biti prazan',
            'min'=>'Podnaslov mora imati najmanje 5 karaktera',
            'max'=>'Podnaslov može imati najviše 50 karaktera',
        ],
        'main_text' => [
            'required' => 'Tekst je obavezan',
            'min'=>'Tekst mora imati najmanje 5 karaktera',
            'max'=>'Tekst može imati najviše 255 karaktera',
        ],
        'subtitle_text_1' => [
            'required' => 'Tekst je obavezan',
            'min'=>'Tekst mora imati najmanje 5 karaktera',
            'max'=>'Tekst može imati najviše 255 karaktera',
        ],
        'subtitle_text_2' => [
            'min'=>'Tekst mora imati najmanje 5 karaktera',
            'max'=>'Tekst može imati najviše 255 karaktera',
        ],
        'quote' => [
            'min'=>'Tekst mora imati najmanje 5 karaktera',
            'max'=>'Tekst može imati najviše 100 karaktera',
        ],
        'category_id' => [
            'required' => 'Kategorija mora biti izabrana',
        ],
        'keyword' => [
            'max'=>'Pretraga može imati najviše 20 karaktera',
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
