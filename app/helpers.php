<?php

use Illuminate\Support\Facades\Request;

if(!function_exists('form_text'))
{
    function form_text($name,$label = "",$old = "")
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="text" class="form-control" id="$name" placeholder="اكتب $label" name="$name" value="$old">
            </div>
        </div>
        END;
    }
}

if(!function_exists('form_textarea'))
{
    function form_textarea($name,$label ="",$old = "")
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <textarea type="text" class="form-control" id="$name" placeholder="اكتب $label" name="$name">$old</textarea>
            </div>
        </div>
        END;
    }
}



if(!function_exists('form_select'))
{
    function form_select($name,$label = "",$selected = 0,$field_name = "name")
    {
        $label = $label == "" ? $name : $label;
        $x = explode('_',$name);
        $model = ucwords($x[0]);
        $class = "App\\Models\\$model";
        $all = $class::get();
        $result = <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <select class="form-control" name="$name" id="$name">
        END;

        foreach($all as $item)
        {
            if($item->id == $selected){
                $result .= <<<END
                    <option selected value="{$item->id}">{$item->$field_name}</option>
                END;
            }
            else
            {
                $result .= <<<END
                    <option value="{$item->id}">{$item->$field_name}</option>
                END;
            }
        }
        $result .= <<<END
                </select>
            </div>
        </div>
        END;
        echo $result;
    }
}


if(!function_exists('form_check'))
{
    function form_check($name,$label="",$checked = 0)
    {
        $label = $label == "" ? $name : $label;
        $checked = $checked == 0 ? '' : 'checked';
        echo <<<END
            <div class="card-body">
                <div class="form-group form-check">
                    <label for="$name" class="form-check-label ml-3">$label</label>
                    <input type="checkbox" class="form-check-input" id="$name" name="$name" value="1" $checked>
                </div>
            </div>
        END;
    }
}

if(!function_exists('form_radio'))
{
    function form_radio()
    {

    }
}



if(!function_exists('form_date'))
{
    function form_date($name,$label = "",$date = '')
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="date" class="form-control" id="$name" placeholder="$name" name="$name" value="$date">
            </div>
        </div>
        END;
    }
}




if(!function_exists('form_file'))
{
    function form_file($name,$label = "",$file = '')
    {
        $label = $label == "" ? $name : $label;
        echo <<<END
        <div class="card-body">
            <div class="form-group">
                <label for="$name">$label</label>
                <input type="file" class="form-control" id="$name" name="$name">
            </div>
        </div>
        END;
    }
}


if(!function_exists('currentRequest'))
{
    function currentRequest($name)
    {
        return Request::is("$name","$name/*");
    }
}
