<?
function form_field_string($name, $value, $lendth, $default = null, $required = true, $mask = null, $class = null){

  $html = '<input type="text" ';

  $html .= ' name="' . trim($name) . '"';
  $html .= ' maxlength="' . $lendth . '"';

  $html .= ' class="form-control ' . $class . (!empty($mask)?' mask':null) .'"';

  if(!empty($mask))
    $html .= ' mask="' . $mask . '"';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= ' value="' . $value . '"';

  if($required)
    $html .= ' required';

  $html .= ' >';

  return $html;

}

function form_field_html($name, $value, $default = null, $required = true, $class = null){

  $html  = '<textarea';
  $html .= ' name="' . $name . '"';
  $html .= ' class="summernote ' . $class . '"';
  $html .= '>';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= $value;

  $html .= '</textarea>';

  return $html;
}

function form_field_textarea($name, $value, $default = null, $required = true, $class = null, $height = 200){

  $html  = '<textarea';
  $html .= ' name="' . $name . '"';
  $html .= ' class="form-control ' . $class . '"';
  $html .= ' style="height:' . $height . 'px;"';

  if($required)
    $html .= ' required ';

  $html .= '>';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= $value;

  $html .= '</textarea>';

  $html .= '<div style="clear:both"></div>';

  return $html;
}

function form_field_integer($name, $value, $default = null, $min = 0, $max = 9999, $required = true, $class = null){

    $value = decimalFromDB($value);

    $html = '<input type="text" ';

    $html .= ' name="' . $name . '"';

    $html .= ' min="' . $min . '"';
    $html .= ' max="' . $max . '"';

    $html .= ' class="field_integer ' . $class . '"';

    if(GetParam(GetParamsCount()-1) == 'add')
      $value = $default;

    $html .= ' value="' . $value . '"';

    if($required)
      $html .= ' required';

    $html .= ' >';

    return $html;

  }

function form_field_number($name, $value, $default = null, $min = 0.00, $max = 9999, $required = true, $class = null){

  $value = decimalFromDB($value);

  $html = '<input type="text" ';

  $html .= ' name="' . $name . '"';

  $html .= ' min="' . $min . '"';
  $html .= ' max="' . $max . '"';

  $html .= ' class="field_number ' . $class . '"';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= ' value="' . $value . '"';

  if($required)
    $html .= ' required';

  $html .= ' >';

  return $html;

}

function form_field_date($name, $value, $default = null, $required = true, $class = null){

  if($default == 'TODAY' || $default == 'NOW')
    $default = date('Y-m-d');

  $html  = '<div class="input-group date ' . $class . '">';
  $html .= '  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>';
  $html .= '    <input type="text" ';

  $html .= ' name="' . $name . '"';

  $html .= ' class="form-control"';


  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= ' value="' . dataYYYYMMDDtoDDMMYYYY($value) . '"';

  if($required)
    $html .= ' required';

  $html .= ' >';
  $html .= '</div>';

  return $html;
}

function form_field_list($name, $options = array(), $value, $default = null, $required = true, $class = null){

  $html = '<div  class="' . ($required?'field_list_required':null) . '">';
  $html .= '  <select ';
  $html .= '  class="chosen-select ' . $class . '"  tabindex="1"';
  $html .= ' name="' . $name . '"';

  if($required)
    $html .= ' required';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  $html .= '>';

  $html .= '<option value=""></option>';

  foreach($options as $k=>$otp){

    if(is_string($otp)){
      $legend = $otp;
      $disabled = false;

    } else if(is_array($otp)){

      $legend = $otp['legend'];

      if(isset($otp['disabled']))
        $disabled = $otp['disabled'];
    }

    $html .= '<option value="' . $k . '" ' . (($value == $k)?'selected':null) . ' ' . (($disabled)?'disabled':null) . '>' . $legend . '</option>';
  }


  $html .= ' </select>';
  $html .= '</div>';

  return $html;

}

function form_field_hidden($name, $value, $class){

  $html = '<input type="hidden" ';

  $html .= ' name="' . trim($name) . '"';

  if(!empty($class))
    $html .= ' class="' . $class . '"';

  $html .= ' >';

  return $html;

}

function form_field_check($name, $value, $default = 'N', $class = null){

  $html = '<input type="checkbox" ';

  $html .= ' name="' . trim($name) . '"';

  $html .= ' class="i-checks ' . $class . (!empty($mask)?' mask':null) .'"';

  $html .= ' value="S"';

  if(GetParam(GetParamsCount()-1) == 'add')
    $value = $default;

  if($value == 'S')
    $html .= ' checked';


  $html .= ' >';

  return $html;

}
?>