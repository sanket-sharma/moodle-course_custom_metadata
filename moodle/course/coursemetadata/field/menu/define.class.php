<?php

class coursemetadata_define_menu extends coursemetadata_define_base {

    function define_form_specific(&$form) {
        /// Param 1 for menu type contains the options
        $form->addElement('textarea', 'param1', get_string('coursemetadatamenuoptions', 'admin'), array('rows' => 6, 'cols' => 40));
        $form->setType('param1', PARAM_MULTILANG);

        /// Default data
        $form->addElement('text', 'defaultdata', get_string('coursemetadatadefaultdata', 'admin'), 'size="50"');
        $form->setType('defaultdata', PARAM_MULTILANG);
    }

    function define_validate_specific($data, $files) {
        $err = array();

        $data->param1 = str_replace("\r", '', $data->param1);

        /// Check that we have at least 2 options
        if (($options = explode("\n", $data->param1)) === false) {
            $err['param1'] = get_string('coursemetadatamenuoptions', 'admin');
        } elseif (count($options) < 2) {
            $err['param1'] = get_string('coursemetadatamenutoofewoptions', 'admin');

        /// Check the default data exists in the options
        } elseif (!empty($data->defaultdata) and !in_array($data->defaultdata, $options)) {
            $err['defaultdata'] = get_string('coursemetadatamenudefaultnotinoptions', 'admin');
        }
        return $err;
    }

    function define_save_preprocess($data) {
        $data->param1 = str_replace("\r", '', $data->param1);

        return $data;
    }

}


