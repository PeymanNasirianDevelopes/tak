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

    'accepted' => ' :attribute باید قبول شود',
    'active_url' => ' :attribute آدرس صحیح نیست',
    'after' => ' :attribute باید پس از :date. باشد',
    'after_or_equal' => ' :attribute باید بعد یا مساوی  :date. باشد',
    'alpha' => ' :attribute فقط باید حروف باشد.',
    'alpha_dash' => ' :attribute باید شامل حروف، اعداد، - و _ باشد ',
    'alpha_num' => ' :attribute باید شامل حروف و اعداد باشد',
    'array' => ' :attribute باید شامل آرایه باشد',
    'before' => ' :attribute باید قبل ار :date. باشد',
    'before_or_equal' => ' :attribute باید قبل یا مساوی   :date. باشد',
    'between' => [
        'numeric' => ' :attribute باید بین :min و :max. باشد',
        'file' => ' :attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ' :attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ' :attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean' => ' :attribute باید صحیح یا غلط باشد.',
    'confirmed' => ' :attribute تائید صلاحیت نشد',
    'date' => ' :attribute شامل تاریخ معتبر نیست.',
    'date_equals' => ' :attribute باید برابر با تاریخ :date. باشد',
    'date_format' => ' :attribute با فرمت :format. سازگار نیست',
    'different' => ' :attribute و :other باید متفاوت باشند.',
    'digits' => ' :attribute باید :digits رقم باشد.',
    'digits_between' => ' :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => ' :attribute دارای ابعاد نا صحیح است.',
    'distinct' => ' :attribute دارای دو ارزش است.',
    'email' => ' :attribute آدرس ایمیل معتبر نیست.',
    'ends_with' => ' :attribute باید با یکی از این علائم: :values. تمام شود',
    'exists' => ' :attribute انتخاب شده نا صحیح است.',
    'file' => ' :attribute باید فایل باشد.',
    'filled' => ' :attribute باید دارای ارزش باشد.',
    'gt' => [
        'numeric' => ' :attribute باید بزرگتر از :value. باشد',
        'file' => ' :attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => ' :attribute باید بزرگتر از than :value کاراکتر باشد.',
        'array' => ' :attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => ' :attribute باید بزرگتر  یا مساوی :value. باشد',
        'file' => ' :attribute باید بزرگتر  یا مساوی :value کیلوبایت باشد.',
        'string' => ' :attribute باید بزرگتر  یا مساوی :value کاراکتر.',
        'array' => ' :attribute باید داری :value آیتم یا بیشتر باشد .',
    ],
    'image' => ' :attribute باید عکس باشد.',
    'in' => ' :attribute انتخاب شده صحیح نیست',
    'in_array' => ' :attribute آیتم در  :other. وجود ندارد',
    'integer' => ' :attribute باید عدد باشد.',
    'ip' => ' :attribute باید آدرس آی پی معتبر باشد.',
    'ipv4' => ' :attribute آی پی ورژن 4 باید باشد.',
    'ipv6' => ' :attribute آی پی ورژن 6 باید باشد.',
    'json' => ' :attribute باید خروجی جیسون باشد.',
    'lt' => [
        'numeric' => ' :attribute باید کمتر از :value باشد.',
        'file' => ' :attribute باید کمتر از :value کیلو بایت باشد.',
        'string' => ' :attribute باید کمتر از :value کاراکتر باشد.',
        'array' => ' :attribute باید کمتر از :value آیتم باشد.',
    ],

    'lte' => [
        'numeric' => ' :attribute باید کوچکتر یا مساوی :value باشد',
        'file' => ' :attribute باید کوچکتر یا مساوی :value کیلوبات باشد.',
        'string' => ' :attribute باید کوچکتر یا مساوی :value کاراکتر باشد.',
        'array' => ' :attribute باید کوچکتر یا مساوی :value آیتم باشد.',
    ],
    'max' => [
        'numeric' => ' :attribute نباید بزرگتر از :max باشد',
        'file' => ' :attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ' :attribute نباید بزرگتر از :max کاراکتر باشد.',
        'array' => ' :attribute نباید بزرگتر از :max آیتم باشد.',
    ],
    'mimes' => ' :attribute باید فایلی از نوع: :values باشد.',
    'mimetypes' => ' :attribute باید فایلی از نوع: :values باشد.',
    'min' => [
        'numeric' => ' :attribute باید حداقل :min باشد.',
        'file' => ' :attribute باید حداقل :min کیلوبایت باشد.',
        'string' => ' :attribute باید حداقل :min کاراکتر باشد.',
        'array' => ' :attribute باید حداقل :min آیتم باشد.',
    ],
    'not_in' => ' :attribute انتخاب شده صحیح نیست.',
    'not_regex' => ' :attribute فرمت صحیح نیست.',
    'numeric' => ' :attribute باید عدد باشد.',
    'password' => ' رمز عبور معتبر نیست.',
    'present' => ' :attribute باید آماده باشد.',
    'regex' => ' :attribute فرمت صحیح نیست.',
    'required' => ' :attribute الزامی است',
    'required_if' => ' :attribute زمانی ضروری است که :other دارای :value باشد.',
    'required_unless' => ' :attribute ضروری است مگر اینکه :other دارای :values باشد.',
    'required_with' => ' :attribute زمانی ضروری است که :values آماده است.',
    'required_with_all' => ' :attribute زمانی ضروری است که :values آماده هستند.',
    'required_without' => ' :attribute زمانی ضروری است که :values آماده نباشد.',
    'required_without_all' => ' :attribute زمانی ضروری است که هیج یک از :values آماده نباشند.',
    'same' => ' :attribute و :other باید برابر باشند.',
    'size' => [
        'numeric' => ' :attribute باید :size باشد.',
        'file' => ' :attribute باید :size کیلیو بایت باشد.',
        'string' => ' :attribute باید :size کاراکتر باشد.',
        'array' => ' :attribute باید دارای :size آیتم باشد.',
    ],
    'starts_with' => ' :attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => ' :attribute باید رشته باشد .',
    'timezone' => ' :attribute باید منطقه زمانی صحیحی باشد.',
    'unique' => ' :attribute موجود است.',
    'uploaded' => ' :attribute خطا در آپلود.',
    'url' => ' :attribute فرمت صحیح نیست.',
    'uuid' => ' :attribute باید UUID صحیح باشد.',

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

    'attributes' =>
        [
        "title"=>"عنوان",
        "description"=>"توضیحات",
        "show"=>"نمایش",
        "btn_link"=>"لینک",
        "btn_name"=>"نام دکمه",
        "image"=>"تصویر"


    ],

];
