<?php
namespace Foointro\Admin\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ProductAttributeValidator extends AbstractValidator
{
    protected static $rules = array(
        'product_attribute_name' => 'required',
    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;
        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('admin::admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('admin.name_min_length');
        $max_lenght = config('admin.name_max_length');

        $product_attribute_name = @$input['product_attribute_name'];

        if ((strlen($product_attribute_name) < $min_lenght)  || ((strlen($product_attribute_name) > $max_lenght))) {
            $this->errors->add('menu_name_unvalid_length', trans('admin::admin.menu_name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = FALSE;
        }
        
        return $flag;
    }
}