**get_method_status(ReflectionMethod $method)** (PubS, Len: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png "") CyC: 7 ![(&radic;)](https://raw.github.com/TheB3Rt0z/schrimp/master/.inc/img/icon_16x16_green_ok.png ""))  
  
        return ($method->isConstructor() ? "C" : '')
             . ($method->isPrivate() ? "Pri" : '')
             . ($method->isProtected() ? "Pro" : '')
             . ($method->isPublic() ? "Pub" : '')
             . ($method->isStatic() ? "S" : '')
             . ($method->isAbstract() ? "A" : '')
             . ($method->isFinal() ? "F" : ''); // last 2 should not be used together..
