<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

#if (${NAMESPACE} && !${TESTED_NAMESPACE})

use ${TESTED_NAME};

#elseif (${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})

use ${TESTED_NAMESPACE}\\${TESTED_NAME};

#end

#if (${NAMESPACE})

use PHPUnit\Framework\TestCase;

#end

class ${NAME} extends#if(${NAMESPACE}) TestCase #else PHPUnit_Framework_TestCase #end{

}
