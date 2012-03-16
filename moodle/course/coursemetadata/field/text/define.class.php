<?php

class coursemetadata_define_text extends coursemetadata_define_base {

    function define_form_specific(&$form) {
        /// Default data
        $form->addElement('text', 'defaultdata', get_string('coursemetadatadefaultdata', 'admin'), 'size="50"');
        $form->setType('defaultdata', PARAM_MULTILANG);

        /// Param 1 for text type is the size of the field
        $form->addElement('text', 'param1', get_string('coursemetadatafieldsize', 'admin'), 'size="6"');
        $form->setDefault('param1', 30);
        $form->setType('param1', PARAM_INT);

        /// Param 2 for text type is the maxlength of the field
        $form->addElement('text', 'param2', get_string('coursemetadatafieldmaxlength', 'admin'), 'size="6"');
        $form->setDefault('param2', 2048);
        $form->setType('param2', PARAM_INT);

        /// Param 3 for text type detemines if this is a password field or not
        $form->addElement('selectyesno', 'param3', get_string('coursemetadatafieldispassword', 'admin'));
        $form->setDefault('param3', 0); // defaults to 'no'
        $form->setType('param3', PARAM_INT);

        /// Param 4 for text type contains a link
        $form->addElement('text', 'param4', get_string('coursemetadatafieldlink', 'admin'));
        $form->setType('param4', PARAM_URL);
        $form->addHelpButton('param4', 'coursemetadatafieldlink', 'admin');

        /// Param 5 for text type contains link target
        $targetoptions = array( ''       => get_string('linktargetnone', 'editor'),
                                '_blank' => get_string('linktargetblank', 'editor'),
                                '_self'  => get_string('linktargetself', 'editor'),
                                '_top'   => get_string('linktargettop', 'editor')
                              );
        $form->addElement('select', 'param5', get_string('coursemetadatafieldlinktarget', 'admin'), $targetoptions);
        $form->setType('param5', PARAM_RAW);
    }

}


