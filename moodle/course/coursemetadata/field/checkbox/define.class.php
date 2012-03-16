<?php

class coursemetadata_define_checkbox extends coursemetadata_define_base {

    function define_form_specific(&$form) {
        /// select whether or not this should be checked by default
        $form->addElement('selectyesno', 'defaultdata', get_string('coursemetadatadefaultchecked', 'admin'));
        $form->setDefault('defaultdata', 0); // defaults to 'no'
        $form->setType('defaultdata', PARAM_BOOL);
    }
}


