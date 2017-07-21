<?php
namespace Foointro\Admin\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ProductValidator extends AbstractValidator
{
    protected static $rules = array(
        'product_name' => 'required',
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
        $img_size = TRUE;

        $min_lenght = config('admin.name_min_length');
        $max_lenght = config('admin.name_max_length');
        $max_img = 2097152;

        $product_name = @$input['product_name'];
        $product_img = @$input['product_image'];

        // var_dump($min_lenght);
        // var_dump($product_img);
        // var_dump($product_img->getMaxFilesize());
        // die();

        if ((strlen($product_name) < $min_lenght)  || ((strlen($product_name) > $max_lenght))) {
            $this->errors->add('product_name_unvalid_length', trans('admin::admin.product_name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = FALSE;
        }

        if ($product_img != NULL){
            if ($product_img->isValid()){
                if ($product_img->getSize() > $product_img->getMaxFilesize()) $img_size = FALSE;
            }
            elseif ($product_img->getError()) $img_size = FALSE;
        }

        if (!$img_size){
            $this->errors->add('img_attach_unvalid', trans('admin::admin.img_attach_unvalid', [
                    'IMG_MAX_SIZE' => $max_img / 1024 / 1024
                ]));
            $flag = FALSE;
        }
        
        // var_dump($flag);
        // die();
        return $flag;
    }
}