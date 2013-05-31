**_add_branch($controller)** (Pri, Len: 25/30 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 3 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        if ($controller::VISIBLE_IN_NAVIGATION)
        {
            $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller] = array
            (
                'name' => tr($controller,
                             'COMPONENT VISIBLE NAME')
            );

            $sub =& $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller];

            $rc = new ReflectionClass($controller);
            foreach ($rc->getMethods(ReflectionMethod::IS_PRIVATE
                     | !ReflectionMethod::IS_PROTECTED) as $object)
            {
                $returns = $this->_add_handlers($controller,
                                                $object,
                                                $sub);

                $static_variables = $object->getStaticVariables();

                if (!empty($static_variables['options']))
                    $this->_add_handler_static_options($static_variables,
                                                       $returns['sub'],
                                                       $controller,
                                                       $returns['link'],
                                                       $object);

                $sub =& $this->_structure[_SET_HOME_COMPONENT]['sub'][$controller];
            }
        }
