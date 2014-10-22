<?php
 /**
 * TestComponent - description
 *
 * @author automatic generation tool
 */

namespace Components\Test;

class TestComponent extends Component 
{

    public function attach()  {
        
        $this->setExport('test', 'test text');
        $this->setExport('test2', 'test2 text');
        
    }
    public function init()  { }
}
